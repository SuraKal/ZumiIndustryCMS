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
            ->getAllProjects()
            ->paginate(8);
    }


};

?>


<div>
    @if($this->projects?->isNotEmpty())
    <div class="featured-projects-slider px-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="owl-carousel owl-theme">
            @foreach ($this->projects as $project)
            <div class="item" wire:key="project-{{ $project->uuid }}">
    <a href="{{ route('public.projects.show', $project->uuid) }}"
       class="d-block text-decoration-none h-100">

        <div class="portfolio d-flex flex-column h-100">

            <!-- Title -->
            <div
                class="flex-grow-1 bg-dark rounded-top p-4 d-flex align-items-center justify-content-center text-center border">
                <h5 class="mb-0 text-white fw-semibold">
                    {{ $project?->name }}
                </h5>
            </div>

            <!-- Overview -->
            <div
                class="portfolio-details p-4 bg-white rounded-bottom shadow-sm border-top">
                
                <p class="mb-0 text-muted small text-truncate">
                    {{ $project?->overview }}
                </p>

            </div>

        </div>
    </a>
</div>

            @endforeach
        </div>
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
