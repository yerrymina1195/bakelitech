<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="">
    <div id="section1">
<nav class="bg-transparent border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="text-center text">    
        <h1 class="text-2xl font-extrabold p-11 text-white">BAKELI TECHNOLOGY OF SCHOOL</h1>
        <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">S'INSCRIRE</button>
    </div>

</div>
<div id="section2">
    <div class="section2 text-center flex items-center justify-center flex-col p-11">
        <p class="font-extrabold text-green-500 pb-3">Filieres</p>
        <h1 class="text-2xl font-extrabold text-white pb-5">DOMAINES DE FORMATIONS</h1>
        <p class="tracking-widest w-70 text-gray-500 md:text-lg dark:text-gray-400">Praesentium ipsam exercitationem consequatur dolorum.</p>
    </div>

    <div class="section2 text-center flex items-center justify-center flex-row pt-0 p-11">
        <div class="icons grid grid-cols-5 gap-4">
            <div class="border p-11 text-white">
               <i class="bi bi-pc-display text-5xl mb-5"></i>
               <p>PROGRAMMATION</p>
            </div>
            <div class="border p-11 text-white">
               <i class="bi bi-pc-display text-5xl mb-5"></i>
               <p>DESIGN</p>
            </div>
            <div class="border p-11 text-white">
               <i class="bi bi-pc-display text-5xl mb-5"></i>
               <p>MARKETING DIGITAL</p>
            </div>
            <div class="border p-11 text-white">
               <i class="bi bi-pc-display text-5xl mb-5"></i>
               <p>ENTREPRENERIAT</p>
            </div>
            <div class="border p-11 text-white">
               <i class="bi bi-pc-display text-5xl mb-5"></i>
               <p>DEVELOPPEMENT MOBILE</p>
            </div>
        </div>
    </div>
  </div>

  <div id="section3" class="bg-gray-100 p-11">
    <div class="grid grid-cols-2 gap-2 p-11">
        <div>
            <p class="font-extrabold text-gray-500 pb-3">BIENVENUE</p>
            <h1 class="text-2xl font-extrabold text-gray-900 pb-5">BAKELI TECHNOLOGY OF SCHOOL</h1>
            <p class="tracking-widest w-70 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam accusantium minus repellat temporibus! Dolores tempore architecto quibusdam consectetur fuga laboriosam aspernatur. Minus earum est saepe hic tenetur voluptas facere? Dicta!</p>
            <button type="button" class="mt-5 py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500 rounded-lg  border-orange-500 border-r-4 hover:bg-green-700 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">S'INSCRIRE</button>
        </div>  

        <div class="bg-white relative">
            <div class="bg-orange-500 shadow h-52 absolute w-80 top-8 right-4">
                <div class=" absolute w-full top-2 right-8">
                    <img class="h-auto max-w-full rounded" src="/medias/rectangle 1515.png" alt="">
                </div>
                <div class=" border-green-500 border-4 h-52 absolute w-80 top-8 right-8"></div>
            </div>
        </div>
    </div>
  </div>

  <div id="section4" class="relative bg-gray-100 hauteur">
    <div class='text-center bg-gray-200 flex items-center justify-center flex-col p-11'>
          <div class="p-11">
          <p class="font-extrabold text-gray-500 pb-3">HOW DO WE WORKS</p>
            <h1 class="text-2xl font-extrabold text-gray-900 pb-3">EVENEMENTS</h1>
            <p class="tracking-widestw-80 pb-11 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>
          </div>
            <div class="absolute bg-gray-100 top-56">
               <img class="h-auto w-100 rounded" src="/medias/div (2).png" alt="">

               <div class="grid grid-cols-3 gap-2 pt-11">
                        <div class="text-start">
                                <p class="font-extrabold text-gray-500 pb-3">DON'T MISS OUT OUR LATEST UPDATES</p>
                                <h1 class="text-2xl font-extrabold text-gray-900 pb-3">S'INSRIRE</h1>
                        </div>
                        <div class="pl-5">
                                <input type="mail" id="" class="bg-gray-50  border-gray-100 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your mail..." required>          
                        </div>
                        <div class="">
                                <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-500 rounded-lg  border-orange-500 border-r-4 hover:bg-green-700 hover:text-white-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">S'INSCRIRE</button>
                        </div>
                </div>

            </div>             
    </div>  
  </div>

  <hr>

   <div class='text-center relative bg-gray-100 flex items-center justify-center flex-col p-11'>
            <p class="font-extrabold text-gray-500 pb-3">OUR PORTFOLIO</p>
            <h1 class="text-2xl font-extrabold text-gray-900 pb-3">WORK SHOWCASE</h1>
            <p class="tracking-widest w-80 text-gray-500 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit olores quibusdam conre icta</p>
   
        
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-11">
                <div class="relative">
                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div class="absolute text-start p-3 bottom-6 left-6 bg-green-400">
                       <p class="font-extrabold text-white">Graphic 1</p>
                       <h1 class="font-extrabold text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div class="absolute text-start p-3 bottom-6 left-6 bg-green-400">
                       <p class="font-extrabold text-white">Graphic 1</p>
                       <h1 class="font-extrabold text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div class="absolute text-start p-3 bottom-6 left-6 bg-green-400">
                       <p class="font-extrabold text-white">Graphic 1</p>
                       <h1 class="font-extrabold text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div class="absolute text-start p-3 bottom-6 left-6 bg-green-400">
                       <p class="font-extrabold text-white">Graphic 1</p>
                       <h1 class="font-extrabold text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div class="absolute text-start p-3 bottom-6 left-6 bg-green-400">
                       <p class="font-extrabold text-white">Graphic 1</p>
                       <h1 class="font-extrabold text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    <div class="absolute text-start p-3 bottom-6 left-6 bg-green-400">
                       <p class="font-extrabold text-white">Graphic 1</p>
                       <h1 class="font-extrabold text-1xl  text-white">DESIGN STYLES</h1>
                    </div>
                </div>
            </div>
    </div>

    <div id="section2" class='relative'>
     <div class="section2 text-center flex items-center justify-center flex-row p-11">
        <div class="icons grid grid-cols-4 gap-4 p-11">
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

    <!-- <div class="absolute p-11 top-60 left-60">
      <img class="h-auto max-w-full rounded" src="/medias/rectangle 1515.png" alt="">
      <div class="bg-orange-500 shadow h-52 absolute w-80 bottom-32 right-12">

      </div>
    </div> -->

  </div>


        
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</html>
