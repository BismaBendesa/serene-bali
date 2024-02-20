<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  @vite('resources/css/app.css')
  <title>Landing Page</title>
</head>
<body class="font-poppins m-auto bg-[#EAEAEA]">
  {{-- start header --}}
  <header class="flex items-center justify-between w-full md:px-16 md:py-5 py-4 px-8 fixed z-50 bg-white md:left-0 md:right-0 m-auto max-w-[1920px] ">
    <div class="logo flex items-center md:gap-4 gap-2">
      <img src="{{URL('storage/serene-bali-logo-black.png')}}" alt="Serene Bali Logo" class="md:w-[19px] w-[14px]">
      <a href="" class="md:text-base text-sm"><span class="font-bold">S E R E N E</span> <span class="font-light">Bali</span></a>
    </div>
    {{-- Desktop nav --}}
    <nav class="gap-14 md:flex hidden md:gap-8">
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Buy</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Rent</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Consultation</a>
      <a href="#about-us" class="text-base hover:font-bold transition-all delay-50">About</a>
      <a href="#faqs" class="text-base hover:font-bold transition-all delay-50">FAQs</a>
    </nav>
    {{-- maybe we need to know how to make this button as component --}}
    <button class="border border-black rounded-3xl px-6 py-2 font-medium text-base hover:bg-black hover:text-white transition-colors delay-50 md:block hidden">Sign Up</button> 
    <div class="block md:hidden cursor-pointer" id="burgerButton">
      <svg width="32" height="16" viewBox="-10 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="32" height="4" rx="2" fill="black" id="rect-top" class="transition duration-500"/>
        <rect y="12" width="32" height="4" rx="2" fill="black" id="rect-bottom" class="transition duration-500"/>
        {{-- -translate-y-1 rotate-45  --}}
        {{-- translate-y-1.5 -translate-x-2 -rotate-45  --}}
        {{-- viewBox="-5 0 32 16" --}}
      </svg>
    </div>
  </header>
  {{-- mobile nav --}}
  <nav class="flex md:hidden gap-4 flex-col fixed left-0 right-0 py-4 px-8 bg-gray-200 transition -translate-y-72 duration-500 z-10 top-14" id="mobileMenu">
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">Buy</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">Rent</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">Consultation</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">About</a>
    <a href="" class="text-base active:font-bold focus:font-bold focus:underline focus:underline-offset-2 transition-all delay-50 h-9">FAQs</a>
  </nav>
  {{-- end header --}}

  {{-- start search-section --}}
  <div class="search-section pt-20 px-8 max-h-[320px] md:py-5 md:pt-20 md:max-h-[450px] bg-no-repeat bg-cover w-full max-w-[1920px] m-auto" style="background-image:url({{asset('storage/hero-image.png')}})">
    <h1 class="text-white font-bold text-center m-auto text-xl md:text-5xl md:mt-16 md:max-w-[850px] md:leading-normal ">Buy & Rent Villa Properties With Serene Bali</h1>
    <p class="text-white text-center text-xs m-auto mt-2 md:text-xl md:mt-6">We are property agency startup that provides best service.</p>
    {{-- we need to make this search bar as a component maybe --}}
    <div class="search-bar bg-[#EAE6E3] max-w-[1060px] px-5 py-5 mt-8 rounded-lg md:px-8 md:py-8 md:rounded  mx-auto md:mt-16 md:shadow-xl shadow-lg">
      <form action="" class="flex flex-col justify-center gap-3 md:gap-6 md:flex-row  md:items-end">
        <div class="input-form flex flex-col gap-2 relative after:content-['▼'] after:right-4 after:top-9 text-sm md:after:text-base md:after:top-12 md:after:right-3 after:absolute z-0">
          <label for="action" class="text-[#5F5E5E] font-medium text-sm md:text-base md:text-black">Action</label>
          <select name="action" id="action" class="bg-transparent border border-black appearance-none cursor-pointer rounded-lg py-2 px-4 md:rounded-xl  md:px-3 md:py-3 md:min-w-[188px] text-sm md:text-base">
            <option value="Buy" class="text-sm md:text-base">Buy</option>
            <option value="Rent" class="text-sm md:text-base">Rent</option>
            <option value="Sell" class="text-sm md:text-base">Sell</option>
          </select>
        </div>
        <div class="input-form flex flex-col gap-2 relative after:content-['▼'] after:right-4 after:top-9 text-sm md:after:text-base md:after:top-12 md:after:right-3 after:absolute z-0">
          <label for="type" class="text-[#5F5E5E] font-medium text-sm md:text-base md:text-black">Type</label>
          <select name="type" id="type" class="bg-transparent border border-black appearance-none cursor-pointer rounded-lg py-2 px-4 md:rounded-xl  md:px-3 md:py-3 md:min-w-[188px] text-sm md:text-base">
            <option value="Villa">Villa</option>
            <option value="Land">Land</option>
            <option value="Homestay">Homestay</option>
          </select>
        </div>
        <div class="input-form flex flex-col gap-2 relative z-0">
          <label for="location" class="text-[#5F5E5E] font-medium text-sm md:text-base md:text-black">Location</label>
          <input type="text" id="location" name="location" class="bg-transparent border border-black appearance-none rounded-lg py-2 px-4 md:rounded-xl  md:px-3 md:py-3 md:min-w-[188px] text-sm md:text-base" value="Ubud">
        </div>
        <div class="input-form flex flex-col gap-2 relative after:content-['▼'] after:right-4 after:top-9 text-sm md:after:text-base md:after:top-12 md:after:right-3 after:absolute z-0">
          <label for="location" class="text-[#5F5E5E] font-medium text-sm md:text-base md:text-black">Budget</label>
          <select name="location" id="location" class="bg-transparent border border-black appearance-none cursor-pointer rounded-lg py-2 px-4 md:rounded-xl  md:px-3 md:py-3 md:min-w-[188px] text-sm md:text-base">
            <option value="<$1000">Less $1000</option>
            <option value="$1000-$2000">$1000 - $2000</option>
            <option value="$2000-5000">$2000 - $5000</option>
            <option value=">$5000">Over $5000</option>
          </select>
        </div>
        {{-- might need to add component to the button --}}
        <button type="submit" class="flex items-center justify-center bg-[#182955] text-white gap-2 px-4 py-3 max-h-12 rounded-lg mt-3 text-sm md:text-base active:translate-y-0.5">Search <span class="material-symbols-rounded text-white md:mt-0 text-sm md:text-base">
          search
          </span>
        </button>
      </form>
    </div>
  </div>
  {{-- end search-section --}}

  {{-- start our service --}}
  <div class="our-service grid md:grid-cols-2 grid-cols-1 md:mt-48 mt-[350px] px-8 md:px-16 md:gap-x-32 md:gap-y-0 gap-y-6 max-w-[1920px] m-auto">
    <div class="service">
      <h1 class="font-georgia md:text-6xl text-3xl uppercase md:mb-8 mb-4 text-center md:text-left">Our service</h1>
      <p class="md:text-base text-xs md:mb-6 mb-4 md:leading-8 leading-6 text-justify">Serene Bali Offers many service that will help you find your dream house in Bali. We offers the villa with many concept that you wish. Our agent always ready to help you with your problem and will come up to a brilliant solution to guide you through your journey finding your dream house.</p>
      <p class="md:text-base text-xs md:leading-8 leading-6 text-justify">Serene Bali Offers many service that will help you find your dream house in Bali. We offers the villa with many concept that you wish. Serene Bali Offers many service that will help you find your dream house in Bali. We offers the villa with many concept that you wish. </p>
    </div>
    <div class="menus grid grid-cols-1 gap-y-3 md:gap-y-3">
      <div class="service-menu flex items-center justify-between rounded-lg md:basis-full w-full bg-[#EAE6E3] md:px-6 md:py-6 px-4 py-4 shadow-md ">
        <div class="service-text">
          <h3 class="font-medium text-base md:text-xl">1. Rent Villas</h3>
          <p class="text-xs md:text-base md:mt-2 mt-1">Some text with crispy details</p>
        </div>
        <a href="javascript:void(0)" class="bg-[#182955] text-white gap-2 px-4 py-2 rounded-lg mt-3 text-sm md:text-base"><button>Go</button></a>
      </div>
      <div class="service-menu flex items-center justify-between rounded-lg md:basis-full w-full bg-[#EAE6E3] md:px-6 md:py-6 px-4 py-4 shadow-md ">
        <div class="service-text">
          <h3 class="font-medium text-base md:text-xl">2. Buy Properties</h3>
          <p class="text-xs md:text-base md:mt-2 mt-1">Some text with crispy details</p>
        </div>
        <a href="javascript:void(0)" class="bg-[#182955] text-white gap-2 px-4 py-2 rounded-lg mt-3 text-sm md:text-base"><button>Go</button></a>
      </div>
      <div class="service-menu flex items-center justify-between rounded-lg md:basis-full w-full bg-[#EAE6E3] md:px-6 md:py-6 px-4 py-4 shadow-md ">
        <div class="service-text">
          <h3 class="font-medium text-base md:text-xl">3. Consultation</h3>
          <p class="text-xs md:text-base md:mt-2 mt-1">Some text with crispy details</p>
        </div>
        <a href="javascript:void(0)" class="bg-[#182955] text-white gap-2 px-4 py-2 rounded-lg mt-3 text-sm md:text-base"><button>Go</button></a>
      </div>
      <div class="service-menu flex items-center justify-between rounded-lg md:basis-full w-full bg-[#EAE6E3] md:px-6 md:py-6 px-4 py-4 shadow-md ">
        <div class="service-text">
          <h3 class="font-medium text-base md:text-xl">4. Manage Properties</h3>
          <p class="text-xs md:text-base md:mt-2 mt-1">Some text with crispy details</p>
        </div>
        <a href="javascript:void(0)" class="bg-[#182955] text-white gap-2 px-4 py-2  rounded-lg mt-3 text-sm md:text-base"><button>Go</button></a>
      </div>
    </div>
  </div>
  {{-- end our service --}}

  {{-- start carousel section --}}
  <div class="carousel-section md:px-16 px-8 md:mt-20 mt-14 md:py-20 py-9 bg-[#445147] max-w-[1920px] m-auto">
    <h1 class="font-georgia md:text-6xl text-3xl uppercase text-center text-white md:mb-8 mb-4">Browse Our Properties</h1>
    <div id="default-carousel" class="relative w-full max-w-[970px] m-auto" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{asset('storage/Villa-1.png')}}" class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="Villa San Louis">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{asset('storage/villa-2.png')}}" class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="Villa San Louis II">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{asset('storage/villa-3.png')}}" class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full" alt="Villa San Louis III">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#445147] group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#445147] group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>
    <div class="carousel-description max-w-[970px] mx-auto mt-3 md:mt-6">
      <div class="carousel-header w-full flex justify-between items-center">
        <h3 class="md:text-3xl text-xl text-white">Villa San Louis</h3>
        <p class="text-lg md:text-2xl text-white">$2200</p>
      </div>
      <a href="javascript:void(0)"><button class="gap-2 px-4 py-2 rounded-lg mt-3 text-sm md:text-base bg-white text-[#445147]">See More</button>
      </a>
    </div>
  </div>
  {{-- end carousel section --}}
  {{-- start catalog section --}}
  <div class="catalog-section md:py-20 md:px-16 px-8 py-16 max-w-[1920px] m-auto">
    <h1 class="uppercase font-georgia md:text-6xl text-center md:mb-8 mb-4 text-3xl">Find your properties</h1>
    <div class="all-catalog-list">
      <div class="catalog-list">
        <div class="catalog-header flex justify-between items-center md:mb-6 mb-4">
          <h3 class="font-semibold md:text-3xl text-lg">Most Popular Villa</h3>
          <a href="javascript:void(0)"><button class="gap-2 px-4 py-2 rounded-lg mt-3 text-sm md:text-base bg-[#445147] text-white">See More</button>
          </a>
        </div>
        <div class="catalog grid md:grid-cols-3 md:gap-x-6 gap-y-4 grid-cols-1 md:pb-12">
          {{-- start property-card (should make component for this) --}}
          <a href="javascript:void(0)" class="md:max-w-full md:w-full bg-[#EAE6E3] rounded-md shadow-lg relative z-0 active:translate-y-2 hover:shadow-2xl transition duration-300">
            <span class="py-1 px-2 bg-white text-black rounded-lg text-xs md:text-base font-medium absolute md:top-4 md:left-4 top-2 left-2">Leasehold</span>
            <img src="{{asset('storage/villa-nusa-dua.jpg')}}" alt="Villa terpopuler di bali" class="w-full max-h-[280px] object-cover">
            <h3 class="font-medium md:text-2xl md:pt-6 md:px-6 px-4 pt-6 text-xl">Villa Nusa Dua</h3>
            <div class="facilities grid grid-cols-2 md:px-6 px-4 md:mt-4 md:mb-6 mt-2 mb-4 gap-y-2 gap-x-1 md:gap-y-4 md:gap-x-2">
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  location_on
                </span>
                <span class="text-xs md:text-base">Jimbaran, Badung</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  home
                </span>
                <span class="text-xs md:text-base">8,094 m2</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  bed
                </span>
                <span class="text-xs md:text-base">5 bedrooms</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  shower
                </span>
                <span class="text-xs md:text-base">2 bathrooms</span>
              </div>
            </div>
            <div class="card-footer flex items-end justify-between pb-4 md:pb-6 px-4 md:px-6">
              <div class="price">
                <s class="font-light md:text-base text-sm">$8000</s>
                <p class="font-medium md:text-2xl text-lg">$4000</p>
              </div>
              <div class="discount py-1 px-2 bg-black text-white rounded-lg text-xs md:text-base">
                50% OFF
              </div>
            </div>
          </a>
          {{-- end property-card --}}
          <a href="javascript:void(0)" class="md:max-w-full md:w-full bg-[#EAE6E3] rounded-md shadow-lg relative z-0 active:translate-y-2 hover:shadow-2xl transition duration-300">
            <span class="py-1 px-2 bg-white text-black rounded-lg text-xs md:text-base font-medium absolute md:top-4 md:left-4 top-2 left-2">Leasehold</span>
            <img src="{{asset('storage/villa-ungasan.jpg')}}" alt="Villa terpopuler di bali" class="w-full max-h-[280px] object-cover">
            <h3 class="font-medium md:text-2xl md:pt-6 md:px-6 px-4 pt-6 text-xl">Villa Ungasan</h3>
            <div class="facilities grid grid-cols-2 md:px-6 px-4 md:mt-4 md:mb-6 mt-2 mb-4 gap-y-2 gap-x-1 md:gap-y-4 md:gap-x-2">
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  location_on
                </span>
                <span class="text-xs md:text-base">Jimbaran, Badung</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  home
                </span>
                <span class="text-xs md:text-base">8,094 m2</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  bed
                </span>
                <span class="text-xs md:text-base">5 bedrooms</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  shower
                </span>
                <span class="text-xs md:text-base">2 bathrooms</span>
              </div>
            </div>
            <div class="card-footer flex items-end justify-between pb-4 md:pb-6 px-4 md:px-6">
              <div class="price">
                <s class="font-light md:text-base text-sm">$8000</s>
                <p class="font-medium md:text-2xl text-lg">$4000</p>
              </div>
              <div class="discount py-1 px-2 bg-black text-white rounded-lg text-xs md:text-base">
                50% OFF
              </div>
            </div>
          </a>
          {{-- end property-card --}}
          <a href="javascript:void(0)" class="md:max-w-full md:w-full bg-[#EAE6E3] rounded-md shadow-lg relative z-0 active:translate-y-2 hover:shadow-2xl transition duration-300">
            <span class="py-1 px-2 bg-white text-black rounded-lg text-xs md:text-base font-medium absolute md:top-4 md:left-4 top-2 left-2">Leasehold</span>
            <img src="{{asset('storage/villa-canggu.jpg')}}" alt="Villa terpopuler di bali" class="w-full max-h-[280px] object-cover">
            <h3 class="font-medium md:text-2xl md:pt-6 md:px-6 px-4 pt-6 text-xl">Villa Canggu</h3>
            <div class="facilities grid grid-cols-2 md:px-6 px-4 md:mt-4 md:mb-6 mt-2 mb-4 gap-y-2 gap-x-1 md:gap-y-4 md:gap-x-2">
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  location_on
                </span>
                <span class="text-xs md:text-base">Jimbaran, Badung</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  home
                </span>
                <span class="text-xs md:text-base">8,094 m2</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  bed
                </span>
                <span class="text-xs md:text-base">5 bedrooms</span>
              </div>
              <div class="fac-wrapper flex items-center">
                <span class="material-symbols-rounded">
                  shower
                </span>
                <span class="text-xs md:text-base">2 bathrooms</span>
              </div>
            </div>
            <div class="card-footer flex items-end justify-between pb-4 md:pb-6 px-4 md:px-6">
              <div class="price">
                <s class="font-light md:text-base text-sm">$8000</s>
                <p class="font-medium md:text-2xl text-lg">$4000</p>
              </div>
              <div class="discount py-1 px-2 bg-black text-white rounded-lg text-xs md:text-base">
                50% OFF
              </div>
            </div>
          </a>
          {{-- end property-card --}}
        </div>
      </div>
    </div>
  </div>
  {{-- end catalog section --}}
  {{-- start about us --}}
  <div class="about-us-section grid grid-rows-1 px-8 md:px-14 max-w-[1920px] m-auto" id="about-us">
    <h1 class="font-georgia text-3xl md:text-6xl text-center uppercase md:mb-12 mb-6">About Us</h1>
    <div class="about-us-content flex flex-col gap-8 md:gap-14">
      <div class="about-serene grid grid-cols-1 md:grid-cols-2 justify-items-center md:mt-12 mt-0">
        {{-- serene logo image --}}
        <img src="{{asset('storage/about-us-logo.png')}}" alt="Serene Image" class="w-[208px] md:w-[416px] lg:max-w-[500px]"> 
        <div class="description mt-6 md:mt-0">
          <h3 class="font-semibold md:text-4xl text-xl md:mb-6 mb-4 md:text-left text-center">What We Do?</h3>
          <p class="md:text-base text-sm mb-4 md:mb-6 md:leading-8 leading-6 text-justify">Serene Bali Offers many service that will help you find your dream house in Bali. We offers the villa with many concept that you wish. Our agent always ready to help you with your problem and will come up to a brilliant solution to guide you through your journey finding your dream house.</p>
          <p class="md:text-base text-sm md:leading-8 leading-6 text-justify">Serene Bali Offers many service that will help you find your dream house in Bali. We offers the villa with many concept that you wish. Our agent always ready to help you with your problem and will come up to a brilliant solution to guide you through your journey finding your dream house.</p>
        </div>
      </div>
      <div class="about-serene grid grid-cols-1 md:grid-cols-2 justify-items-center">
        {{-- Team profile image --}}
        <div class="description max-w-[770px] order-last md:order-first">
          <h3 class="font-semibold md:text-4xl text-xl md:mb-6 mb-4 text-center md:text-left">Know Us Better</h3>
          <p class="md:text-base text-sm mb-4 md:mb-6 md:leading-8 leading-6 text-justify">Serene Bali Offers many service that will help you find your dream house in Bali. We offers the villa with many concept that you wish. Our agent always ready to help you with your problem and will come up to a brilliant solution to guide you through your journey finding your dream house.</p>
          <div class="social-media flex flex-col md:items-baseline items-center md:m-0 m-auto gap-4 ">
            <h5 class="font-medium md:text-base text-sm">Our Social Media</h5>
            <div class="grid grid-cols-4 gap-x-6">
              <a target="_blank" href="https://www.facebook.com/profile.php?id=61555542423970"><img src="{{asset('storage/facebook-logo.png')}}" alt="Facebook Serene Bali" class="md:w-[50px] w-[30px]"></a>
              <a target="_blank" href="https://api.whatsapp.com/message/YCS4YTQHFGEJL1?autoload=1&app_absent=0"><img src="{{asset('storage/whatsapp-logo.png')}}" alt="Whatsapp Serene Bali" class="md:w-[50px] w-[30px]"></a>
              <a target="_blank" href="https://www.tiktok.com/@serenebali"><img src="{{asset('storage/tiktok-logo.png')}}" alt="Tiktok Serene Bali" class="md:w-[50px] w-[30px]"></a>
              <a target="_blank" href="https://www.instagram.com/serenebali/"><img src="{{asset('storage/instagram-logo.png')}}" alt="Instagram Serene Bali" class="md:w-[50px] w-[30px]"></a>
            </div>
          </div>
        </div>
        <img src="{{asset('storage/teams.png')}}" alt="Team Profile" class="md:w-[600px] justify-self-end rounded-2xl shadow-md md:order-last order-first md:mb-0 mb-6 object-cover lg:max-w-[500px]"> 
      </div>
    </div>
  </div>

  {{-- end about us --}}
  {{-- start faqs --}}
  <div class="faqs-section md:pt-28 md:px-16 px-8 pt-16 max-w-[1920px] m-auto" id="faqs">
    <div class="faqs-header">
      <h1 class="font-georgia text-3xl md:text-6xl text-center uppercase">FREQUENTLY ASKED QUESTIONS</h1>
      <p class="md:text-2xl text-base text-center text-[#60605F] md:mt-6 md:mb-12 mt-4 mb-6">Call Center | 0131-0841-1830</p>
    </div>    
    <div class="faqs-accordions" id="accordion-collapse" data-accordion="collapse">
      {{-- Need to make this as a faq-component --}}
      <div id="accordion-collapse-heading-1">
        <button type="button" class="flex items-center text-black justify-center w-full p-5 font-medium bg-white dark:text-black hover:bg-[#445147] hover:text-white gap-3 md:rounded-t-2xl rounded-t-xl" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
          <span>How they own place?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
        <div class="p-5 border border-b-0 border-gray-200 bg-white md:rounded-b-2xl rounded-b-xl">
          <p class="mb-2 text-black">Some answer with related to the topics on the faqs. Need to keep it clear and simple to make the user knows what's the next step or the solution based on what problem they had.</p>
        </div>
      </div>

      {{-- end faq component --}}
      <div id="accordion-collapse-heading-2" class="md:mt-4 mt-2">
        <button type="button" class="flex items-center justify-center w-full p-5 font-medium bg-white dark:text-black hover:text-white hover:bg-[#445147] gap-3 md:rounded-t-2xl rounded-t-xl" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
          <span>What kind of papers?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
        <div class="p-5 border border-b-0 border-gray-200 bg-white md:rounded-b-2xl rounded-b-xl">
          <p class="mb-2 text-black">Some answer with related to the topics on the faqs. Need to keep it clear and simple to make the user knows what's the next step or the solution based on what problem they had.</p>
        </div>
      </div>
      <div id="accordion-collapse-heading-3" class="md:mt-4 mt-2">
        <button type="button" class="flex items-center justify-center w-full p-5 font-medium bg-white dark:text-black hover:text-white hover:bg-[#445147] gap-3 md:rounded-t-2xl rounded-t-xl" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
          <span>What kind of tax?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
        <div class="p-5 border border-b-0 border-gray-200 bg-white md:rounded-b-2xl rounded-b-xl">
          <p class="mb-2 text-black">Some answer with related to the topics on the faqs. Need to keep it clear and simple to make the user knows what's the next step or the solution based on what problem they had.</p>
        </div>
      </div>
      <div id="accordion-collapse-heading-4" class="md:mt-4 mt-2">
        <button type="button" class="flex items-center justify-center w-full p-5 font-medium bg-white dark:text-black hover:text-white hover:bg-[#445147] gap-3 md:rounded-t-2xl rounded-t-xl" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
          <span>How is the term and condition?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
        <div class="p-5 border border-b-0 border-gray-200 bg-white md:rounded-b-2xl rounded-b-xl">
          <p class="mb-2 text-black">Some answer with related to the topics on the faqs. Need to keep it clear and simple to make the user knows what's the next step or the solution based on what problem they had.</p>
        </div>
      </div>
      <div id="accordion-collapse-heading-5" class="md:mt-4 mt-2">
        <button type="button" class="flex items-center justify-center w-full p-5 font-medium bg-white dark:text-black hover:text-white hover:bg-[#445147] gap-3 md:rounded-t-2xl rounded-t-xl" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
          <span>Notary?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </div>
      <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
        <div class="p-5 border border-b-0 border-gray-200 bg-white md:rounded-b-2xl rounded-b-xl">
          <p class="mb-2 text-black">Some answer with related to the topics on the faqs. Need to keep it clear and simple to make the user knows what's the next step or the solution based on what problem they had.</p>
        </div>
      </div>
    </div>
      


  </div>
  {{-- end faqs --}}

  {{-- start newsletter --}}
  <div class="newsletter grid md:grid-cols-2 grid-cols-1 md:mt-20 mt-12 md:px-16 px-8 bg-[#445147] py-8 md:py-16 max-w-[1920px] m-auto">
    <div class="newsletter-text">
      <h1 class="font-bold md:text-3xl text-lg text-white md:mb-5 mb-3 capitalize">Subscribe to our newsletter</h1>
      <p class="md:text-base text-sm text-white max-w-[442px] opacity-80 mb-5 md:mb-0">Don’t miss Serene Bali update for discount and latest news! Don’t worry, it’s completely free </p>
    </div>
    <div class="newsletter-form">
      <form action="" class="flex md:justify-end justify-normal md:flex-row flex-col md:gap-8 gap-6 items-stretch md:items-end">
        <div class="text-input grid grid-cols-1">
          <label for="name" class="text-white md:text-base text-sm">Name</label>
          <input type="text" id="name" placeholder="name" name="name" class="bg-transparent border border-white rounded-lg md:mt-2 mt-1">
        </div>
        <div class="text-input grid grid-cols-1">
          <label for="email" class="text-white md:text-base text-sm">Email</label>
          <input type="text" id="email" placeholder="email" name="email" class="bg-transparent border border-white rounded-lg md:mt-2 mt-1">
        </div>
        <button class="md:text-base text-sm text-[#445147] bg-white md:px-10 md:py-3 px-0 py-4 cursor-pointer text-center w-full md:w-[140px] md:max-h-[48px] rounded-lg font-bold active:translate-y-1 hover:shadow-2xl transition duration-200">Submit</button>
      </form>
    </div>
  </div>
  {{-- end newsletter --}}
  {{-- start customer review --}}
  <div class="customer-reviews-section px-8 md:px-14 max-w-[1920px] m-auto">
    <h1 class="font-georgia text-3xl md:text-6xl text-center uppercase md:mt-20 mt-10">Our Customer Review</h1>
    <div class="row grid md:grid-cols-3 grid-cols-1 gap-x-4 md:mt-14 mt-6 mb-10 md:mb-14 gap-y-6">
      {{-- need to make this review card as a component --}}
      <div class="review-card bg-[#f1f1f1] md:px-6 md:py-12 py-6 px-6 rounded-xl shadow-xl md:shadow-lg">
        <img src="{{asset('storage/review-pfp-1.png')}}" alt="user profile picture" class="md:w-[100px] md:h-[100px] w-[50px] h-[50px] rounded-full object-cover m-auto">
        <h1 class="md:text-2xl text-lg font-medium md:mt-6 md:mb-2 mt-4 text-center">Heihachi Mishima</h1>
        <p class="md:text-base text-sm text-center md:mb-4 mb-2">Spend 6 months in Villa San Louis</p>
        <p class="review-text text-xs md:text-sm md:mb-6 mb-4 md:mb-6 mb-4 text-justify text-slate-600">
          We really love the ambience. The people around here is very nice. This place also very convenient because it is located near the beach club, artshop, and also sport facility like gym. I find it very easy to do anything because the staff always help me with my problem. 
        </p>
        <div class="flex  gap-1 m-auto justify-center">
          <div>5.0</div> 
          <div class="flex gap-0">
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
          </div>
        </div>
      </div>
      {{-- end review-card component --}}
      <div class="review-card bg-[#f1f1f1] md:px-6 md:py-12 py-6 rounded-xl shadow-xl md:shadow-lg px-6">
        <img src="{{asset('storage/review-pfp-1.png')}}" alt="user profile picture" class="md:w-[100px] md:h-[100px] w-[50px] h-[50px] rounded-full object-cover m-auto">
        <h1 class="md:text-2xl text-lg font-medium md:mb-2 md:mt-6 mt-4 text-center">Heihachi Mishima</h1>
        <p class="md:text-base text-sm text-center md:mb-4 mb-2">Spend 6 months in Villa San Louis</p>
        <p class="review-text text-xs md:text-sm md:mb-6 mb-4 md:mb-6 mb-4 text-justify text-slate-600">
          We really love the ambience. The people around here is very nice. This place also very convenient because it is located near the beach club, artshop, and also sport facility like gym. I find it very easy to do anything because the staff always help me with my problem. 
        </p>
        <div class="flex  gap-1 m-auto justify-center">
          <div>5.0</div>
          <div class="flex gap-0">
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
          </div>
        </div>
      </div>
      <div class="review-card bg-[#f1f1f1] md:px-6 md:py-12 py-6 rounded-xl shadow-xl md:shadow-lg px-6">
        <img src="{{asset('storage/review-pfp-1.png')}}" alt="user profile picture" class="md:w-[100px] md:h-[100px] w-[50px] h-[50px] rounded-full object-cover m-auto">
        <h1 class="md:text-2xl text-lg font-medium md:mb-2 md:mt-6 mt-4 text-center">Heihachi Mishima</h1>
        <p class="md:text-base text-sm text-center md:mb-4 mb-2">Spend 6 months in Villa San Louis</p>
        <p class="review-text text-xs md:text-sm md:mb-6 mb-4 md:mb-6 mb-4 text-justify text-slate-600">
          We really love the ambience. The people around here is very nice. This place also very convenient because it is located near the beach club, artshop, and also sport facility like gym. I find it very easy to do anything because the staff always help me with my problem. 
        </p>
        <div class="flex  gap-1 m-auto justify-center">
          <div>5.0</div>
          <div class="flex gap-0">
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" fill='1' style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
            <span class="material-symbols-rounded w-5" style="font-variation-settings: 'FILL' 1, 'opsz' 20;">
              star_rate
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- end customer review --}}

  {{-- start footer --}}
  <footer class="grid md:grid-cols-2 grid-cols-1 max-w-[1920px] m-auto px-6 md:px-16 bg-[#445147] md:py-12 py-6 items-center md:justify-items-center">
    <div class="left-footer order-last md:order-first">
      <h2 class="font-semibold md:text-4xl hidden md:block max-w-[440px] text-white md:mb-6">Let's Find Your Dream House in Bali</h2>
      <a href="javascript:void(0)" class="hidden md:block md:text-base text-sm text-[#445147] bg-white md:px-10 md:py-3 px-0 py-4 cursor-pointer text-center max-w-[150px] rounded-lg font-bold active:translate-y-1 hover:shadow-2xl transition duration-200"><button >Let's Go</button></a>
      <div class="font-light md:text-base text-xs text-white md:mt-12">©️2024 Serene Bali. All Rights Reserved</div>
    </div>
    <div class="right-footer order-first md:order-last">
      <div class="logo flex items-center md:gap-4 gap-2 md:mb-8 mb-6">
        <img src="{{URL('storage/logo-white-serene.png')}}" alt="Serene Bali Logo" class="md:w-[19px] w-[14px]">
        <a href="" class="md:text-base text-sm"><span class="font-bold text-white">S E R E N E</span> <span class="font-light text-white">Bali</span></a>
      </div>
      <div class="menu md:mb-8 mb-6">
        <div class="md:text-base font-medium text-sm text-slate-400 md:mb-3">Menu</div>
        <div class="list-menu flex md:gap-12 gap-4">
          <a href="javascript:void(0)" class="md:text-base text-sm text-white">Buy</a>
          <a href="javascript:void(0)" class="md:text-base text-sm text-white">Rent</a>
          <a href="javascript:void(0)" class="md:text-base text-sm text-white">Consultation</a>
          
        </div>
      </div>
      <div class="social-media flex flex-col md:items-baseline md:m-0 mb-6 gap-4 ">
        <h5 class="font-medium md:text-base text-sm text-white">Our Social Media</h5>
        <div class="flex gap-6 flex-row">
          <a target="_blank" href="https://www.facebook.com/profile.php?id=61555542423970"><img src="{{asset('storage/facebook-logo.png')}}" alt="Facebook Serene Bali" class="md:w-[50px] w-[30px]"></a>
          <a target="_blank" href="https://api.whatsapp.com/message/YCS4YTQHFGEJL1?autoload=1&app_absent=0"><img src="{{asset('storage/whatsapp-logo.png')}}" alt="Whatsapp Serene Bali" class="md:w-[50px] w-[30px]"></a>
          <a target="_blank" href="https://www.tiktok.com/@serenebali"><img src="{{asset('storage/tiktok-logo.png')}}" alt="Tiktok Serene Bali" class="md:w-[50px] w-[30px]"></a>
          <a target="_blank" href="https://www.instagram.com/serenebali/"><img src="{{asset('storage/instagram-logo.png')}}" alt="Instagram Serene Bali" class="md:w-[50px] w-[30px]"></a>
        </div>
      
    </div>
  </footer>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
{{-- end footer --}}