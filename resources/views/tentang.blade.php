<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>PlayCrot.top</title>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar --}}
    <nav class="bg-[#DEDEDE] shadow-xl max-w-full mx-auto py-4 px-10 md:py-6 md:px-20">
        <div class="text-[#444853] justify-between items-center hidden md:flex">
            <h1 class="text-4xl font-bold">Playcrot.top</h1>
            <ul class="flex space-x-14 gap-8 text-base">
                <li><a href="#" class="font-bold hover:text-[#FF0066]">Home</a></li>
                <li><a href="#" class="font-bold hover:text-[#FF0066]">Akun</a></li>
                <li><a href="#" class="font-bold hover:text-[#FF0066]">Keranjang</a></li>
                <li><a href="#" class="font-bold hover:text-[#FF0066]">Tentang</a></li>
            </ul>
            {{-- <button
                class="bg-[#FF0066] py-3 px-7 rounded-[50px] font-bold text-base text-white hover:scale-105 transition-all duration-300">
                <a target="_blank" href="https://www.instagram.com/arifsetia_one/?hl=id">Instagram</a>
            </button> --}}
        </div>
        <div class="flex justify-between md:hidden">
            <h1 class="text-[#444853] text-2xl font-bold">Portofolio</h1>
            <img class="w-6 hover:scale-125 transition-all duration-300"
                src="https://img.icons8.com/external-others-bomsymbols-/91/000000/external-hamberger-flat-general-office-others-bomsymbols-.png" />
        </div>
    </nav>
    {{-- end of navbar --}}
    <h1 class="container mx-auto mt-20 mb-6 font-bold text-2xl text-slate-900">Tentang Kami</h1>
    <div class="container flex mx-auto grid grid-cols-2">
        <div class="pr-4">
            <h2 class="font-semibold text-slate-600 text-xl">Profil</h2>
            <p class="font-semibold text-base text-justify">Bonkid adalah sebuah bisnis usaha yang bergerak di bidang
                penjualan
                berbagai macam batik yang menggunakan beberapa alat untuk membuatnya. Bonkid didirikan sejak sejak tahun
                2018,yang terletak di Dalangan, Kebondalem Kidul, Prambanan. Usaha ini telah beroperasi selama 5 tahun.
                Terdapat jenis batik yang diproduksi oleh usaha Batik Bonkid ini, yaitu Batik Tulis, Batik Cap dan
                Jumputan</p>
            <h2 class="font-semibold text-slate-600 text-xl mt-6">Visi</h2>
            <p class="font-semibold text-base text-justify">Visi yang ingin dicapai oleh Batik Bonkid adalah ingin
                menjadikan produk
                Batik Bonkid menjadi produk yang berkualitas dan menjadikan jangkauan pasar lebih luas</p>
            <h2 class="font-semibold text-slate-600 text-xl mt-6">Misi</h2>
            <ul class="font-semibold text-base">
                <li>1. Menjual produk kain batik dengan bahan yang remium</li>
                <li>2. Menjaga kepercayaan para pelanggan</li>
                <li>3. Memberikan harga terjangkau pada masyarakat</li>
            </ul>

        </div>
        <div class="pl-16 pr-16">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-1.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-2.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-3.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-4.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-5.svg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </div>
</body>

</html>
