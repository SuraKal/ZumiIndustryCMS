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

<div class="hstack">
    <div class="d-flex align-items-center gap-3 mx-2">
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
        <a href="{{ $this->socials->{$field} }}" rel="noopener noreferrer" class="text-black"
            aria-label="{{ ucfirst($field) }}">
            <iconify-icon icon="{{ $icon }}" width="30" height="30"></iconify-icon>
        </a>
        @endif
        @endforeach
    </div>
</div>
