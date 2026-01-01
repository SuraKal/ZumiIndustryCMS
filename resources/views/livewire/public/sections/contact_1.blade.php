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

    public $name, $email, $subject, $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'nullable|min:3|max:30',
        'message' => 'required|min:5|max:500',
    ];

    public function submit()
    {
        $this->validate();

        \App\Models\Contact::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->reset();
        $this->loadContacts();
        $this->redirect(route('public.contact'));
        // session()->flash('success', 'Message sent successfully!');
    }
}; ?>


<section>
    <!-- Get in touch Section -->
    <section class="get-in-touch py-5 py-lg-10 py-xl-10">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            
                            <hr class="border-line bg-white" />
                            <span class="badge text-bg-dark">Contact Us</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Get in touch</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <p class="mb-4 fs-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            Let’s discuss your electrical or electro-mechanical needs. Contact us for a free
                            consultation.
                        </p>
                        <div class="contact-info d-flex flex-column gap-4" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            @if(!empty($address))
                            <div class="d-flex align-items-start gap-3">
                                <iconify-icon icon="lucide:map-pin" class="text-primary fs-4 flex-shrink-0 mt-1">
                                </iconify-icon>
                                <div>
                                    <h6 class="mb-1 fw-medium">Our Address</h6>
                                    <p class="mb-0">{{ $address }}</p>
                                </div>
                            </div>
                            @endif


                            @if(!empty($phones))
                            <div class="d-flex align-items-center gap-3">
                                <iconify-icon icon="lucide:phone" class="text-primary fs-4 flex-shrink-0">
                                </iconify-icon>
                                <div>
                                    <h6 class="mb-1 fw-medium">Phones</h6>
                                    <p class="mb-0">
                                        @foreach($phones as $index => $phone)<a href="tel:{{ $phone }}"
                                            class="text-decoration-none text-secondary">{{ $phone }}</a>
                                        @if($index
                                        < count($phones) - 1) / @endif @endforeach <br />
                                </div>
                            </div>
                            @endif


                            @if(!empty($emails))
                            <div class="d-flex align-items-center gap-3">
                                <iconify-icon icon="lucide:mail" class="text-primary fs-4 flex-shrink-0">
                                </iconify-icon>
                                <div>
                                    <h6 class="mb-1 fw-medium">Emails</h6>
                                    <p class="mb-0">@foreach($emails as $index => $email)
                                        <a href="mailto:{{ $email }}" class="text-decoration-none text-secondary">
                                            {{ $email }}
                                        </a>
                                        @if($index < count($emails) - 1) / @endif @endforeach </p> </div> </div> @endif
                                            </div> </div> <div class="col-xl-8">
                                            <form class="d-flex flex-column gap-7" data-aos="fade-up"
                                                wire:submit="submit"
                                                data-aos-delay="200" data-aos-duration="1000">
                                                <div>
                                                    <input type="text" class="form-control border-bottom border-dark"
                                                        id="formGroupExampleInput" placeholder="Name *" wire:model="name" required/>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control border-bottom border-dark"
                                                        id="exampleInputSubject" placeholder="Subject"
                                                        wire:model="subject" />
                                                </div>
                                                <div>
                                                    <input type="email" class="form-control border-bottom border-dark"
                                                        id="exampleInputEmail1" placeholder="Email *"
                                                        aria-describedby="emailHelp" wire:model="email" required/>
                                                </div>
                                                <div>
                                                    <textarea class="form-control border-bottom border-dark"
                                                        id="exampleFormControlTextarea1"
                                                        placeholder="Give your message here *" rows="3" wire:model="message"
                                                        required
                                                        ></textarea>
                                                </div>
                                                <button type="submit" class="btn w-100 justify-content-center">
                                                    <span class="btn-text">Submit message</span>
                                                    <iconify-icon icon="lucide:arrow-up-right"
                                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                                    </iconify-icon>
                                                </button>
                                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>


    <section class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body p-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.9892029418447!2d38.74488817449873!3d9.013822989227412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85c35141c8d7%3A0xe4ff8793b2053590!2sYOBEK%20COMMERCIAL%20CENTER%20sengatera!5e1!3m2!1sen!2set!4v1766769139873!5m2!1sen!2set"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <style>
                            .map-section iframe {
                                width: 100% !important;
                                border-radius: 10px;
                            }

                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
