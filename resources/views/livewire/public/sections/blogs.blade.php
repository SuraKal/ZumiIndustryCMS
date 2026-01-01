<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getPostsProperty()
    {
        return $this->helperService
            ->getAllPosts()
            ->paginate(8);
    }
};

?>


<div>
    @if($this->posts?->isNotEmpty())
    <section class="blog-section py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="row">
                @foreach ($this->posts as $post)
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
            @if($this->posts->hasPages())
            <nav aria-label="Blog posts navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    {{-- Previous Page Link --}}
                    @if ($this->posts->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $this->posts->previousPageUrl() }}" rel="prev">Previous</a>
                    </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($this->posts->getUrlRange(1, $this->posts->lastPage()) as $page => $url)
                    @if ($page == $this->posts->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($this->posts->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $this->posts->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                    @endif
                </ul>
            </nav>
            @endif
        </div>
    </section>
    @else
    <section class="hero__v6 section text-center">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <span class="hero-subtitle text-uppercase mb-3 d-block" data-aos="fade-up">Oops!</span>

                    <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                        No Blog Found
                    </h1>

                    <p class="hero-description lead mb-4" data-aos="fade-up" data-aos-delay="200">
                        Currently there is no blog history so explore our other pages
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

                        <a href="{{ route('public.contact') }}" class="btn btn-outline-brand px-4 py-2 text-white ">
                            <iconify-icon icon="lucide:phone" class="fs-4 flex-shrink-0 text-white fa-2x">
                            </iconify-icon> Contact Us
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endif



</div>
