<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use App\Models\Comment; // Assuming Comment model exists
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use App\Filament\Resources\Blog\Posts\PostResource;

new #[Layout('components.layouts.guest')] class extends Component
{
    public $post;
    public $title, $content, $gallery, $fullUrl, $related_posts, $categories;
    public $comments;
    public $comment_title = '';
    public $comment_content = '';
    public $comment_rating = 5;

    public function mount(Post $post)
    {
        $this->post = $post;

        if (!$post->is_visible) {
            redirect()->route('public.blogs');
        }

        $this->title = $post?->title;
        $this->content = $post?->content;
        $this->gallery = $post?->first_image_path; // dynamically load gallery images
        $this->fullUrl = request()->fullUrl();
        $this->related_posts = $post->similar_posts()->get();
        $this->categories = Category::query()
                                ->where('is_visible', true)
                                ->select('id', 'slug', 'name')
                                ->limit(5)
                                ->get();
        $this->comments = $post->comments()->where('is_visible', true)->latest()->get(); // Assuming polymorphic relation: comments() on Post
    }

    public function submitComment()
    {
        $validated = $this->validate([
            'comment_title' => 'nullable|string|max:255',
            'comment_content' => 'required|string|max:2000',
            'comment_rating' => 'required|integer|min:1|max:5',
        ]);

        $comment = Comment::create([
            'user_id' => null,
            'commentable_id' => $this->post->id,
            'commentable_type' => Post::class,
            'title' => $validated['comment_title'],
            'content' => $validated['comment_content'],
            'rating' => $validated['comment_rating'],
            'is_visible' => false, // Moderation: set to true after approval
        ]);

        $this->comment_title = '';
        $this->comment_content = '';
        $this->comment_rating = 5;
        // $this->comments = $this->post->comments()->where('is_visible', true)->latest()->get(); // Refresh only visible

        session()->flash('comment_success', 'Your comment has been submitted and is awaiting moderation. Thank you!');

        // Send notification to admin
        $positions = ['admin', 'super_admin'];
        $admins = User::whereHas('positions', function ($query) use ($positions) {
                $query->whereIn('name', $positions);
            })->get();

        if ($admins->isEmpty()) {
            Log::info('No admins found to notify for new order');
            return;
        }

        $title = '🛒 New Post Comment Added!';
        $body = sprintf(
            "Please review and take necessary actions.",
        );


        // Reusable Filament-style notification
        $notification = Notification::make()
            ->title($title)
            ->body($body)
            ->icon('heroicon-o-shopping-cart')
            ->color('success')
            ->actions([
                Action::make('View Comment')
                    ->button()
                    // ->url(route(OrderResource, ['record' => $order]))
                    ->url(PostResource::getUrl('edit', ['record' => $this->post])) // Link to admin panel
                    ->openUrlInNewTab(),
            ])
            ->toDatabase();

        foreach ($admins as $admin) {
            $admin->notify($notification);
        }


        $this->redirect(route('public.blogs.show', $this->post?->slug));
    }
};
?>

<main>
    <div class="page-wrapper overflow-hidden">
        <!--  Banner Section -->
        <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
            style="
                background-image: url({{ asset($post?->first_image_path ?? 'static/assets/images/backgrounds/blog-detail-banner.jpg') }});
                "
                >
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="{{ asset('static/assets/images/svgs/primary-leaf.svg') }}" alt=""
                                    class="img-fluid animate-spin" />

                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-15 text-white lh-1">
                            {{ $title }}
                        </h1>
                        <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                            <span
                                class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Details Section -->
        <section class="blog-detail py-5 py-lg-11 py-xl-12">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between gy-4 mt-4">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <p>
                                {!! $content !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <ul>
                                <li><strong>Published at</strong> {{ $post?->published_at->format('M d, Y') }}</li>
                                <li><strong>Category</strong> {{ $post?->category?->name }}</li>
                                <li><strong>Author</strong> {{ $post?->author?->name }}</li>
                                <li>
                                    <span>
                                        <i class="bi bi-eye"></i>
                                        100 Views
                                    </span>
                                </li>

                                <li>
                                    <span>
                                        <i class="bi bi-chat-text"></i>
                                        {{ $post?->comments()->where('is_visible', true)->count() }} Comments
                                    </span>
                                </li>

                                @if($categories?->isNotEmpty())
                                <li>
                                    <strong>Explore categories</strong>
                                    <div class="my-2 d-flex flex-wrap gap-2">
                                        @foreach($categories as $category)
                                        <span class="bg-light px-2 py-1 border rounded">
                                            <a href="{{ route('public.blogs.category.show', $category?->slug) }}"
                                                class="text-white">
                                                {{ $category?->name }}
                                            </a>
                                        </span>
                                        @endforeach
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comments Section -->
        <section id="comments" class="comments section py-5 ">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title pb-0">
                            <h2>Comments ({{ $comments?->count() ?? 0 }})</h2>
                            <p>Join the conversation</p>
                        </div>

                        <!-- Comments List -->
                        @if($comments?->isNotEmpty())
                        <div class="comments-scrollable" style="max-height: 400px; overflow-y: auto; padding-right: 10px;">
@foreach($comments as $comment)
                        <div class="comment-item mb-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="d-flex align-items-center flex-grow-1">
                                    <div class="comment-avatar me-3">
                                        <i class="bi bi-person-circle" style="font-size: 2rem; color: #ccc;"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">
                                            Anonymous
                                            @if($comment->title)
                                            <small class="text-muted ms-2">· {{ $comment->title }}</small>
                                            @endif
                                        </h6>
                                        <small class="text-muted d-block mb-2">
                                            {{ $comment->created_at->format('M d, Y \a\t g:i A') }}
                                            @if($comment->rating <= 5) · Rating:
                                                {{ str_repeat('★', $comment->rating) }}{{ str_repeat('☆', 5 - $comment->rating) }}
                                                @endif </small> <p class="mb-0">{!! $comment->content !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                        
                        @else
                        <div class="text-center py-4">
                            <p class="text-muted">No comments yet. Be the first to share your thoughts!</p>
                        </div>
                        @endif
                    </div>

                    <!-- Add Comment Form -->
                    <div class="col-lg-6">
                        <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
                            <h5>Add Your Comment</h5>

                            <form class="d-flex flex-column gap-7" data-aos="fade-up" wire:submit="submitComment"
                                data-aos-delay="200" data-aos-duration="1000">
                                <div>
                                    <input type="text" class="form-control border-bottom border-dark"
                                        id="formGroupExampleInput" placeholder="Comment Title (Optional)"
                                        wire:model="comment_title" />
                                </div>
                                <div>
                                    <select wire:model="comment_rating" class="form-control border-bottom border-dark"
                                        required>
                                        <option value="5">★★★★★ (5/5)</option>
                                        <option value="4">★★★★☆ (4/5)</option>
                                        <option value="3">★★★☆☆ (3/5)</option>
                                        <option value="2">★★☆☆☆ (2/5)</option>
                                        <option value="1">★☆☆☆☆ (1/5)</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea class="form-control border-bottom border-dark"
                                        id="exampleFormControlTextarea1" placeholder="Give your comment here *" rows="3"
                                        wire:model="comment_content" required></textarea>
                                </div>
                                <div class="my-3">
                                    @if (session()->has('comment_success'))
                                    <div class="bg-success">
                                        {{ session('comment_success') }}
                                    </div>
                                    @endif
                                    @if (session()->has('comment_error'))
                                    <div class="bg-danger">
                                        {{ session('comment_error') }}
                                    </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn w-100 justify-content-center">
                                    <span class="btn-text">Submit comment</span>
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                    </iconify-icon>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Comments Section -->

        <!-- Portfolio Section -->
        @if($related_posts?->isNotEmpty())
        <!-- /Portfolio Details Section -->
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="heading-title">Related Posts</h1>
                    </div>
                </div>
            </div>
        </div>
        <section id="portfolio" class="portfolio section page-title py-5 py-lg-11 py-xl-12">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row g-4" data-aos="fade-up" data-aos-delay="300">
                        @foreach ($related_posts as $post)
                        <div class="col-12 col-lg-3 col-md-3 portfolio-item isotope-item filter-web"
                            wire:key="blog-{{ $post->slug }}">
                            <div class="portfolio-card">
                                <a href="{{ route('public.blogs.show', $post->slug) }}" class="block" class="block">
                                    <div class="portfolio-image">
                                        <img src="{{ asset($post?->first_image_path ?? 'static/assets/images/project_placeholder.jpg') }}"
                                            alt="{{ $post?->title }} thumbnail" class="img-fluid" loading="lazy" />
                                    </div>
                                    <div class="portfolio-content">
                                        {{-- <span class="category">Web Design</span> --}}
                                        <h3>{{ $post?->title }}</h3>
                                        <p>{{ $post?->category?->name }}</p>

                                        <hr class="fw-bold" />
                                        <div class="row justify-content-between px-2">
                                            <div class="d-flex col-6">
                                                <small class="me-3">
                                                    <i class="bi bi-eye"></i> 150
                                                </small>
                                                <small class="me-1">
                                                    <i class="bi bi-chat-text"></i>
                                                    {{ $post?->comments()->where('is_visible', true)->count() }}
                                                </small>
                                                <!-- add message icon -->
                                            </div>
                                            <div class="d-flex col-6">
                                                <small> {{ $post?->published_at->format('M d, Y') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                        <!-- End Portfolio Item -->
                    </div>
                    <!-- End Portfolio Container -->
                </div>
            </div>
        </section>
        @endif
    </div>

    <style>
        .comment-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .comment-avatar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

    </style>
</main>
