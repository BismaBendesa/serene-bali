<x-user-layout>
  {{-- Page title --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- header breadcrumbs --}}
  <x-header>user-dashboard</x-header>
  
  {{-- user status section --}}
  <div class="md:flex md:items-center md:justify-between gap-4 my-6 md:max-w-[1920px] md:mx-auto">
    <div class="user-status flex justify-between px-4 py-4 bg-[#F8F8F8] rounded-lg border border-[#cacaca] items-center my-4 drop-shadow md:w-full md:my-0">
      <div class="flex gap-4 items-center">
        <img src="{{ asset('storage/default-pfp.jpg') }}" alt="Profile picture" class="w-20 h-20 object-cover rounded-full border border-[#cacaca] drop-shadow" title="Profile picture">
        <div>
          <div class="role capitalize text-xs mb-2">{{ auth()->user()->role }}</div>
          <div class="username text-base font-semibold mb-1">{{ auth()->user()->username}}</div>
          <div class="text-xs text-[#858381]">Joined at {{ auth()->user()->created_at->format('d M Y') }}</div>
        </div>
      </div>
      <x-button-primary>
        <x-slot:buttonStyle>px-3 py-3 text-sm</x-slot:buttonStyle>
        <x-slot:buttonText>Profile</x-slot:buttonText>
      </x-button-primary>
    </div>
    <div class="flex justify-between gap-4 mb-4 md:w-full md:mb-0 md:h-full">
      <x-counter>
        <x-slot:number>0</x-slot:number>
        <x-slot:description>Owned properties</x-slot:description>
      </x-counter>
      <x-counter>
        <x-slot:number>0</x-slot:number>
        <x-slot:description>Wishlist properties</x-slot:description>
      </x-counter>
    </div>
  </div>
  {{-- end user status --}}

  <x-headline>
    <x-slot:headlineTitle>My Booking</x-slot:headlineTitle>
    <x-slot:description>We track your recent bookings.</x-slot:description>
    <x-slot:hideButton>block</x-slot:hideButton>
  </x-headline>

  {{-- Table Mobile --}}
  <table class="w-full border-collapse border border-[#cacaca] my-4 md:hidden">
    <tr class="border border-[#cacaca]">
      <th class="w-36 text-left text-[#182955] bg-[#F1F1F1] px-4 py-4">1. Consult ID</th>
      <th class="text-left text-[#182955] bg-[#F1F1F1] px-4 py-4">#C38901</th>
    </tr>
    <tr class="border border-[#cacaca]">
      <td class="text-sm text-[#182955] px-4 py-4">Status</td>
      <td class="text-sm text-[#182955] px-4 py-4">Waiting For Payment</td>
    </tr>
    <tr class="border border-[#cacaca]">
      <td class="text-sm text-[#182955] px-4 py-4">Type</td>
      <td class="text-sm text-[#182955] px-4 py-4">Online</td>
    </tr>
    <tr class="border border-[#cacaca]">
      <td class="text-sm text-[#182955] px-4 py-4">Date & Time</td>
      <td class="text-sm text-[#182955] px-4 py-4">12 Sep 2024 | 09:00 AM</td>
    </tr>
    <tr class="border border-[#cacaca]">
      <td class="text-sm text-[#182955] px-4 py-4">Action</td>
      <td class="px-4 py-4 text-sm flex justify-between items-center">
        <a href="javascript:void(0)" class="text-[#264187] font-bold underline">View</a>
        <a href="javascript:void(0)" class="text-[#31A613] font-bold underline">Edit</a>
        <a href="javascript:void(0)" class="text-[#D60E00] font-bold underline">Cancel</a>
      </td>
    </tr>
  </table>
  {{-- end table mobile --}}

  {{-- Table Desktop (See if we can make table as a component) --}}
  <table class="w-full border-collapse border my-4 table-auto md:table hidden md:max-w-[1920px] md:mx-auto">
    <thead class="w-full">
      <tr class="border border-[#cacaca] w-full table-auto text-left text-[#182955] bg-[#F1F1F1] px-4 py-4">
        <th class="text-sm text-[#182955] px-4 py-4">No</th>
        <th class="text-sm text-[#182955] px-4 py-4">Consult Id</th>
        <th class="text-sm text-[#182955] px-4 py-4">Status</th>
        <th class="text-sm text-[#182955] px-4 py-4">Type</th>
        <th class="text-sm text-[#182955] px-4 py-4">Date & Time</th>
        <th class="text-sm text-[#182955] px-4 py-4">Action</th>
      </tr>
    </thead>
    <tbody class="w-full">
      <tr class="border border-[#cacaca] w-full table-auto border-spacing-4 ">
        <td class="text-sm text-[#182955] px-4 py-4">1</td>
        <td class="text-sm text-[#182955] px-4 py-4">#C38901</td>
        <td class="text-sm text-[#182955] px-4 py-4">Waiting For Payment</td>
        <td class="text-sm text-[#182955] px-4 py-4">Online</td>
        <td class="text-sm text-[#182955] px-4 py-4">12 Sep 2024 | 09:00 AM</td>
        <td class="text-sm text-[#182955] px-4 py-4">
          <div class="flex gap-2 max-w-[180px]">
            <a href="javascript:void(0)" title="View Consultation" class="px-2 py-2 rounded-md flex items-center border border-[#10398E] hover:bg-[#10398E] group">
              <span class="material-symbols-rounded text-[#10398E] group-hover:text-white">
                visibility
              </span>
            </a>
            <a href="javascript:void(0)" title="Edit Consultation" class="px-2 py-2 rounded-md flex items-center border border-[#5D6F61] hover:bg-[#5D6F61] group">
              <span class="material-symbols-rounded text-[#5D6F61] group-hover:text-white">
                edit
              </span>
            </a>
            <a href="javascript:void(0)" title="Cancel Consultation" class="px-2 py-2 rounded-md flex items-center border border-[#AB0B00] hover:bg-[#AB0B00] group">
              <span class="material-symbols-rounded text-[#AB0B00] group-hover:text-white">
                event_busy
              </span>
            </a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>

  {{-- end table desktop --}}

  <x-headline>
    <x-slot:headlineTitle>My Property</x-slot:headlineTitle>
    <x-slot:description>Your own property in Serene Bali</x-slot:description>
    <x-slot:hideButton>hidden</x-slot:hideButton>
  </x-headline>

  {{-- Property Card (make component of each card) --}}
  <div class="property-card-wrapper w-full md:grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 md:items-center md:gap-8 gap-4 md:mb-8 md:mx-auto md:max-w-[1920px] mb-4 gap-2">
    {{-- <div class="property-card flex w-full border border-[#cacaca] rounded-lg drop-shadow justify-between bg-[#F8F8F8] my-4 md:flex-col ">
      <img src="{{asset('storage/villa-sample.png')}}" alt="property card" class="max-w-[160px] object-cover rounded-lg md:max-w-full relative grow-0">
      <span class="bg-[#02205E] text-white text-sm font-medium rounded-md drop-shadow px-1.5 py-1.5 absolute left-[10px] top-[10px]">Owned</span>
      <div class="px-4 py-4 grow">
        <h3 class="text-lg font-semibold">Villa La Marina</h3>
        <div class="view-count flex items-center gap-1">
          <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
          <span class="text-xs text-[#333231]">503</span>
        </div>
        <div class="property-detail mt-2">
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
            <span class="text-[#333231]">Jimbaran, Badung</span>
          </div>
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
            <span class="text-[#333231]">8,094 m2</span>
          </div>
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">bed</span>
            <span class="text-[#333231]">5 Bedrooms</span>
          </div>
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">shower</span>
            <span class="text-[#333231]">2 Shower</span>
          </div>
        </div>
      </div>
    </div> --}}
    <x-property-card :price="20000000" :discount="1">
      <x-slot:property-name>Villa La Marina</x-slot:property-name>
      <x-slot:property-label>Owned</x-slot:property-label>
      <x-slot:viewCount>293</x-slot:viewCount>
      <x-slot:propertyLocation>Jimbaran, Badung</x-slot:propertyLocation>
      <x-slot:propertyWidth>2930</x-slot:propertyWidth>
      <x-slot:propertyBedroomCount>2</x-slot:propertyBedroomCount>
      <x-slot:propertyShower>2</x-slot:propertyShower>
      <x-slot:hideStrikedPrice>hidden</x-slot:hideStrikedPrice>
    </x-property-card>
    {{-- <div class="property-card flex w-full border border-[#cacaca] rounded-lg drop-shadow justify-between bg-[#F8F8F8] my-4 md:flex-col ">
      <img src="{{asset('storage/villa-sample.png')}}" alt="property card" class="max-w-[185px] object-cover rounded-lg md:max-w-full ">
      <div class="property-card-wrapper px-4 py-4 ">
        <h3 class="text-lg font-semibold">Villa La Marina</h3>
        <div class="view-count flex items-center gap-1">
          <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
          <span class="text-sm text-[#333231]">503</span>
        </div>
        <div class="property-detail mt-2">
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
            <span class="text-[#333231]">Jimbaran, Badung</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
            <span class="text-[#333231]">8,094 m2</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">bed</span>
            <span class="text-[#333231]">5 Bedrooms</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">shower</span>
            <span class="text-[#333231]">2 Shower</span>
          </div>
        </div>
      </div>
    </div>
    <div class="property-card flex w-full border border-[#cacaca] rounded-lg drop-shadow justify-between bg-[#F8F8F8] my-4 md:flex-col ">
      <img src="{{asset('storage/villa-sample.png')}}" alt="property card" class="max-w-[185px] object-cover rounded-lg md:max-w-full ">
      <div class="property-card-wrapper px-4 py-4 ">
        <h3 class="text-lg font-semibold">Villa La Marina</h3>
        <div class="view-count flex items-center gap-1">
          <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
          <span class="text-sm text-[#333231]">503</span>
        </div>
        <div class="property-detail mt-2">
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
            <span class="text-[#333231]">Jimbaran, Badung</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
            <span class="text-[#333231]">8,094 m2</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">bed</span>
            <span class="text-[#333231]">5 Bedrooms</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">shower</span>
            <span class="text-[#333231]">2 Shower</span>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="property-card flex w-full border border-[#cacaca] rounded-lg drop-shadow justify-between bg-[#F8F8F8] my-4 md:flex-col ">
      <img src="{{asset('storage/villa-sample.png')}}" alt="property card" class="max-w-[185px] object-cover rounded-lg md:max-w-full">
      <div class="property-card-wrapper px-4 py-4 ">
        <h3 class="text-lg font-semibold">Villa La Marina</h3>
        <div class="view-count flex items-center gap-1">
          <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
          <span class="text-sm text-[#333231]">503</span>
        </div>
        <div class="property-detail mt-2">
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
            <span class="text-[#333231]">Jimbaran, Badung</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
            <span class="text-[#333231]">8,094 m2</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">bed</span>
            <span class="text-[#333231]">5 Bedrooms</span>
          </div>
          <div class="text-sm flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">shower</span>
            <span class="text-[#333231]">2 Shower</span>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
  {{-- end Property Card --}}

</x-user-layout>