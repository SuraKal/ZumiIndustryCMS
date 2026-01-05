<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Services\HelperService;


new #[Layout('components.layouts.guest')] class extends Component
{
}; ?>



<main>
    <div class="page-wrapper overflow-hidden">
        <!--  Banner Section -->
        <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
            style="background-image: url({{ asset('static/assets/images/backgrounds/home-backfall.jpg') }});">
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin" />
                                <p class="mb-0 text-white fs-5 text-opacity-70">
                                    A visual journey through our projects, showcasing the craftsmanship and innovation
                                    behind our electrical and electro-mechanical solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-15 text-white lh-1">Gallery</h1>
                        <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                            <span
                                class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="row gap-7 gap-xl-0">
                        <div class="col-xl-4 col-xxl-4">
                            <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000">
                                <span
                                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                                <hr class="border-line" />
                                <span class="badge text-bg-dark">Photo Gallery</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-7">
                            <div class="row">
                                <div class="col-xxl-8">
                                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <h2 class="mb-0">Gallery</h2>
                                        <p class="fs-5 mb-0">
                                            Explore our work through these images of installations, team efforts, and
                                            completed projects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <livewire:public.sections.main_gallery galleryType='my-gallery'/>
                </div>
            </div>
        </section>


    </div>
</main>
