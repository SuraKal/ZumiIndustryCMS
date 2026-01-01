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


<div>
    @if($this->testimonials?->isNotEmpty())
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>
                Some of our clients feedback
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonials-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 800,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "768": {
                                "slidesPerView": 2
                            },
                            "1200": {
                                "slidesPerView": 3
                            }
                        }
                    }

                </script>
                <div class="swiper-wrapper">
                    @foreach ($this->testimonials as $testimonial)

                    <div class="swiper-slide" wire:key="{{ $testimonial?->uuid }}">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>
                                    <i class="bi bi-quote quote-icon"></i>
                                    {{ $testimonial?->content }}
                                </p>
                            </div>
                            <div class="testimonial-profile">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="profile-info">
                                    <img src="{{ $testimonial?->first_image_path ?? 'static/assets/img/user-avatar.jpg' }}"
                                        alt="{{ $testimonial?->author_name }} avatar" />
                                    <div>
                                        <h3>{{ $testimonial?->author_name }}</h3>
                                        <h4>{{ $testimonial?->author_position }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    @endif
</div>
