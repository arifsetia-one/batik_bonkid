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

    {{-- keranjang --}}
    <div class="flex items-center container mx-auto grid grid-cols-2 gap-4 mt-16 pl-10 pr-10">
        <h1 class="font-bold text-2xl text-slate-700">BONKID | KERANJANG BELANJA</h1>
        <div class="flex w-96 ml-40">
            <div class="relative w-full">
                <input type="search" id="search-dropdown"
                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 border-l-gray-50 border-l-2 border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-gray-500"
                    placeholder="Search" required>
                <button type="submit"
                    class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-gray-300 border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </div>
    {{-- end of keranjang --}}

    {{-- content --}}
    <div class="flex container mx-auto gird grid-cols-1 gap-4 mt-20 items-center pl-6 pr-6">
        <div>
            <input checked id="checked-checkbox" type="checkbox" value=""
                class="w-6 h-6 rounded-md text-gray-600 bg-gray-100 border-gray-300  focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <img src="../../assets/1.png">
        <div>
            <h3 class="font-semibold text-2xl">Batik hitam</h3>
            <h3 class="font-base">Ukuran batik 1 x 2 Meter</h3>
            <h3>Rp.200.000</h3>
        </div>
    </div>
    <div class="flex container mx-auto gird grid-cols-1 gap-4 mt-10 items-center pl-6 pr-6">
        <div>
            <input checked id="checked-checkbox" type="checkbox" value=""
                class="w-6 h-6 rounded-md text-gray-600 bg-gray-100 border-gray-300  focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <img src="../../assets/1.png">
        <div>
            <h3 class="font-semibold text-2xl">Batik merah</h3>
            <h3 class="font-base">Ukuran batik 1 x 2 Meter</h3>
            <h3>Rp.200.000</h3>
        </div>
    </div>
    <div class="flex container mx-auto gird grid-cols-1 gap-4 mt-10 items-center pl-6 pr-6">
        <div>
            <input checked id="checked-checkbox" type="checkbox" value=""
                class="w-6 h-6 rounded-md text-gray-600 bg-gray-100 border-gray-300  focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <img src="../../assets/1.png">
        <div>
            <h3 class="font-semibold text-2xl">Batik putih</h3>
            <h3 class="font-base">Ukuran batik 1 x 2 Meter</h3>
            <h3>Rp.200.000</h3>
        </div>
    </div>
    <hr class="mt-12 mb-12">
    <div>
        <div class="mb-8">
            <div class="container flex grid grid-cols-2  ml-10">
                <h4 class="text-gray-500 font-semibold">Subtotal</h4>
                <h4 class="font-semibold justify-self-end mr-10">Rp800.000</h4>
            </div>
        </div>
        <div class="mb-10">
            <div class="container flex grid grid-cols-2  ml-10">
                <h4 class="text-gray-500 font-semibold">Pengiriman</h4>
                <h4 class="font-semibold justify-self-end mr-10">Rp10.000</h4>
            </div>
        </div>
    </div>
    <hr class="mt-12 mb-12">
    <div class="mb-10">
        <div class="container flex grid grid-cols-2  ml-10">
            <h4 class="text-gray-900 font-semibold">Total</h4>
            <h4 class="font-semibold justify-self-end mr-10">Rp810.000</h4>
        </div>
    </div>
    <div class="container mx-auto pl-4 pr-4 mb-16 justify-self-center">
        <button
            class="w-full h-20 pl-10 pr-10 text-white bg-[#867070] hover:bg-[#A4907C] focus:ring-4 font-medium text-2xl px-5 py-2.5 mr-2 mb-2 dark:bg-[#867070] dark:hover:bg-[#A4907C] focus:outline-none">
            Konfirmasi Order
        </button>
    </div>
    {{-- end of content --}}
</body>

</html>
