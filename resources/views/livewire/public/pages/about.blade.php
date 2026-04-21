<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>

    <main>
      <section class="about-hero pb-5">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-7" data-aos="fade-right">
              <span class="eyebrow d-inline-block mb-3">About Us</span>
              <h1 class="hero-title mb-4">Built to Power Quality, Reliability, and Growth.</h1>
              <p class="lead text-gray mb-4">
                ZUMI INDUSTRY PLC brings together modern manufacturing,
                disciplined quality control, and an ambitious long-term vision
                to serve Ethiopia with dependable products made locally.
              </p>
              <div class="d-flex flex-wrap gap-3">
                <a href="#overview" class="accent-btn">Discover Our Story</a>
                <a
                  href="{{ route('public.contact') }}"
                  class="btn btn-outline-light rounded-5 px-4 py-3"
                >
                  Connect With Us
                </a>
              </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
              <div class="hero-panel">
                <h3 class="mb-3">A Local Manufacturer with a Forward View</h3>
                <p class="text-gray mb-0">
                  Our story is centered on strong production standards,
                  practical market value, and a commitment to building trust
                  through consistency.
                </p>
                <div class="hero-stat-grid">
                  <div class="hero-stat">
                    <span>Founded</span>
                    <strong>2023</strong>
                  </div>
                  <div class="hero-stat">
                    <span>Location</span>
                    <strong>Akaki Kality</strong>
                  </div>
                  <div class="hero-stat">
                    <span>Focus</span>
                    <strong>Reliable Manufacturing</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="overview" class="section-padding" style="background: #111">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-7" data-aos="fade-up">
              <div class="story-panel">
                <span class="eyebrow d-inline-block mb-3">Company Overview</span>
                <h2 class="display-5 fw-bold mb-4">Modern Production with a Clear Purpose</h2>
                <p class="story-lead mb-4">
                  ZUMI INDUSTRY PLC was established in 2023 and is positioned as
                  a pioneer in domestic production. From our facility in Akaki
                  Kality Sub-City, we combine advanced machinery, well-equipped
                  operations, and integrated quality control to deliver products
                  customers can depend on.
                </p>
                <p class="story-lead mb-0">
                  Every stage of production is shaped by careful monitoring and
                  a commitment to consistency, allowing us to support household,
                  retail, and distribution needs with confidence.
                </p>
              </div>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
              <div class="glow-card">
                <h3 class="h4 mb-4">Mission and Vision</h3>
                <ul class="value-list">
                  <li>
                    <i class="bi bi-signpost"></i>
                    <span>
                      To produce high-quality, reliable, and long-lasting
                      products that improve user comfort and support sustainable
                      company growth.
                    </span>
                  </li>
                  <li>
                    <i class="bi bi-eye"></i>
                    <span>
                      To become Africa's preferred clean energy provider through
                      world-class production and strong market trust.
                    </span>
                  </li>
                  <li>
                    <i class="bi bi-shield-check"></i>
                    <span>
                      To uphold quality at every stage with systems that move
                      from laboratory checks to final product assurance.
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding bg-custom text-white">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <span class="eyebrow d-inline-block mb-3">What We Do</span>
              <h2 class="display-5 fw-bold mb-4">Solutions Built Around Production Excellence</h2>
              <p class="lead text-gray">
                These service themes carry the same tone and structure used on
                the homepage, with an emphasis on quality, process, and market
                readiness.
              </p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
              <div class="feature-card">
                <i class="bi bi-factory"></i>
                <h3 class="h4 mb-3">Manufacturing</h3>
                <p class="text-gray mb-0">
                  We operate with modern technology and organized production
                  systems to deliver dependable, high-standard output.
                </p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-card">
                <i class="bi bi-clipboard2-pulse"></i>
                <h3 class="h4 mb-3">Quality Control</h3>
                <p class="text-gray mb-0">
                  Our process includes integrated checks from the earliest
                  production stages through final verification and consistency
                  review.
                </p>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card">
                <i class="bi bi-box-seam"></i>
                <h3 class="h4 mb-3">Supply Readiness</h3>
                <p class="text-gray mb-0">
                  We support practical distribution and market growth with
                  products designed for everyday needs and reliable availability.
                </p>
              </div>
            </div>
          </div>
          <div class="service-grid mt-4" data-aos="fade-up" data-aos-delay="250">
            <div class="service-item">
              <span>Operational Focus</span>
              <strong>Advanced equipment, disciplined workflow, and scalable production support.</strong>
            </div>
            <div class="service-item">
              <span>Market Direction</span>
              <strong>Built to strengthen domestic presence while preparing for broader regional growth.</strong>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #111">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <span class="eyebrow d-inline-block mb-3">Why Choose Us</span>
              <h2 class="display-5 fw-bold mb-4">Strong Systems Behind Every Product</h2>
              <p class="lead text-gray">
                Our strengths are grounded in the same visual and messaging
                system already used across the site: modern production,
                dependable quality, and long-term ambition.
              </p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-md-6 col-xl-3" data-aos="fade-up">
              <div class="feature-card">
                <i class="bi bi-geo-alt"></i>
                <h3 class="h5 mb-3">Strategic Location</h3>
                <p class="text-gray mb-0">
                  Based in Akaki Kality to support efficient operations and
                  stronger local market access.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-card">
                <i class="bi bi-shield-check"></i>
                <h3 class="h5 mb-3">Trusted Quality</h3>
                <p class="text-gray mb-0">
                  High-standard laboratory practices help maintain consistent
                  product performance and reliability.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card">
                <i class="bi bi-gear-wide-connected"></i>
                <h3 class="h5 mb-3">Modern Process</h3>
                <p class="text-gray mb-0">
                  Advanced machinery and integrated oversight strengthen
                  production efficiency and output confidence.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <i class="bi bi-graph-up-arrow"></i>
                <h3 class="h5 mb-3">Growth Vision</h3>
                <p class="text-gray mb-0">
                  A long-term roadmap focused on innovation, sustainable
                  practices, and broader market leadership.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #000">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <span class="eyebrow d-inline-block mb-3">Our Team</span>
              <h2 class="display-5 fw-bold mb-4">Built by People Focused on Execution</h2>
              <p class="lead text-gray">
                This optional section keeps the page balanced and gives the
                brand a more human, leadership-oriented presence.
              </p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="team-card text-center">
                <i class="bi bi-person-badge"></i>
                <h3 class="h4 mb-2">Leadership</h3>
                <p class="team-meta mb-3">Strategic Direction</p>
                <p class="text-gray mb-0">
                  Guiding the company with a long-term perspective on market
                  growth, operational discipline, and product trust.
                </p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="team-card text-center">
                <i class="bi bi-diagram-3"></i>
                <h3 class="h4 mb-2">Operations</h3>
                <p class="team-meta mb-3">Production Focus</p>
                <p class="text-gray mb-0">
                  Managing manufacturing systems, workflow quality, and the
                  consistency required for dependable output.
                </p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="team-card text-center">
                <i class="bi bi-people"></i>
                <h3 class="h4 mb-2">Partnerships</h3>
                <p class="team-meta mb-3">Customer Support</p>
                <p class="text-gray mb-0">
                  Strengthening relationships with buyers, distributors, and
                  partners through clear communication and responsive service.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #111">
        <div class="container">
          <div class="cta-panel text-center" data-aos="fade-up">
            <span class="eyebrow d-inline-block mb-3">Next Step</span>
            <h2 class="display-5 fw-bold mb-4">Interested in Working With ZUMI?</h2>
            <p class="lead text-gray mb-4">
              Whether you are looking for supply, partnership, or more company
              information, we are ready to start the conversation.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <a href="{{ route('public.contact') }}" class="accent-btn">Get in Touch</a>
              <a
                href="{{ route('public.products') }}"
                class="btn btn-outline-light rounded-5 px-4 py-3"
              >
                Explore Products
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
