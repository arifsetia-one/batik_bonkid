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
    <div class="flex items-center justify-center mt-36 pr-4 pl-4">
        <div class="py-1 text-left">
            <h3 class="text-2xl mt-4 font-bold text-[#867979] text-center">Login</h3>
            <h3 class="text-base mt-2 text-slate-800 font-meduim text-center">Mohon masukkan e-mail dan password anda
            </h3>
            <form action="">
                <div class="mt-4 sm:w-96">
                    <div>
                        <input type="text" id="email" placeholder="Email"
                            class="w-full px-4 py-2 mt-2 font-semibold text-slate-800 border focus:outline-none focus:ring-1 focus:ring-[#A4907C]">
                    </div>
                    <div class="mt-4">
                        <input type="password" id="password" placeholder="Password"
                            class="w-full px-4 py-2 mt-2 border font-semibold focus:outline-none focus:ring-1 focus:ring-[#A4907C]">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button class="w-full px-6 py-2  mt-4 text-white bg-[#867070] hover:bg-[#A4907C]"
                            id="login">Login</button>
                    </div>
                    <a href="" id="loginAdmin"
                        class="flex justify-center text-sm mt-4 font-medium text-[#867070] hover:underline">
                        Belum memiliki akun? <b> Buat disini<b></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
