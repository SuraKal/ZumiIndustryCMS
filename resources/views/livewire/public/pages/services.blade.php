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

    <!-- Our Services Section -->
    <section class="our-services bg-light p-1 py-5 p-lg-5 card border-0 shadow-sm rounded-4 m-4">
        <div class="container">
            <div class="text-center mb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-3 text-white">What we do</h2>
                <p class="fs-5 text-white">
                    We provide comprehensive, high-quality services tailored to meet modern engineering needs.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Electrical Installation</h5>
                            <p class="mb-0">
                                Design and installation for residential, commercial, and industrial buildings. Wiring,
                                power distribution, and lighting solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Electro-Mechanical Works</h5>
                            <p class="mb-0">
                                Installation and maintenance of integrated systems. Smooth operation through
                                electrical-mechanical integration.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">CCTV & Security Systems</h5>
                            <p class="mb-0">
                                Design and installation of surveillance systems. Access control and alarm systems for
                                complete security.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Communication Systems</h5>
                            <p class="mb-0">
                                Installation of PBX systems for efficient telecommunication. Data networking solutions
                                to enhance connectivity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Generator Installation & Maintenance</h5>
                            <p class="mb-0">
                                Reliable installation and servicing of generators to provide uninterrupted power supply
                                during outages.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Fire Alarm Installation</h5>
                            <p class="mb-0">
                                Design, installation, and maintenance of fire alarm systems for early detection and
                                enhanced safety compliance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                    <div class="card border-0 shadow-sm h-100 bg-white rounded">
                        <div class="card-body p-4">
                            <h5 class="mb-3">Maintenance Services</h5>
                            <p class="mb-0">
                                Scheduled maintenance and troubleshooting. Emergency repairs to reduce downtime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mission & Vision Section -->
    <livewire:public.sections.mission_vision />

</div>
