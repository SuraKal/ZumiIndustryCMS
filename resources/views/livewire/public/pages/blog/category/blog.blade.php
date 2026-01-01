<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Blog\Post;
use App\Models\Blog\Category;

new #[Layout('components.layouts.guest')] class extends Component
{
    public $category, $posts;

    public function mount(Category $category)
    {
        $this->category = $category;

        if (!$category->is_visible) {
            redirect()->route('public.blogs');
        }
        $this->posts = $category->posts()->select([
            'id','title', 'slug','blog_category_id','published_at'
        ])->get();
    }
};
?>



<div class="page-wrapper overflow-hidden">
    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url({{ asset('static/assets/images/backgrounds/blog-banner.jpg') }})">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="static/assets/images/svgs/primary-leaf.svg" alt=""
                                class="img-fluid animate-spin" />
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                {!! $category?->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">{{ $category?->name }}</h1>
                    <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                        <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  Blog Section -->
        @if($posts?->isNotEmpty())
    <section class="blog-section py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-6 col-md-4 col-lg-3 mb-7" wire:key="blog-{{ $post->slug }}">
                    <a href="{{ route('public.blogs.show', $post->slug) }}" class="d-block mb-4">
                        <div class="resources d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <div href="{{ route('public.blogs.show', $post->slug) }}"
                                class="resources-img resources-img-blog position-relative overflow-hidden d-block">
                                <img src="{{ asset($post?->first_image_path ?? 'static/assets/images/project_placeholder.jpg') }}"
                                    alt="{{ $post?->title }} thumbnail" alt="resources" class="img-fluid" />
                            </div>
                            <div class="resources-details">
                                <p class="mb-0">{{ $post?->published_at->format('M d, Y') }}</p>
                                <h4 class="mb-0 text-truncate">{{ $post?->title }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            {{-- @if($posts->hasPages())
            <nav aria-label="Blog posts navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    @if ($posts->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $posts->previousPageUrl() }}" rel="prev">Previous</a>
                    </li>
                    @endif

                    @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                    @if ($page == $posts->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endif
                    @endforeach

                    @if ($posts->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $posts->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                    @endif
                </ul>
            </nav>
            @endif --}}
        </div>
    </section>
    @else
    <section class="hero__v6 section text-center py-5">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <span class="hero-subtitle text-uppercase mb-3 d-block" data-aos="fade-up">Oops!</span>

                    <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                        No Blog Found
                    </h1>

                    <p class="hero-description lead mb-4" data-aos="fade-up" data-aos-delay="200">
                        Currently there is no blog history in this category, Please explore our other pages
                    </p>

                    <img src="{{ asset('static/assets/images/project_placeholder.jpg') }}"
                        class="img-fluid rounded shadow mb-4" style="max-height: 260px; object-fit: cover"
                        data-aos="zoom-in" data-aos-delay="300" />

                    <div class="mt-4" data-aos="fade-up" data-aos-delay="400">
                        <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 me-2 text-white ">
                            <iconify-icon icon="lucide:home" class="fs-4 flex-shrink-0 me-2 text-white fa-2x">
                            </iconify-icon>
                            Go Home
                        </a>

                        <a href="{{ route('public.blogs') }}" class="btn btn-outline-brand px-4 py-2 text-white ">
                            <iconify-icon icon="lucide:book" class="fs-4 flex-shrink-0 text-white fa-2x">
                            </iconify-icon> Blogs
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endif
</div>

