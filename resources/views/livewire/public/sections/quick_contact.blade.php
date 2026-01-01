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
<section class="section contact__v2 d-none" id="contact">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-7 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Contact</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">
                    Get in Touch
                </h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    Reach out for inquiries, samples, or partnerships—let’s brew
                    something great together.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex gap-5 flex-column">
                    @if(!empty($phones))
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon d-block">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <span>
                            <span class="d-block">Phone</span>
                            <strong>
                                @foreach($phones as $index => $phone)
                                    <a href="tel:{{ $phone }}" class="text-decoration-none">{{ $phone }}</a>
                                    @if($index < count($phones) - 1)
                                        /
                                    @endif
                                @endforeach
                            </strong>
                        </span>
                    </div>
                    @endif

                    @if(!empty($emails))
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon d-block">
                            <i class="bi bi-send"></i>
                        </div>
                        <span>
                            <span class="d-block">Email</span>
                            <strong>
                                @foreach($emails as $index => $email)
                                    <a href="mailto:{{ $email }}" class="text-decoration-none">{{ $email }}</a>
                                    @if($index < count($emails) - 1)
                                        /
                                    @endif
                                @endforeach
                            </strong>
                        </span>
                    </div>
                    @endif

                    @if(!empty($address))
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon d-block">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <span>
                            <span class="d-block">Address</span>
                            <address class="fw-bold">{{ $address }}</address>
                        </span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <form id="contactForm">
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" required="" />
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" required="" />
                            </div>
                        </div>
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="subject">Subject</label>
                                <input class="form-control" id="subject" type="text" name="subject" />
                            </div>
                        </div>
                        <div class="row gap-3 gap-md-0 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5"
                                    required=""></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary fw-semibold" type="submit">
                            Send Message
                        </button>
                    </form>
                    <div class="mt-3 d-none alert alert-success" id="successMessage">
                        Message sent successfully!
                    </div>
                    <div class="mt-3 d-none alert alert-danger" id="errorMessage">
                        Message sending failed. Please try again later.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section py-4" id="quick-contact">
    <div class="container">
        <div class="row g-3 justify-content-center">
            @if(!empty($phones))
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="card shadow-sm h-100 text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-telephone fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Phone</h5>
                        <p class="card-text mb-3 small">Direct line for inquiries</p>
                        <div class="d-flex flex-column gap-1">
                            @foreach($phones as $phone)
                                <a href="tel:{{ $phone }}" class="text-decoration-none btn btn-outline-primary btn-sm p-2 fw-bold">{{ $phone }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="col-md-4 d-none" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm h-100 text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-whatsapp fs-1 text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-2">WhatsApp</h5>
                        <p class="card-text mb-3 small">Instant support</p>
                        @foreach($phones as $phone)
                            <a href="https://wa.me/{{ str_replace(['+', ' '], '', $phone) }}" class="btn btn-success btn-sm p-2 fw-bold mb-1 d-block">Chat on WhatsApp</a>
                        @endforeach
                    </div>
                </div>
            </div>

            @if(!empty($emails))
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm h-100 text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-envelope fs-1 text-info"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Email</h5>
                        <p class="card-text mb-3 small">Formal correspondence</p>
                        <div class="d-flex flex-column gap-1">
                            @foreach($emails as $email)
                                <a href="mailto:{{ $email }}" class="text-decoration-none btn btn-outline-info btn-sm p-2 fw-bold">{{ $email }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
</div>

