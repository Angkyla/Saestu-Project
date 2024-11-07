<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">
    {{-- <link href="./src/style.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
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

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
                /* Menggerakkan setengah lebar kontainer */
            }
        }

        .scroller {
            max-width: 100%;
        }

        .scroller__inner {
            padding-block: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 5rem;
            max-height: 90px;
        }

        .scroller[data-animated="true"] {
            overflow: hidden;
        }

        .scroller[data-animated="true"] .scroller__inner {
            width: max-content;
            flex-wrap: nowrap;
            animation: scroll var(--_animation-duration, 60s) var(--_animation-direction, forwards) linear infinite;
        }

        .scroller[data-direction="right"] {
            --_animation-direction: reverse;
        }

        .scroller[data-direction="left"] {
            --_animation-direction: forwards;
        }

        .scroller[data-speed="fast"] {
            --_animation-duration: 20s;
        }

        .scroller[data-speed="slow"] {
            --_animation-duration: 100s;
        }

        @keyframes scroll {
            to {
                transform: translate(calc(-100% - 1rem));
            }
        }

        /* general styles */

        :root {
            --clr-neutral-100: hsl(0, 0%, 100%);
            --clr-primary-100: hsl(205, 15%, 58%);
            --clr-primary-400: hsl(215, 25%, 27%);
            --clr-primary-800: hsl(217, 33%, 17%);
            --clr-primary-900: hsl(218, 33%, 9%);
        }

        .tag-list {
            margin: 0;
            padding-inline: 0;
            list-style: none;
        }

        .tag-list li {
            background: bg-blue-900;
        }

        .marquee {
            display: flex;
            justify-content: center;
            align-items: center;
            block-size: var(--marquee-item-height);
            position: relative;
            overflow-x: hidden;
        }

        .marquee--8 {
            --marquee-item-width: 100px;
            --marquee-item-height: 100px;
            --marquee-duration: 36s;
            --marquee-items: 8;
        }

        .marquee--3 {
            --marquee-item-width: 150px;
            --marquee-item-height: 150px;
            --marquee-duration: 24s;
            --marquee-items: 3;
        }

        .marquee--6 {
            --marquee-item-width: 166px;
            --marquee-item-height: 100px;
            --marquee-duration: 32s;
            --marquee-items: 6;
        }

        .marquee__item {
            --marquee-item-offset: max(calc(var(--marquee-item-width) * var(--marquee-items)),
                    calc(100% + var(--marquee-item-width)));
            --marquee-delay: calc(var(--marquee-duration) / var(--marquee-items) * (var(--marquee-items) - var(--marquee-item-index)) * -1);
            position: absolute;
            inset-inline-start: var(--marquee-item-offset);
            transform: translateX(-50%);
            animation: go linear var(--marquee-duration) var(--marquee-delay, 0s) infinite;
        }

        .marquee__item:nth-child(4n) {
            border-top-right-radius: 1rem;
        }

        .marquee__item:nth-child(4n + 1) {
            border-bottom-right-radius: 1rem;
        }

        .marquee__item:nth-child(4n + 2) {
            border-bottom-left-radius: 1rem;
        }

        .marquee__item:nth-child(4n + 3) {
            border-top-left-radius: 1rem;
        }

        .marquee--8 .marquee__item:nth-of-type(1) {
            --marquee-item-index: 1;
        }

        .marquee--8 .marquee__item:nth-of-type(2) {
            --marquee-item-index: 2;
        }

        .marquee--8 .marquee__item:nth-of-type(3) {
            --marquee-item-index: 3;
        }

        .marquee--8 .marquee__item:nth-of-type(4) {
            --marquee-item-index: 4;
        }

        .marquee--8 .marquee__item:nth-of-type(5) {
            --marquee-item-index: 5;
        }

        .marquee--8 .marquee__item:nth-of-type(6) {
            --marquee-item-index: 6;
        }

        .marquee--8 .marquee__item:nth-of-type(7) {
            --marquee-item-index: 7;
        }

        .marquee--8 .marquee__item:nth-of-type(8) {
            --marquee-item-index: 8;
        }

        .marquee--3 .marquee__item:nth-of-type(1) {
            --marquee-item-index: 1;
        }

        .marquee--3 .marquee__item:nth-of-type(2) {
            --marquee-item-index: 2;
        }

        .marquee--3 .marquee__item:nth-of-type(3) {
            --marquee-item-index: 3;
        }

        .marquee--6 .marquee__item:nth-of-type(1) {
            --marquee-item-index: 1;
        }

        .marquee--6 .marquee__item:nth-of-type(2) {
            --marquee-item-index: 2;
        }

        .marquee--6 .marquee__item:nth-of-type(3) {
            --marquee-item-index: 3;
        }

        .marquee--6 .marquee__item:nth-of-type(4) {
            --marquee-item-index: 4;
        }

        .marquee--6 .marquee__item:nth-of-type(5) {
            --marquee-item-index: 5;
        }

        .marquee--6 .marquee__item:nth-of-type(6) {
            --marquee-item-index: 6;
        }

        @keyframes go {
            to {
                inset-inline-start: calc(var(--marquee-item-width) * -1);
            }
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
                            <p class="text-orange-500 transition-all">Home</p>
                            <div class="w-full h-[2px] mt-1 bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                    <a href="/about-us" class="group">
                        <div class="flex flex-col">
                            <p class="group-hover:text-orange-500 transition-all">About Us</p>
                            <div class="w-full h-[2px] mt-1 bg-transparent group-hover:bg-orange-500 transition-all">
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
        <div class="flex flex-col min-w-full px-4 sm:px-16 pt-4 mt-20 bg-slate-950" sm: 1data-aos="fade-up">
            <div
                class="flex flex-col w-full h-[300px] sm:h-[600px] rounded-2xl bg-no-repeat bg-cover p-8 justify-center relative overflow-hidden">
                <video autoplay loop muted playsinline class="z-0 absolute inset-0 w-full h-full object-cover rounded-2xl">
                    <source src="img/vdcamera.mp4" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>                
                <div class="relative z-10">
                    <p class="text-white text-[24px] sm:text-[60px] sm:leading-[72px] font-semibold">Ultimate Gateway
                        to<br>Every Possibility</p>
                    <p class="text-[10px] sm:text-lg text-white mt-2 sm:mt-8">Saestu – is a creative company based in
                        <br>
                        Yogyakarta, Indonesia
                    </p>
                    <a href="" class="text-[10px] sm:text-lg text-white mt-4 sm:mt-10"><span class="underline">Learn
                            More</span> ↓</a>
                </div>
            </div>
            <div class="flex w-full my-4 sm:my-16 text-white" data-aos="fade-up">
                <div class="w-1/4 text-center">
                    <p class="text-[24px] sm:text-[72px] font-semibold counter-count" data-target="100">0 </p>
                    <p class="text-[8px] sm:text-base">Completed Campaign</p>
                </div>
                <div class="w-1/4 text-center">
                    <p class="text-[24px] sm:text-[72px] font-semibold counter-count" data-target="100">0</p>
                    <p class="text-[8px] sm:text-base">Total Client Partnered with</p>
                </div>
                <div class="w-1/4 text-center">
                    <p class="text-[24px] sm:text-[72px] font-semibold counter-count" data-target="8">0</p>
                    <p class="text-[8px] sm:text-base">Years of Expertise</p>
                </div>
                <div class="w-1/4 text-center">
                    <p class="text-[24px] sm:text-[72px] font-semibold counter-count" data-target="20">0</p>
                    <p class="text-[8px] sm:text-base">Our Expert Team</p>
                </div>
            </div>

        </div>

        <div class="flex flex-wrap sm:flex-col min-w-full p-4 sm:p-16 bg-white gap-y-2 sm:gap-y-6 sm:relative"
            data-aos="fade-up">
            <div class="w-full sm:w-7/12 flex items-center gap-0.5 justify-center">
                <p class="text-neutral-500 text-xs whitespace-nowrap">Why choose us?</p>
                <div class="w-40 sm:w-full bg-neutral-500 h-0.5"></div>
            </div>
            <div class="w-full sm:w-7/12 flex justify-center sm:justify-start">
                <p class="text-lg sm:text-[44px] sm:leading-[52px] font-semibold ">We create campaigns and opportunities
                    for impactful growth</p>
            </div>
            <div class="w-full sm:w-7/12 flex justify-center">
                <p class="text-xs sm:text-lg text-neutral-600 text-center sm:text-left">At Saestu, we see possibilities
                    as a chance to advance in the industry, and use creativity as our main tool. We are eager to
                    implement all forms of creative ideas and bring them to life.
                </p>
            </div>
            <div class="w-4/6 sm:w-7/12 flex flex-col gap-6 sm:gap-12">
                <p class="text-xs sm:text-lg text-neutral-600">In this era of choices, we bring integrated services to
                    provide one stop solutions for our clients, elevating brand value through innovation and
                    collaboration.
                </p>
                <a href="./about-us.html" class="text-xs sm:text-lg text-neutral-900 "><span class="underline">About
                        Us</span> ↓</a>
            </div>
            <div class="w-2/6 sm:w-5/12 sm:absolute right-16 flex justify-end">
                <div style="background-image: url(img/par.png);"
                    class="w-3/4 h-32 sm:h-[500px] bg-cover bg-center bg-no-repeat rounded-2xl"></div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row flex-wrap justify-between bg-slate-950 min-w-full p-4 sm:p-16 mt-20"
            data-aos="fade-up">
            <div class="w-full flex items-center gap-2 justify-center">
                <p class="text-neutral-400 text-xs sm:text-base whitespace-nowrap">OUR SERVICES</p>
                <div class="w-40 sm:w-full bg-neutral-400 h-0.5"></div>
            </div>
            <div class="w-full flex">
                <p class="text-neutral-400 font-semibold sm:text-[44px]">What we do?</p>
            </div>
            <div class="w-full sm:w-5/12 flex flex-col py-4 gap-4">
                <p class="text-white text-3xl sm:text-[36px] font-medium">Brand Development</p>
                <div class="flex w-full justify-between">
                    <ul class="text-[14px] text-white">
                        <li>Brand Strategy</li>
                        <li>Brand Identity</li>
                        <li>Brand Collaterals</li>
                        <li>Brand Guideline</li>
                        <li>Brand Naming</li>
                        <li>Print & Packaging</li>
                    </ul>
                    <img src="img/Shape 1.svg" class="w-24 sm:w-32" alt="">
                </div>
                <div class="w-full h-0.5 bg-white mt-4"></div>
            </div>
            <div class="w-full sm:w-5/12 flex flex-col py-4 gap-4">
                <p class="text-white text-3xl sm:text-[36px]  font-medium">MICE</p>
                <div class="flex w-full justify-between">
                    <ul class="text-[14px] text-white">
                        <li>Meeting</li>
                        <li>Seminar</li>
                        <li>Workshop</li>
                        <li>Gathering</li>
                        <li>Gala Dinner</li>
                        <li>Exhibition</li>
                    </ul>
                    <img src="img/Shape 4.svg" class="w-24 sm:w-32" alt="">
                </div>
                <div class="w-full h-0.5 bg-white mt-4"></div>
            </div>
            <div class="w-full sm:w-5/12 flex flex-col py-4 gap-4">
                <p class="text-white text-3xl sm:text-[36px] font-medium">Digital Marketing & Development</p>
                <div class="flex w-full justify-between">
                    <ul class="text-[14px] text-white">
                        <li>SEO & SEM</li>
                        <li>Social Media Management</li>
                        <li>Influencer/KOL Management</li>
                        <li>Social Media Ads</li>
                        <li>Digital Campaign</li>
                        <li>Content Creation/Production</li>
                        <li>Content Creation/Production</li>
                    </ul>
                    <img src="img/Shape 2.svg" class="w-24 sm:w-32" alt="">
                </div>
                <div class="w-full h-0.5 bg-white mt-4"></div>
            </div>
            <div class="w-full sm:w-5/12 flex flex-col py-4 gap-4">
                <p class="text-white text-3xl sm:text-[36px] font-medium">Communication & Marketing Strategy</p>
                <div class="flex w-full justify-between">
                    <ul class="text-[14px] text-white">
                        <li>Brand Activation</li>
                        <li>Strategic Planning</li>
                        <li>Live Streaming / Broadcasting</li>
                        <li>TV Ads, Print, Radio</li>
                        <li>Marketing Campaign</li>
                        <li>Strategic Copywriting</li>
                        <li>Online / Offline / Hybrid Event</li>
                        <li>Media Planning / Buying</li>
                    </ul>
                    <img src="img/Shape 3.svg" class="w-24 sm:w-32" alt="">
                </div>
                <div class="w-full h-0.5 bg-white mt-4 hidden sm:block"></div>
            </div>
        </div>

        <div class="scroller items-center w-full" data-speed="slow" data-aos="fade-up">
            <ul class="tag-list scroller__inner bg-blue-900 p-0 h-10">
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
                <li class="flex items-center">
                    <span class="icon-[ph--eye-fill] text-2xl text-neutral-200"></span>
                    <p class="ml-2 text-[14px] text-neutral-200 font-medium whitespace-nowrap">YOU’RE IN GOOD COMPANY
                    </p>
                </li>
            </ul>
        </div>

        <div class="flex flex-col bg-white min-w-full p-4 sm:p-16 gap-4" data-aos="fade-up">
            <div class="w-full flex items-center gap-2 justify-center">
                <p class="text-neutral-400 text-xs sm:text-base whitespace-nowrap">OUR WORK</p>
                <div class="w-40 sm:w-full bg-neutral-400 h-0.5"></div>
            </div>
            <div class="w-full flex flex-col sm:flex-row gap-4">
                <div class="flex flex-col w-full sm:w-1/2 gap-4">
                    <p class="text-lg text-center sm:text-start sm:text-6xl font-semibold ">Let's see how we bring ideas
                        to life</p>
                    <p class="text-neutral-600 text-sm sm:text-base">
                        Fueled by boundless creativity, we transform ideas into strategic campaigns through media
                        management and impactful brand activation. Turning visions into remarkable realities that leave
                        rooting impressions.
                    </p>
                    <a href="./project.html" class="text-xs sm:text-lg text-neutral-900 "><span class="underline">More
                            Project</span> ↓</a>
                </div>
                <div style="background-image: url(img/KIWI.jpg);"
                    class="w-full sm:w-1/2 flex flex-col h-72 sm:h-96 bg-no-repeat bg-cover bg-center rounded-2xl  p-4 justify-between">
                    <div class="flex w-full justify-between items-center">
                        <p class="text-white text-sm font-medium">Brand Activation</p>
                        <a href="https://www.instagram.com/reel/DBTRM8uPgEQ/?igsh=ZjFyd2prY21qdzQ=" target="_blank">
                            <span class="icon-[ph--arrow-circle-up-right] text-white text-3xl"></span>
                        </a>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-white font-medium">Laether Shoes REST AREA</p>
                        <p class="text-white text-sm font-medium">KIWI</p>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col sm:flex-row-reverse gap-4">
                <div style="background-image: url(img/DIQ01855.jpeg);"
                    class="w-full flex flex-col h-72 sm:h-96 bg-no-repeat bg-cover bg-center rounded-2xl  p-4 justify-between">
                    <div class="flex w-full justify-between items-center">
                        <p class="text-white text-sm font-medium">MICE
                        </p><a href="https://www.instagram.com/reel/DBas4GMvTE0/?igsh=Y2JyY3NnZWo1YTdj" target="_blank">
                            <span class="icon-[ph--arrow-circle-up-right] text-white text-3xl"></span>
                        </a>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-white font-medium">Back to The Soul
                        </p>
                        <p class="text-white text-sm font-medium">Jogja Bike Rendezvous 2024
                        </p>
                    </div>
                </div>
                <div class="w-full flex gap-4">
                    <div style="background-image: url(img/DSC03851.jpeg);"
                        class="w-1/2 flex flex-col h-72 sm:h-96 bg-no-repeat bg-cover bg-center rounded-2xl  p-4 justify-between">
                        <div class="flex w-full justify-between items-center">
                            <p class="text-white text-sm font-medium">MICE</p>
                            <a href="https://www.instagram.com/p/DBdjSbfvqpS/?igsh=ZjZ6a2YwdXE0a3Jk " target="_blank">
                                <span class="icon-[ph--arrow-circle-up-right] text-white text-3xl"></span>
                            </a>
                        </div>
                        <div class="flex flex-col w-full">
                            <p class="text-white font-medium">Makanan Bergizi Gratis
                            </p>
                            <p class="text-white text-sm font-medium">Grab
                            </p>
                        </div>
                    </div>
                    <div style="background-image: url(img/toWEBSITE-5.jpg);"
                        class="w-1/2 flex flex-col h-72 sm:h-96 bg-no-repeat bg-cover bg-center rounded-2xl  p-4 justify-between">
                        <div class="flex w-full justify-between items-center">
                            <p class="text-white text-sm font-medium">MICE</p>
                            <a href="https://www.instagram.com/reel/DBTRM8uPgEQ/?igsh=ZjFyd2prY21qdzQ=" target="_blank">
                                <span class="icon-[ph--arrow-circle-up-right] text-white text-3xl"></span>
                            </a>
                        </div>
                        <div class="flex flex-col w-full">
                            <p class="text-white font-medium">MUSIKARIA
                            </p>
                            <p class="text-white text-sm font-medium">Gudang Garam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="marquee marquee--8 mb-5" data-aos="fade-up">
            <img class="marquee__item" src="./img/Adhi_Karya 1.png" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/Client Logo.svg" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/gameloft_logo 2.png" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/intrafood-300x89 1.png" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/Nabati_brand_logo 1.png" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/vit 1.png" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/pngegg 1.png" width="100" height="auto" alt="">
            <img class="marquee__item" src="./img/Djp Default.png" width="50" height="auto" alt="">
        </div>

        <div class="flex flex-col sm:flex-row w-full h-fit bg-no-repeat bg-cover p-8 justify-center items-center relative overflow-hidden"
            data-aos="fade-up">
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="img/vdform.mp4" type="video/mp4">
                Browser Anda tidak mendukung video.
            </video>

            <div class="relative z-10 flex flex-col sm:flex-row w-full h-full items-center justify-center p-8">
                <div class="sm:w-1/2 w-full items-center">
                    <p class="text-[24px] sm:text-[32px] lg:text-[44px] text-white text-center font-bold">
                        Join us in bringing your brand's story to life with precision and passion.
                    </p>
                    <div class="flex items-center gap-1 pt-4">
                        <a href="#"
                            class="inline-block w-fit text-[12px] sm:text-lg text-black text-center bg-white border px-2 py-1 mx-auto">
                            <p class="flex items-center">
                                Contact Us
                                <span class="iconify text-xl text-black ml-1" data-icon="ic:round-arrow-outward"></span>
                            </p>
                        </a>
                    </div>
                </div>

                <div class="flex w-full sm:flex-col sm:w-1/2 justify-between py-8">
                    <form action="/submit-form" method="POST" class="w-full max-w-lg p-4 text-white rounded-lg ">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <input type="text" id="nama" name="nama" placeholder="Nama"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
                                    required>
                            </div>
                            <div>
                                <input type="tel" id="kontak-wa" name="kontak-wa" placeholder="Kontak WA"
                                    pattern="[0-9]{10,15}"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
                                    required>
                            </div>
                            <div>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
                                    required>
                            </div>
                            <div>
                                <input type="text" id="perusahaan" name="perusahaan" placeholder="Perusahaan"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                            </div>
                            <div class="col-span-1 md:col-span-2">
                                <select id="kebutuhan-layanan" name="kebutuhan-layanan"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
                                    required>
                                    <option value="">--Pilih Layanan--</option>
                                    <option value="Brand Development">Brand Development</option>
                                    <option value="Digital Marketing & Development">Digital Marketing & Development
                                    </option>
                                    <option value="Communication & Marketing Strategy">Communication & Marketing
                                        Strategy
                                    </option>
                                    <option value="MICE">MICE</option>
                                </select>
                            </div>

                            <!-- Opsi tambahan untuk Brand Development -->
                            <div class="col-span-1 md:col-span-2" id="brand-options" style="display: none;">
                                <select id="brand-options-select" name="brand-options"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    <option value="">--Pilih Opsi--</option>
                                    <option value="Brand Srategy">Brand Srategy</option>
                                    <option value="Brand Identity">Brand Identity</option>
                                    <option value="Brand Collaterals">Brand Collaterals</option>
                                    <option value="Brand Guideline">Brand Guideline</option>
                                    <option value="Brand Naming">Brand Naming</option>
                                    <option value="Print & Packaging">Print & Packaging</option>
                                </select>
                            </div>

                            <!-- Opsi tambahan untuk Digital Marketing & Development -->
                            <div class="col-span-1 md:col-span-2" id="digital-options" style="display: none;">
                                <select id="digital-options-select" name="digital-options"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    <option value="">--Pilih Opsi--</option>
                                    <option value="SEO & SEM">SEO & SEM</option>
                                    <option value="Sosial Media">Sosial Media</option>
                                    <option value="Management">Management</option>
                                    <option value="Influencer/KOL">Influencer / KOL</option>
                                    <option value="Social Media Ads">Social Media Ads</option>
                                    <option value="Digital Campaign">Digital Campaign</option>
                                    <option value="Content">Content</option>
                                    <option value="Creation/Production">Creation/Production</option>
                                </select>
                            </div>

                            <!-- Opsi tambahan untuk Communication & Marketing Strategy -->
                            <div class="col-span-1 md:col-span-2" id="marketing-options" style="display: none;">
                                <select id="marketing-options-select" name="marketing-options"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    <option value="">--Pilih Opsi--</option>
                                    <option value="Brand Activation">Brand Activation</option>
                                    <option value="Statagic Planning">Statagic Planning</option>
                                    <option value="Live Streaming/Broadcastig">Live Streaming / Broadcastig</option>
                                    <option value="TV Ads, Print, Radio">TV Ads, Print, Radio</option>
                                    <option value="Marketing Campaign">Marketing Campaign</option>
                                    <option value="Strategic Copywriting">Strategic Copywriting</option>
                                    <option value="Online / Offine / Hybrid Event">Online / Offine / Hybrid Event</option>
                                    <option value="Planning">Planning</option>
                                </select>
                            </div>

                            <!-- Opsi tambahan untuk MICE -->
                            <div class="col-span-1 md:col-span-2" id="mice-options" style="display: none;">
                                <select id="mice-options-select" name="mice-options"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    <option value="">--Pilih Opsi--</option>
                                    <option value="Meeting">Meeting</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Gathering">Gathering</option>
                                    <option value="Gala Dinner">Gala Dinner</option>
                                    <option value="Exhibition">Exhibition</option>
                                </select>
                            </div>

                            <div class="col-span-1 md:col-span-2">
                                <textarea id="note" name="note" rows="4" placeholder="Tambahkan catatan jika diperlukan"
                                    class="w-full p-2 text-white bg-slate-950 border-white rounded focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                            </div>
                            <div class="col-span-1 md:col-span-2">
                                <button type="submit"
                                    class="w-full p-2 font-semibold text-black bg-white rounded hover:bg-orange-500">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex min-w-full h-8 bg-blue-800 sm:hidden"></div>

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
                        <li><a href="/index" class="text-[14px]">Home</a></li>
                        <li><a href="/about-us" class="text-[14px]">About Us</a></li>
                        <li><a href="/project" class="text-[14px]">Project</a></li>
                        <li><a href="/services" class="text-[14px]">Service</a></li>
                        <li><a href="/lets-talk" class="text-[14px]">Let's Talk</a></li>
                    </ul>
                </div>
                <div class="w-1/3">
                    <p class="text-[14px] font-medium text-blue-700 mb-1">Contact</p>
                    <ul>
                        <li><a href="" class="text-[14px]">+62 81390390302</a></li>
                        <li><a href="" class="text-[14px]">+62 82241894119</a></li>
                        <li><a href="" class="text-[12px]">halosaestu@gmail.com</a></li>
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
                        <p class="text-[14px] font-medium mt-1">RO Jakarta :</p>
                        <p class="text-[14px]">Jl. Mampang Prpt. Raya No.73A, RT.10/RW.2, Tegal Parang, Mampang
                            Prapatan, South Jakarta City, Jakarta 12790</p>
                    </div>
                </div>
            </div>
            <div class="flex w-full h-0.5 bg-slate-950 mt-3"></div>
            <div class="flex w-full">
                <div class="w-1/2 flex gap-2">
                    <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>

        const counters = document.querySelectorAll('.counter-count');

        const observerOptions = {};

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {

                    const target = entry.target;
                    const targetNumber = target.getAttribute('data-target');
                    animateCounter(target, targetNumber);
                    observer.unobserve(target);
                }
            });
        }, observerOptions);

        function animateCounter(element, target) {
            const duration = 2000;
            const start = 0;
            const end = parseInt(target);
            const increment = (end - start) / (duration / 50);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= end) {
                    current = end;
                    clearInterval(timer);
                }


                if (end === 100 || end === 20) {
                    element.textContent = Math.floor(current) + '+';
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 50);
        }

        counters.forEach(counter => {
            observer.observe(counter);
        });


    </script>
    <script>
        const scrollers = document.querySelectorAll(".scroller");

        // If a user hasn't opted in for recuded motion, then we add the animation
        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                // add data-animated="true" to every `.scroller` on the page
                scroller.setAttribute("data-animated", true);

                // Make an array from the elements within `.scroller-inner`
                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                // For each item in the array, clone it
                // add aria-hidden to it
                // add it into the `.scroller-inner`
                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }
    </script>

    <script>
        // Ambil elemen dropdown utama dan opsi tambahan
        const layananSelect = document.getElementById("kebutuhan-layanan");
        const brandOptions = document.getElementById("brand-options");
        const digitalOptions = document.getElementById("digital-options");
        const marketingOptions = document.getElementById("marketing-options");
        const miceOptions = document.getElementById("mice-options");

        // Fungsi untuk menyembunyikan semua opsi tambahan
        function hideAllOptions() {
            brandOptions.style.display = "none";
            digitalOptions.style.display = "none";
            marketingOptions.style.display = "none";
            miceOptions.style.display = "none";
        }

        // Event listener untuk dropdown utama
        layananSelect.addEventListener("change", function () {
            // Sembunyikan semua opsi tambahan
            hideAllOptions();

            // Tampilkan opsi tambahan berdasarkan pilihan
            switch (layananSelect.value) {
                case "Brand Development":
                    brandOptions.style.display = "block";
                    break;
                case "Digital Marketing & Development":
                    digitalOptions.style.display = "block";
                    break;
                case "Communication & Marketing Strategy":
                    marketingOptions.style.display = "block";
                    break;
                case "MICE":
                    miceOptions.style.display = "block";
                    break;
            }
        });

        // Sembunyikan semua opsi tambahan pada saat halaman dimuat
        hideAllOptions();
    </script>


    <style>
        .animate-marquee {
            display: flex;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

</html>