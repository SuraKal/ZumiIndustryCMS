<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

};?>


<header class="header border-4 border-primary border-top position-fixed start-0 top-0" style="width:100vw !important;">
    <div class="container">
        <div class="header-wrapper d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="{{ route('home') }}" class="logo-white">
                    <img src="{{ asset('static/assets/images/logos/logo2.png') }}" alt="logo" class="img-fluid" style="height: 85px" />
                </a>
                <a href="{{ route('home') }}" class="logo-dark">
                    <img src="{{ asset('static/assets/images/logos/logo4.png') }}" alt="logo" class="img-fluid" style="height: 60px" />
                </a>
            </div>
            <div class="d-flex align-items-center gap-4">
                <div class="btn-group">
                    <button
                        class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle mr-2"
                        type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8 text-dark">
                        </iconify-icon>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end p-4">
                        <div class="d-flex flex-column gap-6">
                            <div class="hstack justify-content-between border-bottom pb-6">
                                <p class="mb-0 fs-5 text-dark">Menu</p>
                                <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">

                                    <x:public.links.nav-link route="home">Home</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.about">About</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.services">Services</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.products">Products</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.galleries">Gallery</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.projects">Projects</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.blogs">Blog</x:public.links.nav-link>
                                    <x:public.links.nav-link route="public.contact">Contact</x:public.links.nav-link>

                                </ul>
                                {{-- <div class="hstack">
                                    <div class="d-flex align-items-center gap-3 mx-2">
                                        <a href="https://instagram.com/TATPLC16" target="_blank"
                                            rel="noopener noreferrer" class="text-black" aria-label="Instagram">
                                            <iconify-icon icon="fa-brands:instagram" class="fs-5"></iconify-icon>
                                        </a>
                                        <a href="https://facebook.com/TATPLC16" target="_blank"
                                            rel="noopener noreferrer" class="text-black" aria-label="Facebook">
                                            <iconify-icon icon="fa-brands:facebook" class="fs-5"></iconify-icon>
                                        </a>
                                        <a href="https://twitter.com/TATPLC16" target="_blank" rel="noopener noreferrer"
                                            class="text-black" aria-label="Twitter">
                                            <iconify-icon icon="fa-brands:twitter" class="fs-5"></iconify-icon>
                                        </a>
                                        <a href="https://www.linkedin.com/company/the-amen-trading-plc" target="_blank"
                                            rel="noopener noreferrer" class="text-black" aria-label="LinkedIn">
                                            <iconify-icon icon="fa-brands:linkedin" class="fs-5"></iconify-icon>
                                        </a>
                                    </div>
                                </div> --}}

                                <livewire:public.sections.header_socialmedia>
                            </div>
                            <div>
                                <a class="text-dark" href="tel:+251901368836">+251 901 368 836</a>
                                <a class="text-dark"
                                    href="mailto:theamentradingplc16@gmail.com">theamentradingplc16@gmail.com</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
