<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getProjectsProperty()
    {
        return $this->helperService
            ->getAllProjects()
            ->paginate(8);
    }
};

?>


<div>
    {{-- @if($this->projects?->isNotEmpty()) --}}
    <section class="services py-5 py-lg-11 py-xl-12 bg-dark" id="services">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                            <hr class="border-line bg-white" />
                            <span class="badge text-dark bg-white">Our Services</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 text-white">What we do</h2>
                                    <p class="fs-5 mb-0 text-white text-opacity-70">
                                        We provide comprehensive, high-quality services tailored to meet modern
                                        engineering needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-tab">
                    <div class="row gap-5 gap-xl-0">
                        <div class="col-xl-4">
                            <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                                <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab"
                                    tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-5.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                                <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-6.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                                <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab"
                                    tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-7.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                                <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab" tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-8.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                                <div class="tab-pane" id="five" role="tabpanel" aria-labelledby="five-tab" tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-10.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                                <div class="tab-pane" id="six" role="tabpanel" aria-labelledby="six-tab" tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-9.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                                <div class="tab-pane" id="seven" role="tabpanel" aria-labelledby="seven-tab"
                                    tabindex="0">
                                    <img src="{{ asset('static/assets/images/services/services-img-11.png') }}" alt="services"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="d-flex flex-column gap-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up"
                                    data-aos-delay="200" data-aos-duration="1000">
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active"
                                                    id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                                                    type="button" role="tab" aria-controls="one" aria-selected="true">
                                                    Electrical Installation
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Design and installation for residential, commercial, and
                                                    industrial buildings. Wiring, power distribution, and lighting
                                                    solutions.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                    id="two-tab" data-bs-toggle="tab" data-bs-target="#two"
                                                    type="button" role="tab" aria-controls="two" aria-selected="false">
                                                    Electro-Mechanical Works
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Installation and maintenance of integrated systems. Smooth
                                                    operation through electrical-mechanical integration.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                    id="three-tab" data-bs-toggle="tab" data-bs-target="#three"
                                                    type="button" role="tab" aria-controls="three"
                                                    aria-selected="false">
                                                    CCTV & Security Systems
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Design and installation of surveillance systems. Access control
                                                    and alarm systems for complete security.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                    id="four-tab" data-bs-toggle="tab" data-bs-target="#four"
                                                    type="button" role="tab" aria-controls="four" aria-selected="false">
                                                    Generator Installation & Maintenance
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Reliable installation and servicing of generators to provide
                                                    uninterrupted power supply during outages.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                    id="five-tab" data-bs-toggle="tab" data-bs-target="#five"
                                                    type="button" role="tab" aria-controls="five" aria-selected="false">
                                                    Fire Alarm Installation
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Design, installation, and maintenance of fire alarm systems for
                                                    early detection and enhanced safety compliance.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                    id="six-tab" data-bs-toggle="tab" data-bs-target="#six"
                                                    type="button" role="tab" aria-controls="six" aria-selected="false">
                                                    Communication Systems
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Installation of PBX systems for efficient telecommunication.
                                                    Data networking solutions to enhance connectivity.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button
                                                    class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                                                    id="seven-tab" data-bs-toggle="tab" data-bs-target="#seven"
                                                    type="button" role="tab" aria-controls="seven"
                                                    aria-selected="false">
                                                    Maintenance Services
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-white text-opacity-70 mb-0">
                                                    Scheduled maintenance and troubleshooting. Emergency repairs to
                                                    reduce downtime.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="{{ route('public.projects') }}" class="btn border border-white border-opacity-25"
                                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                    <span class="btn-text">See our Work</span>
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                    </iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
