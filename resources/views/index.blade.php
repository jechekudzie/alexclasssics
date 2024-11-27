@extends('layouts.website')

@section('title', 'Home Page')


@section('content')
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <style>
        .partners-section {
            padding: 50px 20px; /* Add spacing around the section */
            background-color: #f9f9f9; /* Optional: Background color */
            text-align: center;
        }

        .partners-wrapper {
            display: flex;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            justify-content: center; /* Center the logos horizontally */
            align-items: center; /* Align logos vertically */
            gap: 20px; /* Space between logos */
        }

        .partner-logo {
            max-width: 150px; /* Control logo width */
            height: auto; /* Maintain aspect ratio */
            /*filter: grayscale(100%);*/ /* Optional: Make logos grayscale */
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0%); /* Optional: Highlight logo on hover */
        }

        @media (max-width: 768px) {
            .partner-logo {
                max-width: 120px; /* Smaller logos on tablets */
            }
        }

        @media (max-width: 480px) {
            .partner-logo {
                max-width: 100px; /* Even smaller logos on mobile */
            }
        }



        .our-courses-box {
            display: flex; /* Enables flexbox for the container */
            flex-direction: column; /* Stacks image and content vertically */
            align-items: center; /* Centers both the image and text horizontally */
            justify-content: center; /* Centers the content vertically */
            text-align: center; /* Centers the text */
        }

        .course-content {
            display: flex; /* Enables flexbox for the content */
            flex-direction: column; /* Stacks text vertically */
            align-items: center; /* Centers text horizontally */
            justify-content: center; /* Aligns text vertically relative to the image */
            margin-top: 20px; /* Adjust spacing between image and text */
        }

        .course-content h2 {
            font-size: 20px; /* Adjust heading size */
            margin-bottom: 10px; /* Space between title and paragraph */
        }

        .course-content p {
            font-size: 16px; /* Adjust font size for the paragraph */
        }


        .navbar-brand .logo img {
            max-width: 100px; /* Adjust for desktop */
            height: auto;
            display: block;
            margin: 0 auto; /* Center the logo */
        }

    </style>
    <!-- MAIN SECTIONS START FROM HERE -->
    <main class="main_wrapper">

        <!-- BANNER SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="banner-wrapper">
                <img src="assets/images/background/strips.svg" alt="strips" class="strips">
                <div class="container">
                    <div class="banner-block wow fadeInDown">
                        <div class="textBlock">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="d-lg-flex d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
                                        <h1 class="title p-0">The Ultimate. </h1>
                                        <img src="assets/images/background/line-pettern.svg" alt="Line"
                                             class="ps-3 d-lg-block d-none" loading="lazy">
                                    </div>
                                    <h1 class="title text-lg-end text-center">Bodybuilding Showdown</h1>
                                </div>
                                <div class="col-lg-8">
                                    <div
                                        class="d-flex flex-lg-row flex-column-reverse align-items-center text-lg-start text-center">
                                        <a href="{{url('/registration')}}" class="btn_wrapper">Register Now</a>
                                        <p class="ps-lg-4 p-0 mb-lg-0 mb-3">Join the movement that's redefining fitness
                                            across Zimbabwe. Empowering communities one rep at a time.</p>
                                        <p class="ps-lg-4 p-0 mb-lg-0 mb-3" style="font-weight: bolder;">December 7th  2024 at
                                            Harare International School.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="imgBlock pt-lg-0 pt-sm-5 pt-4">
                    <img src="{{asset('assets/images/background/Alex Classics Fitness-03.png')}}" alt="banner"
                         class="bannerImg wow fadeInLeftBig">
                    <div class="container position-relative wow fadeInUp">
                        {{--<div class="members d-lg-flex d-none align-items-center">
                            <img src="assets/images/background/members.webp" alt="Members" class="pe-2">
                            members
                        </div>--}}
                        {{--<a href="#!" data-bs-toggle="modal" data-bs-target="#myModal"
                           class="btn_wrapper White-btn ms-lg-auto mx-auto mt-lg-0 mt-3">
                            watch tutorial
                            <img src="assets/images/icon/btn-arrow.svg" alt="Arrow">
                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER SECTION END'S FROM HERE -->

        <!-- ABOUT SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="about-section">
                <div class="container">
                    <div class="about-wrapper">
                        <div class="row gy-sm-5 gy-4 justify-content-center align-items-center">
                            <div class="col-lg-7 col-sm-10 order-lg-1 order-2">
                                <div class="image-wrapper d-flex justify-content-center wow fadeInLeft">
                                    <img loading="lazy" src="{{asset('assets/images/background/ABOUT US.png')}}" alt="about-img"
                                         id="about_img1">
                                   {{-- <img loading="lazy" src="assets/images/logo.svg" alt="white-logo"
                                         class="logo" id="about_img2">
                                    <img loading="lazy" src="assets/images/background/strips.svg" alt="strips"
                                         class="strips">--}}
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-2 order-1">
                                <div class="about-text text-lg-start text-center wow fadeInRight">
                                    <div class="title">About Us</div>
                                    <p>
                                        Alex Classics, founded by Alex Mangwiro, is a Zimbabwean initiative aimed at
                                        promoting health, fitness, and community empowerment through bodybuilding. The
                                        organization prioritizes inspiring individuals of all ages to embrace a healthy
                                        and fitness-oriented lifestyle.
                                        <br>
                                    </p>
                                    <div class="title">Mission</div>
                                    <p>
                                        To empower Zimbabweans—especially the youth—to achieve a healthy mind, body, and
                                        soul via bodybuilding.
                                        <br>
                                    </p>
                                    <div class="title">Vision</div>
                                    <p>
                                        To foster mental clarity, emotional resilience, and spiritual well-being while
                                        creating an inclusive community for all, ranging from everyday individuals to
                                        business leaders.
                                        <br>
                                    </p>
                                    <a href="{{url('/registration')}}" class="btn_wrapper mx-lg-0 mx-auto">get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION END'S FROM HERE -->

        <!-- WHY CHOOSE US -->
        <section class="hero-courses-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="our-courses-box">
                            <div class="course-img">
                                <img style="width: 200px;" src="{{asset('/assets/images/img/icons-06.svg')}}" alt="Alex Classics"
                                     class="img-fluid">
                            </div>
                            <div class="course-content">
                                <h1 style="font-size: 35px; padding-bottom: 15px;">Community-Centric <br/> Approach</h1>
                                <p>A strong emphasis on supporting local communities through fitness events and
                                    initiatives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="our-courses-box">
                            <div class="course-img">
                                <img style="width: 200px;align-content: center" src="{{asset('/assets/images/img/icons-08.svg')}}" alt="Alex Classics"
                                     class="img-fluid">
                            </div>
                            <div class="course-content">
                                <h1 style="font-size: 35px; padding-bottom: 15px;">Inspirational <br/> Programming</h1>
                                <p>
                                    Initiatives designed to motivate people to pursue fitness at any stage of life.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="our-courses-box">
                            <div class="course-img">
                                <img style="width: 200px;" src="{{asset('/assets/images/img/icons-07.svg')}}" alt="Alex Classics"
                                     class="img-fluid">
                            </div>
                            <div class="course-content">
                                <h1 style="font-size: 35px; padding-bottom: 15px;">Corporate <br/> Alignment</h1>
                                <p>
                                    Opportunities for brands to associate with a cause promoting health and wellness.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- WHY CHOOSE US -->

        <!-- Inaugural Alex Classics Bodybuild ChampionshiP -->
        <div class='special-section default-padding wow fadeIn'>
            <div class="container-fluid">
                <div class="special-wrapper">
                    <h2 class="title text-center wow fadeInDown">The Ultimate Bodybuilding Showdown</h2>
                    <p class="text-center wow fadeInDown">Inspiring a healthier, stronger Zimbabwe—one athlete, one dream, one goal.</p>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-4">
                                    <div class="special-block first-box text-lg-start text-center pb-0 wow fadeInUp">
                                        {{-- <span>Workouts & Training</span>
                                         <span class="tags">#EndureDrills</span>--}}
                                        <div class="image-wrapper mt-4 wow fadeInUpBig">
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/ads/WhatsApp Image 2024-11-21 at 08.55.19.jpeg')}}"
                                                 alt="special-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div
                                        class="special-block second-box text-lg-start text-center mt-lg-5 mt-0 pt-0 wow fadeInUp">
                                        <div class="image-wrapper mb-4 wow fadeInDownBig">
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/ads/WhatsApp Image 2024-11-21 at 08.55.19 (1).jpeg')}}"
                                                 alt="special-2">
                                        </div>
                                        {{--<span>Workouts & Training</span>
                                        <span class="tags">#EndureDrills</span>--}}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="special-block first-box text-lg-start text-center pb-0 wow fadeInUp">
                                        {{-- <span>Workouts & Training</span>
                                         <span class="tags">#EndureDrills</span>--}}
                                        <div class="image-wrapper mt-4 wow fadeInUpBig">
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/ads/WhatsApp Image 2024-11-21 at 08.55.20.jpeg')}}"
                                                 alt="special-1">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div
                                        class="special-block second-box text-lg-start text-center mt-lg-5 mt-0 pt-0 wow fadeInUp">
                                        <div class="image-wrapper mb-4 wow fadeInDownBig">
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/ads/WhatsApp Image 2024-11-21 at 08.55.20 (1).jpeg')}}"
                                                 alt="special-2">
                                        </div>
                                        {{--<span>Workouts & Training</span>
                                        <span class="tags">#EndureDrills</span>--}}
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="special-block first-box text-lg-start text-center pb-0 wow fadeInUp">
                                        {{-- <span>Workouts & Training</span>
                                         <span class="tags">#EndureDrills</span>--}}
                                        <div class="image-wrapper mt-4 wow fadeInUpBig">
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/ads/WhatsApp Image 2024-11-21 at 08.55.21.jpeg')}}"
                                                 alt="special-1">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div
                                        class="special-block second-box text-lg-start text-center mt-lg-5 mt-0 pt-0 wow fadeInUp">
                                        <div class="image-wrapper mb-4 wow fadeInDownBig">
                                            <img loading="lazy"
                                                 src="{{asset('assets/images/ads/WhatsApp Image 2024-11-21 at 08.55.21 (1).jpeg')}}"
                                                 alt="special-2">
                                        </div>
                                        {{--<span>Workouts & Training</span>
                                        <span class="tags">#EndureDrills</span>--}}
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inaugural Alex Classics Bodybuild ChampionshiP -->


        <div class="partners-section">
            <div class="partners-wrapper">
                <img src="{{asset('assets/images/Logos/Alex Classics Fitness-08.png')}}" alt="Partner 1" class="partner-logo" />
                <img src="{{asset('assets/images/Logos/Eleven Dogs.png')}}" alt="Partner 2" class="partner-logo" />
                <img src="{{asset('assets/images/Logos/Lamako .png')}}" alt="Partner 2" class="partner-logo" />
                <img src="{{asset('assets/images/Logos/Mahomed Mussa Logo.png')}}" alt="Partner 2" class="partner-logo" />
                <img src="{{asset('assets/images/Logos/Pro Fitness .png')}}" alt="Partner 2" class="partner-logo" />

            </div>
        </div>

        <!-- SUCCESS SECTION START FROM HERE -->
        <div class="default-padding">
            <div class="success-section">
                <div class="container">
                    <div class="title text-center">Alex Classics - Discover the Power Within.</div>
                    <p style="text-align: center;font-size: 18px;">Inspiring a healthier, stronger Zimbabwe—one athlete,
                        one dream, one goal..</p>
                    <div class="success-wrapper">
                        <div class="row gy-lg-0 gy-4">
                            <div class="col-lg-4 col-sm-6 order-2">
                                <div class="success-box first-box wow fadeIn">
                                    <div class="image-wrapper">
                                        <img style="height: 40vh" loading="lazy" src="{{asset('assets/images/background/stronger-removebg-preview.png')}}"
                                             alt="success-1" class="box_img">
                                    </div>
                                    <div class="box-text position">
                                        <span class="white">Stronger Together</span>
                                        <p>Celebrate resilience, community, and the art of bodybuilding with Alex Classics.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-2 order-1">
                                <div class="row gy-4 justify-content-between wow fadeIn">
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="success-box last-box opacity-box icon-box">
                                            <div class="image-wrapper icon">
                                                {{--<img loading="lazy" src="assets/images/icon/success-icon.svg"
                                                     alt="success-icon">--}}
                                            </div>
                                            <div class="box-text">
                                                <span class="gradient">Strength in Every Rep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6">
                                        <div class="success-box first-box opacity-box icon-box">
                                            <div class="image-wrapper icon icon-2">
                                               {{-- <img loading="lazy" src="assets/images/icon/success-icon-2.svg"
                                                     alt="success-icon">--}}
                                            </div>
                                            <div class="box-text">
                                                <span class="gradient gradient-2">Improve with routine</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-6">
                                        <div class="success-box last-box opacity-box icon-box">
                                            <div class="image-wrapper icon">
                                                {{--<img loading="lazy" src="assets/images/icon/success-icon.svg"
                                                     alt="success-icon">--}}
                                            </div>
                                            <div class="box-text">
                                                <span class="gradient">Fuel Your Passion. Build Your Strength</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 order-3">
                                <div class="success-box last-box wow fadeIn">
                                    <div class="image-wrapper">
                                        <img loading="lazy" src="assets/images/background/success-2.webp"
                                             alt="success-2" class="box_img">
                                    </div>
                                    <div class="box-text position">
                                        <span class="white">Embrace the Grind. Elevate Your Potential.</span>
                                        <p>Push your limits and be part of Zimbabwe’s ultimate fitness revolution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUCCESS SECTION END'S FROM HERE -->

        <!-- NOTICE SECTION START FROM HERE -->
        <div class="notice-section default-padding wow fadeIn">
            <div class="notice">
                <div class="notice-slide">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                </div>
                <div class="notice-slide">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                    <img loading="lazy" src="{{asset('assets/images/icon/alex_classics_logo.svg')}}" alt="marquee-icon">
                </div>
            </div>
        </div>
        <!-- NOTICE SECTION END'S FROM HERE -->


        <!-- STAND WITH SECTION START FROM HERE -->
        <div class="stand-with-section strips default-padding">
            <div class="container">
                <div class="stand-with-wrapper">
                    <div class="top-block wow fadeIn">
                        <div
                            class="d-lg-flex justify-content-end d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
                            <h1 class="title p-0">Discover the Power Within</h1>
                            <img loading="lazy" src="assets/images/background/line-pettern.svg" alt="Line"
                                 class="px-xl-5 px-4 mx-xl-5 mx-4 d-lg-block d-none">
                        </div>
                    </div>
                    <div class="row pb-lg-0 pb-4">
                        <div class="col-lg-4">
                            <div class="text-block text-lg-start text-center wow fadeInLeft">
                                <span class="mb-2">Defy The Limits</span>
                                <p>Join us at the Alex Classics Bodybuilding Championship—where power meets purpose.</p>
                                <a href="{{url('/registration')}}" class="btn_wrapper mx-lg-0 mx-auto">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- STAND WITH SECTION END'S FROM HERE -->

    </main>
    <!-- MAIN SECTIONS END'S FROM HERE -->


@endsection

@push('scripts')
@endpush
