<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ZUMI INDUSTRY PLC | Next-Gen Energy</title>
    <title>
        ZUMI INDUSTRY PLC – Ethiopia’s Premier Dry Cell Battery Manufacturer
    </title>

    <meta name="description"
        content="ZUMI INDUSTRY PLC is the first and only factory in Ethiopia engaged in the production of high-quality dry cell batteries. Established in 2023 in Akaki Kality." />
    <meta name="keywords"
        content="Dry cell batteries, ZUMI INDUSTRY PLC, Ethiopia manufacturing, clean energy, R6 batteries, R03 batteries, industrial energy" />

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/new/favicon/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/new/favicon/favicon-32x32.png" />

    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/new/favicon/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/new/favicon/android-chrome-512x512.png" />

    <link rel="apple-touch-icon" href="assets/img/new/favicon/apple-touch-icon.png" />

    <link rel="manifest" href="assets/img/new/favicon/site.webmanifest" />

    <link rel="shortcut icon" href="assets/img/new/favicon/favicon.ico" />

    <meta name="msapplication-TileColor" content="#EDD624" />
    <meta name="theme-color" content="#ffffff" />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@400;600&display=swap"
        rel="stylesheet" />

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/additional.css" />

</head>

<body>
    <i class="bi bi-lightning-charge floating-icon" style="top: 15%; right: 10%"></i>
    <i class="bi bi-cpu floating-icon" style="bottom: 10%; left: 5%; animation-delay: 2s"></i>
    <i class="bi bi-plug floating-icon" style="top: 40%; left: 15%; font-size: 2rem; animation-delay: 4s"></i>


    @livewire('public.layout.header')

    {{ $slot }}

    @livewire('public.layout.footer')

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script>
        // Initialize Animations
        AOS.init({
            duration: 1000,
            once: true
        });

        // Initialize Product Slider
        new Swiper(".product-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4
                },
            },
            autoplay: {
                delay: 3000
            },
        });

        // Ensure dropdown works on mobile
        document.addEventListener("DOMContentLoaded", function () {
            var toggler = document.querySelector(".navbar-toggler");
            var collapse = new bootstrap.Collapse(
                document.getElementById("navbarNav"), {
                    toggle: false,
                },
            );
            toggler.addEventListener("click", function () {
                collapse.toggle();
            });
        });


      document.addEventListener("DOMContentLoaded", function () {
        const toggler = document.querySelector(".navbar-toggler");

        if (!toggler) {
          return;
        }

        const collapse = new bootstrap.Collapse(
          document.getElementById("navbarNav"),
          {
            toggle: false,
          },
        );

        toggler.addEventListener("click", function () {
          collapse.toggle();
        });
      });

      const filterButtons = document.querySelectorAll(".filter-chip");
      const productItems = document.querySelectorAll(".product-item");

      filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
          const filter = button.dataset.filter;

          filterButtons.forEach((item) => item.classList.remove("active"));
          button.classList.add("active");

          productItems.forEach((product) => {
            const matches =
              filter === "all" || product.dataset.category === filter;

            product.classList.toggle("is-hidden", !matches);
          });
        });
      });

      document.addEventListener("DOMContentLoaded", function () {
        const toggler = document.querySelector(".navbar-toggler");

        if (!toggler) {
          return;
        }

        const collapse = new bootstrap.Collapse(
          document.getElementById("navbarNav"),
          {
            toggle: false,
          },
        );

        toggler.addEventListener("click", function () {
          collapse.toggle();
        });
      });

      document.addEventListener("DOMContentLoaded", function () {
        const toggler = document.querySelector(".navbar-toggler");
        const contactForm = document.getElementById("contactInquiryForm");

        if (!toggler) {
          if (contactForm) {
            contactForm.addEventListener("submit", function (event) {
              event.preventDefault();
            });
          }

          return;
        }

        const collapse = new bootstrap.Collapse(
          document.getElementById("navbarNav"),
          {
            toggle: false,
          },
        );

        toggler.addEventListener("click", function () {
          collapse.toggle();
        });

        if (contactForm) {
          contactForm.addEventListener("submit", function (event) {
            event.preventDefault();
          });
        }
      });
    </script>
</body>

</html>
