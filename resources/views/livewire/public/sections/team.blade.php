<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public function boot(HelperService $helperService)
    {
        // Storing this in PROTECTED is allowed
        $this->helperService = $helperService;
    }

    public function getTeamsProperty()
    {
        return $this->helperService
            ->getAllTeams()
            ->orderBy('order')
            ->get();
    //     return cache()->remember('teams_list', 600, function () {
    //     return $this->helperService
    //         ->getAllTeams()
    //         ->orderBy('order')
    //         ->get();
    // });
    }

    
};

?>

<div>
    @if($this->teams?->isNotEmpty())
    <section id="team" class="team section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Team</h2>
            <p>Meet the experts behind Amen Trading's success</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-5">
                @foreach ($this->teams as $team)
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ $team?->first_image_path ?? 'static/assets/img/user-avatar.jpg' }}"
                                    alt="{{ $team?->name }} avatar" class="img-fluid"/>
                            </div>
                            <div class="team-content">
                                <h4>{{ $team?->name }}</h4>
                                <span class="position">{{ $team?->role }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
