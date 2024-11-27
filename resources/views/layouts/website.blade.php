<!DOCTYPE html>
<html lang="en">

<head>

    <!-- PAGE TITLE START HERE -->
    <title>ALEX CLASSICS</title>
    <!-- PAGE TITLE END'S HERE -->

    <!-- META TAG START HERE -->
    <meta charset="UTF-8">
    <meta name="title" content="ENDURANCE"> <!-- ADD THEME TITLE HERE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
    <meta name="format-detection" content="telephone=no">
    <meta name=theme-color content="#FFFFFF"> <!-- ADD THEME COLOR HERE -->
    <meta name="description"
          content="Alex Classics, founded by Alex Mangwiro, is a Zimbabwean initiative aimed at promoting health, fitness, and community empowerment through bodybuilding.
          The organization prioritizes inspiring individuals of all ages to embrace a healthy and fitness-oriented lifestyle.">
    <!-- ADD THEME DESCRIPTION HERE -->

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="theme_url"> <!-- ADD THEME URL HERE -->
    <meta property="og:title" content="ENDURANCE"> <!-- ADD THEME TITLE HERE -->
    <meta property="og:description"
          content="Alex Classics, founded by Alex Mangwiro, is a Zimbabwean initiative aimed at promoting health, fitness, and community empowerment through bodybuilding.
           The organization prioritizes inspiring individuals of all ages to embrace a healthy and fitness-oriented lifestyle.">
    <!-- ADD THEME DESCRIPTION HERE -->
    <meta property="og:image" content="https://alexclassics.co.zw">
    <!-- ADD THEME TITLE HERE -->

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="theme_url"> <!-- ADD THEME URL HERE -->
    <meta property="twitter:title" content="ENDURANCE"> <!-- ADD THEME TITLE HERE -->
    <meta property="twitter:description"
          content="Alex Classics, founded by Alex Mangwiro, is a Zimbabwean initiative aimed at promoting health, fitness, and community empowerment through bodybuilding.
          The organization prioritizes inspiring individuals of all ages to embrace a healthy and fitness-oriented lifestyle.">
    <!-- ADD THEME DESCRIPTION HERE -->
    <meta property="twitter:image"
          content="https://netizensstore.com/gymfit_theme/html/endurance/assets/images/thumbnail.webp">
    <!-- ADD THUMBNAIL PATH HERE -->
    <!-- META TAG END'S HERE -->

    <!-- FAVICON -->
    <link href="{{asset('assets/images/logo.svg')}}" rel="shortcut icon" type="image/x-icon">

    <!-- LOCAL CSS LINK -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.css') }}"> <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/css/swiper-bundle.min.css') }}"> <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/animation/css/animation.css') }}"> <!-- ANIMATION CSS -->
    <link rel="preload stylesheet" as="style" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <!-- MAIN STYLE CSS -->
</head>

<body>

<!-- LOADER START HERE -->
{{--<div class="page_loader">
    <img width="500" src="{{asset('assets/images/logo.svg')}}" alt="img" loading="lazy">
</div>--}}
<!-- LOADER END HERE -->

<!-- HEADER START FROM HERE -->
<header class="default-padding pt-0">
    <div class="container">
        <nav class="navbar navbar-expand-xxxl">

            <!-- Logo -->
            <a class="navbar-brand logo lh-0" href="{{url('/')}}">
                <img style="width: 150px;" class="img-responsiveness" src="{{asset('assets/images/Alex Classics Fitness-08.png')}}" alt="Logo">
            </a>

            <!-- COLLAPSE MENU -->
            <div class="header_block">
                <div class="MobileView lh-0 mb-sm-5 mb-4 d-flex align-items-center justify-content-end">
                    <a href="#!" class="closeBtn d-flex align-items-center">
                        <p class="mb-0 pe-sm-3 pe-2">close</p>
                        <div class="close-icon d-flex align-items-center justify-content-center">
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
                <ul class="tabActive">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li class="d-lg-none d-flex">
                        <a href="{{url('/registration')}}" class="btn_wrapper">Register Now</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-sm-4 gap-3">
                <!-- COLLAPSE BUTTON -->
                <button class="hamburger lh-0">
                    <span>menu</span>
                    <img src="{{asset('assets/images/icon/toggle-icon.svg')}}" alt="Icon" class="ps-2">
                </button>
                <a href="{{url('/registration')}}" class="btn_wrapper d-lg-flex d-none">Register Now</a>
            </div>
        </nav>
    </div>
</header>
<!-- HEADER END'S FROM HERE -->

@yield('content')

<!-- FOOTER START FROM HERE -->
<footer>
    <div  style="background-color:black" class="footer-wrapper wow fadeIn">
        <div class="container">
            <div class="footer-block">
                <div class="top-block">
                    <a href="{{url('/')}}" class="logo image-wrapper">
                        <img width="150" loading="lazy" src="{{asset('assets/images/logo.svg')}}" alt="footer-logo">
                    </a>
                    <div class="icon-wrapper">
                       {{-- <a href="#!" class="icon image-wrapper">
                            <img loading="lazy" src="assets/images/icon/facebook.svg" width="24" height="24"
                                 alt="facebook">
                        </a>
                        <a href="#!" class="icon image-wrapper">
                            <img loading="lazy" src="assets/images/icon/instagram.svg" width="24" height="24"
                                 alt="instagram">
                        </a>
                        <a href="#!" class="icon image-wrapper">
                            <img loading="lazy" src="assets/images/icon/twitter.svg" width="24" height="24"
                                 alt="twitter">
                        </a>
                        <a href="#!" class="icon image-wrapper">
                            <img loading="lazy" src="assets/images/icon/youtube.svg" width="24" height="24"
                                 alt="youtube">
                        </a>
                        <a href="#!" class="icon image-wrapper">
                            <img loading="lazy" src="assets/images/icon/linkedln.svg" width="24" height="24"
                                 alt="linkedln">
                        </a>--}}
                    </div>
                </div>
                <div class="footer-content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li><a href="#">gallery</a></li>
                        <li><a href="#">help center</a></li>
                        <li><a href="#">sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright wow fadeIn">
        <div class="container">
            <div class="d-flex gap-4 align-items-center justify-content-lg-between justify-content-center">
                <p style="color:white;">Copyright © {{date('Y')}}. All rights reserved</p>
                {{--<img loading="lazy" src="assets/images/icon/visa-card.svg" width="295" height="27" alt="visa-card"
                     class="image-wrapper d-lg-block d-none">--}}
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END'S FROM HERE -->

<!-- BACK TOP TOP BUTTON START FROM HERE -->
<a href="#!" id="button"><img loading="lazy" src="{{asset('assets/images/icon/arrow-up.svg')}}" width="22" height="22"
                              alt="arrow-up"></a>
<!-- BACK TOP TOP BUTTON END'S FROM HERE -->

<!-- VIDEO MODAL START FROM HERE -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close d-block ms-auto" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                <video controls="" id="video1">
                    <source src="assets/video/video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
<!-- VIDEO MODAL END'S FROM HERE -->

<!-- LOCAL JS SCRIPT -->
<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script> <!-- JQUERY -->
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.js') }}"></script> <!-- BOOTSTRAP JS -->
<script src="{{ asset('assets/vendors/swiper/js/swiper-bundle.min.js') }}"></script> <!-- SWIPER JS -->
<script src="{{ asset('assets/vendors/animation/js/animation.js') }}"></script> <!-- ANIMATION JS -->
<script src="{{ asset('assets/js/main.js') }}"></script> <!-- MAIN JS -->


<!-- FLOATING IMG JS -->
<script>
    /* ========= ABOUT US FLOATING IMAGES ========= */
    /* IMG 1 */
    const about_img1 = document.getElementById('about_img1');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        about_img1.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
    });
    /* IMG 2 */
    const about_img2 = document.getElementById('about_img2');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        about_img2.style.transform = `translate(calc(-50% + ${offsetX * -10}px), calc(-50% + ${offsetY * -10}px))`;
    });
    /* ========= ABOUT US FLOATING IMAGES ========= */


    /* ========= INSTAGRAM FLOATING IMAGES ========= */
    /* Img 1 */
    const floatingImage1 = document.getElementById('floatingImage1');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage1.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
    });

    /* Img 2 */
    const floatingImage2 = document.getElementById('floatingImage2');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage2.style.transform = `translate(${offsetX * -10}px, ${offsetY * -10}px)`;
    });

    /* Img 3 */
    const floatingImage3 = document.getElementById('floatingImage3');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage3.style.transform = `translate(${offsetX * -10}px, ${offsetY * -10}px)`;
    });

    /* Img 4 */
    const floatingImage4 = document.getElementById('floatingImage4');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage4.style.transform = `translate(${offsetX * 5}px, ${offsetY * 5}px)`;
    });

    /* Img 5 */
    const floatingImage5 = document.getElementById('floatingImage5');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage5.style.transform = `translate(${offsetX * 5}px, ${offsetY * 5}px)`;
    });

    /* Img 6 */
    const floatingImage6 = document.getElementById('floatingImage6');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage6.style.transform = `translate(${offsetX * -5}px, ${offsetY * -5}px)`;
    });

    /* Img 7 */
    const floatingImage7 = document.getElementById('floatingImage7');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage7.style.transform = `translate(${offsetX * 20}px, ${offsetY * 20}px)`;
    });

    /* Img 8 */
    const floatingImage8 = document.getElementById('floatingImage8');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage8.style.transform = `translate(${offsetX * 15}px, ${offsetY * 15}px)`;
    });

    /* Img 9 */
    const floatingImage9 = document.getElementById('floatingImage9');

    document.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate percentage offsets
        const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
        const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

        // Apply the transform
        floatingImage9.style.transform = `translate(${offsetX * -20}px, ${offsetY * -20}px)`;
    });
    /* ========= INSTAGRAM FLOATING IMAGES ========= */
</script>

</body>

</html>
