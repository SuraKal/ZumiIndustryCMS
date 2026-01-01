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

                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden" style="min-height: 320px;">

                        <!-- Header -->
                        <div class="bg-dark text-center px-4 py-5">
                            <h5 class="mb-2 text-white fw-semibold text-truncate">
                                {{ $project?->name }}
                            </h5>

                            <span class="badge bg-primary bg-opacity-75">
                                Project
                            </span>
                        </div>

                        <!-- Body -->
                        <div class="card-body d-flex flex-column">

                            <p class="text-muted small mb-4 line-clamp-3">
                                {{ $project?->overview }}
                            </p>

                            <!-- Footer -->
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="text-muted small">
                                    View Details
                                </span>

                                <iconify-icon icon="lucide:arrow-right" class="fs-5 text-primary">
                                </iconify-icon>
                            </div>

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
