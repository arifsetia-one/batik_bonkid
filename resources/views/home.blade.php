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

    {{-- content --}}
    <div>
        {{-- search --}}
        <div class="container mx-auto flex w-96 items-center mt-14">
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
            <div class="grid grid-cols-5 gap-4 mt-16">
                {{-- <div> --}}
                {{-- kiri --}}
                <div>
                    <div>
                        <h3 class="font-bold">Kategori</h3>
                        <div class="flex items-center mt-2">
                            <input checked id="checked-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300  focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox"
                                class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-700">Batik
                                Tulis</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="checked-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300  focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-700">Batik Cap</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="checked-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300  focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-700">Batik
                                Jumputan</label>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold mt-40">Harga</h3>
                        <h4 class="font-semmibold">100 - 200</h4>
                    </div>
                </div>
                {{-- end of kiri --}}
                {{-- kanan --}}
                <div class="flex col-start-2 col-end-6 gap-6">
                    <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="flex col-start-2 col-end-6 gap-6 mt-10 mb-24">
                    <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- end of kanan --}}
                {{-- </div> --}}
            </div>
        </div>
        {{-- end of Card --}}

    </div>
    {{-- end of content --}}

    {{-- footer --}}
    {{-- end of footer --}}

</body>

</html>
