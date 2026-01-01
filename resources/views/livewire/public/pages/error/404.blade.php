<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>


<!-- ======= 404 Hero ======= -->
      <section class="hero__v6 section text-center">
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-lg-7">

              <span class="hero-subtitle text-uppercase mb-3 d-block" data-aos="fade-up">Sorry!</span>

              <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                Page Not Found
              </h1>

              <p class="hero-description lead mb-4" data-aos="fade-up" data-aos-delay="200">
                The page you're looking for doesn't exist, was moved, or is currently brewing.
                Let’s get you back to something fresh.
              </p>

              <img
                src="{{ asset('static/assets/img/404.jpg') }}"
                class="img-fluid rounded shadow mb-4"
                style="max-height: 260px; object-fit: cover"
                data-aos="zoom-in"
                data-aos-delay="300"
              />

              <div class="mt-4" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 me-2">
                  <i class="bi bi-house-door-fill me-2"></i> Go Home
                </a>

                <a href="{{ route('public.contact') }}" class="btn btn-outline-brand px-4 py-2">
                  <i class="bi bi-envelope-fill me-2"></i> Contact Us
                </a>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- End 404 Hero -->
