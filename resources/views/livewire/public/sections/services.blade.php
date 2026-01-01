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
            ->getAllOfferings()
            ->get();
    }
    // name, description, thumbnail(you can find it by calling getFirstImage)
};

?>


<div>

    @if($this->projects?->isNotEmpty())
    <section class="services py-5 py-lg-10 bg-dark" id="services">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                            <hr class="border-line bg-white" />
                            <span class="badge text-dark bg-white">Our Services</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 text-white">What we do</h2>
                                    <p class="fs-5 mb-0 text-white text-opacity-70">
                                        We provide comprehensive, high-quality services tailored to meet modern
                                        engineering needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tab">
                    <div class="row gap-5 gap-xl-0">
                        <div class="col-xl-4">
                            <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                                @foreach($this->projects as $project)
                                    <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="{{ $project?->slug }}" role="tabpanel" aria-labelledby="{{ $project?->slug }}-tab"
                                    tabindex="0">
                                        @if($project?->thumbnail)
                                        <img src="{{ asset($project->getFirstImage() ?? 'static/assets/images/project_placeholder.jpg') }}" alt="services"
                                            class="img-fluid" width="100%"/>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="d-flex flex-column gap-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up"
                                    data-aos-delay="200" data-aos-duration="1000">
                                    @foreach($this->projects as $project)
                                        <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                            role="presentation">
                                            <div class="row w-100 align-items-center gx-3">
                                                <div class="col-lg-6 col-xxl-5">
                                                    <button
                                                        class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 {{ $loop->first ? 'active' : '' }}"
                                                        id="{{ $project?->slug }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $project?->slug }}"
                                                        type="button" role="tab" aria-controls="{{ $project?->slug }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                        {{ $project?->name }}
                                                    </button>
                                                </div>
                                                <div class="col-lg-6 col-xxl-7">
                                                    <p class="text-white text-opacity-70 mb-0">
                                                        {{ $project?->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <a href="{{ route('public.projects') }}" class="btn border border-white border-opacity-25"
                                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                    <span class="btn-text">See our Work</span>
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                    </iconify-icon>
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
        <section class="hero__v6 section text-center">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">

                        <span class="hero-subtitle text-uppercase mb-3 d-block" data-aos="fade-up">Sorry!</span>

                        <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                            No Offerings Found
                        </h1>

                        <p class="hero-description lead mb-4" data-aos="fade-up" data-aos-delay="200">
                            Currently there are no offerings available. Please explore our other pages!
                        </p>

                        <img src="{{ asset('static/assets/images/project_placeholder.jpg') }}"
                             class="img-fluid rounded shadow mb-4"
                             style="max-height: 260px; object-fit: cover"
                             data-aos="zoom-in" data-aos-delay="300" />

                        <div class="mt-4" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 me-2 text-white">
                                <iconify-icon icon="lucide:home" class="fs-4 flex-shrink-0 me-2 text-white fa-2x"></iconify-icon>
                                Go Home
                            </a>

                            <a href="{{ route('public.contact') }}" class="btn btn-outline-brand px-4 py-2 text-white">
                                <iconify-icon icon="lucide:phone" class="fs-4 flex-shrink-0 text-white fa-2x"></iconify-icon>
                                Contact Us
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
