@extends('layouts.app')

@section('content')



<section class="bg-gray-50 dark:bg-gray-200">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          Connectez-vous à votre compte
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
          @csrf
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="nom@entreprise.com" >
            @error('email')
              <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" required autocomplete="current-password">
            @error('password')
              <span class="text-red-500" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-start mt-4">
              <div class="flex items-center h-5">
                <input checked id="checked-checkbox" type="checkbox" id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              </div>
              <div class="ml-3 text-sm ">
                <label for="remember" class="text-gray-500 dark:text-gray-300">Se souvenir de moi</label>
              </div>
            </div>
          </div>
          <div class="w-full mt-6">
            <button type="submit" class

="w-full bg-blue-700 hover:bg-blue-800 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Se connecter</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400 mt-2">
              Vous n'avez pas encore de compte ? <a href="{{ route('register') }}" class="text-yellow-500 font-medium text-primary-600 hover:underline dark:text-primary-500">Inscrivez-vous</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
