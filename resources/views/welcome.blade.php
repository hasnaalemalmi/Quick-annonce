<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @vite('resources/css/app.css')
    <title>Quickannonce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body >
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 shadow-lg">
        @if (Route::has('login'))
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4  ">
                @auth
                    <a href="{{ url('/home') }}" class="  font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="#" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white text-blue-700">Quick <span class="text-yellow-500">annonce</span></span>
                    </a>
                    <div class="flex md:order-2  ml-12 sm:ml-0 md:ml-0 lg:ml-0">
                        <button type="button" class=" mt-8 sm:mt-0 md:mt-0 lg:mt-0 w-26 sm:w-40  md:w-40 lg:w-48 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="{{ route('login') }}">
                                <svg class="h-4 inline-flex justify-start" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                                se connecter
                            </a>
                        </button>
                        @if (Route::has('register'))
                            <button type="button" class="mt-8 sm:mt-0 md:mt-0 lg:mt-0 w-26 sm:w-40 md:w-15 md:w-40 lg:w-48 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-4">
                                <a href="{{ route('register') }}">
                                    <svg class="h-4 inline-flex justify-start" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    creer un compte
                                </a>
                            </button>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <div class="ml-8 sm:ml-0 md:ml-0 lg:ml-36 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-80">

    <div class="max-w-sm bg-white border border-gray-200 rounded-lg  dark:bg-gray-800 dark:border-gray-700 shadow-lg">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('assets/chercher une annonce.jpg') }}"  alt="" />
    </a>
    <div class="p-5">
        <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Trouvez la bonne affaire</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pour voir les offres près de chez vous, sélectionnez votre ville ou la catégorie qui vous intéresse.</p>
       
    </div>
</div>
      
<div class="max-w-sm bg-white border border-gray-200 rounded-lg  dark:bg-gray-800 dark:border-gray-700 shadow-lg">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('assets/contacter le vendeur.jpg') }}"   alt="" />
    </a>
    <div class="p-5">
        <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Contactez le vendeur</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Quand vous avez trouvé l'objet que vous recherchez, contactez le vendeur par e-mail ou par téléphone.</p>
       
    </div>
</div>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg  dark:bg-gray-800 dark:border-gray-700 shadow-lg">
    <a href="#">
        <img class="rounded-t-lg"  src="{{ asset('assets/shaking handes.jpeg') }}"   alt="" />
    </a>
    <div class="p-5">
        <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Faites la bonne affaire</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rencontrez le vendeur et faites la bonne affaire.</p>
       
    </div>
    
</div>
</div>
  
<footer class="bg-white  shadow dark:bg-gray-900 bottom-0 left-0 w-full mt-14">
    <div class="w-full max-w-screen-xl mx-auto p-3 md:p-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-blue-700">Quick <span class="text-yellow-500">annonce</span></span>
            </a>
        </div>
        <hr class="my-3 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-6" />
        <span class="block text-xs text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">DevFs.lemalmi</a>. All Rights Reserved.</span>
    </div>
</footer>

      

    




</body>
</html>
