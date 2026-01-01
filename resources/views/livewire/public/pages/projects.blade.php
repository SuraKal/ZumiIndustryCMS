<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>

<div class="page-wrapper overflow-hidden">
    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end" style="
            background-image: url({{ asset('static/assets/images/backgrounds/projects-banner.jpg') }});
        ">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="{{ asset('static/assets/images/svgs/primary-leaf.svg') }}" alt=""
                                class="img-fluid animate-spin" />
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                Explore our latest installations and maintenance successes in electrical and security
                                systems.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <h1 class="mb-0 fs-15 text-white lh-1">Projects</h1>
                    <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                        <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->

    {{-- <livewire:public.sections.projects /> --}}

    <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                            <hr class="border-line" />
                            <span class="badge text-bg-dark">Projects</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Projects of the Company</h2>
                                    <p class="fs-5 mb-0">
                                        Proven Track Record: Successful delivery of projects in different sectors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:public.sections.projects />
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="services py-5 py-lg-11 py-xl-12 bg-dark" id="process">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                            <hr class="border-line bg-white" />
                            <span class="badge text-dark bg-white">Our Process</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 text-white">Our Process</h2>
                                    <p class="fs-5 mb-0 text-white text-opacity-70">
                                        Our structured approach ensures efficiency, safety, and client satisfaction from
                                        start to finish.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card border-0 shadow-sm h-100 bg-white rounded">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-primary">1. Consultation & Site Survey</h5>
                                        <p class="mb-0">
                                            Understanding client needs and site requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="card border-0 shadow-sm h-100 bg-white rounded">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-primary">2. Design & Planning</h5>
                                        <p class="mb-0">
                                            Creating tailored engineering solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="card border-0 shadow-sm h-100 bg-white rounded">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-primary">3. Installation & Integration</h5>
                                        <p class="mb-0">
                                            Executing projects with precision and safety.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="card border-0 shadow-sm h-100 bg-white rounded">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-primary">4. Testing & Commissioning</h5>
                                        <p class="mb-0">
                                            Ensuring optimal performance of all systems.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="card border-0 shadow-sm h-100 bg-white rounded">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-primary">5. Maintenance & Support</h5>
                                        <p class="mb-0">
                                            Providing long-term reliability and emergency support.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
