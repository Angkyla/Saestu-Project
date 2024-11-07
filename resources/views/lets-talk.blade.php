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
                            <p class="group-hover:text-orange-500 transition-all">Service</p>
                            <div class="w-full h-[2px] mt-1 bg-transparent group-hover:bg-orange-500 transition-all">
                            </div>
                        </div>
                    </a>
                    <a href="/lets-talk" class="group">
                        <div class="flex flex-col">
                            <p class="text-orange-500 transition-all">Let's Talk</p>
                            <div class="w-full h-[2px] mt-1 bg-orange-500 transition-all">
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
        <div class="flex mt-20 flex-col sm:flex-row flex-wrap justify-between bg-slate-950 min-w-full p-4 sm:p-16"
            data-aos="fade-up">
            <div class="w-full flex  justify-center">
                <p class="text-white sm:text-[44px] font-bold text-3xl py-4">Let's Talk</p>
            </div>
            <div class="w-full sm:w-1/2 flex flex-col py-8 gap-4 justify-evenly">
                <p class="text-white text-[32px] sm:text-[30px] font-bold text-center">Let’s achieve something great
                    together </p>
                <div class="w-full flex md:flex-col lg:flex-row  gap-10  items-center">
                    <div class="w-fit">
                        <p class="text-[18px] sm:text-lg text-white font-bold">CALL</p>
                        <ul class="text-white w-full text-[12px] sm:text-[20px]">
                            <li><a href="#">+62 813-9039-0302 (Satya)</a></li>
                            <li><a href="#">+62 822-4189-119 (Bagus)</a></li>
                        </ul>
                    </div>
                    <div class="w-fit">
                        <p class="text-[18px] sm:text-lg text-white font-bold">EMAIL</p>
                        <ul class="text-white w-full text-[12px] sm:text-[20px]">
                            <li><a href="#">helosaestu@gmail.com</a></li>
                        </ul>
                    </div>
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
                                <option value="Sosial Media Management">Sosial Media Management</option>
                                <option value="Influencer/KOL Management">Influencer / KOL Management</option>
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

        <div class="flex w-full flex-auto" data-aos="fade-up">
            <img src="img/image bpk.png" alt="">
        </div>

        <div style="background-image: url(img/anbwh.gif);"
            class="flex flex-col w-full h-[300px] sm:h-[600px] bg-no-repeat bg-cover p-8 justify-center items-center"
            data-aos="fade-up">
            <p class="text-[24px] sm:text-[44px] text-white mt-2 sm:mt-8 text-center font-bold">Join us in bringing
                your
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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
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
        layananSelect.addEventListener("change", function() {
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

</body>

</html>
