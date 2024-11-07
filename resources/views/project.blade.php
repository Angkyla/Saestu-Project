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


        .carousel {
            display: flex;
            overflow: hidden;
            width: 100%;
        }

        .carousel-item {
            min-width: 100%;
            transition: transform 0.5s ease;
            display: none;
        }

        .carousel-item.active {
            display: block;
        }

        .carousel-controls button.active {
            color: #1d4ed8;
            /* Warna biru untuk tombol aktif */
            border-bottom: 2px solid #1d4ed8;
        }

        .carousel-controls button {
            padding: 0.5rem 1rem;
            cursor: pointer;
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
                            <p class="text-orange-500 transition-all">Project</p>
                            <div class="w-full h-[2px] mt-1 bg-orange-500 transition-all">
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
        <div class="flex mt-20 flex-col sm:flex-row flex-wrap justify-between bg-slate-950 min-w-full p-4 sm:p-16 sm:pb-56"
            data-aos="fade-up">
            <div class="w-full flex  justify-center">
                <p class="text-white sm:text-[44px] font-bold text-3xl py-4 mb-10">Our Work</p>
            </div>
            <div class="w-full sm:w-4/12 flex flex-col py-2 gap-4">
                <p class="text-white font-bold text-xl sm:text-[32px] text-center sm:text-left">“Let’s see how we bring
                    ideas to
                    life</p>
            </div>

            <div class="w-full sm:w-5/12 flex flex-col py-2 gap-4">
                <p class="text-xs sm:text-lg text-white text-center sm:text-left">With over 8 years of intense work in
                    the industry, we have accomplished exceptional results for hundreds of clients through the
                    completion of many impactful campaigns. Are we satisfied? Yes. But are we fulfilled? No. There is so
                    much more we want to prove.
                </p>
            </div>
        </div>

        <div class="carousel-container m-4 p-4 justify-center h-fit" data-aos="fade-up">
            <!-- Carousel Controls (Category Tabs) -->
            <div class="carousel-controls w-full flex flex-wrap justify-center gap-4 mb-4 text-[12px] sm:text-[16px]">
                <button onclick="showSlide(0)" class="carousel-label text-black font-semibold">All Categories</button>
                <button onclick="showSlide(1)" class="carousel-label text-black font-semibold">Brand Activation</button>
                <button onclick="showSlide(2)" class="carousel-label text-black font-semibold">Mice</button>
                <button onclick="showSlide(3)" class="carousel-label text-black font-semibold">Booth Production</button>
                <button onclick="showSlide(4)" class="carousel-label text-black font-semibold">Kol Management</button>
                <button onclick="showSlide(5)" class="carousel-label text-black font-semibold">Gatering</button>
            </div>

            <!-- Carousel Slides -->
            <div class="carousel p-5">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/KIWI.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Brand Activation</p>
                                <a href="https://www.instagram.com/reel/DBTRM8uPgEQ/?igshid=ZjFyd2prY21qdzQ="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Laether Shoes REST AREA</p>
                                <p class="text-sm font-medium">KIWI</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/ba-grab.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Brand Activation</p>
                                <a href="https://www.instagram.com/reel/DBGJ6gIPU60/?igsh=MTFvM3Vic2pzaXVkbw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Dine-in Out Deals</p>
                                <p class="text-sm font-medium">Grab</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/baxl.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Brand Activation</p>
                                <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">We Help You Grow</p>
                                <p class="text-sm font-medium">XL Axiata</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/DIQ01855.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/DBas4GMvTE0/?igsh=Y2JyY3NnZWo1YTdj"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Back To The Soul</p>
                                <p class="text-sm font-medium">Jogja Bike Redezvous 2024</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/DSC03851.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/p/DBdjSbfvqpS/?igsh=ZjZ6a2YwdXE0a3Jk"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Makanan Bergizi Gratis</p>
                                <p class="text-sm font-medium">Grab</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/gdmusikaria.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/DA8Kytrvxfm/?igsh=MWw5ZmgydGl0NzhuOA=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">MUSIKARIA</p>
                                <p class="text-sm font-medium">Gudang Garam</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/DSC03056.png');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/C8wL3VqPPdN/?igsh=MWRiejBxaHQxaWJzMw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">PT. Adhi Karya (Persero) Tbk.</p>
                                <p class="text-sm font-medium">JOGLOOES</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/gdmerah.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/DA5bdnivuzW/?igsh=bmZ2amVjMGxxcW52"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Nyalakan Merahmu</p>
                                <p class="text-sm font-medium">Gudang Garam Merah</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/baygon.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Booth Production</p>
                                <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Home Care Fair</p>
                                <p class="text-sm font-medium">Baygon</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/kolgrab.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">KOL Management</p>
                                <a href="https://www.instagram.com/p/DBQlJUJPL_i/?igsh=Mjloczh3c3U4b3Z4"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Bigbag At Mall</p>
                                <p class="text-sm font-medium">Grab</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/gudanggaram.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Gathering</p>
                                <a href="https://www.instagram.com/reel/DBIzIxcvidG/?igsh=MXIyYTYzcG95Z3Rxdg=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Gemerlap Kebersamaan</p>
                                <p class="text-sm font-medium">Gudang Garam</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/xlaxiata.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Gathering</p>
                                <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Dealer Kick Off Q2</p>
                                <p class="text-sm font-medium">XL Axiata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/KIWI.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Brand Activation</p>
                                <a href="https://www.instagram.com/reel/DBTRM8uPgEQ/?igshid=ZjFyd2prY21qdzQ="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Laether Shoes REST AREA</p>
                                <p class="text-sm font-medium">KIWI</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/ba-grab.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Brand Activation</p>
                                <a href="https://www.instagram.com/reel/DBGJ6gIPU60/?igsh=MTFvM3Vic2pzaXVkbw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Dine-in Out Deals</p>
                                <p class="text-sm font-medium">Grab</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/baxl.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Brand Activation</p>
                                <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">We Help You Grow</p>
                                <p class="text-sm font-medium">XL Axiata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/DIQ01855.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/DBas4GMvTE0/?igsh=Y2JyY3NnZWo1YTdj"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Back To The Soul</p>
                                <p class="text-sm font-medium">Jogja Bike Redezvous 2024</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/DSC03851.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/p/DBdjSbfvqpS/?igsh=ZjZ6a2YwdXE0a3Jk"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Makanan Bergizi Gratis</p>
                                <p class="text-sm font-medium">Grab</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/gdmusikaria.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/DA8Kytrvxfm/?igsh=MWw5ZmgydGl0NzhuOA=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">MUSIKARIA</p>
                                <p class="text-sm font-medium">Gudang Garam</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/DSC03056.png');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/C8wL3VqPPdN/?igsh=MWRiejBxaHQxaWJzMw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">PT. Adhi Karya (Persero) Tbk.</p>
                                <p class="text-sm font-medium">JOGLOOES</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/gdmerah.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">MICE</p>
                                <a href="https://www.instagram.com/reel/DA5bdnivuzW/?igsh=bmZ2amVjMGxxcW52"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Nyalakan Merahmu</p>
                                <p class="text-sm font-medium">Gudang Garam Merah</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/baygon.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Booth Production</p>
                                <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Home Care Fair</p>
                                <p class="text-sm font-medium">Baygon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/kolgrab.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">KOL Management</p>
                                <a href="https://www.instagram.com/p/DBQlJUJPL_i/?igsh=Mjloczh3c3U4b3Z4"
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Bigbag At Mall</p>
                                <p class="text-sm font-medium">Grab</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-item">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/gudanggaram.jpg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Gathering</p>
                                <a href="https://www.instagram.com/reel/DBIzIxcvidG/?igsh=MXIyYTYzcG95Z3Rxdg=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Gemerlap Kebersamaan</p>
                                <p class="text-sm font-medium">Gudang Garam</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between h-72 sm:h-96 bg-cover bg-center rounded-2xl p-4 text-white shadow-lg transition-transform transform hover:scale-105"
                            style="background-image: url('img/xlaxiata.jpeg');">
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium">Gathering</p>
                                <a href="https://www.instagram.com/saestu.creative?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank">
                                    <span class="icon-[ph--arrow-circle-up-right] text-3xl"></span>
                                </a>
                            </div>
                            <div>
                                <p class="font-medium text-lg">Dealer Kick Off Q2</p>
                                <p class="text-sm font-medium">XL Axiata</p>
                            </div>
                        </div>
                    </div>
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
        <div class="flex flex-col sm:flex-row sm:flex-wrap gap-y-4 min-w-full p-4 sm:px-16 bg-neutral-200">
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".carousel-item");
        const labels = document.querySelectorAll(".carousel-label");

        function showSlide(index) {
            slides[currentSlide].classList.remove("active");
            labels[currentSlide].classList.remove("active");
            currentSlide = index;
            slides[currentSlide].classList.add("active");
            labels[currentSlide].classList.add("active");
        }

        // Tampilkan slide pertama saat halaman dimuat
        showSlide(currentSlide);
    </script>

</body>

</html>