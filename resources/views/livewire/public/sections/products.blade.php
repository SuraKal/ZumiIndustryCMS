<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getProjectsProperty()
    {
        return $this->helperService
            ->getAllProducts()
            ->paginate(8);

    }

    public function mount(){
        // dd($this->projects);
    }

};

?>


<div>
    @if($this->projects?->isNotEmpty())
    <div class="featured-projects-slider px-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="owl-carousel owl-theme">
            @foreach ($this->projects as $project)
            <div class="item" wire:key="project-{{ $project->uuid }}">
                <a href="{{ route('public.products.show', $project->uuid) }}"
                    class="d-block text-decoration-none h-100">

                    <div class="portfolio d-flex flex-column h-100">

                        <!-- Product Thumbnail -->
                        <div
                            class="flex-grow-1  rounded-top d-flex align-items-center justify-content-center text-center border">
                            <img src="{{ asset($project?->getFirstImage()) }}"
                                alt="{{ $project?->name }}" class="img-fluid rounded"
                                style="height: 250px; object-fit: cover;">
                        </div>

                        <!-- Product Details -->
                        <div class="portfolio-details p-3 bg-white rounded-bottom shadow-sm border-top text-center">

                            <!-- Product Name -->
                            <h6 class="mb-1 fw-semibold text-dark text-truncate">
                                {{ $project?->name }}
                            </h6>

                            <!-- Partner Name -->
                            <small class="text-muted d-block text-truncate">
                                Partner: {{ $project?->partner?->name ?? 'N/A' }}
                            </small>

                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('public.products') }}" class="btn" data-aos="fade-up" data-aos-delay="300"
            data-aos-duration="1000">
            <span class="btn-text">Explore more</span>
            <iconify-icon icon="lucide:arrow-up-right"
                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
            </iconify-icon>
        </a>
    </div>
    @else
    <section class="hero__v6 section text-center">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <span class="hero-subtitle text-uppercase mb-3 d-block" data-aos="fade-up">Sorry!</span>

                    <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                        No Projects Found
                    </h1>

                    <p class="hero-description lead mb-4" data-aos="fade-up" data-aos-delay="200">
                        Currently there is no projects history to show so explore our other pages
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
