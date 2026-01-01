<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public $emails = [];
    public $phones = [];
    public $address = '';

    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    // Socials (computed)
    public function getSocialsProperty()
    {
        return $this->helperService
            ->getAllSocials()
            ->first();
    }

    private function loadContacts(): void
    {
        // Fetch Email, Phone, Address in ONE call
        $settings = $this->helperService->getMultipleSettings([
            'Email',
            'Phone',
            'Address',
        ]);

        // ADDRESS
        $this->address = $settings['Address'] ?? '';

        // EMAILS (→ take ALL, not first)
        if (!empty($settings['Email'])) {
            $emails = array_filter(
                array_map('trim', explode(',', $settings['Email'])),
                fn($email) => filter_var($email, FILTER_VALIDATE_EMAIL)
            );

            // store ALL values
            $this->emails = $emails;
        }

        // PHONES (→ take ALL, not first)
        if (!empty($settings['Phone'])) {
            $phones = array_filter(
                array_map('trim', explode(',', $settings['Phone'])),
                fn($phone) => !empty($phone)
            );

            // store ALL values
            $this->phones = $phones;
        }
    }

    public function mount()
    {
        $this->loadContacts();
    }
};

?>


<div>
    <livewire:public.sections.socialmedia />
        <!--  About Img Section -->
    <section class="about-img">
        <div class="marquee w-100 d-flex align-items-center overflow-hidden bg-primary py-4">
            <div class="marquee-content d-flex align-items-center gap-8">
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Electrical Installation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">CCTV & Security</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Generator Services</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Fire Alarms</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Maintenance</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Communication Systems</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Electro-Mechanical Works</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Electrical Installation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">CCTV & Security</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Generator Services</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Fire Alarms</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Maintenance</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Communication Systems</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Electro-Mechanical Works</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Electrical Installation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">CCTV & Security</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Generator Services</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Fire Alarms</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Maintenance</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Communication Systems</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Electro-Mechanical Works</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
            </div>
        </div>
    </section>
    <livewire:public.sections.contact_1 />




    <footer class="footer bg-dark py-5 py-lg-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 mb-8 mb-xl-0">
                    <div class="d-flex flex-column gap-8 pe-xl-5">
                        <h2 class="mb-0 text-white">Ready to power your project?</h2>
                        <div class="d-flex flex-column gap-2">
                            
                            
                            @if(!empty($emails))

                            <span class="hstack gap-3 text-white fs-5">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-7 text-primary"></iconify-icon>
                                

                                        @foreach($emails as $index => $email)
                                            <a href="mailto:{{ $email }}" class="text-white fs-5 ">
                                                {{ $email }}
                                            </a>
                                        @if($index < count($emails) - 1) / @endif @endforeach 
                            </span>
                            @endif


                            @if(!empty($phones))

                            <span class="hstack gap-3 text-white fs-5">
                                <iconify-icon icon="lucide:phone" class="fs-7 text-primary"></iconify-icon>
                                

                                        @foreach($phones as $index => $phone)
                                            <a href="tel:{{ $phone }}" class="text-white fs-5 ">
                                                {{ $phone }}
                                            </a>
                                        @if($index < count($phones) - 1) / @endif @endforeach 
                            </span>
                            @endif
                            
                            @if(!empty($address))
                            <a
                                class="link-hover hstack gap-3 text-white fs-5">
                                <iconify-icon icon="lucide:map-pin" class="fs-7 text-primary"></iconify-icon>
                                {{ $address }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 mb-8 mb-xl-0">
                    <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                        <li>
                            <a class="link-hover fs-5 text-white" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="link-hover fs-5 text-white" href="{{ route('public.about') }}">About</a>
                        </li>
                        <li>
                            <a class="link-hover fs-5 text-white" id="services" href="{{ route('public.services') }}">Services</a>
                        </li>
                        <li>
                            <a class="link-hover fs-5 text-white" href="{{ route('public.projects') }}">Projects</a>
                        </li>
                        <li>
                            <a class="link-hover fs-5 text-white" href="{{ route('public.galleries') }}">Gallery</a>
                        </li>
                        <li>
                            <a class="link-hover fs-5 text-white" href="{{ route('public.contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                
                <livewire:public.sections.footer_socialmedia />

                <div class="col-md-3 col-xl-3 mb-8 mb-xl-0">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                        <li>
                            <a class="link-hover fs-6 text-white text-opacity-75"
                                href="{{ route('public.about') }}">About
                                Us</a>
                        </li>
                        <li>
                            <a class="link-hover fs-6 text-white text-opacity-75" href="{{ route('public.services') }}">Our Services</a>
                        </li>
                        <li>
                            <a class="link-hover fs-6 text-white text-opacity-75" href="{{ route('home') }}#why-us">Why
                                Choose
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p class="mb-0 text-white text-opacity-70 text-center">
                        © The Amen Trading PLC copyright {{ date('Y') }}. All rights reserved. <br>
                        Maintained By
                        <a href="https://www.instagram.com/naeldesigns/" target="_blank" class="text-primary">Nael Production</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <div class="get-template hstack gap-2">
        <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
            id="scrollToTopBtn">
            <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
        </button>
    </div>
</div>
