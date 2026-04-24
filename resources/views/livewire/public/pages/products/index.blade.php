<?php

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::where('is_visible', true)->get();
    }
};
?>

    <main>
      <section class="products-hero pb-5">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-7" data-aos="fade-right">
              <span class="eyebrow d-inline-block mb-3">Product Range</span>
              <h1 class="hero-title mb-4">
                Power, Freshness, and Everyday Utility.
              </h1>
              <p class="lead text-gray mb-4">
                Explore our diverse catalogue of products designed to meet the
                needs of households and retailers alike, backed by our
                commitment to quality and modern production.
              </p>
              <div class="d-flex flex-wrap gap-3">
                <a href="#catalogue" class="accent-btn">Browse Catalogue</a>
                <a
                  href="{{ route('public.contact') }}"
                  class="btn btn-outline-light rounded-5 px-4 py-3"
                >
                  Request Partnership
                </a>
              </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
              <div class="hero-panel">
                <h3 class="mb-3">Trusted Product Portfolio</h3>
                <p class="text-gray mb-0">
                  Our product range is developed to serve everyday consumer
                  needs with dependable performance, consistent quality, and
                  packaging designed for strong retail appeal.
                </p>
                <div class="hero-feature-grid">
                  <div class="hero-feature">
                    <span>Quality Focus</span>
                  </div>
                  <div class="hero-feature">
                    <span>
Manufacturing Excellence
                    </span>
                  </div>
                  <div class="hero-feature">
                    <span>
Strategic Market Positioning
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="catalogue" class="section-padding" style="background: #111">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <span class="eyebrow d-inline-block mb-3">Categories</span>
              <h2 class="display-5 fw-bold mb-4">
                Find the Right Product Faster
              </h2>
              <p class="lead text-gray">
                Explore our catalogue by category to quickly find personal care
                and energy solutions crafted for households, retailers, and
                distribution partners.
              </p>
            </div>
          </div>

          <div class="filter-wrap mb-5" data-aos="fade-up" data-aos-delay="100">
            <button type="button" class="filter-chip active" data-filter="all">
              All Products
            </button>
            <button type="button" class="filter-chip" data-filter="deodorant">
              Deodorant Spray
            </button>
            <button type="button" class="filter-chip" data-filter="body-splash">
              Body Splash
            </button>
            <button type="button" class="filter-chip" data-filter="battery">
              Battery
            </button>
          </div>

          <div class="row g-4" id="productGrid">

            @foreach($products as $product)
              @include('livewire.public.sections.product.single', ['product' => $product])
            @endforeach
          </div>
        </div>
      </section>

      <section class="section-padding bg-custom text-white">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <span class="eyebrow d-inline-block mb-3">Why ZUMI</span>
              <h2 class="display-5 fw-bold mb-4">
                Grounded in Quality and Modern Production
              </h2>
              <p class="lead text-gray">
                ZUMI INDUSTRY PLC combines modern manufacturing, careful quality
                control, and market-focused product development to deliver
                dependable solutions customers can trust.
              </p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
              <div class="section-card">
                <i class="bi bi-factory"></i>
                <h3 class="h4 mb-3">Modern Manufacturing</h3>
                <p class="text-gray mb-0">
                  Our production facilities are organized for efficiency,
                  consistency, and reliable output across every product line.
                </p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="section-card">
                <i class="bi bi-shield-check"></i>
                <h3 class="h4 mb-3">Quality Assurance</h3>
                <p class="text-gray mb-0">
                  Each product goes through controlled production and inspection
                  processes to help maintain safety, consistency, and customer
                  confidence.
                </p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="section-card">
                <i class="bi bi-geo-alt"></i>
                <h3 class="h4 mb-3">Strategic Reach</h3>
                <p class="text-gray mb-0">
                  We are positioned to support growing market demand with
                  reliable supply capabilities for wholesalers, retailers, and
                  distribution channels.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #111">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-6" data-aos="fade-right">
              <span class="eyebrow d-inline-block mb-3">Solutions</span>
              <h2 class="display-5 fw-bold mb-4">
                Product Lines Backed by Real Operational Value
              </h2>
              <ul class="value-list">
                <li>
                  <i class="bi bi-check2-circle"></i>
                  <span
                    >Reliable consumer products developed for everyday
                    household use and strong retail performance.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check2-circle"></i>
                  <span
                    >Attractive packaging and brand presentation that improve
                    shelf visibility and strengthen buyer confidence.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check2-circle"></i>
                  <span
                    >Product categories that help customers and partners browse
                    the range clearly and identify the right solution faster.</span
                  >
                </li>
                <li>
                  <i class="bi bi-check2-circle"></i>
                  <span
                    >A focused catalogue experience that supports product
                    discovery, comparison, and purchase inquiry.</span
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <div class="section-card">
                <h3 class="mb-4">Built for Market Confidence</h3>
                <p class="text-gray">
                  Our product catalogue reflects the company’s commitment to
                  dependable manufacturing, attractive presentation, and
                  customer-focused solutions that support both everyday users
                  and business partners.
                </p>
                <a href="{{ route('public.products') }}" class="accent-btn mt-3">
                  View Sample Product Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #000">
        <div class="container">
          <div class="cta-panel text-center" data-aos="fade-up">
            <span class="eyebrow d-inline-block mb-3">Partner With Us</span>
            <h2 class="display-5 fw-bold mb-4">
              Looking for Bulk Supply or Distribution?
            </h2>
            <p class="lead text-gray mb-4">
              Reach out to discuss bulk orders, supply opportunities, or
              distribution partnerships with ZUMI INDUSTRY PLC.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <a href="{{ route('public.contact') }}" class="accent-btn">Send Inquiry</a>
              <a
                href="{{ route('public.products') }}"
                class="btn btn-outline-light rounded-5 px-4 py-3"
              >
                Open Product Detail
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
