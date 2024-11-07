<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
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
                            <p class="text-orange-500 transition-all">Service</p>
                            <div class="w-full h-[2px] mt-1 bg-orange-500 transition-all">
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
        <div class="flex mt-20 flex-col sm:flex-row flex-wrap justify-between bg-slate-950 min-w-full p-4 sm:p-16"
            data-aos="fade-up">
            <div class="w-full flex  justify-center">
                <p class="text-white sm:text-[44px] font-bold text-3xl py-4">Services</p>
            </div>
            <div class="w-full sm:w-4/12 flex flex-col py-2 gap-4">
                <p class="text-white font-bold text-xl sm:text-[32px] text-center sm:text-left">As our tagline says, we
                    stand to be the ultimate gateway to every possibility.</p>
            </div>

            <div class="w-full sm:w-5/12 flex flex-col py-2 gap-4">
                <p class="text-xs sm:text-lg text-white text-center sm:text-left">Our versatility offers simplicity. We
                    provide integrated services that serve as a one-stop solution. Through innovative approach and
                    strategic collaboration, we expand brand significance and unlock limitless possibilities for our
                    clients.
                </p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row flex-wrap justify-items-center bg-slate-950 min-w-full p-4 sm:p-16"
            data-aos="fade-up">
            <div class="w-full flex items-center gap-2 justify-center">
                <p class="text-neutral-400 text-xs sm:text-base whitespace-nowrap">OUR SERVICES</p>
                <div class="w-40 sm:w-full bg-neutral-400 h-0.5"></div>
            </div>
            <div class="w-full flex">
                <p class="text-neutral-400 font-semibold sm:text-[44px]">What we do ?</p>
            </div>

            <div class="flex w-full items-start py-4"> <!-- Added py-4 for vertical padding -->
                <div class="flex-none w-14 h-14 sm:w-24 sm:h-24 mr-4 items-center">
                    <!-- Added margin-right for spacing -->
                    <img src="img/Shape 1.svg" class="w-24 sm:w-32 h-full object-cover" alt="">
                </div>
                <div class="grow h-fit text-white">
                    <h1 class="font-bold text-sm sm:text-xl">Brand Development</h1> <!-- Adjusted font size -->
                    <p class="text-[10px] sm:text-base mt-1"> <!-- Adjusted text size and added margin-top -->
                        We grow brands by creating unique concepts. We shape our clients' development path. Guiding
                        messages to captivate audiences while also cultivating their exclusive identity, through and
                        through.

                    </p>
                </div>
                <div class="flex-none w-32 sm:w-52 h-auto ml-4"> <!-- Set width for alignment and added margin-left -->
                    <ul class="text-[8px] sm:text-[12px] text-white pb-4 sm:pb-2"> <!-- Added list styles -->
                        <li>Brand Strategy</li>
                        <li>Brand Identity</li>
                        <li>Brand Collaterals</li>
                        <li>Brand Guideline</li>
                        <li>Brand Naming</li>
                        <li>Print & Packaging</li>
                    </ul>
                </div>
            </div>
            <div class="w-full h-0.5 bg-white"></div>
            <div class="flex w-full items-start py-4"> <!-- Added py-4 for vertical padding -->
                <div class="flex-none w-14 h-14 sm:w-24 sm:h-24 mr-4 items-center">
                    <!-- Added margin-right for spacing -->
                    <img src="img/Shape 2.svg" class="w-24 sm:w-32 h-full object-cover" alt="">
                </div>
                <div class="grow h-fit text-white">
                    <h1 class="font-bold text-sm sm:text-xl">Digital Marketing & Development</h1>
                    <!-- Adjusted font size -->
                    <p class="text-[10px] sm:text-base mt-1"> <!-- Adjusted text size and added margin-top -->
                        We handle all aspects of our clients' digital marketing needs, from start to finish. This
                        includes creating content and designing how to effectively reach their target audience.

                    </p>
                </div>
                <div class="flex-none w-32 sm:w-52 h-auto ml-4"> <!-- Set width for alignment and added margin-left -->
                    <ul class="text-[8px] sm:text-[12px] text-white pb-8 sm:pb-3">
                        <li>SEO & SEM</li>
                        <li>Social Media Management</li>
                        <li>Influencer/KOL Management</li>
                        <li>Social Media Ads</li>
                        <li>Digital Campaign</li>
                        <li>Content Creation/Production</li>
                    </ul>
                </div>
            </div>
            <div class="w-full h-0.5 bg-white"></div>
            <div class="flex w-full items-start py-4"> <!-- Added py-4 for vertical padding -->
                <div class="flex-none w-14 h-14 sm:w-24 sm:h-24 mr-4 items-center">
                    <!-- Added margin-right for spacing -->
                    <img src="img/Shape 3.svg" class="w-24 sm:w-32 h-full object-cover" alt="">
                </div>
                <div class="grow h-fit text-white">
                    <h1 class="font-bold text-sm sm:text-xl">Communication & Marketing Strategy</h1>
                    <!-- Adjusted font size -->
                    <p class="text-[10px] sm:text-base mt-1"> <!-- Adjusted text size and added margin-top -->
                        We deliver professional services that bind your communications needs. From brand activation to
                        multimedia advertising, we spread your brand's potential across various platforms to uplift
                        quality and engagement.
                    </p>
                </div>
                <div class="flex-none w-32 sm:w-52 h-auto ml-4"> <!-- Set width for alignment and added margin-left -->
                    <ul class="text-[8px] sm:text-[12px] text-white"> <!-- Added list styles -->
                        <li>Brand Activation</li>
                        <li>Strategic Planning</li>
                        <li>Live Streaming / Broadcasting</li>
                        <li>TV Ads, Print, Radio</li>
                        <li>Marketing Campaign</li>
                        <li>Strategic Copywriting</li>
                        <li>Online / Offline / Hybrid Event</li>
                        <li>Planning</li>
                    </ul>
                </div>
            </div>
            <div class="w-full h-0.5 bg-white"></div>
            <div class="flex w-full items-start py-4"> <!-- Added py-4 for vertical padding -->
                <div class="flex-none w-14 h-14 sm:w-24 sm:h-24 mr-4 items-center">
                    <!-- Added margin-right for spacing -->
                    <img src="img/Shape 4.svg" class="w-24 sm:w-32 h-full object-cover" alt="">
                </div>
                <div class="grow h-fit text-white">
                    <h1 class="font-bold text-sm sm:text-xl">MICE</h1> <!-- Adjusted font size -->
                    <p class="text-[10px] sm:text-base mt-1"> <!-- Adjusted text size and added margin-top -->
                        Struggling to arrange business events? Let us handle it! At Saestu, we determined to organize
                        remarkable occasions. Emphasize your brand's presence by creating a professional experience with
                        us.
                    </p>
                </div>
                <div class="flex-none w-32 sm:w-52 h-auto ml-4"> <!-- Set width for alignment and added margin-left -->
                    <ul class="text-[8px] sm:text-[12px] text-white pb-6 sm:pb-0"> <!-- Added list styles -->
                        <li>Meeting</li>
                        <li>Seminar</li>
                        <li>Workshop</li>
                        <li>Gathering</li>
                        <li>Gala Dinner</li>
                        <li>Exhibition</li>
                    </ul>
                </div>
            </div>


        </div>

        <div style="background-image: url(img/anbwh.gif);"
            class="flex flex-col w-full h-[300px] sm:h-[600px] bg-no-repeat bg-cover p-8 justify-center items-center"
            data-aos="fade-up">
            <p class="text-[24px] sm:text-[44px] text-white mt-2 sm:mt-8 text-center font-bold">Join us in bringing
                your brand's story to life with precision and passion.</p>
            <a href="#"
                class="inline-block w-fit text-[12px] sm:text-lg text-black text-center bg-white border px-2 py-1">
                <p class="flex items-center gap-1">
                    Contact Us
                    <span class="iconify text-xl text-black" data-icon="ic:round-arrow-outward"></span>
                </p>
            </a>
        </div>

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
                    <p class="text-[14px] font-medium mt-1">RO Jakarta :</p>
                    <p class="text-[14px]">Jl. Mampang Prpt. Raya No.73A, RT.10/RW.2, Tegal Parang, Mampang Prapatan,
                        South Jakarta City, Jakarta 12790</p>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
