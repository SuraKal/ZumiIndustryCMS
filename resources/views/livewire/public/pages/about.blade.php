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
                            <img src="{{ asset('static/assets/images/svgs/primary-leaf.svg') }}" alt=""
                                class="img-fluid animate-spin" />
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                The Amen Trading PLC is a growing and reliable provider of electrical and
                                electro-mechanical solutions with over eight years of experience in Ethiopia. We focus
                                on safety, innovation, and quality craftsmanship for dependable engineering services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">About Us</h1>
                    <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                        <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  About Content Section -->
    <section class="about-content py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4">
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            The Amen Trading PLC.
                        </h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <p class="mb-0 fs-5 text-dark">
                                We have built a reputation for delivering dependable engineering solutions that combine
                                safety, innovation, and quality craftsmanship.
                            </p>
                            <p class="mb-0 fs-5 text-dark">
                                The Amen Trading PLC is a growing and reliable provider of electrical and
                                electro-mechanical solutions with over eight years of experience in Ethiopia. Formerly
                                known as Belsty Ayana Electrical Engineering Works, our company has grown from small
                                electrical projects into a trusted partner for hotels, hospitals, commercial buildings,
                                industrial facilities, and government institutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-xl-5">
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom">
                                <span class="count" data-target="8">8</span>+
                            </h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Years of Proven Experience</h4>
                                <p class="mb-0">
                                    Delivering reliable solutions across diverse sectors with expertise and dedication.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom">
                                <span class="count" data-target="50">50</span>+
                            </h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Skilled Engineers & Technicians</h4>
                                <p class="mb-0">
                                    Certified professionals ensuring complete solutions from design to maintenance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom">
                                <span class="count" data-target="100">100</span>+
                            </h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Trusted Projects Completed</h4>
                                <p class="mb-0">
                                    Building lasting partnerships through innovation, safety, and quality standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <livewire:public.sections.mission_vision :sectionNumber="'01'" />


    <div class="page-wrapper overflow-hidden">
        <!-- Gallery Section -->
        <section class="gallery py-5 py-lg-10">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                                <hr class="border-line" />
                                <span class="badge text-bg-dark">Gallery</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">LEGAL STATUS OF THE COMPANY</h2>
                                        <p class="fs-5 mb-0">
                                            Explore these images of legality and recognitions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <livewire:public.sections.main_gallery galleryType='legal-status-gallery' />
                </div>
            </div>
        </section>
    </div>



    <!-- Company History & Rebranding Journey -->
    <section class="stats-facts py-5 py-lg-10 position-relative overflow-hidden">
        <div class="container">
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span
                            class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                        <hr class="border-line" />
                        <span class="badge text-bg-dark">Our History</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="d-flex flex-column gap-9">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">
                                        Company History & Rebranding Journey
                                    </h2>
                                    <p class="fs-5 mb-0">
                                        Our journey reflects steady growth, expansion, and a commitment to evolution.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="timeline">
                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                                        <div class="timeline-date">2016</div>
                                        <div class="timeline-content">
                                            <h5>Established as Belsty Ayana Electrical Engineering Works</h5>
                                            <p>Focusing on electrical installation and small-scale projects.</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                                        <div class="timeline-date">2017-2020</div>
                                        <div class="timeline-content">
                                            <h5>Expanded Expertise</h5>
                                            <p>Included electro-mechanical works, CCTV, and communication systems.</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                                        <div class="timeline-date">2021-2023</div>
                                        <div class="timeline-content">
                                            <h5>Secured Key Projects</h5>
                                            <p>In hotels, hospitals, and commercial facilities, building a strong
                                                reputation for reliability.</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="500">
                                        <div class="timeline-date">2024</div>
                                        <div class="timeline-content">
                                            <h5>Rebranded as The Amen Trading PLC</h5>
                                            <p>To reflect broader services and vision for long-term growth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="fs-5 mb-0 text-center">
                            Today: We continue to grow as a trusted partner driven by innovation, safety, and quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0" data-aos="zoom-in" data-aos-delay="100"
            data-aos-duration="1000">
            <img src="{{ asset('static/assets/images/backgrounds/stats-facts-bg.svg') }}" alt="" class="img-fluid" />
        </div>
    </section>


    <!-- Our Expertise & Strengths -->
    <section class="services py-5 py-lg-11 py-xl-12 bg-dark">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                            <hr class="border-line bg-white" />
                            <span class="badge text-dark bg-white">Our Expertise</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 text-white">Our Expertise & Strengths</h2>
                                    <p class="fs-5 mb-0 text-white text-opacity-70">
                                        Our team consists of certified engineers, technicians, and skilled professionals
                                        with deep experience in electro-mechanical engineering—capable of handling both
                                        simple and highly complex projects with confidence.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">

                    <!-- Card -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="h-100 p-4 rounded-4 bg-white bg-opacity-10 border border-white border-opacity-10 text-center">
                            <div class="mb-3">
                                <span class="badge bg-primary text-dark px-3 py-2 rounded-pill">
                                    01
                                </span>
                            </div>
                            <h5 class="text-white mb-2">End-to-End Solutions</h5>
                            <p class="text-white text-opacity-70 small mb-0">
                                From design and installation to long-term maintenance and support.
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="h-100 p-4 rounded-4 bg-white bg-opacity-10 border border-white border-opacity-10 text-center">
                            <div class="mb-3">
                                <span class="badge bg-primary text-dark px-3 py-2 rounded-pill">
                                    02
                                </span>
                            </div>
                            <h5 class="text-white mb-2">Tailored Approach</h5>
                            <p class="text-white text-opacity-70 small mb-0">
                                Customized solutions for hotels, hospitals, factories, and businesses.
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="h-100 p-4 rounded-4 bg-white bg-opacity-10 border border-white border-opacity-10 text-center">
                            <div class="mb-3">
                                <span class="badge bg-primary text-dark px-3 py-2 rounded-pill">
                                    03
                                </span>
                            </div>
                            <h5 class="text-white mb-2">Fast Response</h5>
                            <p class="text-white text-opacity-70 small mb-0">
                                Emergency repair services with minimal downtime and rapid dispatch.
                            </p>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="h-100 p-4 rounded-4 bg-white bg-opacity-10 border border-white border-opacity-10 text-center">
                            <div class="mb-3">
                                <span class="badge bg-primary text-dark px-3 py-2 rounded-pill">
                                    04
                                </span>
                            </div>
                            <h5 class="text-white mb-2">Proven Track Record</h5>
                            <p class="text-white text-opacity-70 small mb-0">
                                Successfully delivered projects across multiple industries and sectors.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                            <hr class="border-line" />
                            <span class="badge text-bg-dark">Core Values</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Company Identity & Values</h2>
                                    <p class="fs-5 mb-0">
                                        Our core values guide every aspect of our operations, ensuring we deliver
                                        exceptional service with integrity and excellence.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Values Grid -->
                <div class="row g-4">

                    <!-- Value Card -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-100 p-4 bg-white rounded-4 shadow-sm border">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                Integrity
                            </span>
                            <h5 class="mb-2">Honesty & Transparency</h5>
                            <p class="text-muted mb-0">
                                We operate with honesty, transparency, and accountability in every
                                decision and interaction.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-100 p-4 bg-white rounded-4 shadow-sm border">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                Excellence
                            </span>
                            <h5 class="mb-2">Quality Without Compromise</h5>
                            <p class="text-muted mb-0">
                                We maintain the highest standards in planning, execution, and
                                delivery across all projects.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="h-100 p-4 bg-white rounded-4 shadow-sm border">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                Innovation
                            </span>
                            <h5 class="mb-2">Forward Thinking</h5>
                            <p class="text-muted mb-0">
                                We embrace modern technologies and continuously improve our
                                solutions to stay ahead.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="h-100 p-4 bg-white rounded-4 shadow-sm border">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                Safety
                            </span>
                            <h5 class="mb-2">People First</h5>
                            <p class="text-muted mb-0">
                                Safety is non-negotiable. We protect our team, clients, and the
                                public through strict compliance.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="h-100 p-4 bg-white rounded-4 shadow-sm border">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                Customer Focus
                            </span>
                            <h5 class="mb-2">Client-Centered Solutions</h5>
                            <p class="text-muted mb-0">
                                We listen, understand, and deliver solutions aligned with our
                                clients’ long-term goals.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="h-100 p-4 bg-white rounded-4 shadow-sm border">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">
                                Sustainability
                            </span>
                            <h5 class="mb-2">Responsible Growth</h5>
                            <p class="text-muted mb-0">
                                We promote energy-efficient and environmentally responsible
                                solutions for sustainable development.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us py-5 py-xl-10">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-3">Why Choose Us</h2>
                <p class="fs-5 text-muted">
                    5 Key Reasons
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack text-primary justify-content-center fs-7 shadow-sm mt-1 me-3">
                                    </iconify-icon>
                                    <div class="m-3">
                                        <h5 class="mb-1">Proven expertise with 8+ years of experience</h5>
                                        <p class="mb-0 small text-muted">
                                            We bring years of hands-on knowledge and a track record of delivering
                                            successful projects across different sectors.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="300"
                                    data-aos-duration="1000">
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack text-primary justify-content-center fs-7 shadow-sm mt-1 me-3">
                                    </iconify-icon>
                                    <div class="m-3">
                                        <h5 class="mb-1">Comprehensive solutions for diverse industries</h5>
                                        <p class="mb-0 small text-muted">
                                            From healthcare and hospitality to industrial and commercial, our services
                                            are tailored to meet unique client needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="400"
                                    data-aos-duration="1000">
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack text-primary justify-content-center fs-7 shadow-sm mt-1 me-3">
                                    </iconify-icon>
                                    <div class="m-3">
                                        <h5 class="mb-1">Reliable emergency support and maintenance</h5>
                                        <p class="mb-0 small text-muted">
                                            Our team is available to provide fast, dependable troubleshooting and
                                            repairs to minimize downtime.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-4" data-aos="fade-left" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack text-primary justify-content-center fs-7 shadow-sm mt-1 me-3">
                                    </iconify-icon>
                                    <div class="m-3">
                                        <h5 class="mb-1">Strong reputation built on trust, quality, and customer
                                            satisfaction</h5>
                                        <p class="mb-0 small text-muted">
                                            Clients choose us for our consistent commitment to excellence and
                                            transparent working relationships.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4" data-aos="fade-left" data-aos-delay="300"
                                    data-aos-duration="1000">
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack text-primary justify-content-center fs-7 shadow-sm mt-1 me-3">
                                    </iconify-icon>
                                    <div class="m-3">
                                        <h5 class="mb-1">Dedicated team of skilled engineers and technicians</h5>
                                        <p class="mb-0 small text-muted">
                                            Our highly trained professionals combine technical expertise with innovation
                                            to deliver top-quality results.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--  Meet our team Section -->
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
                                                    src="{{ asset('static/assets/images/svgs/icon-be.svg') }}"
                                                    alt="be" /></a>
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
                                                    src="{{ asset('static/assets/images/svgs/icon-be.svg') }}"
                                                    alt="be" /></a>
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
                                                    src="{{ asset('static/assets/images/svgs/icon-be.svg') }}"
                                                    alt="be" /></a>
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
                                                    src="{{ asset('static/assets/images/svgs/icon-be.svg') }}"
                                                    alt="be" /></a>
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
</div>
