<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>


<main>
    <!-- Page Wrapper -->
    <div class="page-wrapper overflow-hidden">
        <!-- Banner Section -->
        <section class="banner-section position-relative d-flex align-items-end min-vh-100">
            <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline
                poster="{{ asset('static/assets/images/backgrounds/home-backfall.jpg') }}">
                <source src="{{ asset('static/assets/images/backgrounds/banner-video-ori.mp4') }}" type="video/mp4" />
                <img src="{{ asset('static/assets/images/backgrounds/home-backfall.jpg') }}" alt="Banner fallback image"
                    class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" />
            </video>
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="{{ asset('static/assets/images/svgs/primary-leaf.svg') }}" alt=""
                                    class="img-fluid animate-spin" />
                                <p class="mb-0 text-white fs-5 text-opacity-70">
                                    <!-- The Amen Trading PLC is a growing and reliable provider of electrical and electro-mechanical solutions with over eight years of experience in Ethiopia. We focus on safety, innovation, and quality craftsmanship for dependable engineering services. -->
                                    WHERE EXPERTISE MEETS DEDICATION



                                    <!-- <br>
                    <b>WHERE EXPERTISE MEETS DEDICATION</b> -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-16 text-white lh-1">The Amen Trading PLC</h1>
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
        <!-- Stats & Facts Section -->
        <section class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                            <hr class="border-line" />
                            <span class="badge text-bg-dark">About Us</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="d-flex flex-column gap-9">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">
                                            We have built a reputation for delivering dependable engineering solutions
                                            that combine safety, innovation, and quality craftsmanship.
                                        </h2>
                                        <p class="fs-5 mb-0">
                                            The Amen Trading PLC is a growing and reliable provider of electrical and
                                            electro-mechanical solutions with over eight years of experience in
                                            Ethiopia. Formerly known as Belsty Ayana Electrical Engineering Works, our
                                            company has grown from small electrical projects into a trusted partner for
                                            hotels, hospitals, commercial buildings, industrial facilities, and
                                            government institutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up"
                                        data-aos-delay="200" data-aos-duration="1000">
                                        <h2 class="mb-0 fs-14">
                                            <span class="count" data-target="8">8</span>+
                                        </h2>
                                        <p class="mb-0">Years of proven experience</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up"
                                        data-aos-delay="300" data-aos-duration="1000">
                                        <h2 class="mb-0 fs-14">
                                            <span class="count" data-target="50">50</span>+
                                        </h2>
                                        <p class="mb-0">
                                            Skilled engineers and certified technicians
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                    <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up"
                                        data-aos-delay="400" data-aos-duration="1000">
                                        <h2 class="mb-0 fs-14">
                                            <span class="count" data-target="100">100</span>+
                                        </h2>
                                        <p class="mb-0">Projects completed across industries</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('public.about') }}" class="btn" data-aos="fade-up" data-aos-delay="500"
                                data-aos-duration="1000">
                                <span class="btn-text">Who we are</span>
                                <iconify-icon icon="lucide:arrow-up-right"
                                    class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                </iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-0" data-aos="zoom-in" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="{{ asset('static/assets/images/backgrounds/stats-facts-bg.svg') }}" alt="" class="img-fluid" />
            </div>
        </section>
        <!-- Featured Projects Section -->
        <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
            <div class="d-flex flex-column gap-5 gap-xl-11">
                <div class="container">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                                <hr class="border-line" />
                                <span class="badge text-bg-dark">Industries We Serve</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Industries We Serve</h2>
                                        <p class="fs-5 mb-0">
                                            We deliver specialized solutions across key sectors in Ethiopia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-projects-slider px-3">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center">
                                    <div>
                                        <i class="fa fa-hotel fa-3x text-primary mb-3"></i>
                                        <h5 class="mb-0 text-white">Hotels & Resorts</h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">Electrical Installation</span>
                                        <br />
                                        <span class="badge text-dark border">Security Systems</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Comprehensive power and surveillance for hospitality excellence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center">
                                    <div>
                                        <i class="fa fa-hospital fa-3x text-primary mb-3"></i>
                                        <h5 class="mb-0 text-white">
                                            Hospitals & Healthcare Facilities
                                        </h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">Generator Services</span>
                                        <br />
                                        <span class="badge text-dark border">Fire Alarms</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Uninterrupted backup and safety for life-saving environments.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center">
                                    <div>
                                        <i class="fa fa-university fa-3x text-primary mb-3"></i>
                                        <h5 class="mb-0 text-white">Government Offices & Guest Houses</h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">Communication Systems</span>
                                        <br />
                                        <span class="badge text-dark border">Maintenance</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Robust networks and ongoing support for public sector efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center">
                                    <div>
                                        <i class="fa fa-industry fa-3x text-primary mb-3"></i>
                                        <h5 class="mb-0 text-white">
                                            Factories & Industrial Plants
                                        </h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">Electro-Mechanical Works</span>
                                        <br />
                                        <span class="badge text-dark border">Power Distribution</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Integrated systems for optimal industrial operations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center">
                                    <div>
                                        <i class="fa fa-bed fa-3x text-primary mb-3"></i>
                                        <h5 class="mb-0 text-white">Warehouses & Logistics Centers</h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">CCTV Systems</span>
                                        <br />
                                        <span class="badge text-dark border">Access Control</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Secure monitoring for seamless supply chain management.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center">
                                    <div>
                                        <h5 class="mb-0 text-white">
                                            Commercial Buildings
                                        </h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">Fire Detection</span>
                                        <br />
                                        <span class="badge text-dark border">Structured Cabling</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Advanced fire safety and networking for modern offices.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio d-flex flex-column gap-4 h-100">
                                <div
                                    class="flex-grow-1 bg-light rounded-top p-4 d-flex align-items-center justify-content-center text-center border d-flex flex-column justify-content-center text-white">
                                    <div>
                                        <i class="fa fa-home fa-3x text-primary mb-3"></i>
                                        <h5 class="mb-0 text-white">Residential Developments</h5>
                                    </div>
                                </div>
                                <div
                                    class="portfolio-details d-flex flex-column gap-3 p-4 bg-white rounded-bottom shadow-sm flex-shrink-0 border-top">
                                    <div class="hstack gap-2 flex-wrap">
                                        <span class="badge text-dark border">Electrical Systems</span>
                                        <br />
                                        <span class="badge text-dark border">Smart Wiring</span>
                                    </div>
                                    <p class="mb-0 small text-muted">
                                        Reliable and future-proof installations for homes and communities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <livewire:public.sections.services />

        <!-- Why choose us Section -->
        <section class="why-choose-us py-5 py-lg-11 py-xl-12" id="why-us">
            <div class="container">
                <div class="row justify-content-between gap-5 gap-xl-0">
                    <div class="col-xl-3 col-xxl-3">
                        <div class="d-flex flex-column gap-7">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                                <hr class="border-line" />
                                <span class="badge text-bg-dark">Why Choose Us</span>
                            </div>
                            <h2 class="mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                Why choose us
                            </h2>
                            <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                                Our team consists of certified engineers, technicians, and skilled professionals with
                                diverse backgrounds in electro-mechanical engineering.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8">
                        <div class="row">
                            <div class="col-lg-4 mb-7 mb-lg-0">
                                <div class="card position-relative overflow-hidden bg-primary h-100" data-aos="fade-up"
                                    data-aos-delay="100" data-aos-duration="1000">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex flex-column gap-3 position-relative z-1">
                                            <ul class="list-unstyled mb-0 hstack gap-1">
                                                <li>
                                                    <a class="hstack" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:star-bold" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="hstack" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:star-bold" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="hstack" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:star-bold" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="hstack" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:star-bold" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="hstack" href="javascript:void(0)">
                                                        <iconify-icon icon="solar:star-line-duotone"
                                                            class="fs-6 text-dark"></iconify-icon>
                                                    </a>
                                                </li>
                                            </ul>
                                            <p class="mb-0 fs-6 text-dark">
                                                Proven expertise with 8+ years of experience – We bring years of
                                                hands-on knowledge and a track record of delivering successful projects
                                                across different sectors.
                                            </p>
                                        </div>
                                        <div class="position-relative z-1">
                                            <div class="pb-6 border-bottom">
                                                <h2 class="mb-0">100%</h2>
                                                <p class="mb-0">Client Trust</p>
                                            </div>
                                            <div class="hstack gap-6 pt-6 d-none">
                                                <img src="{{ asset('static/assets/images/profile/avatar-1.png') }}" alt=""
                                                    class="img-fluid rounded-circle overflow-hidden flex-shrink-0"
                                                    width="64" height="64" />
                                                <div>
                                                    <h5 class="mb-0">Client Testimonial</h5>
                                                    <p class="mb-0">Industrial Facility</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 end-0">
                                            <img src="{{ asset('static/assets/images/backgrounds/customer-satisfaction-bg.svg') }}"
                                                alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <div class="card bg-dark position-relative">
                                        <div class="card-body d-flex flex-column gap-7">
                                            <div>
                                                <!-- <h2 class="mb-0 text-white">50+</h2> -->
                                                <div class="text-center">
                                                    <img src="{{ asset('static/assets/images/logos/logo3.png') }}" alt=""
                                                        class="img-fluid w-50 text-center" />
                                                </div>
                                                <p class="mb-0 text-white text-opacity-70">
                                                    Comprehensive solutions for diverse industries – From healthcare and
                                                    hospitality to industrial and commercial, our services are tailored
                                                    to meet unique client needs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-dark">
                                        <div class="card-body d-flex flex-column gap-7">
                                            <div>
                                                <h2 class="mb-0 text-white">50+</h2>
                                                <p class="mb-0 text-white text-opacity-70">
                                                    Reliable emergency support and maintenance – Our team is available
                                                    to provide fast, dependable troubleshooting and repairs to minimize
                                                    downtime.
                                                </p>
                                            </div>
                                            <ul class="d-flex align-items-center mb-0">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset('static/assets/images/profile/user-1.jpg') }}" width="44"
                                                            height="44"
                                                            class="rounded-circle border border-2 border-dark"
                                                            alt="user-1" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset('static/assets/images/profile/user-2.jpg') }}" width="44"
                                                            height="44"
                                                            class="rounded-circle border border-2 border-dark"
                                                            alt="user-2" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset('static/assets/images/profile/user-3.jpg') }}" width="44"
                                                            height="44"
                                                            class="rounded-circle border border-2 border-dark"
                                                            alt="user-3" />
                                                    </a>
                                                </li>
                                                <li class="ms-n2">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset('static/assets/images/profile/user-4.jpg') }}" width="44"
                                                            height="44"
                                                            class="rounded-circle border border-2 border-dark"
                                                            alt="user-4" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-7 mb-lg-0">
                                <div class="card border h-100 position-relative overflow-hidden" data-aos="fade-up"
                                    data-aos-delay="300" data-aos-duration="1000">
                                    <span
                                        class="border rounded-circle round-490 d-block position-absolute top-0 start-50 translate-middle"></span>
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h2 class="mb-0">24/7</h2>
                                            <p class="mb-0 text-dark">
                                                Strong reputation built on trust, quality, and customer satisfaction –
                                                Clients choose us for our consistent commitment to excellence and
                                                transparent working relationships.
                                            </p>
                                        </div>
                                        <div class="d-flex flex-column gap-3">
                                            <!-- <a href="{{ route('home') }}" class="logo-dark">
                        <img src="{{ asset('static/assets/images/logos/logo3.png') }}" alt="logo" class="img-fluid h-75">
                      </a> -->
                                            <p class="mb-0 fs-5 text-dark">
                                                Dedicated team of skilled engineers and technicians – Our highly trained
                                                professionals combine technical expertise with innovation to deliver
                                                top-quality results.
                                            </p>
                                        </div>
                                    </div>
                                    <span
                                        class="border rounded-circle round-490 d-block position-absolute top-100 start-50 translate-middle"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- mission and vision Section -->
        <livewire:public.sections.mission_vision :sectionNumber="'05'" />


        <section class="meet-our-team py-5 py-lg-11 py-xl-12 d-none">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-bg-dark">Our Team</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Meet our team</h2>
                                        <p class="fs-5 mb-0 text-opacity-70">
                                            Our skilled engineers and certified technicians are committed to delivering
                                            complete solutions from design to maintenance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="{{ asset('static/assets/images/team/team-img-1.jpg') }}" alt="team-img"
                                        class="img-fluid w-100" />
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-twitter.svg') }}"
                                                        alt="twitter" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-be.svg') }}" alt="be" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-linkedin.svg') }}"
                                                        alt="linkedin" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Ayana Belsty</h4>
                                    <p class="mb-0">Lead Electrical Engineer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="{{ asset('static/assets/images/team/team-img-2.jpg') }}" alt="team-img"
                                        class="img-fluid w-100" />
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-twitter.svg') }}"
                                                        alt="twitter" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-be.svg') }}" alt="be" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-linkedin.svg') }}"
                                                        alt="linkedin" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Tadesse Amen</h4>
                                    <p class="mb-0">Senior Technician</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="{{ asset('static/assets/images/team/team-img-3.jpg') }}" alt="team-img"
                                        class="img-fluid w-100" />
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-twitter.svg') }}"
                                                        alt="twitter" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-be.svg') }}" alt="be" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-linkedin.svg') }}"
                                                        alt="linkedin" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Liya Mekonnen</h4>
                                    <p class="mb-0">Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                            <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="1000">
                                <div class="meet-team-img position-relative overflow-hidden">
                                    <img src="{{ asset('static/assets/images/team/team-img-4.jpg') }}" alt="team-img"
                                        class="img-fluid w-100" />
                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-twitter.svg') }}"
                                                        alt="twitter" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-be.svg') }}" alt="be" /></a>
                                            </li>
                                            <li>
                                                <a href="#!"
                                                    class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                                                        src="{{ asset('static/assets/images/svgs/icon-linkedin.svg') }}"
                                                        alt="linkedin" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="meet-team-details">
                                    <h4 class="mb-0">Dawit Yohannes</h4>
                                    <p class="mb-0">Maintenance Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section -->
        <section class="pricing-section py-5 py-lg-11 py-xl-12 bg-light-gray d-none">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-10">
                    <div class="d-flex flex-column gap-5 gap-xl-11">
                        <div class="row gap-7 gap-xl-0">
                            <div class="col-xl-4 col-xxl-4">
                                <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right"
                                    data-aos-delay="100" data-aos-duration="1000">
                                    <span
                                        class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">07</span>
                                    <hr class="border-line bg-white" />
                                    <span class="badge text-bg-dark">Consultation</span>
                                </div>
                            </div>
                            <div class="col-xl-8 col-xxl-7">
                                <div class="row">
                                    <div class="col-xxl-8">
                                        <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                            data-aos-duration="1000">
                                            <h2 class="mb-0">Tailored Pricing</h2>
                                            <p class="fs-5 mb-0 text-opacity-70">
                                                Contact us for customized quotes based on your project's scope and
                                                requirements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
                                <div class="card w-100" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">
                                        <div class="d-flex flex-column gap-6">
                                            <h5 class="mb-0 fw-medium">Basic Installation</h5>
                                            <div class="hstack gap-2">
                                                <h3 class="mb-0">Custom</h3>
                                                <p class="mb-0">Quote</p>
                                            </div>
                                            <p class="mb-0">
                                                Ideal for small-scale electrical wiring and basic systems.
                                            </p>
                                        </div>
                                        <div class="pt-8 border-top d-flex flex-column gap-6">
                                            <h6 class="mb-0 fw-normal">What’s Included:</h6>
                                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Wiring and lighting setup
                                                    </h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">Power distribution</h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">Basic testing</h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">Safety compliance</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="btn w-100 justify-content-center">
                                            <span class="btn-text">Get Quote</span>
                                            <iconify-icon icon="lucide:arrow-up-right"
                                                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                            </iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
                                <div class="card w-100" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">
                                        <div class="d-flex flex-column gap-6">
                                            <div class="hstack gap-3">
                                                <h5 class="mb-0 fw-medium">
                                                    Full System Integration
                                                </h5>
                                                <span class="badge text-bg-dark hstack gap-2">
                                                    <iconify-icon icon="lucide:flame" class="fs-5"></iconify-icon>Most
                                                    popular
                                                </span>
                                            </div>
                                            <div class="hstack gap-2">
                                                <h3 class="mb-0 text-opacity-50 text-dark">
                                                    <del>Custom</del>
                                                </h3>
                                                <h3 class="mb-0">Custom</h3>
                                                <p class="mb-0">Quote</p>
                                            </div>
                                            <p class="mb-0">
                                                Perfect for comprehensive electro-mechanical projects.
                                            </p>
                                        </div>
                                        <div class="pt-8 border-top d-flex flex-column gap-6">
                                            <h6 class="mb-0 fw-normal">What’s Included:</h6>
                                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">Everything in Basic</h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        CCTV and security integration
                                                    </h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Generator and fire alarm systems
                                                    </h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Ongoing maintenance plan
                                                    </h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="btn w-100 justify-content-center">
                                            <span class="btn-text">Get Quote</span>
                                            <iconify-icon icon="lucide:arrow-up-right"
                                                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                            </iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
                                <div class="card w-100" data-aos="fade-up" data-aos-delay="300"
                                    data-aos-duration="1000">
                                    <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">
                                        <div class="d-flex flex-column gap-6">
                                            <h5 class="mb-0 fw-medium">Enterprise Solutions</h5>
                                            <div class="hstack gap-2">
                                                <h3 class="mb-0">Custom</h3>
                                                <p class="mb-0">Quote</p>
                                            </div>
                                            <p class="mb-0">
                                                Best for large-scale industrial and government projects.
                                            </p>
                                        </div>
                                        <div class="pt-8 border-top d-flex flex-column gap-6">
                                            <h6 class="mb-0 fw-normal">What’s Included:</h6>
                                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Everything in Full Integration
                                                    </h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Advanced communication networks
                                                    </h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Custom electro-mechanical design
                                                    </h6>
                                                </li>
                                                <li class="hstack gap-3">
                                                    <span
                                                        class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                                                        <iconify-icon icon="lucide:check" class="fs-6 text-dark">
                                                        </iconify-icon>
                                                    </span>
                                                    <h6 class="mb-0 fw-normal">
                                                        Priority 24/7 emergency support
                                                    </h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="" class="btn w-100 justify-content-center">
                                            <span class="btn-text">Get Quote</span>
                                            <iconify-icon icon="lucide:arrow-up-right"
                                                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                            </iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-8" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <p class="fs-5 mb-0 text-center text-dark">
                            Serving hotels & resorts, hospitals & healthcare facilities, government offices & guest
                            houses, factories & industrial plants, warehouses & logistics centers, commercial buildings,
                            and residential developments
                        </p>
                        <div class="marquee w-100 d-flex align-items-center overflow-hidden">
                            <div class="marquee-content d-flex align-items-center gap-8">
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-1.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-2.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-3.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-4.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-5.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-1.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-2.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-3.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-4.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-5.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-1.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-2.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-3.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-4.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-5.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-1.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-2.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-3.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-4.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                                <div class="marquee-tag hstack justify-content-center">
                                    <img src="{{ asset('static/assets/images/pricing/partners-5.svg') }}" alt="partners"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <livewire:public.sections.faq secNumber="06" />
        <!--  Project Section -->


        <section class="Recent-news bg-light-gray py-5 my-4">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">07</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-bg-dark">Resources</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Recent Projects</h2>
                                        <p class="fs-5 mb-0 text-opacity-70">
                                            Explore our latest installations and maintenance successes in electrical and
                                            security systems.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <livewire:public.sections.projects />

                    <div class="text-center">
                        <a href="{{ route('public.projects') }}" class="btn" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1000">
                            <span class="btn-text">Explore more</span>
                            <iconify-icon icon="lucide:arrow-up-right"
                                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                            </iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="Recent-news bg-light-gray py-5 ">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">08</span>
                                <hr class="border-line bg-white" />
                                <span class="badge text-bg-dark">Products with our partners</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Recent Products</h2>
                                        <p class="fs-5 mb-0 text-opacity-70">
                                            Discover our featured products from leading brands in electrical and security
                                            solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <livewire:public.sections.products />

                    
                </div>
            </div>
        </section>


    </div>
</main>
