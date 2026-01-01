<?php

use Livewire\Volt\Component;
use App\Services\HelperService;

new class extends Component {

    protected HelperService $helperService;

    public string $secNumber;
    public function mount($secNumber){
        $this->secNumber = $secNumber;
    }
    public function boot(HelperService $helperService)
    {
        $this->helperService = $helperService;
    }

    public function getFaqsProperty()
    {
        return $this->helperService
            ->getAllFaqs()
            ->orderBy('order')
            ->select('uuid', 'title', 'message', 'id')
            ->get();
    }
};

?>


<div>
    @if($this->faqs?->isNotEmpty())
    <section class="faq py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">{{ $secNumber }}</span>
                            <hr class="border-line bg-white" />
                            <span class="badge text-bg-dark">FAQs</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Frequently asked questions</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">
                                        Common queries about our electrical and electro-mechanical services and
                                        solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-xl-8">
                        <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1000">

                            @foreach ($this->faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq?->uuid }}"
                                            aria-expanded="false" aria-controls="flush-collapse{{ $faq->uuid }}">
                                            {{ $faq?->title }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $faq?->uuid }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body pt-0 fs-5 text-dark">
                                            {{ $faq?->message }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
