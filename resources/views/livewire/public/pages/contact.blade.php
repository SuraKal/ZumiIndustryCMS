<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>
    <main>
      <section class="contact-hero pb-5">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-7" data-aos="fade-right">
              <span class="eyebrow d-inline-block mb-3">Contact Us</span>
              <h1 class="hero-title mb-4">Start the Conversation with ZUMI.</h1>
              <p class="lead text-gray mb-4">
                Reach out for partnership opportunities, product inquiries, or
                company information through the same premium interface language
                used across the rest of the site.
              </p>
              <div class="d-flex flex-wrap gap-3">
                <a href="#contact-form" class="accent-btn">Send a Message</a>
                <a
                  href="#contact-info"
                  class="btn btn-outline-light rounded-5 px-4 py-3"
                >
                  View Contact Details
                </a>
              </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
              <div class="hero-panel">
                <h3 class="mb-3">We’re Ready to Connect</h3>
                <p class="text-gray mb-0">
                  Whether you have a specific inquiry or just want to say hello,
                  our team is here to listen and respond. We value open
                  communication and look forward to hearing from you.
                </p>
                <div class="hero-stat-grid">
                  <div class="hero-stat">
                    <span>Email</span>
                    <strong>Fast Inquiry Route</strong>
                  </div>
                  <div class="hero-stat">
                    <span>Phone</span>
                    <strong>Direct Support</strong>
                  </div>
                  <div class="hero-stat">
                    <span>Location</span>
                    <strong>Addis Ababa</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact-info" class="section-padding" style="background: #111">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <span class="eyebrow d-inline-block mb-3">Contact Information</span>
              <h2 class="display-5 fw-bold mb-4">Multiple Ways to Reach Us</h2>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-md-6 col-xl-3" data-aos="fade-up">
              <div class="info-card">
                <i class="bi bi-geo-alt"></i>
                <h3 class="h5 mb-3">Address</h3>
                <p class="text-gray mb-0">
                  Addis Ababa, Akaki Kality Sub-City, Woreda 07, House No. New
                  02/02
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="100">
              <div class="info-card">
                <i class="bi bi-telephone"></i>
                <h3 class="h5 mb-3">Phone</h3>
                <p class="text-gray mb-2">
                  <a href="tel:+251975496036">+251 975 496 036</a>
                </p>
                <p class="text-gray mb-0">
                  <a href="tel:+251975737373">+251 975 737 373</a>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="200">
              <div class="info-card">
                <i class="bi bi-envelope"></i>
                <h3 class="h5 mb-3">Email</h3>
                <p class="text-gray mb-0">
                  <a href="mailto:zumiindustryplc@gmail.com">
                    zumiindustryplc@gmail.com
                  </a>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3" data-aos="fade-up" data-aos-delay="300">
              <div class="info-card">
                <i class="bi bi-clock"></i>
                <h3 class="h5 mb-3">Availability</h3>
                <p class="text-gray mb-0">
                  Reach out for partnership, supply, and general business
                  inquiries through any of the channels on this page.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact-form" class="section-padding bg-custom text-white">
        <div class="container">
          <div class="row g-4 align-items-stretch">
            <div class="col-lg-5" data-aos="fade-right">
              <div class="glow-card h-100">
                <span class="eyebrow d-inline-block mb-3">Get in Touch</span>
                <h2 class="display-6 fw-bold mb-4">Tell Us What You Need</h2>
                <ul class="list-unstyled text-gray mb-0">
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle me-2"
                      style="color: var(--brand-color)"
                    ></i>
                    Partnership Opportunities
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle me-2"
                      style="color: var(--brand-color)"
                    ></i>
                    Supply Inquiries
                  </li>
                  <li class="mb-3">
                    <i
                      class="bi bi-check2-circle me-2"
                      style="color: var(--brand-color)"
                    ></i>
                    General Questions and Feedback
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
              <div class="contact-form-shell h-100">
                <form id="contactInquiryForm" class="row g-4">
                  <div class="col-md-6">
                    <label for="contactName">Name</label>
                    <input
                      id="contactName"
                      type="text"
                      class="form-control"
                      placeholder="Your Name"
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="contactEmail">Email</label>
                    <input
                      id="contactEmail"
                      type="email"
                      class="form-control"
                      placeholder="Email Address"
                    />
                  </div>
                  <div class="col-12">
                    <label for="contactMessage">Message</label>
                    <textarea
                      id="contactMessage"
                      class="form-control"
                      rows="7"
                      placeholder="How can we help you?"
                    ></textarea>
                  </div>
                  <div class="col-12 d-flex flex-wrap gap-3 align-items-center">
                    <button type="submit" class="accent-btn">
                      Send Inquiry
                    </button>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #111">
        <div class="container">
          <div class="row g-4 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
              <div class="map-shell">
                <span class="eyebrow d-inline-block mb-3">Location</span>
                <h2 class="display-6 fw-bold mb-4">Visit Our Facility</h2>
                <p class="map-note mb-0">
                  A map section placeholder is included here so the page is
                  immediately usable now and easy to upgrade later with an
                  embedded map if needed.
                </p>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <div class="map-placeholder">
                <div>
                  <i class="bi bi-pin-map"></i>
                  <h3 class="h4 mb-3">Map Placeholder</h3>
                  <p class="text-gray mb-0">
                    Addis Ababa, Akaki Kality Sub-City<br />
                    Woreda 07, House No. New 02/02
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-padding" style="background: #000">
        <div class="container">
          <div class="cta-panel text-center" data-aos="fade-up">
            <span class="eyebrow d-inline-block mb-3">Next Step</span>
            <h2 class="display-5 fw-bold mb-4">Let’s Build Something Reliable Together</h2>
            <p class="lead text-gray mb-4">
              If you are interested in manufacturing partnerships, supply
              discussions, or learning more about our company, we would love to
              hear from you.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <a href="#contact-form" class="accent-btn">Get in Touch</a>
              <a
                href="about.html"
                class="btn btn-outline-light rounded-5 px-4 py-3"
              >
                Learn More About Us
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>