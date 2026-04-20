<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>

    <main>
      <section id="hero" class="hero-glow">
        <div class="container">
          <div class="row">
            <div class="col-lg-10" data-aos="fade-up">
              <span
                class="text-uppercase mb-3 d-block"
                style="color: var(--brand-color); letter-spacing: 5px"
                >Pioneering Since 2023</span
              >
              <h1 class="hero-title mb-4">
                Pure Power.<br />Made In Ethiopia.
              </h1>
              <p class="lead text-gray mb-5 col-md-8">
                The first and only domestic factory producing high-performance
                dry cell batteries. Engineered with modern technology to
                energize a nation.
              </p>
              <div class="d-flex gap-4">
                <a href="products.html" class="accent-btn">Explore Products</a>
                <a
                  href="about.html"
                  class="btn btn-outline-light rounded-5 px-4 d-flex align-items-center"
                  >Our Story</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="about" class="section-padding bg-custom text-white">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
              <p class="lead text-gray">
                ZUMI INDUSTRY PLC was established in 2023. It is the first and
                only factory in Ethiopia engaged in the production of dry cell
                batteries. Our company is located in Akaki Kality Sub-City,
                where we manufacture high-quality products by utilizing modern
                technology, advanced machinery, and well-equipped facilities. We
                have also established high-standard laboratories to ensure
                strict quality control. Furthermore, by implementing an
                integrated quality control system that monitors production from
                the initial stage through to the final product, ZUMI INDUSTRY
                PLC consistently delivers superior and reliable dry cell
                batteries.
              </p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
              <div class="glow-card">
                <i class="bi bi-geo-alt"></i>
                <h3>Strategic Hub</h3>
                <p class="text-gray">
                  Located in Akaki Kality Sub-City, our facility utilizes
                  advanced machinery and integrated quality control systems.
                </p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="glow-card">
                <i class="bi bi-shield-check"></i>
                <h3>Excellence</h3>
                <p class="text-gray">
                  Our high-standard laboratories ensure strict quality
                  monitoring from initial stages to the final product.
                </p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="glow-card">
                <i class="bi bi-graph-up"></i>
                <h3>Vision 2035</h3>
                <p class="text-gray">
                  To become Africa’s preferred clean energy provider through
                  world-class dry cell battery production.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      @livewire('public.sections.mission_vision')

      <section id="products" class="section-padding" style="background: #111">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <h2 class="display-4 fw-bold mb-4">The Lineup</h2>
              <p class="lead text-gray">
                Long-lasting energy for every application.
              </p>
            </div>
          </div>

          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <style>
                .product-slide img {
                  border-radius: 25px !important;
                  padding-bottom: 5px !important;
                }

                .product-link {
                  display: flex;
                  color: #000;
                }
              </style>
              <!-- Deodorants -->
              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/deodrant_spary/Aura.png') }}"
                    alt="Aura Deodorant"
                    class="rounded"
                  />
                  <h4 class="fw-bold">AURA</h4>
                  <p class="text-muted small">Deodorant spray · fresh floral</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >250ml · Long-lasting</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/deodrant_spary/Vanilla.png') }}"
                    alt="Vanilla Deodorant"
                    class="rounded"
                  />
                  <h4 class="fw-bold">VANILLA</h4>
                  <p class="text-muted small">
                    Warm vanilla · subtle sweetness
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Alcohol-free</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/deodrant_spary/Rosea.png') }}"
                    alt="Rosea Deodorant"
                    class="rounded"
                  />
                  <h4 class="fw-bold">ROSEA</h4>
                  <p class="text-muted small">Rose petal essence · elegant</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >250ml · Moisturizing</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/deodrant_spary/Pure.png') }}"
                    alt="Pure Deodorant"
                    class="rounded"
                  />
                  <h4 class="fw-bold">PURE</h4>
                  <p class="text-muted small">Unscented · hypoallergenic</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >150ml · Sensitive Skin</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/deodrant_spary/Pinkie.png') }}"
                    alt="Pinkie Deodorant"
                    class="rounded"
                  />
                  <h4 class="fw-bold">PINKIE</h4>
                  <p class="text-muted small">Fruity floral · playful</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Shiny Finish</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/night_allure.png') }}"
                    alt="ASK Night Allure"
                    class="rounded"
                  />
                  <h4 class="fw-bold">ASK NIGHT ALLURE</h4>
                  <p class="text-muted small">Musk & amber · evening wear</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >100ml · Intense</span
                  >
                </a>
              </div>

              <!-- Body Splashes -->
              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Pink_Crush.png') }}"
                    alt="Pink Crush Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">PINK CRUSH</h4>
                  <p class="text-muted small">Berry & vanilla · fun</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >250ml · Limited Edition</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Blush_Charm.png') }}"
                    alt="Blush Charm Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">BLUSH CHARM</h4>
                  <p class="text-muted small">Soft floral notes · charming</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Everyday Fresh</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Rose_Embrace.png') }}"
                    alt="Rose Embrace Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">ROSE EMBRACE</h4>
                  <p class="text-muted small">
                    Romantic rose-inspired fragrance · elegant
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Long-lasting</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Sweat_Cream.png') }}"
                    alt="Sweat Cream Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">SWEAT CREAM</h4>
                  <p class="text-muted small">
                    Creamy smooth aroma · comfort & freshness
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Everyday Use</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Midnight_Aura.png') }}"
                    alt="Midnight Aura Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">MIDNIGHT AURA</h4>
                  <p class="text-muted small">
                    Deep and captivating scent · confident evenings
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Evening Wear</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Coconut_Desire.png') }}"
                    alt="Coconut Desire Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">COCONUT DESIRE</h4>
                  <p class="text-muted small">
                    Tropical coconut fragrance · exotic freshness
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Refreshing</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Forever_Bloom.png') }}"
                    alt="Forever Bloom Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">FOREVER BLOOM</h4>
                  <p class="text-muted small">
                    Elegant floral harmony · long-lasting freshness
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Daily Wear</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/The_One_Rose.png') }}"
                    alt="The One Rose Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">THE ONE ROSE</h4>
                  <p class="text-muted small">
                    Signature rose scent · timeless beauty
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Special Edition</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Petal_Silk.png') }}"
                    alt="Petal Silk Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">PETAL SILK</h4>
                  <p class="text-muted small">
                    Soft and silky floral blend · delicate impression
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Everyday Fresh</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Golden_Wish.png') }}"
                    alt="Golden Wish Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">GOLDEN WISH</h4>
                  <p class="text-muted small">
                    Luxurious golden fragrance · radiant presence
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Premium</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Stellar_Glow.png') }}"
                    alt="Stellar Glow Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">STELLAR GLOW</h4>
                  <p class="text-muted small">
                    Bright and energetic scent · keeps you glowing
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Everyday Use</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Aqua_Breeze.png') }}"
                    alt="Aqua Breeze Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">AQUA BREEZE</h4>
                  <p class="text-muted small">
                    Fresh aquatic fragrance · inspired by ocean waves
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Refreshing</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Nude_Vanilla.png') }}"
                    alt="Nude Vanilla Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">NUDE VANILLA</h4>
                  <p class="text-muted small">
                    Warm vanilla essence · smooth and subtle freshness
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Daily Wear</span
                  >
                </a>
              </div>

              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/body_splash/Peach_Coral.png') }}"
                    alt="Peach Coral Body Splash"
                    class="rounded"
                  />
                  <h4 class="fw-bold">PEACH CORAL</h4>
                  <p class="text-muted small">
                    Juicy peach tones · vibrant freshness
                  </p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >200ml · Everyday Use</span
                  >
                </a>
              </div>

              <!-- Battery for reference -->
              <div class="swiper-slide">
                <a
                  href="product-detail.html"
                  class="product-slide product-link"
                >
                  <img
                    src="{{ asset('static/assets/img/new/Shadow.png') }}"
                    alt="Z Shadow Battery"
                    class="rounded"
                  />
                  <h4 class="fw-bold">Z SHADOW</h4>
                  <p class="text-muted small">Alkaline battery · AA/AAA</p>
                  <span
                    class="badge rounded-pill"
                    style="background: var(--brand-color); color: #000"
                    >Long Life · 1.5V · 4-Pack</span
                  >
                </a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <section id="services" class="section-padding bg-custom text-white">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <h2 class="display-4 fw-bold mb-4">Our Services</h2>
              <p class="lead text-gray">
                Delivering excellence in every aspect of production and quality
                assurance.
              </p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
              <div class="glow-card text-center">
                <i class="bi bi-factory large-icon"></i>
                <h4 class="mb-4">Manufacturing of Dry Cell Batteries</h4>
                <p class="text-gray lead">
                  We specialize in the production of high-quality dry cell
                  batteries, leveraging modern technology, advanced machinery,
                  and rigorous quality control to deliver reliable energy
                  solutions tailored to diverse needs.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="roadmap" class="section-padding" style="background: #111">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <h2 class="display-4 fw-bold mb-4">Strategic Roadmap</h2>
              <p class="lead text-gray">
                To achieve clearly defined short-term and long-term objectives
                that support sustainable growth, innovation, and market
                leadership.
              </p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-md-6" data-aos="fade-right">
              <div
                class="glow-card"
                style="background: linear-gradient(145deg, #141414, #000)"
              >
                <h4 class="mb-4" style="color: var(--brand-color)">
                  Short-Term (1-3 Years)
                </h4>
                <ul class="list-unstyled text-gray">
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Increase domestic production capacity
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Advanced laboratory testing expansion
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Expand market in major Ethiopian cities
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Targeted marketing & brand awareness
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Develop employee training programs to improve skills in
                    modern manufacturing and technology
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Begin adopting environmentally friendly practices in
                    production and packaging
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
              <div
                class="glow-card"
                style="background: linear-gradient(145deg, #141414, #000)"
              >
                <h4 class="mb-4" style="color: var(--brand-color)">
                  Long-Term (3-10 Years)
                </h4>
                <ul class="list-unstyled text-gray">
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Lead East African energy markets
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >R&D for next-gen battery tech
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Global export & international standards
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Full integration of eco-friendly practices
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Fully integrate sustainable production practices and
                    support local communities
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Achieve sustainable profitability while maintaining
                    competitive pricing and high product quality
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle d-inline me-2"
                      style="font-size: 1rem; color: var(--brand-color)"
                    ></i
                    >Establish ZUMI INDUSTRY PLC as a trusted provider of
                    eco-friendly, reliable energy solutions in Africa
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="section-padding" style="background: #000">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <h2 class="display-5 fw-bold mb-4">Partner With Us</h2>
              <p class="text-gray mb-5">
                Powering Ethiopia's comfort and living standards since 2023.
                Send us an inquiry for bulk manufacturing and supply.
              </p>

              <form class="row g-3">
                <div class="col-md-6">
                  <label for="" class="text-white"> Name </label>
                  <input
                    type="text"
                    class="form-control bg-dark border-secondary text-white p-3"
                    placeholder="Your Name"
                  />
                </div>
                <div class="col-md-6">
                  <label for="" class="text-white"> Email </label>
                  <input
                    type="email"
                    class="form-control bg-dark border-secondary text-white p-3"
                    placeholder="Email Address"
                  />
                </div>
                <div class="col-12">
                  <label for="" class="text-white"> Message </label>
                  <textarea
                    class="form-control bg-dark border-secondary text-white p-3"
                    rows="4"
                    placeholder="Message"
                  ></textarea>
                </div>
                <div class="col-12">
                  <button class="accent-btn w-100">Send Inquiry</button>
                </div>
              </form>

              <div class="mt-5">
                <div
                  class="glow-card p-4 mb-4 bg-custom text-white"
                  data-aos="fade-up"
                  data-aos-delay="200"
                >
                  <h5 class="mb-3" style="color: var(--brand-color)">
                    Visit Us
                  </h5>
                  <p class="text-gray mb-0">
                    Addis Ababa, Akaki Kality Sub-City, Woreda 07, House No. New
                    02/02'
                  </p>
                </div>
                <div
                  class="d-flex justify-content-center gap-5 text-gray small"
                >
                  <span
                    ><i class="bi bi-envelope me-2"></i
                    >zumiindustryplc@gmail.com</span
                  >
                  <span
                    ><i class="bi bi-telephone me-2"></i>+251 975 496 036 / +251
                    975 737 373</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
