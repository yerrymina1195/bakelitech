<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="/medias/Logo-bakeli.png" type="image/x-icon">
    <title>Bakeli School of Technology</title>
    <style>
        .active {
            color: brown;
        }
    </style>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>

    <body class="">
        <!-- <div id="section1" class=" bg-white"> -->
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative  h-72 md:h-[700px] overflow-hidden">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out bg-cover bg-center shadowblur"
                    style="background-image: url('/medias/banner/myfact3.png')" data-carousel-item="active">
                    <!-- <img src="/medias/banner/myfact3.png" class="absolute block w-full h-96 md:h-[700px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt=""> -->
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out bg-cover bg-center shadowblur"
                    style="background-image: url('/medias/banner/myfact1.png')" data-carousel-item="">
                    <!-- <img src="/medias/banner/myfact1.png" class="absolute block w-full h-96 md:h-[700px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt=""> -->
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out bg-cover bg-center shadowblur"
                    style="background-image: url('/medias/banner/myfact2.png')" data-carousel-item="">
                    <!-- <img src="/medias/banner/myfact2.png" class="absolute block w-full h-96 md:h-[700px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt=""> -->
                </div>
            </div>
            <!-- Slider controls -->
            <!-- <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev> -->
            <div class='absolute top-0 z-30 w-full'>
                <div x-data="{ atTop: false }">
                    <nav class=" fixed w-full p-0 bg-transparent border-b border-[#ffffff53]"
                        :class="{ 'shadow-lg': atTop, 'bg-transparent text-white': !atTop, 'bg-white text-indigo-800': atTop }"
                        @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
                        <!-- <nav class="bg-transparent"> -->
                        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                            <a href="https://flowbite.com/" class="flex items-center">
                                <img src="/medias/Logo-bakeli.png" class="h-12 mr-3" alt="Flowbite Logo" />
                            </a>
                            <div class="flex md:order-2">
                                <button type="button"
                                    class="text-amber-400 hover:text-white border border-amber-400 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium  text-sm px-5 py-2.5 text-center mr-2  dark:border-amber-300 dark:text-amber-300  dark:hover:bg-amber-400 dark:focus:ring-amber-900">Nous
                                    rejoindre</button>
                                <button data-collapse-toggle="navbar-cta" type="button"
                                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    aria-controls="navbar-cta" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 17 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                    </svg>
                                </button>
                            </div>
                            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                                id="navbar-cta">
                                <ul
                                    class="flex flex-col font-medium items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                                    <li>
                                        <a href="#"
                                            class="block py-2 pl-3 pr-4 text-black  bg-white rounded md:bg-transparent md:text-yellow-300 md:p-0 md:dark:text-yellow-300"
                                            aria-current="page">Accueil</a>
                                    </li>
                                    <li>
                                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                            class="flex items-center justify-between w-full py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 md:w-auto  md:dark:hover:text-yellow-300  "
                                            :class="{  'text-gray-800 md:text-white ': !atTop, '  md:text-gray-800 ': atTop }">Nos Programmes
                                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg></button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownNavbar"
                                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-2 text-sm text-greenbakeli bg-white rounded"
                                                aria-labelledby="dropdownLargeButton">
                                                <li>
                                                    <a href="#"100
                                                        class="block px-4 py-2 hover:bg-greenbakeli hover:text-white">Programmes</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-greenbakeli hover:text-white">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-greenbakeli hover:text-white">Earnings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                                            class="flex items-center justify-between w-full py-2 pl-3 pr-4  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0 md:w-auto  md:dark:hover:text-yellow-300  "
                                            :class="{  'text-gray-800 md:text-white ': !atTop, '  md:text-gray-800 ': atTop }">Nos Campus
                                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg></button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownNavbar2"
                                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-2 text-sm text-greenbakeli rounded bg-white"
                                                aria-labelledby="dropdownLargeButton">
                                                <li>
                                                    <a href="#"100
                                                        class="block px-4 py-2 hover:bg-greenbakeli hover:text-white">Campus</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-greenbakeli hover:text-white">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-greenbakeli hover:text-white">Earnings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-300 md:p-0 md:dark:hover:text-yellow-300  dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700"
                                            :class="{  'text-gray-800 md:text-white ': !atTop, '  md:text-gray-800 ': atTop }">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#section4"
                                            class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-300 md:p-0 md:dark:hover:text-yellow-300  dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700"
                                            :class="{  'text-gray-800 md:text-white ': !atTop, '  md:text-gray-800 ': atTop }">Galerie</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="text-center text">
                    <h1 class="md:text-3xl font-bold pt-24 pb-5 text-white">BAKELI TECHNOLOGY OF SCHOOL</h1>
                    <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-greenbakeli   hover:bg-[#009687d2] hover:text-white-700">S'INSCRIRE</button>
                </div>
            </div>

        </div>

        <div class="p-11 bg-black">
            <div class="section2 text-center flex items-center justify-center flex-col md:p-11">
                <p class=" text-greenbakeli pb-3">FILIERES</p>
                <h1 class="text-xl  text-white pb-5">DOMAINES DE FORMATIONS</h1>
                <p class="w-70 text-gray-500 md:text-lg dark:text-gray-400">Praesentium ipsam
                    exercitationem consequatur dolorum.</p>
            </div>

            <div class="section2 text-center flex items-center justify-center flex-row  pt-5">
                <div class="icons grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="border border-[#AAAAAA] p-5 text-[#EBEBEB]">
                        <img src="/medias/pro.svg" class="mx-auto" alt="">
                        <p class="text-sm mt-5">PROGRAMMATION</p>
                    </div>
                    <div class="border p-5 border-[#AAAAAA]  text-[#EBEBEB]">
                        <img src="/medias/plume.svg" class="mx-auto" alt="">
                        <p class="text-sm mt-5">DESIGN</p>
                    </div>
                    <div class="border p-5 border-[#AAAAAA]  text-[#EBEBEB]">
                        <img src="/medias/div.svg" class="mx-auto" alt="">
                        <p class="text-sm mt-5">MARKETING DIGITAL</p>
                    </div>
                    <div class="border p-5 border-[#AAAAAA]  text-[#EBEBEB]">
                        <img src="/medias/mind.svg" class="mx-auto" alt="">

                        <p class="text-sm mt-5">ENTREPRENERIAT</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section3" class="bg-gray-100 md:p-11">
            <div class="grid grid-cols-1  md:grid-cols-2 content-center  gap-2 p-11 relative">
                <div class=" md:my-auto  ">
                    <p class=" text-black pb-3">BIENVENUE</p>
                    <h1 class="text-xl font-bold text-black pb-5">BAKELI TECHNOLOGY OF SCHOOL</h1>
                    <p class=" w-70 text-gray-500 text-xs lg:text-lg mb-5  dark:text-gray-400">We are committed to providing
                        our customers with exceptional service while offering our employees the best training. Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry has been the industry’s
                        standard dummy text ever since the 1500s.</p>
                        <x-button title="VOIR PLUS"></x-button>
                </div>

                <div>
                    <img class="h-auto   w-full rounded" src="/medias/meta.png" alt="">
                </div>

            </div>
        </div>
       
        <div id="section4" class=" bg-gray-100 h-[600px]">
            <div class='text-center relative bg-gray-200 flex items-center justify-center flex-col p-11'>
                <div class="p-11">
                    <p class=" text-gray-500 pb-3">HOW DO WE WORKS</p>
                    <h1 class="text-2xl  text-black font-bold pb-3">EVENEMENTS</h1>
                    <p class="-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit
                        olores quibusdam conre icta</p>
                </div>
                <div class="lg:absolute top-52">
                    <img class="h-auto w-[700px]" src="/medias/div (2).png" alt="">
                    <div class="flex justify-between flex-wrap pt-11">
                        <div class="text-start">
                            <p class="text-sm text-gray-500">DON'T MISS OUT OUR LATEST UPDATES</p>
                            <h2 class="text-xl font-bold text-black pb-3">S'INSCRIRE</h2>
                        </div>
                        <div class="flex justify-between">
                            <input type="mail" id=""
                                class="w-full h-10 border-gray-100 text-black text-sm focus:ring-yellow-500 focus:border-yellow-500 block p-2.5 bg-gray-300"
                                placeholder="Enter your mail..." required>
                                <x-button title="REJOINDRE"></x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-16">

        <div id="#galerie" class='pr-0 pl-0 p-11 text-center relative bg-gray-100 flex items-center justify-center flex-col'>
            <p class=" text-gray-500 text-sm pb-3">OUR PORTFOLIO</p>
            <h1 class="text-xl  text-black pb-3">WORK SHOWCASE</h1>
            <p class="w-80 mb-5 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores
                quibusdam conre icta
            </p>


            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3  gap-4 w-3/4 lg:p-11">
                <div class="relative">
                    <img class="h-72 w-full" src="/medias/div (10).png" alt="">
                    <div class="absolute text-start p-1 bottom-6 left-3 bg-mamso">
                        <p class="font-medium text-white">Graphic 1</p>
                        <h1 class="font-light text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-72 w-full" src="/medias/div (12).png" alt="">
                    <div class="absolute text-start p-1 bottom-6 left-3 bg-mamso">
                        <p class="font-medium text-white">Graphic 2</p>
                        <h1 class="font-light text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-72 w-full" src="/medias/div (13).png" alt="">
                    <div class="absolute text-start p-1 bottom-6 left-3 bg-mamso">
                        <p class="font-medium text-white">Graphic 3</p>
                        <h1 class="font-light text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-72 w-full" src="/medias/div (6).png" alt="">
                    <div class="absolute text-start p-1 bottom-6 left-3 bg-mamso">
                        <p class="font-medium text-white">Graphic 4</p>
                        <h1 class="font-light text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-72 w-full" src="/medias/div (5).png" alt="">
                    <div class="absolute text-start p-1 bottom-6 left-3 bg-mamso">
                        <p class="font-medium text-white">Graphic 5</p>
                        <h1 class="font-light text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-72 w-full" src="/medias/div (11).png" alt="">
                    <div class="absolute text-start p-1 bottom-6 left-3 bg-mamso">
                        <p class="font-medium text-white">Graphic 6</p>
                        <h1 class="font-light text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class='relative bg-black'>
            <div class="section2 text-center flex items-center justify-center flex-row pt-11 p-28 px-0">
                <div class="icons grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class=" md:p-5">
                        <p class='text-4xl mb-5 text-white font-bold'>8.705</p>
                        <p class='text-[#AAAAAA] text-sm'>PROJECT COMPLETED</p>
                    </div>
                    <div class=" md:p-5">
                        <p class='text-4xl mb-5 text-white font-bold'>480</p>
                        <p class='text-[#AAAAAA] text-sm'>ACTIVES CLIENTS</p>
                    </div>
                    <div class=" md:p-5">
                        <p class='text-4xl mb-5 text-white font-bold'>626</p>
                        <p class='text-[#AAAAAA] text-sm'>CUPS OF COFFEE</p>
                    </div>
                    <div class="md:p-5">
                        <p class='text-4xl mb-5 text-white font-bold'>9.774</p>
                        <p class='text-[#AAAAAA] text-sm'>HAPPY CLIENTS</p>
                    </div>
                </div>
            </div>

            <div class="p-3 h-auto bg-gray-100">
                <div class="md:p-11 justify-center items-center  relative md:-translate-y-28 flex flex-col md:flex-row">
                    <div class="">
                        <img class=" h-60 md:h-96 w-full md:max-w-full mx-auto " src="/medias/CHRIST.png" alt="">
                    </div>
                    <div
                        class="bg-white h-auto w-full shadow p-11 md:-translate-x-14 md:translate-y-12  md:w-2/5  md:h-4/6 ">
                        <h1 class="text-xl font-bold  text-black pb-3">LE COACHING</h1>
                        <p class=" pb-5 text-gray-500 md:text-lg dark:text-gray-400">Lorem fficiis ipsa,
                            a et facilis maiores amet quasi, voluptas ratione delectus recusandae totam.</p>
                        <button type="button"
                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-greenbakeli  border-orange-500 border-r-4 hover:bg-greenbakeli hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:hover:text-white dark:hover:bg-greenbakeli">LEARN
                            MORE</button>
                    </div>
                </div>
            </div>


        </div>


        <div id="section6">
            <div class='text-center bg-gray-100 flex items-center justify-center flex-col p-11'>
                <p class=" text-gray-500 text-sm pb-3">EQUIPES</p>
                <h1 class="text-xl font-bold text-black pb-3">COACHS</h1>
                <p class="w-80 text-gray-500 md:text-lg dark:text-gray-400">We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
            </div>

            <section class="splide pt-0 p-11 bg-black" aria-labelledby="carousel-heading">


                <div class="splide__track">
                    <div class="splide__list">

                        <div
                            class="splide__slide flex flex-col justify-center cursor-pointer  group items-center  text-gray-500 ">
                            <img src="/medias/ABOU1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0 ">
                            <p class='text-black mt-5 text-sm font-bold'>ABOU</p>
                            <p class='text-sm'>PROGRAMMATION</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer transition delay-1000 ease-in-out  group items-center text-gray-500 splide__slide ">
                    
                            <img src="/medias/NDIAGA1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0      ">
                            <p class='text-black mt-5 text-sm font-bold'>NDIAGA</p>
                            <p class='text-sm' class=''>DESIGNER</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer  group items-center text-gray-500 splide__slide ">
                
                            <img src="/medias/AMADOU1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0  ">
                            <p class='text-black mt-5 text-sm font-bold'>AMADOU</p>
                            <p class='text-sm' class=''>MARKETING DIGITAL</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer  group items-center text-gray-500 splide__slide ">
                    
                            <img src="/medias/div1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0  ">
                            <p class='text-black mt-5 text-sm font-bold'>OUSSEYNOU</p>
                            <p class='text-sm' class=''>ENTREPRENERIAT</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer  group items-center text-gray-500 splide__slide ">
                    
                            <img src="/medias/DIENABA1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0 ">
                            <p class='text-black mt-5 text-sm font-bold'>DIENABA</p>
                            <p class='text-sm' class=''>DEVELOPPEMENT MOBILE</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="splide__slide flex flex-col justify-center cursor-pointer  group items-center  text-gray-500 ">
                
                            <img src="/medias/ALKALY1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0 ">
                            <p class='text-black mt-5 text-sm font-bold'>ABOU</p>
                            <p class='text-sm'>PROGRAMMATION</p>
                            <p class='text-greenbakeli text-sm mt-3'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer  group items-center text-gray-500 splide__slide ">
                    
                            <img src="/medias/MAHMOUD1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0 ">
                            <p class='text-black mt-5 text-sm font-bold'>NDIAGA</p>
                            <p class='text-sm' class=''>DESIGN</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer  group items-center text-gray-500 splide__slide ">
            
                            <img src="/medias/FATOU1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0  ">
                            <p class='text-black mt-5 text-sm font-bold'>AMADOU</p>
                            <p class='text-sm' class=''>MARKETING DIGITAL</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer  group items-center text-gray-500 splide__slide ">
                
                            <img src="/medias/DAOUDA1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0 ">
                            <p class='text-black mt-5 text-sm font-bold'>OUSSEYNOU</p>
                            <p class='text-sm' class=''>ENTREPRENERIAT</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>
                        <div
                            class="text-center flex flex-col justify-center cursor-pointer group items-center  text-gray-500 splide__slide ">
            
                            <img src="/medias/JESUS1.png" class="max-w-full grayscale transition delay-300 ease-in-out   group-hover:grayscale-0 ">
                            <p class='text-black mt-5 text-sm font-bold'>DIENABA</p>
                            <p class='text-sm' class=''>DEVELOPPEMENT MOBILE</p>
                            <p class='text-greenbakeli text-sm'>
                                <i class="bi bi-facebook mr-3"></i>
                                <i class="bi bi-twitter mr-3"></i>
                                <i class="bi bi-youtube"></i>
                            </p>
                        </div>

                    </div>

                </div>
        
            </section>
        </div>

        <div id="section7" class='bg-gray-200 p-11'>
      
            <div class='text-center flex items-center justify-center flex-col p-11'>
                <p class=" text-gray-500 text-sm pb-3">OUR PORTFOLIO</p>
                <h1 class="text-xl font-bold  text-black pb-3">NOS PARTENAIRES</h1>
                <p class="w-80 text-gray-500 md:text-lg dark:text-gray-400">We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
            </div>

            <div class="md:p-28  icons grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="text-center flex justify-center items-center bg-white p-11 text-gray-500">
                    <img src="/medias/bullseye.png" class="max-w-full  mx-auto h-10 lg:h-auto ">
                </div>
                <div class="text-center flex justify-center items-center bg-white p-11 text-gray-500">
                    <img src="/medias/fastlane.png" class="max-w-full  mx-auto h-10 lg:h-auto ">
                </div>
                <div class="text-center flex justify-center items-center bg-white p-11 text-gray-500">
                    <img src="/medias/norcold.png" class="max-w-full  mx-auto h-10 lg:h-auto ">
                </div>
                <div class="text-cente flex justify-center items-center bg-white p-11 text-gray-500">
                    <img src="/medias/sweety.png" class="max-w-full  mx-auto h-10 lg:h-auto ">
                </div>
            </div>
        </div>


        <div id="section22" class="md:p-11 py-11">
            <div class="section2 text-center flex items-center justify-center flex-col md:p-11">

                    <div class="p-2 px-3  bg-greenbakeli mb-5">
                        <i class="bi bi-people-fill text-white text-4xl mb-5"></i>
                    </div>
                <h1 class="text-2xl w-full font-bold md:w-1/2 text-white pb-5">
                    GREAT THINGS IN BUSINESS ARE NEVER DONE BY ONE PERSON.
                    <span class='text-greenbakeli'>
                        THEY'RE DONE BY A TEAM OF PEOPLE
                    </span>
                </h1>
                <p class="w-full text-sm md:w-1/3 text-gray-500 md:text-lg dark:text-gray-400">
                We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
            </div>
        </div>

        <div id="section9" class='bg-gray-100 pt-0 p-11'>
            <div class='text-center flex items-center justify-center flex-col p-11'>
                <p class=" text-gray-500 text-sm pb-3">OUR NEWS & ARTICLES </p>
                <h1 class="text-xl font-bold text-black pb-3">NOS DERNIERS ARTICLES</h1>
                <p class="w-80 text-gray-500 md:text-lg dark:text-gray-400">We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
            </div>
            <div class="bg-gray-100 md:p-28 md:pt-0 icons grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                <div class="w-full bg-white">
                    <a href="#">
                        <img class="w-full" src="/medias/BABA&YACINE.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h6 class="mb-3 font-bold text-greenbakeli mt-6">24 Nov</h5>
                        </a>
                        <a href="#">
                            <h5 class="mb-5 text-xl font-bold text-black">BASIC RULES OF RUNNING WEB AGENCY BUSINESS</h5>
                        </a>
                       <x-button2 />
                    </div>
                </div>
                <div class="w-full bg-white">
                    <a href="#">
                        <img class="w-full" src="/medias/KANKOUBA.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h6 class="mb-3 font-bold text-greenbakeli mt-6">20 Nov</h5>
                        </a>
                        <a href="#">
                            <h5 class="mb-5 text-xl font-bold text-black">BECOME THE BEST SALE MARKETER</h5>
                        </a>
                       <x-button2 />
                    </div>
                </div>
                <div class="w-full bg-white">
                    <a href="#">
                        <img class="w-full" src="/medias/ATELIER.png" alt="" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h6 class="mb-3 font-bold text-greenbakeli mt-6">16 Nov</h5>
                        </a>
                        <a href="#">
                            <h5 class="mb-5 text-xl font-bold text-black">INTRODUCING LATEST MOPALY FEATURES</h5>
                        </a>
                       <x-button2 />
                    </div>
                </div>
            </div>
        </div>
        <div id="section11" class="">
            <div class="flex justify-between gap-4 flex-wrap p-16">
                <p class=" text-xl font-semibold text-white md:ml-20">LET'S GET YOUR PROJECT START!</p>
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-greenbakeli  border-white border-r-4 hover:bg-greenbakeli hover:text-white-700">CONTACT-US</button>
            </div>
        </div>

        <footer class="bg-black p-11 ">
            <div class="flex flex-col md:flex-row md:justify-around flex-wrap gap-4">
                <div>
                    <a href="https://flowbite.com/" class="mb-5 flex items-center">
                        <img src="/medias/Logo-bakeli.png" class="h-12 mr-3" alt="Flowbite Logo" />

                    </a>
                    <p class="md:w-80 text-gray-500 text-sm">
                    Bakeli est une école de formation professionnelle dans les nouvelles technologies créer par Volkeno. Elle a formé + de 6000 étudiants et professionnels aux métiers des nouvelles technologies et du digital.                </div>
                <div>
                    <p class="text-white mb-5">CONTACT</p>
                    <p class="text-gray-500 mb-5 text-sm">66 Brooklyn Street, <br> New York United Stated
                        America</p>
                    <p class="text-gray-500 text-sm">P: 666 888 000</p>
                    <p class="text-gray-500 text-sm">E: needhelp@maiply.com</p>
                </div>
         
                <div>
                    <p class="text-white mb-5">SOCIAL</p>
                    <p><a href="#" class="text-gray-500 text-sm text-1xl"><i class="bi bi-linkedin mr-2 text-white"></i>
                            Linkedin</a></p>
                    <p><a href="#" class="text-gray-500 text-sm text-1xl"><i class="bi bi-facebook mr-2 text-white"></i>
                            Facebook</a></p>
                    <p><a href="#" class="text-gray-500 text-sm text-1xl"><i class="bi bi-youtube mr-2 text-white"></i>
                            Linkdin</a></p>
                </div>
            </div>

        </footer>




        <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var splide = new Splide('.splide', {
                    perPage: 5,
                    perMove: 1,
                    gap: '2rem',
                    autoplay: true,
                    type: 'loop',
                    arrows: false,
                    pagination: false,
                    focus: 'start',
                    interval: 3000,

                    breakpoints: {
                        1200: {
                            perPage: 3,
                            gap: '1rem'
                        },
                        640: {
                            perPage: 1,
                            gap: 0
                        },
                    },
                });
                splide.mount();
            });
        </script>
    </body>

    </html>