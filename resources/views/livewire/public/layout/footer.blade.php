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

    // Socials (computed)
    public function getSocialsProperty()
    {
        return $this->helperService
            ->getAllSocials()
            ->first();
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


<footer class="py-5 text-center border-top border-dark">
    <div class="container">
    <a class="navbar-brand logo" href="#hero">
        <img
        src="{{ asset('static/assets/img/new/logo.png') }}"
        height="80"
        alt="ZUMI INDUSTRY PLC Logo"
        />
        <!-- style="filter: brightness(0) invert(1)" -->
    </a>
    <p class="text-gray small mb-0 mt-2">
        © 2025 ZUMI INDUSTRY PLC. The First & Only Dry Cell Factory in
        Ethiopia.
    </p>
    <p>
        Maintained by
        <a
        href="https://www.instagram.com/naeldesigns/"
        class="text-white text-decoration-none"
        >Nael Production</a
        >
    </p>
    </div>
</footer>
