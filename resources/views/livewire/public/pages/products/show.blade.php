<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>

<main>
    <section class="product-hero pb-5">
        <div class="container">
            <div class="breadcrumb-nav mb-4" data-aos="fade-up">
                <a href="index.html">Home</a>
                <span class="mx-2">/</span>
                <a href="products.html">Products</a>
                <span class="mx-2">/</span>
                <span class="current">Z Shadow</span>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="product-shell">
                        <div class="product-main-media mb-4">
                            <img id="productMainImage" src="{{ asset('static/assets/img/new/Shadow.png') }}"
                                alt="Z Shadow dry cell battery pack" />
                        </div>

                        <div class="product-thumb-grid">
                            <button type="button" class="product-thumb active" data-image="{{ asset('static/assets/img/new/Shadow.png') }}"
                                data-alt="Z Shadow dry cell battery pack">
                                <img src="{{ asset('static/assets/img/new/Shadow.png') }}" alt="Z Shadow pack thumbnail" />
                            </button>
                            <button type="button" class="product-thumb" data-image="{{ asset('static/assets/img/main/hero_image.jpg') }}"
                                data-alt="Factory energy product showcase">
                                <img src="{{ asset('static/assets/img/main/hero_image.jpg') }}" alt="Factory showcase thumbnail" />
                            </button>
                            <button type="button" class="product-thumb" data-image="{{ asset('static/assets/img/main/photo_24.jpg') }}"
                                data-alt="Battery production detail view">
                                <img src="{{ asset('static/assets/img/main/photo_24.jpg') }}" alt="Production detail thumbnail" />
                            </button>
                            <button type="button" class="product-thumb" data-image="{{ asset('static/assets/img/main/photo_33.jpg') }}"
                                data-alt="ZUMI production and packaging view">
                                <img src="{{ asset('static/assets/img/main/photo_33.jpg') }}" alt="Packaging view thumbnail" />
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <span class="eyebrow d-inline-block mb-3">Flagship Product</span>
                    <h1 class="hero-title detail-title">Z Shadow</h1>
                    <p class="detail-copy">
                        Z Shadow is a dependable dry cell battery designed to deliver
                        steady power for everyday household electronics, portable
                        devices, and essential consumer applications. It represents
                        ZUMI INDUSTRY PLC’s focus on practical performance, consistent
                        quality, and trusted energy solutions for the local market.
                    </p>

                    <div class="detail-points">
                        <div class="detail-point">
                            <span>Category</span>
                            <strong>Alkaline Dry Cell Battery</strong>
                        </div>
                        <div class="detail-point">
                            <span>Formats</span>
                            <strong>AA / AAA</strong>
                        </div>
                        <div class="detail-point">
                            <span>Voltage</span>
                            <strong>1.5V Output</strong>
                        </div>
                        <div class="detail-point">
                            <span>Pack Style</span>
                            <strong>Retail Ready 4-Pack</strong>
                        </div>
                    </div>

                    <ul class="spec-list mb-4">
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            <span>Built for daily-use electronics, household devices, and
                                portable accessories.</span>
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            <span>Engineered to support reliable everyday use with stable
                                performance across common battery-powered devices.</span>
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            <span>Packaged for strong shelf presence and convenient retail
                                display in consumer-focused markets.</span>
                        </li>
                    </ul>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="contact.html" class="accent-btn">Request Quote</a>
                        <a href="products.html" class="btn btn-outline-light rounded-5 px-4 py-3">
                            Back to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background: #111">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <span class="eyebrow d-inline-block mb-3">Gallery</span>
                    <h2 class="display-5 fw-bold mb-4">Product Highlights</h2>
                    <p class="lead text-gray">
                        See how Z Shadow is presented through product, packaging, and
                        production visuals that reinforce quality and brand trust.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="gallery-card">
                        <img src="{{ asset('static/assets/img/main/hero_image.jpg') }}" alt="ZUMI factory product presentation" />
                        <div class="card-body">
                            <h4 class="mb-3">Shelf Presence</h4>
                            <p class="text-gray mb-0">
                                A strong retail presentation that helps the product stand
                                out clearly on shelves and in promotional materials.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-card">
                        <img src="{{ asset('static/assets/img/main/photo_24.jpg') }}" alt="Battery production line detail" />
                        <div class="card-body">
                            <h4 class="mb-3">Production Detail</h4>
                            <p class="text-gray mb-0">
                                A closer look at the production environment behind ZUMI’s
                                commitment to dependable battery quality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-card">
                        <img src="{{ asset('static/assets/img/main/photo_33.jpg') }}" alt="Packaging and presentation image" />
                        <div class="card-body">
                            <h4 class="mb-3">Brand Presentation</h4>
                            <p class="text-gray mb-0">
                                Packaging and brand presentation designed to communicate
                                reliability, performance, and customer confidence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-custom text-white">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <span class="eyebrow d-inline-block mb-3">You May Also Like</span>
                    <h2 class="display-5 fw-bold mb-4">Similar Products</h2>
                    <p class="lead text-gray">
                        Discover more products from ZUMI INDUSTRY PLC that serve
                        personal care and daily consumer needs across multiple
                        categories.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-lg-3" data-aos="fade-up">
                    <a href="product-detail.html" class="similar-card">
                        <img src="{{ asset('static/assets/img/deodrant_spary/Aura.png') }}" alt="Aura product" />
                        <div class="card-body">
                            <h4 class="h5 mb-2">Aura</h4>
                            <p class="text-gray mb-0">Fresh floral profile</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="product-detail.html" class="similar-card">
                        <img src="{{ asset('static/assets/img/deodrant_spary/Pure.png') }}" alt="Pure product" />
                        <div class="card-body">
                            <h4 class="h5 mb-2">Pure</h4>
                            <p class="text-gray mb-0">Minimal and clean</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="product-detail.html" class="similar-card">
                        <img src="{{ asset('static/assets/img/body_splash/Pink_Crush.png') }}" alt="Pink Crush product" />
                        <div class="card-body">
                            <h4 class="h5 mb-2">Pink Crush</h4>
                            <p class="text-gray mb-0">Berry and vanilla blend</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="product-detail.html" class="similar-card">
                        <img src="{{ asset('static/assets/img/body_splash/Aqua_Breeze.png') }}" alt="Aqua Breeze product" />
                        <div class="card-body">
                            <h4 class="h5 mb-2">Aqua Breeze</h4>
                            <p class="text-gray mb-0">Ocean-inspired freshness</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background: #000">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="display-5 fw-bold mb-4">
                        Need Bulk Supply Information?
                    </h2>
                    <p class="text-gray mb-5">
                        Contact our team for wholesale inquiries, distribution
                        partnerships, or more information about Z Shadow and other
                        ZUMI products.
                    </p>
                    <a href="contact.html" class="accent-btn">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
</main>
