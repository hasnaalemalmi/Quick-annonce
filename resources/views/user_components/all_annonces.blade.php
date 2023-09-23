@extends('publisher')

@section('content-user')

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full">
@foreach ($annonces as $ann)

  <div class="relative mx-auto w-full">
	<a href="#" class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
	  <div class="shadow p-4 rounded-lg bg-white">
		<div class="flex justify-center relative rounded-lg overflow-hidden h-52">
		  <div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full">
			<div class="absolute inset-0 bg-black ">
			<img src="{{ asset('photo/' . $ann->photo_1) }}" alt="{{ $ann->titre }}">
            </div>
		  </div>

		 

		  
		</div>

		<div class="mt-4">
		  <h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1" title="New York">
          {{ $ann->titre }}
		  </h2>
		  <p class="mt-2 text-sm text-gray-800 line-clamp-1" title="New York, NY 10004, United States">
          {{ $ann->ville->ville_name }}
		  </p>
		</div>

		<div class="grid grid-cols-2 grid-rows-2 gap-4 mt-8">
		  <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
		  <svg class="w-8 h-8"  version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="64px" height="64px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:3;} .st2{fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;} .st3{fill:none;} </style> <polyline class="st0" points="22,22 22,29 16,26 10,29 10,22 "></polyline> <path class="st0" d="M18.3,3h-4.6c-2.1,0-4.1,1.1-5.2,3l-2.3,4c-1.1,1.9-1.1,4.1,0,6l2.3,4c1.1,1.9,3.1,3,5.2,3h4.6 c2.1,0,4.1-1.1,5.2-3l2.3-4c1.1-1.9,1.1-4.1,0-6l-2.3-4C22.4,4.1,20.5,3,18.3,3z"></path> <line class="st0" x1="16" y1="9" x2="16" y2="10"></line> <line class="st0" x1="16" y1="16" x2="16" y2="17"></line> <path class="st0" d="M17,10h-1.5c-0.8,0-1.5,0.7-1.5,1.5v0c0,0.8,0.7,1.5,1.5,1.5h1c0.8,0,1.5,0.7,1.5,1.5v0c0,0.8-0.7,1.5-1.5,1.5 H15"></path> <rect x="-144" y="-360" class="st3" width="536" height="680"></rect> </g></svg>
			<span class="mt-2 xl:mt-0">
            {{ $ann->prix }} DH
			</span>
		  </p>
		  <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
		  <svg class="h-8 w-8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="user"> <g> <path d="M20,21V19a4,4,0,0,0-4-4H8a4,4,0,0,0-4,4v2" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path> <circle cx="12" cy="7" fill="none" r="4" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle> </g> </g> </g> </g></svg>
			<span class="mt-2 xl:mt-0">
            {{ $ann->user->name }}
			</span>
		  </p>
		
		</div>

		<div class="grid grid-cols-2 mt-8">
		  <div class="flex items-center">
			

			{{ $ann->description }}
		  </div>

		  <div class="flex justify-end">
			<p class="inline-block font-semibold text-primary whitespace-nowrap leading-tight rounded-xl">
			  <span class="text-sm uppercase">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                <img class="w-6 h-6" src="{{ asset('assets/arrow.svg') }}" alt="">
  Plus de Detail
</button>
			  </span>
			 
			</p>
		  </div>
		</div>
	  </div>
	</a>
  </div>

  
  
  @endforeach
</div>
{{ $annonces->links() }}
@endsection
