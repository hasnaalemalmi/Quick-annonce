@extends('layouts.app')

@section('content')

<div class="  grid grid-cols-5 grid-rows-5 gap-y-6 gap-x-4 h-screen">
    <div class="col-start-2 col-end-4">
        

    <form class="flex items-center mt-8">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Search</span>
    </button>
</form>


    </div>
   <div class="col-start-5 col-end-6 text-center ">
   <div class="mr-8">
   
       <div class="mt-4"></div>
       <a href="{{ route('publisher_components.add_annonce') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark bg-slate-200 shadow-lg  rounded-2xl">
           <img class="w-14 h-14 ml-2" src="{{ asset('assets/panier.svg') }}" alt="logo">
           <p class="hidden sm:hidden md:hidden lg:block m-4">Deposer votre annonce gratuitement </p>   
        </a>
        
    </div>
   </div>
   <div class=" text-center ">
   <div class="mr-8">
    <div class="mt-4"></div>
    <a href="{{ route('publisher_components.annonce') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark bg-slate-200 shadow-lg rounded-2xl">
        <img class="w-14 h-14 ml-2" src="{{ asset('assets/home.svg') }}" alt="logo">
        <p class="hidden sm:hidden md:hidden lg:block m-4">Home</p>   
    </a>
</div>

   </div>
   <div class=" text-center ">
   <div class="mr-8">
   
       <div class="mt-4"></div>
       <a href="{{ route('publisher_components.annonce_Immobilier') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark bg-slate-200 shadow-lg  rounded-2xl">
           <img class="w-14 h-14 ml-2" src="{{ asset('assets/Immobilier.svg') }}" alt="logo">
           <p class="hidden sm:hidden md:hidden lg:block m-4">Immobilier </p>   
        </a>
        
    </div>
   </div>
   <div class=" text-center ">
   <div class="mr-8">

       <div class="mt-4"></div>
       <a href="{{ route('publisher_components.annonce_Electronique') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark bg-slate-200 shadow-lg  rounded-2xl">
           <img class="w-14 h-14 ml-2" src="{{ asset('assets/Electronique.svg') }}" alt="logo">
           <p class="hidden sm:hidden md:hidden lg:block m-4">Electronique </p>   
        </a>
        
    </div>
   </div>
   <div class=" text-center ">
   <div class="mr-8">
   
       <div class="mt-4"></div>
       <a href="{{ route('publisher_components.annonce_Voiture') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark bg-slate-200 shadow-lg  rounded-2xl">
           <img class="w-14 h-14 ml-2" src="{{ asset('assets/Voiture.svg') }}" alt="logo">
           <p class="hidden sm:hidden md:hidden lg:block m-4">Voiture</p>   
        </a>
        
    </div>
   </div>
   <div class=" text-center ">
   <div class="mr-8">

       <div class="mt-4"></div>
       <a href="{{ route('publisher_components.annonce_Moto') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark bg-slate-200 shadow-lg rounded-2xl">
           <img class="w-14 h-14 ml-2" src="{{ asset('assets/Moto.svg') }}" alt="logo">
           <p class="hidden sm:hidden md:hidden lg:block m-4">Moto </p>   
        </a>
        
    </div>
    
</div>


<div class="col-start-1 col-end-6 ">
 
 @yield('content-user')
</div>
</div>
   </div>
   
  
</div>
    
@endsection
