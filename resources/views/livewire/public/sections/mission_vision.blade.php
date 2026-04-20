<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getTestimonialsProperty()
    {
        return $this->helperService
            ->getAllTestimonials()
            ->orderBy('order')
            ->get();
    }
};

?>


<section
    id="mission-vision"
    class="section-padding"
    style="background: #111"
    >
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
              <h2 class="display-4 fw-bold mb-4">Mission & Vision</h2>
              <p class="lead text-gray">
                Guiding our journey towards sustainable innovation and
                leadership in clean energy.
              </p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-md-6" data-aos="fade-right">
              <div class="glow-card">
                <i class="bi bi-signpost large-icon"></i>
                <h4 class="mb-3">Mission</h4>
                <p class="text-gray">
                  To produce high-quality, reliable, and long-lasting dry cell
                  batteries; to enhance user comfort; to improve living
                  standards; and to ensure sustainable company growth through
                  profitable and efficient operations.
                </p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
              <div class="glow-card">
                <i class="bi bi-eye large-icon"></i>
                <h4 class="mb-3">Vision</h4>
                <p class="text-gray">
                  To become Africa’s preferred clean energy provider by 2035
                  through the production of world-class dry cell batteries.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
