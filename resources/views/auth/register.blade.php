@extends('layouts.app')

@section('content')



<section class="bg-gray-50 dark:bg-gray-200">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          Creer un nouveau compte
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
          @csrf
          <div>
            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom" >
            @error('name')
              <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email</label>
            <input type="email"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="nom@entreprise.com" >
            @error('email')
              <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
            <input type="password"  id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" required autocomplete="new-password">
            @error('password')
              <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div>
            <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer votre Mot de passe</label>
            <input type="password"  id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password_confirmation" required autocomplete="new-password">
            @error('password')
              <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-start mt-4">
             
          </div>
          <div class="w-full mt-6">
            <button type="submit" class

="w-full bg-blue-700 hover:bg-blue-800 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Se connecter</button>
           
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
