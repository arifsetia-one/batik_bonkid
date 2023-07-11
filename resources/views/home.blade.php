<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Batik_Bonkit</title>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar --}}
    <nav class="bg-[#DEDEDE] shadow-xl max-w-full mx-auto py-4 px-10 md:py-10 md:px-20">
        <div class="text-[#444853] justify-between items-center hidden md:flex">
            <h1 class="text-4xl font-bold">BONKID</h1>
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

    {{-- content --}}
    <div>
        {{-- search --}}
        <div class="container mx-auto flex w-96 items-center mt-10">
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
        {{-- end of search --}}

        {{-- Card --}}
        <div class="container mx-auto flex">

        </div>
        {{-- end of Card --}}

    </div>
    {{-- end of content --}}

    {{-- footer --}}
    {{-- end of footer --}}

</body>

</html>
