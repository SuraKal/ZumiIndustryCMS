<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Services\HelperService;

new #[Layout('components.layouts.guest')] class extends Component
{
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
}; ?>

<div class="page-wrapper overflow-hidden">
    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end" style="
            background-image: url({{ asset('static/assets/images/backgrounds/aboutus-banner.jpg') }});
        ">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin" />
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                We provide comprehensive, high-quality services tailored to meet modern engineering
                                needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <h1 class="mb-0 fs-15 text-white lh-1">Services</h1>
                    <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                        <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if($this->projects?->isNotEmpty())

    <!-- Our Services Section -->
    <section class="our-services bg-light p-1 py-5 p-lg-5 card border-0 shadow-sm rounded-4 m-4">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-3 text-white">What we do</h2>
                <p class="fs-5 text-white">
                    We provide comprehensive, high-quality services tailored to meet modern engineering needs.
                </p>
            </div>

            <!-- 🔹 Service Thumbnails (Top Section) -->


            <!-- 🔹 Service Cards -->
            <div class="row g-4">
                @foreach($this->projects as $project)

                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

                    
                    <div class="card border-0 shadow-sm h-100 bg-white rounded-4">
                        <div class="card-body p-4 text-center">
<div class="mx-auto mb-2 rounded-circle border border-2 border-primary shadow-sm d-flex align-items-center justify-content-center"
                                style="width:120px; height:120px; overflow:hidden;">
                                <img src="{{ asset($project->getFirstImage()) }}" alt="{{ $project->name }}"
                                    class="img-fluid" style="object-fit:cover; width:100%; height:100%;">
                            </div>
                            <h5 class="mb-3 fw-semibold">
                                {{ $project?->name }}
                            </h5>

                            <p class="mb-0 text-muted">
                                {{ $project?->description }}
                            </p>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </section>

    @endif


    <!-- Mission & Vision Section -->
    <livewire:public.sections.mission_vision />

</div>
