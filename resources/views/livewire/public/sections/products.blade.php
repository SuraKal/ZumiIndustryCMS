<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Services\HelperService;

new class extends Component {

    use WithPagination;

    protected HelperService $helperService;

    protected string $paginationTheme = 'bootstrap';

    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getProjectsProperty()
    {
        return $this->helperService
            ->getAllProducts()
            ->paginate(8);
    }
};
?>

<div>

    @if($this->projects?->isNotEmpty())

        {{-- Products Grid --}}
        <div class="row g-4 px-3" data-aos="fade-up" data-aos-delay="200">

            @foreach ($this->projects as $project)
                <div class="col-md-6 col-lg-3" wire:key="project-{{ $project->uuid }}">

                    <a href="{{ route('public.products.show', $project->uuid) }}"
                       class="d-block text-decoration-none h-100">

                        <div class="portfolio d-flex flex-column h-100">

                            {{-- Product Image --}}
                            <div
                                class="flex-grow-1 rounded-top d-flex align-items-center justify-content-center text-center border">
                                <img
                                    src="{{ asset($project->getFirstImage()) }}"
                                    alt="{{ $project->name }}"
                                    class="img-fluid rounded"
                                    style="height: 250px; object-fit: cover;">
                            </div>

                            {{-- Product Details --}}
                            <div
                                class="portfolio-details p-3 bg-white rounded-bottom shadow-sm border-top text-center">

                                <h6 class="mb-1 fw-semibold text-dark text-truncate">
                                    {{ $project->name }}
                                </h6>

                                <small class="text-muted d-block text-truncate">
                                    Partner: {{ $project->partner?->name ?? 'N/A' }}
                                </small>

                            </div>

                        </div>
                    </a>

                </div>
            @endforeach

        </div>

        {{-- Pagination --}}
        @if($this->projects->hasPages())
            <nav aria-label="Products navigation" class="mt-5">
                <ul class="pagination justify-content-center">

                    {{-- Previous --}}
                    @if ($this->projects->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <button class="page-link" wire:click="previousPage">
                                Previous
                            </button>
                        </li>
                    @endif

                    {{-- Pages --}}
                    @foreach ($this->projects->getUrlRange(1, $this->projects->lastPage()) as $page => $url)
                        @if ($page === $this->projects->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <button
                                    class="page-link"
                                    wire:click="gotoPage({{ $page }})">
                                    {{ $page }}
                                </button>
                            </li>
                        @endif
                    @endforeach

                    {{-- Next --}}
                    @if ($this->projects->hasMorePages())
                        <li class="page-item">
                            <button class="page-link" wire:click="nextPage">
                                Next
                            </button>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">Next</span>
                        </li>
                    @endif

                </ul>
            </nav>
        @endif

        {{-- Explore More --}}
        <div class="text-center mt-4">
            <a href="{{ route('public.products') }}" class="btn">
                <span class="btn-text">Explore more</span>
                <iconify-icon
                    icon="lucide:arrow-up-right"
                    class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                </iconify-icon>
            </a>
        </div>

    @else

        {{-- Empty State --}}
        <section class="hero__v6 section text-center">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">

                        <span class="hero-subtitle text-uppercase mb-3 d-block">
                            Sorry!
                        </span>

                        <h1 class="hero-title mb-4">
                            No Products Found
                        </h1>

                        <p class="hero-description lead mb-4">
                            Currently there are no products to show.
                        </p>

                        <img
                            src="{{ asset('static/assets/images/project_placeholder.jpg') }}"
                            class="img-fluid rounded shadow mb-4"
                            style="max-height:260px; object-fit:cover">

                        <div class="mt-4">
                            <a href="{{ route('home') }}"
                               class="btn btn-primary px-4 py-2 me-2 text-white">
                                <iconify-icon
                                    icon="lucide:home"
                                    class="fs-4 me-2 text-white">
                                </iconify-icon>
                                Go Home
                            </a>

                            <a href="{{ route('public.contact') }}"
                               class="btn btn-outline-brand px-4 py-2 text-white">
                                <iconify-icon
                                    icon="lucide:phone"
                                    class="fs-4 me-2 text-white">
                                </iconify-icon>
                                Contact Us
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    @endif

</div>
