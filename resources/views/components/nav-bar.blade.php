{{-- start header --}}
<header class="flex items-center justify-between w-full md:px-16 md:py-5 py-4 px-8 fixed z-50 bg-white md:left-0 md:right-0 m-auto max-w-[1920px] ">
    <div class="logo flex items-center md:gap-4 gap-2">
      <img src="{{URL('storage/serene-bali-logo-black.png')}}" alt="Serene Bali Logo" class="md:w-[19px] w-[14px]">
      <a href="" class="md:text-base text-sm"><span class="font-bold">S E R E N E</span> <span class="font-light">Bali</span></a>
    </div>
    {{-- Desktop nav --}}
    <nav class="gap-14 min-[800px]:flex hidden md:gap-8">
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Buy</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Rent</a>
      <a href="javascript:void(0)" class="text-base hover:font-bold transition-all delay-50">Consultation</a>
      <a href="#about-us" class="text-base hover:font-bold transition-all delay-50">About</a>
      <a href="#faqs" class="text-base hover:font-bold transition-all delay-50">FAQs</a>
    </nav>
    {{-- maybe we need to know how to make this button as component --}}
    {{-- <a href="/login">
      <button class="border border-black rounded-3xl px-6 py-2 font-medium text-base hover:bg-black hover:text-white transition-colors delay-50 min-[800px]:block hidden">Sign Up</button>
    </a> --}}

    @auth
    <div class="flex items-center justify-center hidden md:flex">
      {{-- wishlist --}}
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer">
        <path d="M15 26.25L13.1875 24.625C11.0833 22.7292 9.34375 21.0938 7.96875 19.7188C6.59375 18.3438 5.5 17.1094 4.6875 16.0156C3.875 14.9219 3.30729 13.9167 2.98438 13C2.66146 12.0833 2.5 11.1458 2.5 10.1875C2.5 8.22917 3.15625 6.59375 4.46875 5.28125C5.78125 3.96875 7.41667 3.3125 9.375 3.3125C10.4583 3.3125 11.4896 3.54167 12.4688 4C13.4479 4.45833 14.2917 5.10417 15 5.9375C15.7083 5.10417 16.5521 4.45833 17.5312 4C18.5104 3.54167 19.5417 3.3125 20.625 3.3125C22.5833 3.3125 24.2188 3.96875 25.5312 5.28125C26.8438 6.59375 27.5 8.22917 27.5 10.1875C27.5 11.1458 27.3385 12.0833 27.0156 13C26.6927 13.9167 26.125 14.9219 25.3125 16.0156C24.5 17.1094 23.4062 18.3438 22.0312 19.7188C20.6562 21.0938 18.9167 22.7292 16.8125 24.625L15 26.25ZM15 22.875C17 21.0833 18.6458 19.5469 19.9375 18.2656C21.2292 16.9844 22.25 15.8698 23 14.9219C23.75 13.974 24.2708 13.1302 24.5625 12.3906C24.8542 11.651 25 10.9167 25 10.1875C25 8.9375 24.5833 7.89583 23.75 7.0625C22.9167 6.22917 21.875 5.8125 20.625 5.8125C19.6458 5.8125 18.7396 6.08854 17.9062 6.64063C17.0729 7.19271 16.5 7.89583 16.1875 8.75H13.8125C13.5 7.89583 12.9271 7.19271 12.0938 6.64063C11.2604 6.08854 10.3542 5.8125 9.375 5.8125C8.125 5.8125 7.08333 6.22917 6.25 7.0625C5.41667 7.89583 5 8.9375 5 10.1875C5 10.9167 5.14583 11.651 5.4375 12.3906C5.72917 13.1302 6.25 13.974 7 14.9219C7.75 15.8698 8.77083 16.9844 10.0625 18.2656C11.3542 19.5469 13 21.0833 15 22.875Z" fill="black"/>
      </svg>
      {{-- notification --}}
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2 cursor-pointer">
        <path d="M6.25 23.75C5.89583 23.75 5.59896 23.6302 5.35938 23.3906C5.11979 23.151 5 22.8542 5 22.5C5 22.1458 5.11979 21.849 5.35938 21.6094C5.59896 21.3698 5.89583 21.25 6.25 21.25H7.5V12.5C7.5 10.7708 8.02083 9.23438 9.0625 7.89062C10.1042 6.54688 11.4583 5.66667 13.125 5.25V4.375C13.125 3.85417 13.3073 3.41146 13.6719 3.04688C14.0365 2.68229 14.4792 2.5 15 2.5C15.5208 2.5 15.9635 2.68229 16.3281 3.04688C16.6927 3.41146 16.875 3.85417 16.875 4.375V5.25C18.5417 5.66667 19.8958 6.54688 20.9375 7.89062C21.9792 9.23438 22.5 10.7708 22.5 12.5V21.25H23.75C24.1042 21.25 24.401 21.3698 24.6406 21.6094C24.8802 21.849 25 22.1458 25 22.5C25 22.8542 24.8802 23.151 24.6406 23.3906C24.401 23.6302 24.1042 23.75 23.75 23.75H6.25ZM15 27.5C14.3125 27.5 13.724 27.2552 13.2344 26.7656C12.7448 26.276 12.5 25.6875 12.5 25H17.5C17.5 25.6875 17.2552 26.276 16.7656 26.7656C16.276 27.2552 15.6875 27.5 15 27.5ZM10 21.25H20V12.5C20 11.125 19.5104 9.94792 18.5312 8.96875C17.5521 7.98958 16.375 7.5 15 7.5C13.625 7.5 12.4479 7.98958 11.4688 8.96875C10.4896 9.94792 10 11.125 10 12.5V21.25Z" fill="#333231"/>
      </svg>
      {{-- profile picture--}}
      <div class="ml-4 cursor-pointer relative" id="profileNav">
        <img src="{{ asset('storage/default-pfp.jpg')}}" alt="profile picture" class="w-10 h-10 rounded-full border border-[#cacaca] drop-shadow-sm">
        {{-- dropdown profile desktop --}}
        <div class="absolute inline-block text-left right-0 drop-shadow-md border border-color-[#182955] md:hidden transition ease-in duration-75" id="profileDrop">        
          <!--
            Dropdown menu, show/hide based on menu state.
        
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
              <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-1">My Property</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-2">History</a>
              <form method="post" action="/logout" role="none">
                @csrf
                <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    @else
    <a href="/login">
      <button class="border border-black rounded-3xl px-6 py-2 font-medium text-base hover:bg-black hover:text-white transition-colors delay-50 min-[800px]:block hidden">Sign Up</button>
    </a>
    @endauth

    
    {{-- <button class="border border-black rounded-3xl px-6 py-2 font-medium text-base hover:bg-black hover:text-white transition-colors delay-50 min-[800px]:block hidden">Sign Up</button>  --}}
    <div class="block min-[800px]:hidden cursor-pointer" id="burgerButton">
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