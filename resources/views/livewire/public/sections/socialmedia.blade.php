<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

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

};

?>


<section class="section py-5" id="social-connect" style="
            background: #ffffff;
            position: relative;
          ">
        <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-dark">Join Our Community</h2>
                <p class="mb-5 lead text-muted">
                    Connect with us on social media for the latest news, expert tips, and exclusive behind-the-scenes content from our world.
                </p>
                <div class="row g-3 justify-content-center">
                    
                    @php
                    $platforms = [
                    'whatsapp' => 'logos:whatsapp-icon',
                    'tiktok' => 'logos:tiktok-icon',
                    'facebook' => 'logos:facebook',
                    'twitter' => 'logos:x-twitter-icon',
                    'linkedin' => 'logos:linkedin-icon',
                    'instagram' => 'logos:instagram-icon',
                    'youtube' => 'logos:youtube-icon',
                    'pinterest' => 'logos:pinterest-icon',
                    'amazon' => 'logos:amazon-icon',
                    'snapchat' => 'logos:snapchat-icon',
                    'googleplus' => 'logos:google-plus-g',
                    'vimeo' => 'logos:vimeo-icon-v',
                    'flickr' => 'logos:flickr',
                    ];
                    @endphp

                    @foreach($platforms as $field => $icon)
                    @if($this->socials?->{$field})
                    <div class="col-auto" data-aos="fade-up" data-aos-delay="0">
                        <a href="{{ $this->socials->{$field} }}" rel="noopener noreferrer"
                            class="p-4 shadow-sm d-flex align-items-center justify-content-center transition-all bg-white"
                            style="width: 50px; height: 50px; transform: translateY(0); transition: transform 0.3s ease, box-shadow 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)';">
                            <iconify-icon icon="{{ $icon }}" width="50" height="50"></iconify-icon>
                        </a>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>