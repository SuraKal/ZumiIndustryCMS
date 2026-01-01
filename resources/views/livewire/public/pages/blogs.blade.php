<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component
{
    //
}; ?>


<div class="page-wrapper overflow-hidden">
    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url({{ asset('static/assets/images/backgrounds/home-backfall.jpg') }})"
        >
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="static/assets/images/svgs/primary-leaf.svg" alt=""
                                class="img-fluid animate-spin" />
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                Excited to
                                <span class="text-primary">begin something amazing?</span>Get in touch—we'd love to
                                connect with you!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">Blog</h1>
                    <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
                        <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  Blog Section -->
    <livewire:public.sections.blogs />
</div>
