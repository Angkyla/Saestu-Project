<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- <link href="./src/style.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }

        .carousel-container {
            position: relative;
            max-width: 80%;
            margin: 0 auto;
        }

        .owl-carousel {
            display: flex;
            gap: 20px;
        }

        .item {
            background-color: #fff;
            padding: 5px;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: none;
        }

        .item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        button.owl-prev span, button.owl-next span{
            background-color: #ccc;
            padding: 5px 10px;
            font-size: 20px;
            border-radius: 5px;
            justify-content: center;
            align-items: center;
        }

        /* Dot indicator style */
        .owl-dot.active span {
            background-color: #FFB501;
        }

        .owl-dot span {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 5px;
            background-color: #ccc;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="flex flex-col w-full">
        <!-- Navbar -->
        <div class="fixed z-50 flex min-w-full h-20 px-4 sm:px-16 bg-slate-950">
            <div class="w-full flex items-center justify-between relative sm:static">
                <a href="/">
                    <img src="./img/logo-saestu-04-1.png" class="w-24 sm:w-32" alt="">
                </a>
                <input type="checkbox" id="menu-toggle" class="hidden peer" />
                <div
                    class="sm:flex w-full sm:w-fit rounded-lg flex-col sm:flex-row items-center text-white gap-4 sm:gap-8 absolute right-0 top-20 bg-slate-900 sm:bg-transparent sm:static px-8 py-2 sm:p-0 hidden peer-checked:flex">
                    <a href="/" class="group">
                        <div class="flex flex-col">
                            <p class="group-hover:text-orange-500 transition-all">Home</p>
                            <div class="w-full h-[2px] mt-1 bg-transparent group-hover:bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                    <a href="/about-us" class="group">
                        <div class="flex flex-col">
                            <p class="text-orange-500 transition-all">About Us</p>
                            <div class="w-full h-[2px] mt-1 bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                    <a href="/project" class="group">
                        <div class="flex flex-col">
                            <p class="group-hover:text-orange-500 transition-all">Project</p>
                            <div class="w-full h-[2px] mt-1 bg-transparent group-hover:bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                    <a href="/services" class="group">
                        <div class="flex flex-col">
                            <p class="group-hover:text-orange-500 transition-all">Service</p>
                            <div class="w-full h-[2px] mt-1 bg-transparent group-hover:bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                    <a href="/lets-talk" class="group">
                        <div class="flex flex-col">
                            <p class="group-hover:text-orange-500 transition-all">Let's Talk</p>
                            <div class="w-full h-[2px] mt-1 bg-transparent group-hover:bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                </div>
                <label for="menu-toggle" class="flex w-8 flex-col gap-2 sm:hidden">
                    <div class="w-full h-[2px] bg-white"></div>
                    <div class="w-full h-[2px] bg-white"></div>
                    <div class="w-full h-[2px] bg-white"></div>
                </label>
            </div>
        </div>
        <!-- Navbar -->

        <!-- Content -->
        <div class="flex flex-col mt-20 sm:flex-row flex-wrap justify-between bg-slate-950 min-w-full p-4 sm:p-16"
            data-aos="fade-up">
            <div class="w-full flex  justify-center">
                <p class="text-white sm:text-[44px] font-bold text-3xl py-4">About Us</p>
            </div>
            <div class="w-full sm:w-4/12 flex flex-col py-2 gap-4">
                <p class="text-white text-xl sm:text-[30px] font-bold py-1 text-center sm:text-left">We create campaigns
                    and opportunities for impactful growth.</p>
            </div>

            <div class="w-full sm:w-5/12 flex flex-col py-2 gap-4 pb-20">
                <p class="text-xs sm:text-lg text-white text-center sm:text-left">Welcome to Saestu Creative, where
                    youth spirit meets innovative marketing and brand initiatives! As a vibrant creative agency, we are
                    driven by fresh ideas and a dynamic approach that sets us apart in the industry.<br><br>

                    Let us ignite your brand's potential and bring your vision to life with our creative expertise and
                    passion for cutting-edge solutions. Join us on this exciting journey of creativity and
                    transformation.
                </p>
            </div>
        </div>

        <div class="w-full">
            <h1 class="text-center mt-10 text-xl sm:text-[44px] font-bold">Creative Phase</h1>
            <p class="text-center m-20 sm:m-40 sm:mt-8 lg:m-80 lg:mt-12 lg:mb-20  mt-4">This is where ideas transform
                into powerful campaigns. In this crucial phase, we focus on creating clear and impactful concepts.
                Highlighting key messages–based on profound research. Our goal is to generate optimal campaign
                effectiveness and audience engagement. </p>
        </div>

        <div class="flex flex-col items-center sm:flex-row sm:flex-wrap justify-evenly" data-aos="fade-up">
            <div class="flex flex-col w-full sm:w-1/2">
                <div class="flex flex-row gap-4 items-center">
                    <div class="ml-8 text-neutral-400">01</div>
                    <div class="w-full mr-4 bg-neutral-400 h-0.5"></div>
                </div>

                <div class="flex flex-row items-center m-8 ">
                    <img src="./img/Vector 1.svg" alt="" class="w-24 sm:w-32">
                    <p class="m-8 font-bold sm:text-xl">RESEARCH & ANALYZE</p>
                </div>
            </div>

            <div class="flex flex-col w-full sm:w-1/2 ">
                <div class="flex flex-row gap-4 items-center">
                    <div class="ml-8 text-neutral-400">02</div>
                    <div class="w-full mr-4 bg-neutral-400 h-0.5"></div>
                </div>

                <div class="flex flex-row items-center  m-8 ">
                    <img src="./img/Vektor 2.svg" alt="" class="w-24 sm:w-32">
                    <p class="m-8 font-bold sm:text-xl">IDEATION & DEVELOPING</p>
                </div>
            </div>
            <div class="flex flex-col w-full sm:w-1/2">
                <div class="flex flex-row gap-4 items-center">
                    <div class="ml-8 text-neutral-400">03</div>
                    <div class="w-full mr-4 bg-neutral-400 h-0.5"></div>
                </div>

                <div class="flex flex-row items-center  m-8 ">
                    <img src="./img/Vector 3.svg" alt="" class="w-24 sm:w-32">
                    <p class="m-8 font-bold sm:text-xl">IDENTIFICATION STRATEGY</p>
                </div>
            </div>
            <div class="flex flex-col w-full sm:w-1/2">
                <div class="flex flex-row gap-4 items-center">
                    <div class="ml-8 text-neutral-400">04</div>
                    <div class="w-full mr-4 bg-neutral-400 h-0.5"></div>
                </div>

                <div class="flex flex-row items-center  m-8 ">
                    <img src="./img/Vektor 4.svg" alt="" class="w-24 sm:w-32">
                    <p class="m-8 font-bold sm:text-xl">BREAKDOWN CONTENT</p>
                </div>
            </div>

            <div class="flex flex-col w-full sm:w-1/2">
                <div class="flex flex-row gap-4 items-center">
                    <div class="ml-8 text-neutral-400">05</div>
                    <div class="w-full mr-4 bg-neutral-400 h-0.5"></div>
                </div>

                <div class="flex flex-row items-center  m-8 ">
                    <img src="./img/Vektor 5.svg" alt="" class="w-24 sm:w-32">
                    <p class="m-8 font-bold sm:text-xl">PRODUCTION</p>
                </div>
            </div>

            <div class="flex flex-col w-full sm:w-1/2">
                <div class="flex flex-row gap-4 items-center">
                    <div class="ml-8 text-neutral-400">06</div>
                    <div class="w-full mr-4 bg-neutral-400 h-0.5"></div>
                </div>

                <div class="flex flex-row items-center  m-8 ">
                    <img src="./img/Shape 2.svg" alt="" class="w-24 sm:w-32">
                    <p class="m-8 font-bold sm:text-xl">MAINTENANCE</p>
                </div>
            </div>
        </div>


        <div class="flex min-w-full p-4 sm:px-16 h-10 bg-blue-800 items-center" data-aos="fade-up">
            <div class="flex w-full overflow-hidden gap-4">
                <div class="flex animate-marquee gap-4">
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                </div>
                <div class="flex animate-marquee gap-4">
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                        <p class="text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full" data-aos="fade-up">
            <h1 class="mt-10 text-center text-xl font-bold sm:text-[32px]">Our Team</h1>
            <p class="text-center mt-5 sm:texl-[24px] px-20 lg:ml-40 lg:mr-40">Welcome to our team! Passionate
                individuals
                who collaborate week-in, week-out to turn our goals into reality. Get to know the personalities that add
                vibrancy to our achievements.</p>
        </div>

        <div class="mr-20 ml-20 mt-10 mb-10" data-aos="fade-up">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="./img/image 11.png" alt="Photo 1">
                    <h1 class="font-bold">Satya Panggayuh</h1>
                    <p>Director</p>
                </div>
                <div class="item"><img src="./img/image 12.png" alt="Photo 2">
                    <h1 class="font-bold">Sugab Adi </h1>
                    <p>Strategic Planner</p>
                </div>
                <div class="item"><img src="./img/image 13.png" alt="Photo 3">
                    <h1 class="font-bold">Naufal Zahid </h1>
                    <p>Art Director</p>
                </div>
                <div class="item"><img src="./img/image 14.png" alt="Photo 4">
                    <h1 class="font-bold">Dewangga Wase </h1>
                    <p>Digital Lead</p>
                </div>
                <div class="item"><img src="./img/image 15.png" alt="Photo 5">
                    <h1 class="font-bold">Anggi Wicaksono </h1>
                    <p>Digital Social Media</p>
                </div>
                <div class="item"><img src="./img/image 16.png" alt="Photo 6">
                    <h1 class="font-bold">R. Aryayudha C </h1>
                    <p>Graphic Designer</p>
                </div>
                <div class="item"><img src="./img/image 17.png" alt="Photo 7">
                    <h1 class="font-bold">Bernardus Christian </h1>
                    <p>Graphic Designer</p>
                </div>
                <div class="item"><img src="./img/Foto - Bagastian Tri Laksana 2.png" alt="Photo 8">
                    <h1 class="font-bold">Bagastian Tri L </h1>
                    <p>UI/UX Designer</p>
                </div>
            </div>
        </div>

        <div style="background-image: url(img/anbwh.gif);"
            class="flex flex-col w-full h-[300px] sm:h-[600px] bg-no-repeat bg-cover p-8 justify-center items-center"
            data-aos="fade-up">
            <p class="text-[24px] sm:text-[44px] text-white mt-2 sm:mt-8 text-center font-bold">Join us in bringing your
                brand's story to life with precision and passion.</p>
            <a href="#"
                class="inline-block w-fit text-[12px] sm:text-lg text-black text-center bg-white border px-2 py-1">
                <p class="flex items-center gap-1">
                    Contact Us
                    <span class="iconify text-xl text-black" data-icon="ic:round-arrow-outward"></span>
                </p>
            </a>
        </div>

        <!-- Content -->

        <!-- Footer -->
        <div class="flex flex-col sm:flex-row sm:flex-wrap gap-y-4 min-w-full p-4 sm:px-16 bg-neutral-200"
            data-aos="fade-up">
            <div class="flex w-full sm:w-7/12 justify-between">
                <div class="w-1/3">
                    <img src="img/Logo Saestu-01 1 (1).png" class="w-2/3" alt="">
                </div>
                <div class="w-1/3">
                    <p class="text-[14px] font-medium text-blue-700 mb-1">Discover</p>
                    <ul>
                        <li><a href="./index.html" class="text-[14px]">Home</a></li>
                        <li><a href="./about-us.html" class="text-[14px]">About Us</a></li>
                        <li><a href="./project.html" class="text-[14px]">Project</a></li>
                        <li><a href="./services.html" class="text-[14px]">Service</a></li>
                        <li><a href="./lets-talk.html" class="text-[14px]">Let's Talk</a></li>
                    </ul>
                </div>
                <div class="w-1/3">
                    <p class="text-[14px] font-medium text-blue-700 mb-1">Contact</p>
                    <ul>
                        <li><a href="" class="text-[14px]">+62 81390390302</a></li>
                        <li><a href="" class="text-[14px]">+62 82241894119</a></li>
                        <li><a href="" class="text-[14px]">halosaestu@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col sm:w-5/12">
                <div class="flex w-full">
                    <p class="text-[14px] font-medium text-blue-700 mb-1 w-full">PT. Rejeki Ingkang Lumintu</p>
                </div>
                <div class="flex flex-col w-full sm:flex-col-reverse">
                    <div class="flex w-full h-72">
                        <iframe class="w-full rounded-2xl"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24624.2148798074!2d110.36579736676647!3d-7.737198579259035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a593843261dbf%3A0x25a7c0d273a98038!2sSaestu%20Creative!5e0!3m2!1sen!2sid!4v1727747211708!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex w-full flex-col">
                        <p class="text-[14px] font-medium mt-1">HO Jogja :</p>
                        <p class="text-[14px]">Jl. Lempongsari Raya No.144-89, Randuguang, Sariharjo, Ngaglik, Sleman,
                            Daerah Istimewa Yogyakarta 55581</p>
                        <p class="text-[14px] font-medium mt-1">HO Jakarta :</p>
                        <p class="text-[14px]">Jl. Mampang Prpt. Raya No.73A, RT.10/RW.2, Tegal Parang, Mampang
                            Prapatan, South Jakarta City, Jakarta 12790</p>
                    </div>
                </div>
            </div>
            <div class="flex w-full h-0.5 bg-slate-950 mt-3"></div>
            <div class="flex w-full">
                <div class="w-1/2 flex gap-2">
                    <a href="">
                        <span class="icon-[ph--instagram-logo] sm:text-xl"></span>
                    </a>
                    <a href="">
                        <span class="icon-[mdi--linkedin] sm:text-xl"></span>
                    </a>
                    <a href="">
                        <span class="icon-[mdi--download] sm:text-xl"></span>
                    </a>
                </div>
                <div class="w-1/2 flex justify-end">
                    <p class="whitespace-nowrap text-[8px] sm:text-sm">© 2024 Saestu Creative. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            dots: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: true
                }
            }
        })
    </script>
</body>

</html>