<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite('resources/css/app.css')
  <title>Landing Page</title>
</head>
<body class="font-poppins max-w-screen-2xl m-auto">
  {{-- start header --}}
  <header class="flex items-center justify-between w-full md:px-16 md:py-5 py-4 px-8 fixed z-10 bg-white md:left-0 md:right-0 m-auto max-w-[1440px]">
    <div class="logo flex items-center md:gap-4 gap-2">
      <img src="{{URL('storage/serene-bali-logo-black.png')}}" alt="Serene Bali Logo" class="md:w-[19px] w-[14px]">
      <a href="" class="md:text-base text-sm"><span class="font-bold">S E R E N E</span> <span class="font-light">Bali</span></a>
    </div>
    {{-- Desktop nav --}}
    <nav class="gap-14 md:flex hidden md:gap-8">
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Buy</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Rent</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Consultation</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">About</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">FAQs</a>
    </nav>
    {{-- maybe we need to know how to make this button as component --}}
    <button class="border border-black rounded-3xl px-6 py-2 font-medium text-base hover:bg-black hover:text-white transition-colors delay-50 md:block hidden">Sign Up</button> 
    <div class="block md:hidden cursor-pointer" id="burgerButton">
      <svg width="32" height="16" viewBox="-10 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="32" height="4" rx="2" fill="black" id="rect-top" class="transition duration-150"/>
        <rect y="12" width="32" height="4" rx="2" fill="black" id="rect-bottom" class="transition duration-150"/>
        {{-- -translate-y-1 rotate-45  --}}
        {{-- translate-y-1.5 -translate-x-2 -rotate-45  --}}
        {{-- viewBox="-5 0 32 16" --}}
      </svg>
    </div>
  </header>
  {{-- mobile nav --}}
  <nav class="flex md:hidden gap-4 flex-col absolute left-0 right-0 py-4 px-8 bg-gray-200 transition -translate-y-72 duration-500 z-0 top-14" id="mobileMenu">
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">Buy</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">Rent</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">Consultation</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">About</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">FAQs</a>
  </nav>
  {{-- end header --}}

  {{-- start search-section --}}
  <div class="search-section md:pt-20 md:px-16 md:py-5 py-4 px-8">
    <h1>Buy & Rent Villa Properties With Serene Bali</h1>
    <p>We are property agency startup that provides best service.</p>
    {{-- we need to make this search bar as a component maybe --}}
    <div class="search-bar">
      <form action="">
        <div class="input-form">
          <label for="action">Action</label>
          <select name="action" id="action">
            <option value="Buy">Buy</option>
            <option value="Rent">Rent</option>
            <option value="Rent">Sell</option>
          </select>
        </div>
        <div class="input-form">
          <label for="type">Type</label>
          <select name="type" id="type">
            <option value="Villa">Villa</option>
            <option value="Land">Land</option>
            <option value="Homestay">Homestay</option>
          </select>
        </div>
        <div class="input-form">
          <label for="location">Location</label>
          <input type="text" id="location" name="location">
        </div>
        <div class="input-form">
          <label for="location">Budget</label>
          <select name="location" id="location">
            <option value="<$1000">Less $1000</option>
            <option value="$1000-$2000">$1000 - $2000</option>
            <option value="$2000-5000">$2000 - $5000</option>
            <option value=">$5000">Over $5000</option>
          </select>
        </div>
        <button type="submit">Search <span class="material-symbols-rounded">
          search
          </span>
        </button>
      </form>
    </div>
  </div>
  {{-- end search-section --}}

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>