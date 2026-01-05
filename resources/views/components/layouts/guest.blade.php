<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Amen Trading PLC</title>
    {{-- Generate the favicons and some meta tag with description only --}}
        <meta name="description"
        content="The Amen Trading PLC is a growing and reliable provider of electrical and electro-mechanical solutions with over eight years of experience in Ethiopia. We focus on safety, innovation, and quality craftsmanship for dependable engineering services." />


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('static/assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('static/assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('static/assets/images/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('static/assets/images/favicon/site.html') }}" />
    <link rel="mask-icon" href="{{ asset('static/assets/images/favicon/safari-pinned-tab.svg') }}" color="#666666" />
    <link rel="shortcut icon" href="{{ asset('static/assets/images/favicon/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ asset('static/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/assets/libs/aos-master/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('static/assets/css/styles.css') }}" />

    <style>
    html, body {
    overflow-x: hidden;
}
        .gallery-img {
            cursor: pointer;
            transition: transform 0.3s ease;
            max-height: 50vh;
            object-fit: cover;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        /* Modal auto-size to image */
        .modal-auto-size {
            max-width: none;
            width: auto;
        }

        .modal-content {
            display: inline-block;
            background: transparent;
            position: relative;
            /* Needed for positioning close icon */
        }

        .modal-img {
            max-width: 90vw;
            max-height: 90vh;
            width: auto;
            height: auto;
            border-radius: 8px;
        }

        /* Close icon styling */
        .modal-close-btn {
            position: absolute;
            top: -20px; /* slightly above image */
            left: 50%;
            z-index: 10;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .modal-close-btn:hover {
            background: rgba(0, 0, 0, 0.85);
        }

        /* Icon size inside close button */
        .modal-close-btn .big-icon {
            width: 24px;
            height: 24px;
            color: #fff;
            padding: 3px 4px;
        }

        .modal-body img {
            width: 40%;
            height: auto;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

    </style>

</head>

<body>
    <!-- Header -->
    <livewire:public.layout.header />
    <main>
        {{ $slot }}
    </main>
    <livewire:public.layout.footer />
    <script src="{{ asset('static/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('static/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('static/assets/libs/aos-master/dist/aos.js') }}"></script>
    <script src="{{ asset('static/assets/js/custom.js') }}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <script>
        // Modal for image preview
        document.addEventListener('DOMContentLoaded', function () {
            const galleryImgs = document.querySelectorAll('.gallery-img');
            const modal = document.getElementById('imageModal');
            const modalImg = modal.querySelector('.modal-img');

            galleryImgs.forEach(img => {
                img.addEventListener('click', function () {
                    const imageSrc = this.getAttribute('data-image');
                    modalImg.src = imageSrc;
                });
            });
        });

    </script>
</body>

</html>
