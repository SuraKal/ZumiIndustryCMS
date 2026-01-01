<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>

<div>

    <!-- Page Header Start (Kept as Main Entry Banner) -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Our Clients
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Our Clients
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start (Flipped Orientation: Text Left for Market Overview) -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            Global Reach
                        </div>
                        <h1 class="display-6 mb-5">
                            Serving Specialty Markets Worldwide
                        </h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Amen Trading exports to discerning clients who prioritize
                                traceability, sustainability, and superior quality in every
                                lot.
                            </p>
                            <span class="text-primary">Premium Partners</span>
                        </div>
                        <p class="mb-5">
                            Our small-lot focus caters to those seeking the authentic
                            Ethiopian difference in their offerings.
                        </p>
                        <a class="btn btn-outline-brand py-2 px-3" href="{{ route('public.contact') }}">
                            Become a Client
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{ asset('static/img/about-1.jpg') }}"
                            alt="Global Export Map" style="object-fit: cover" />
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="{{ asset('static/img/about-2.jpg') }}"
                            alt="Roaster Partnership" style="width: 200px; height: 200px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Market Hero End -->

    <!-- Service Start (Client Segments Grid) -->
    <div class="container-xxl py-5" id="segments">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Target Partners
                </div>
                <h1 class="display-6 mb-5">Tailored for Discerning Buyers</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('static/img/icon-1.png') }}" alt="Roaster Icon" />
                        <h4 class="mb-3">Specialty Roasters</h4>
                        <p class="mb-4">
                            Providing traceable lots for crafting exceptional blends that
                            highlight Guji's unique profiles.
                        </p>
                        <a class="btn btn-outline-brand px-3" href="{{ route('public.contact') }}">
                            Partner Inquiry
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('static/img/icon-2.png') }}" alt="Cafe Icon" />
                        <h4 class="mb-3">Premium Cafés</h4>
                        <p class="mb-4">
                            Sustainable single-origins for menus that celebrate quality and
                            ethical storytelling to patrons.
                        </p>
                        <a class="btn btn-outline-brand px-3" href="{{ route('public.contact') }}">
                            Menu Sourcing
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('static/img/icon-3.png') }}" alt="Distributor Icon" />
                        <h4 class="mb-3">Niche Distributors</h4>
                        <p class="mb-4">
                            High-quality exports with full transparency to support networks
                            valuing unmatched Arabica standards.
                        </p>
                        <a class="btn btn-outline-brand px-3" href="{{ route('public.contact') }}">
                            Distribution Quote
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Segments End -->
</div>
