<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        .active{
            color: brown;
        }
    </style>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="">
    <!-- <div id="section1" class=" bg-white"> -->
    <div id="gallery" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative  h-96 md:h-[700px] overflow-hidden">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out" data-carousel-item="active">
                <img src="/medias/banner/myfact3.png" class="absolute block w-full h-96 md:h-[700px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 2 -->
            <div class="duration-700 ease-in-out" data-carousel-item="">
                <img src="/medias/banner/myfact1.png" class="absolute block w-full h-96 md:h-[700px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 3 -->
            <div class="duration-700 ease-in-out" data-carousel-item="">
                <img src="/medias/banner/myfact2.png" class="absolute block w-full h-96 md:h-[700px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
        </div>
        <!-- Slider controls -->
        <!-- <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev> -->
       <div class='absolute top-0 z-30 w-full'>
        <div x-data="{ atTop: false }">
       <nav class=" fixed w-full  bg-transparent border-gray-200 "   :class="{ 'shadow-lg': atTop, 'bg-transparent text-white': !atTop, 'bg-white text-indigo-800': atTop }"
        @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
        <!-- <nav class="bg-transparent"> -->
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="/medias/Logo-bakeli.png" class="h-12 mr-3" alt="Flowbite Logo" />
            
                </a>
                <div class="flex md:order-2">
                    <button type="button" class="text-amber-400 hover:text-white border border-amber-400 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium  text-sm px-5 py-2.5 text-center mr-2  dark:border-amber-300 dark:text-amber-300 dark:hover:text-white dark:hover:bg-amber-400 dark:focus:ring-amber-900">Nous rejoindre</button>
                    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Accueil</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Programmes <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Programmes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Nos campus <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar2" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Campus</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4  text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                        </li>
                        <li>
                            <a href="#section4" class="{{request()->is('/#section4') ? 'active' :'block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700'}}">Galerie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>

        <div class="text-center text">
            <h1 class="text-3xl font-bold p-11 text-white">BAKELI TECHNOLOGY OF SCHOOL</h1>
            <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500   hover:bg-green-700 hover:text-white-700">S'INSCRIRE</button>
        </div>
       </div>

    </div>

    <div id="section2" class="p-11">
        <div class="section2 text-center flex items-center justify-center flex-col p-11">
            <p class="font-extrabold text-green-500 pb-3">Filieres</p>
            <h1 class="text-2xl font-extrabold text-white pb-5">DOMAINES DE FORMATIONS</h1>
            <p class="tracking-widest w-70 text-gray-500 md:text-lg dark:text-gray-400">Praesentium ipsam exercitationem consequatur dolorum.</p>
        </div>

        <div class="section2 text-center flex items-center justify-center flex-row pt-0 p-11">
            <div class="icons grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="border p-5 text-[#EBEBEB]">
                <img src="/medias/pro.svg" class="mx-auto" alt="">
                    <p class="text-sm">PROGRAMMATION</p>
                </div>
                <div class="border p-5 text-[#EBEBEB]">
                <img src="/medias/plume.svg" class="mx-auto" alt="">
                    <p class="text-sm">DESIGN</p>
                </div>
                <div class="border p-5 text-[#EBEBEB]">
                <img src="/medias/div.svg" class="mx-auto" alt="">
                    <p class="text-sm">MARKETING DIGITAL</p>
                </div>
                <div class="border p-5 text-[#EBEBEB]">
                <img src="/medias/mind.svg" class="mx-auto" alt="">
  
                    <p class="text-sm">ENTREPRENERIAT</p>
                </div>
                <!-- <div class="border p-5 text-[#EBEBEB]">
                    <img src="/medias/svgggg.svg" class="mx-auto" alt="">
                    <p class="text-sm">DEVELOPPEMENT MOBILE</p>
                </div> -->
            </div>
        </div>
    </div>

    <div id="section3" class="bg-gray-100 md:p-11">
        <div class="grid grid-cols-1  md:grid-cols-2 content-center  gap-2 p-11 relative">
            <div class=" md:my-auto  ">
                <p class="font-extrabold text-gray-500 pb-3">BIENVENUE</p>
                <h1 class="text-2xl font-extrabold text-gray-900 pb-5">BAKELI TECHNOLOGY OF SCHOOL</h1>
                <p class=" w-70 text-gray-500 text-xs lg:text-lg   dark:text-gray-400">We are committed to providing our customers with exceptional service while offering our employees the best training. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry’s standard dummy text ever since the 1500s.</p>
                <button type="button" class="mt-5 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500   border-orange-500 border-r-4 hover:bg-green-700 hover:text-white-700">S'INSCRIRE</button>
            </div>

<div>
<img class="h-auto   w-full rounded" src="/medias/meta.png" alt="">
</div>


            <!-- <div class="bg-white ">
                <div class="bg-orange-500 shadow h-52 absolute w-80 top-8 right-4">
                    <div class=" absolute w-full top-2 right-8">
                        <img class="h-auto max-w-full rounded" src="/medias/rectangle 1515.png" alt="">
                    </div>
                    <div class=" border-green-500 border-4 h-52 absolute w-80 top-8 right-8"></div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class=" w-full h-100">
        <div class="p-48 text-center ">
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <h2>Lorem ipsum dolor sit amet.</h2>
        </div>
        <div class="h-[400px]  -translate-y-36 place-content-center">
            <div class="h-auto w-[700px]">
                <img src="/medias/div (2).png" alt="">
            </div>
            <div class="flex justify-between">
                <div class="text-start">
                    <p class="text-sm text-gray-500">DON'T MISS OUT OUR LATEST UPDATES</p>
                    <h2 class="text-2xl font-bold text-gray-900 pb-3">S'INSRIRE</h2>
                </div>
                <div class="flex justify-center gap-5 ">
                    <input type="mail" id="" class="bg-gray-50 w-full h-10 border-gray-100 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your mail..." required>
                    <button type="button" class="py-2.5 px-5 mr-2 h-10 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500 rounded-lg  border-orange-500 border-r-4 hover:bg-green-700 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">S'INSCRIRE</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div id="section4" class=" bg-gray-100 h-[600px]">
        <div class='text-center relative bg-gray-200 flex items-center justify-center flex-col p-11'>
            <div class="p-11">
                <p class="font-extrabold text-gray-500 pb-3">HOW DO WE WORKS</p>
                <h1 class="text-2xl font-extrabold text-gray-900 pb-3">EVENEMENTS</h1>
                <p class="tracking-widestw-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>
            </div>
            <div class="absolute top-48">
                <img class="h-auto w-[700px]" src="/medias/div (2).png" alt="">
                <div class="flex justify-between pt-11">
                    <div class="text-start">
                        <p class="text-sm text-gray-500">DON'T MISS OUT OUR LATEST UPDATES</p>
                        <h2 class="text-2xl font-bold text-gray-900 pb-3">S'INSRIRE</h2>
                    </div>
                    <div class="flex justify-center gap-5 ">
                        <input type="mail" id="" class="bg-gray-50 w-full h-10 border-gray-100 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your mail..." required>
                        <button type="button" class="py-2.5 px-5 mr-2 h-10 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500 rounded-lg  border-orange-500 border-r-4 hover:bg-green-700 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">S'INSCRIRE</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <hr>

    <div id="#galerie" class='text-center relative bg-gray-100 flex items-center justify-center flex-col p-11'>
        <p class="font-extrabold text-gray-500 pb-3">OUR PORTFOLIO</p>
        <h1 class="text-2xl font-extrabold text-gray-900 pb-3">WORK SHOWCASE</h1>
        <p class="tracking-widest w-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>


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

    <div id="section2" class='relative'>
        <div class="section2 text-center flex items-center justify-center flex-row p-11">
            <div class="icons grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:p-11">
                <div class="border-r p-11">
                    <p class='text-3xl mb-5 text-white'>8.705</p>
                    <p class='text-gray-500'>PROJECT COMPLETED</p>
                </div>
                <div class="border-r p-11">
                    <p class='text-3xl mb-5 text-white'>480</p>
                    <p class='text-gray-500'>ACTIVES CLIENTS</p>
                </div>
                <div class="border-r p-11">
                    <p class='text-3xl mb-5 text-white'>626</p>
                    <p class='text-gray-500'>CUPS OF COFFEE</p>
                </div>
                <div class="p-11">
                    <p class='text-3xl mb-5 text-white'>9.774</p>
                    <p class='text-gray-500'>HAPPY CLIENTS</p>
                </div>
            </div>
        </div>

<div class="p-3 h-auto  bg-red-600">
    <!-- <div class="absolute p-11 top-60 left-60 grid grid-cols-2"> -->
        <div class="md:p-11 justify-center items-center  relative md:-translate-y-28 flex flex-col md:flex-row">
      <div class="bg-indigo-600 ">
        <img class=" h-60 md:h-96 w-full md:max-w-full mx-auto " src="/medias/CHRIST.png" alt="">
      </div>
      <div class="bg-white h-auto w-full shadow p-11 md:-translate-x-28 md:translate-y-12  md:w-2/5  md:h-4/6 ">
            <h1 class="text-2xl font-extrabold text-gray-900 pb-3">LE COACHING</h1>
            <p class="tracking-widest pb-5 text-gray-500 md:text-lg dark:text-gray-400">Lorem fficiis ipsa, a et facilis maiores amet quasi, voluptas ratione delectus recusandae totam.</p>
            <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500  border-orange-500 border-r-4 hover:bg-green-700 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:hover:text-white dark:hover:bg-green-700">LEARN MORE</button>
      </div>
    </div>
</div>


</div>


    <div id="section6">
        <div class='text-center  bg-gray-100 flex items-center justify-center flex-col p-11'>
            <p class="font-extrabold text-gray-500 pb-3">EQUIPES</p>
            <h1 class="text-2xl font-extrabold text-gray-900 pb-3">COACHS</h1>
            <p class="tracking-widest w-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>
        </div>

        <div class="bg-gray-100 p-11 icons grid grid-cols-5 gap-4">
            <div class="text-center text-gray-500">
                <img src="/medias/ABOU.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>ABOU</p>
               <p>PROGRAMMATION</p>
               <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/NDIAGA.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>NDIAGA</p>
               <p class=''>DESIGN</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/AMADOU.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>AMADOU</p>
               <p class=''>MARKETING DIGITAL</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/div (3).png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>OUSSEYNOU</p>
               <p class=''>ENTREPRENERIAT</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/DIENABA.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>DIENABA</p>
               <p class=''>DEVELOPPEMENT MOBILE</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
        </div>
    </div>

    <div id="section7" class='bg-gray-200 p-11'>
        <div class='text-center flex items-center justify-center flex-col p-11'>
            <p class="font-extrabold text-gray-500 pb-3">OUR PORTFOLIO</p>
            <h1 class="text-2xl font-extrabold text-gray-900 pb-3">NOS PARTENAIRES</h1>
            <p class="tracking-widest w-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>
        </div>

        <div class="p-28 pt-0 icons grid grid-cols-4 gap-4">
            <div class="text-center text-gray-500">
                <img src="/medias/div (4).png" class="max-w-full">
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/div (4).png" class="max-w-full">
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/div (4).png" class="max-w-full">
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/div (4).png" class="max-w-full">
            </div>
        </div>
    </div>


<div id="section22" class="p-11">
    <div class="section2 text-center flex items-center justify-center flex-col p-11">
        <p class="font-extrabold text-green-500 pb-3">
        <i class="bi bi-pc-display text-5xl mb-5"></i>
        </p>
        <h1 class="text-2xl font-extrabold w-1/2 text-white pb-5">
            GREAT THINGS IN BUSINESS ARE NEVER DONE BY ONE PERSON.
            <span class='text-green-500'>
                THEY'RE DONE BY A TEAM OF PEOPLE
            </span>
        </h1>
        <p class="tracking-widest w-1/3 text-gray-500 md:text-lg dark:text-gray-400">Praesentium ipsam exercitationem consequatur dolorum Praesentium ipsam exercitationem consequatur dolorum.</p>
    </div>
</div>

        <div id="section9" class='bg-gray-100 pt-0 p-11'>
            <div class='text-center flex items-center justify-center flex-col p-11'>
                <p class="font-extrabold text-gray-500 pb-3">OUR NEWS & ARTICLES </p>
                <h1 class="text-2xl font-extrabold text-gray-900 pb-3">NOS DERNIERS ARTICLES</h1>
                <p class="tracking-widest w-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>
            </div>
            <div class="bg-gray-100 p-28 icons grid grid-cols-3 gap-4">
            
<div class="w-full bg-white">   
<a href="#">
            <img class="w-full" src ="/medias/BABA&YACINE.png" alt="" />
        </a>    
<div class="p-4">
        <a href="#">
            <h6 class="mb-3 font-bold tracking-tight text-green-500 mt-6">26 Nov</h5>
        </a>
        <a href="#">
            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
        </a>
        <a href="#" class="bg-gray-900 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-900">
            LEARN MORE
        </a>
    </div>
</div>
<div class="w-full bg-white">   
<a href="#">
            <img class="w-full" src="/medias/KANKOUBA.png" alt="" />
        </a>    
<div class="p-4">
        <a href="#">
            <h6 class="mb-3 font-bold tracking-tight text-green-500 mt-6">26 Nov</h5>
        </a>
        <a href="#">
            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
        </a>
        <a href="#" class="bg-gray-900 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-900">
            LEARN MORE
        </a>
    </div>
</div>
<div class="w-full bg-white">   
<a href="#">
            <img class="w-full" src="/medias/ATELIER.png" alt="" />
        </a>    
<div class="p-4">
        <a href="#">
            <h6 class="mb-3 font-bold tracking-tight text-green-500 mt-6">26 Nov</h5>
        </a>
        <a href="#">
            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
        </a>
        <a href="#" class="bg-gray-900 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-900">
            LEARN MORE
        </a>
    </div>
</div>
        </div>
                            </div>
        <div id="section11" class="">
            <div class="flex justify-between flex-wrap p-16">
                <p class="font-extrabold text-2xl text-white">LET'S GET YOUR PROJECT START!</p>
                <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500  border-white border-r-4 hover:bg-green-700 hover:text-white-700">CONTACT-US</button>
            </div>
        </div>

        <footer class="bg-black p-11 ">
            <div class="flex justify-around flex-wrap">
              <div>
                <a href="https://flowbite.com/" class="flex items-center mb-5">
                 <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                </a>
                <p class="tracking-widest w-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta Lorem ipsum dolor sit olores quibusdam conre icta</p>
              </div>
              <div>
                <p class="tracking-widest text-white mb-5">CONTACT</p>
                <p class="tracking-widest text-gray-500 mb-5">66 Brooklyn Street, <br> New York United Stated America</p>
                <p class="tracking-widest text-gray-500">P: 666 888 000</p>
                <p class="tracking-widest text-gray-500">E: needhelp@maiply.com</p>
              </div>
              <div>
                <p class="tracking-widest text-white mb-5">SOCIAL</p>
                    <p><a href="#" class="text-gray-500 text-1xl"><i class="bi bi-linkedin mr-2 text-white"></i> Linkedin</a></p>
                    <p><a href="#" class="text-gray-500 text-1xl"><i class="bi bi-facebook mr-2 text-white"></i> Facebook</a></p>
                    <p><a href="#" class="text-gray-500 text-1xl"><i class="bi bi-youtube mr-2 text-white"></i> Linkdin</a></p>
              </div>
            </div>

        </footer>
        




  
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="bg-gray-100 p-11 icons grid grid-cols-5 gap-4">
            <div class="text-center text-gray-500">
                <img src="/medias/ABOU.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>ABOU</p>
               <p>PROGRAMMATION</p>
               <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/NDIAGA.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>NDIAGA</p>
               <p class=''>DESIGN</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/AMADOU.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>AMADOU</p>
               <p class=''>MARKETING DIGITAL</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/div (3).png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>OUSSEYNOU</p>
               <p class=''>ENTREPRENERIAT</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/DIENABA.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>DIENABA</p>
               <p class=''>DEVELOPPEMENT MOBILE</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
        </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="bg-gray-100 p-11 icons grid grid-cols-5 gap-4">
            <div class="text-center text-gray-500">
                <img src="/medias/ABOU.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>ABOU</p>
               <p>PROGRAMMATION</p>
               <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/NDIAGA.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>NDIAGA</p>
               <p class=''>DESIGN</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/AMADOU.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>AMADOU</p>
               <p class=''>MARKETING DIGITAL</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/div (3).png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>OUSSEYNOU</p>
               <p class=''>ENTREPRENERIAT</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
            <div class="text-center text-gray-500">
                <img src="/medias/DIENABA.png" class="max-w-full">
               <p class='text-gray-900 text-2xl'>DIENABA</p>
               <p class=''>DEVELOPPEMENT MOBILE</p>
                 <p class='text-green-500'>
                <i class="bi bi-facebook mr-3"></i>
                <i class="bi bi-twitter mr-3"></i>
                <i class="bi bi-youtube"></i>
               </p>
            </div>
        </div>
        </div>
    </div>
</div>




</body>
</html>
