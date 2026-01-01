<?php

use Livewire\Volt\Component;
use App\Services\HelperService;
use Illuminate\Pagination\LengthAwarePaginator;

new class extends Component {

    protected HelperService $helperService;

    public string $galleryType;
    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getGallerysProperty()
    {
        $images = $this->helperService->getGalleryImages($this->galleryType) ?? [];
        $perPage = 8;
        $page = request()->get('page', 1);
        $page = max(1, (int) $page); // Ensure valid page number
        $offset = ($page - 1) * $perPage;
        return new LengthAwarePaginator(
            array_slice($images, $offset, $perPage),
            count($images),
            $perPage,
            $page,
            ['path' => request()->url()]
        );
    }
};

?>
<div>


    @if($this->gallerys?->isNotEmpty())
    <div class="row g-4">
        @foreach($this->gallerys as $index => $image)
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" wire:key="gallery-{{ md5($image) }}">

            <img src="{{ asset($image) }}" class="img-fluid rounded shadow gallery-img" data-bs-toggle="modal"
                data-bs-target="#imageModal" data-image="{{ asset($image) }}" alt="Project Image {{ $index + 1 }}">

        </div>
        @endforeach
    </div>
    @else
    <section class="hero__v6 section text-center">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <span class="hero-subtitle text-uppercase mb-3 d-block" data-aos="fade-up">
                        Sorry!
                    </span>

                    <h2 class="hero-title mb-4" data-aos="fade-up" data-aos-delay="100">
                        No Galleries Uploaded
                    </h2>

                    <p class="hero-description lead mb-4" data-aos="fade-up" data-aos-delay="200">
                        Currently there is no gallery history to show so explore our other pages
                    </p>

                    <img src="{{ asset('static/assets/images/project_placeholder.jpg') }}"
                        class="img-fluid rounded shadow mb-4" style="max-height: 260px; object-fit: cover"
                        data-aos="zoom-in" data-aos-delay="300" />

                    <div class="mt-4" data-aos="fade-up" data-aos-delay="400">
                        <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 me-2 text-white">
                            <iconify-icon icon="lucide:home" class="fs-4 flex-shrink-0 me-2 text-white fa-2x">
                            </iconify-icon>
                            Go Home
                        </a>

                        <a href="{{ route('public.contact') }}" class="btn btn-outline-brand px-4 py-2 text-white">
                            <iconify-icon icon="lucide:phone" class="fs-4 flex-shrink-0 text-white fa-2x">
                            </iconify-icon>
                            Contact Us
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif


    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-auto-size">
            <div class="modal-content border-0">

                <!-- Iconify Close Button -->
                <div class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon class="big-icon" icon="mingcute:close-fill"></iconify-icon>
                </div>

                <div class="modal-body p-0 text-center">
                    <img src="" alt="Full Image Preview" class="modal-img">
                </div>

            </div>
        </div>
    </div>

</div>
