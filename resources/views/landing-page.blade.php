<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>