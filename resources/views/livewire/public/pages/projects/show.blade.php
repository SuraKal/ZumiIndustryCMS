<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Project;

new #[Layout('components.layouts.guest')] class extends Component
{
    public $project;
    public $name, $overview, $thumbnail, $description, $code, $gallery,$fullUrl;

    public function mount(Project $project)
    {
        $this->project = $project;

        if (!$project->is_visible) {
            redirect()->route('public.projects');
        }

        $this->name = $project?->name;
        $this->overview = $project?->overview;
        $this->thumbnail = $project?->thumbnail;
        $this->description = $project?->description;
        $this->code = $project?->code;
        $this->gallery = $project?->image_paths; // dynamically load gallery images
        // Get the full URL including the query string
        $this->fullUrl = request()->fullUrl();
    }


};
?>



<main>
    <div class="page-wrapper overflow-hidden">
        <!--  Banner Section -->
        <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
            style="
            background-image: url({{ asset('static/assets/images/backgrounds/home-backfall.jpg') }});
        ">
            <div class="container">
                <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <img src="assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <h1 class="mb-0 fs-16 text-white lh-1">
                            {{ $name }}
                        </h1>
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

        <!--  Project Detail Section -->
        <section class="project-detail py-5 py-lg-11 py-xl-12">
            <div class="container">
                <div class="d-flex flex-column gap-5 gap-xl-11">
                    <div class="d-flex flex-column gap-8">
                        <a href="{{ route('public.projects') }}" class="btn py-2 ps-3 pe-5" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span class="btn-text pe-1">Back</span>
                            <iconify-icon icon="lucide:arrow-up-right"
                                class="btn-icon bg-white text-dark round-36 rounded-circle hstack justify-content-center fs-5 shadow-sm">
                            </iconify-icon>
                        </a>
                        <div class="d-md-flex align-items-center gap-4 gap-lg-8" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
                                <p class="mb-0">Overview</p>
                                <p class="mb-0 text-dark fs-5 fw-medium">
                                    {{ $overview }}
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end d-none">
                                <p class="mb-0">Duration</p>
                                <p class="mb-0 text-dark fs-5 fw-medium">Ongoing Projects</p>
                            </div>
                            <div class="d-flex flex-column gap-2 py-2">
                                <p class="mb-0">Contact</p>
                                <p class="mb-0 text-dark fs-5 fw-medium">
                                    theamentradingplc16@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-4 gap-lg-0">
                        <div class="col-lg-4">
                            <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                Description
                            </h2>
                        </div>
                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <p class="fs-5 mb-6">
                                    {!! $description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
