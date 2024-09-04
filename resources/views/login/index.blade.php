<!DOCTYPE html>
<html lang="en" class="scroll-smooth h-full bg-white">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite('resources/css/app.css')
  <title>Login Page</title>
</head>
<body class="h-full font-poppins bg-[#F8F8F8]">
  <main class="lg:pt-32">
    
    <div class="flex min-h-full lg:h-[80%] lg:max-w-[600px]  lg:m-auto flex-col justify-center px-6 py-12 lg:px-8 lg:shadow-xl lg:rounded-md bg-white">
      @if(session()->has('loginError'))
        <div class="bg-red-100 text-red-500 rounded p-4 flex justify-between items-center mb-4">
          {{session('loginError')}}
          <button type="button" class="" onclick="this.parentElement.style.display='none'">X
          </button>
        </div>  
      @endif
      @if(session()->has('success'))
        <div class="bg-green-100 text-green-500 rounded p-4 flex justify-between items-center mb-4">
          {{session('success')}}
          <button type="button" class="" onclick="this.parentElement.style.display='none'">X
          </button>
        </div>  
      @endif
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="logo flex items-center justify-center md:gap-4 gap-2">
          <img src="{{URL('storage/serene-bali-logo-black.png')}}" alt="Serene Bali Logo" class="md:w-[19px] w-[14px]">
          <a href="" class="md:text-base text-sm"><span class="font-bold">S E R E N E</span> <span class="font-light">Bali</span></a>
        </div>
        
        <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
      </div>
    
      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/login" method="post">
          @csrf
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4 @error('email') is-invalid outline-red-500 @enderror" autofocus required value={{old('email')}}>
              @error('email') 
              <div class="invalid-message text-xs text-red-500">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
    
          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              <div class="text-sm">
                <a href="#" class="font-semibold text-[#02205E] hover:text-indigo-500">Forgot password?</a>
              </div>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
            </div>
            <div class="mt-2">
              <input type="checkbox" name="rememberMe">
              <label for="rememberMe">Remember me</label>
            </div>
            
          </div>
    
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-[#02205E] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
          </div>
        </form>
    
        <p class="mt-10 text-center text-sm text-gray-500">
          Don't have account? <a href="/register" class="text-blue-800 font-bold hover:text-indigo-500">Signup here</a>
        </p>
        {{-- Contact --}}
        <div class="flex gap-4 mt-6">
          <span class="phone text-sm flex gap-2 text-[#61605E]">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.625 18C14.8889 18 13.1736 17.6215 11.4792 16.8646C9.78472 16.1076 8.24306 15.0347 6.85417 13.6458C5.46528 12.2569 4.39236 10.7153 3.63542 9.02083C2.87847 7.32639 2.5 5.61111 2.5 3.875C2.5 3.625 2.58333 3.41667 2.75 3.25C2.91667 3.08333 3.125 3 3.375 3H6.75C6.94444 3 7.11806 3.06597 7.27083 3.19792C7.42361 3.32986 7.51389 3.48611 7.54167 3.66667L8.08333 6.58333C8.11111 6.80556 8.10417 6.99306 8.0625 7.14583C8.02083 7.29861 7.94444 7.43056 7.83333 7.54167L5.8125 9.58333C6.09028 10.0972 6.42014 10.5938 6.80208 11.0729C7.18403 11.5521 7.60417 12.0139 8.0625 12.4583C8.49306 12.8889 8.94444 13.2882 9.41667 13.6562C9.88889 14.0243 10.3889 14.3611 10.9167 14.6667L12.875 12.7083C13 12.5833 13.1632 12.4896 13.3646 12.4271C13.566 12.3646 13.7639 12.3472 13.9583 12.375L16.8333 12.9583C17.0278 13.0139 17.1875 13.1146 17.3125 13.2604C17.4375 13.4062 17.5 13.5694 17.5 13.75V17.125C17.5 17.375 17.4167 17.5833 17.25 17.75C17.0833 17.9167 16.875 18 16.625 18ZM5.02083 8L6.39583 6.625L6.04167 4.66667H4.1875C4.25694 5.23611 4.35417 5.79861 4.47917 6.35417C4.60417 6.90972 4.78472 7.45833 5.02083 8ZM12.4792 15.4583C13.0208 15.6944 13.5729 15.8819 14.1354 16.0208C14.6979 16.1597 15.2639 16.25 15.8333 16.2917V14.4583L13.875 14.0625L12.4792 15.4583Z" fill="#61605E"/>
              </svg>
              082348032028
          </span>
          <span class="email text-sm flex gap-2 text-[#61605E]">
            <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 16.5C1.45 16.5 0.979167 16.3042 0.5875 15.9125C0.195833 15.5208 0 15.05 0 14.5V2.5C0 1.95 0.195833 1.47917 0.5875 1.0875C0.979167 0.695833 1.45 0.5 2 0.5H18C18.55 0.5 19.0208 0.695833 19.4125 1.0875C19.8042 1.47917 20 1.95 20 2.5V14.5C20 15.05 19.8042 15.5208 19.4125 15.9125C19.0208 16.3042 18.55 16.5 18 16.5H2ZM18 4.5L10.525 9.175C10.4417 9.225 10.3542 9.2625 10.2625 9.2875C10.1708 9.3125 10.0833 9.325 10 9.325C9.91667 9.325 9.82917 9.3125 9.7375 9.2875C9.64583 9.2625 9.55833 9.225 9.475 9.175L2 4.5V14.5H18V4.5ZM10 7.5L18 2.5H2L10 7.5ZM2 4.75V3.275V3.3V3.2875V4.75Z" fill="#61605E"/>
              </svg>
              sales@serenebaliproperty.com  
          </span>
        </div>
      </div>
    </div>    
  </main>
</body>
