<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    public string $sectionNumber = '01';
    protected HelperService $helperService;

    public function boot(HelperService $helperService)
    {
        // Store service instance for later use
        $this->helperService = $helperService;
    }

    public function getMissionsProperty()
    {
        return $this->helperService->getPageInfoContent('mission');
    }

    public function getVisionsProperty()
    {
        return $this->helperService->getPageInfoContent('vision');
    }

};

?>


<section class="testimonial py-5 py-lg-11 py-xl-12 bg-light-gray">
    <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span
                            class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">{{ $sectionNumber }}</span>
                        <hr class="border-line bg-white" />
                        <span class="badge text-bg-dark">Mission & Vision</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <h2 class="mb-0">Our Mission & Vision</h2>
                                <p class="fs-5 mb-0 text-opacity-70">
                                    To build lasting, mutually beneficial relationships with clients by
                                    consistently exceeding expectations and delivering high-quality engineering
                                    services supported by skilled professionals and modern technology.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-7 gap-lg-0">
                <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                    <div class="card bg-primary w-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                            <div class="d-flex flex-column gap-4">
                                <p class="mb-0 text-white text-opacity-70">Our Mission</p>
                                <h4 class="mb-0">
                                    {!! $this->missions?->content !!}
                                </h4>
                            </div>
                            <div class="hstack gap-3 d-none">
                                <img src="{{ asset('static/assets/images/testimonial/testimonial-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60"
                                    height="60" />
                                <div>
                                    <h5 class="mb-1 fw-normal">The Amen Trading PLC</h5>
                                    <p class="mb-0">Engineering Excellence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-6 d-flex align-items-stretch">
                    <div class="card bg-dark w-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                            <div class="d-flex flex-column gap-4">
                                <p class="mb-0 text-white text-opacity-70">Our Vision</p>
                                <h4 class="mb-0 text-white pe-xl-2">
                                    {!! $this->visions?->content !!}
                                </h4>
                                <div class="hstack gap-2">
                                    <ul class="list-unstyled mb-0 hstack gap-1">
                                        <li>
                                            <a class="hstack" href="javascript:void(0)">
                                                <iconify-icon icon="solar:star-bold" class="fs-6 text-white">
                                                </iconify-icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="hstack" href="javascript:void(0)">
                                                <iconify-icon icon="solar:star-bold" class="fs-6 text-white">
                                                </iconify-icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="hstack" href="javascript:void(0)">
                                                <iconify-icon icon="solar:star-bold" class="fs-6 text-white">
                                                </iconify-icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="hstack" href="javascript:void(0)">
                                                <iconify-icon icon="solar:star-bold" class="fs-6 text-white">
                                                </iconify-icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="hstack" href="javascript:void(0)">
                                                <iconify-icon icon="solar:star-bold" class="fs-6 text-white">
                                                </iconify-icon>
                                            </a>
                                        </li>
                                        <!-- <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                        class="fs-6 text-white"></iconify-icon></a></li> -->
                                    </ul>
                                    <h6 class="mb-0 text-white fw-medium">5.0</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between d-none">
                                <div class="hstack gap-3">
                                    <img src="{{ asset('static/assets/images/testimonial/testimonial-2.jpg') }}" alt=""
                                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60"
                                        height="60" />
                                    <div>
                                        <h5 class="mb-1 fw-normal text-white">
                                            The Amen Trading PLC
                                        </h5>
                                        <p class="mb-0 text-white text-opacity-70">
                                            Future Focus
                                        </p>
                                    </div>
                                </div>
                                <span><img src="{{ asset('static/assets/images/testimonial/quete.svg') }}" alt="quete"
                                        class="img-fluid flex-shrink-0" /></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                    <div class="card w-100" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                            <div class="d-flex flex-column gap-4">
                                <p class="mb-0">Our Core Values</p>
                                <h4 class="mb-0">
                                    Integrity, Excellence, Innovation, Safety, Customer Focus, Sustainability.
                                </h4>
                            </div>
                            <div class="hstack gap-3 d-none">
                                <img src="{{ asset('static/assets/images/testimonial/testimonial-3.jpg') }}" alt=""
                                    class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60"
                                    height="60" />
                                <div>
                                    <h5 class="mb-1 fw-normal">The Amen Trading PLC</h5>
                                    <p class="mb-0">Strategic Objectives</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
