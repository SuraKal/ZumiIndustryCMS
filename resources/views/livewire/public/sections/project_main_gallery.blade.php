<?php

use Livewire\Volt\Component;
use App\Models\Project;

new class extends Component {

    public $images = [];

    public function mount()
    {
        // Fetch 6 images from projects
        $projects = Project::with('media')->take(6)->get();

        $this->images = $projects->flatMap(function ($project) {
            return $project->image_check_paths; // uses your accessor
        })->take(6)->toArray();
    }
};

?>

<div>
    @if(!empty($this->images))
    <section class="section" id="gallery">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Captured Moments</span>
                    <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Project Gallery</h2>
                </div>
            </div>
            <div class="row g-4">
                @foreach($this->images as $index => $image)
                    @php
                        $colClass = ($index <= 2) ? 'col-md-4' : 'col-md-6';
                        $height = ($index <= 2) ? '300px' : '250px';
                        $delay = $index * 100;
                    @endphp
                    <div class="{{ $colClass }}" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                        <img class="img-fluid rounded-4 w-100" src="{{ asset($image) }}" alt="Project Image {{ $index + 1 }}" style="height: {{ $height }}; object-fit: cover" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
