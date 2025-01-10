<x-admin-layout>

  {{-- Page title --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- header breadcrumbs --}}
  <x-header-admin 
    headlineDescription="All of the property list goes here"
    headlineTitle="Property list"
    >
    admin-property
  </x-header-admin>

  <div class="tab-bar md:my-6 my-4 mx-auto max-w-[1920px]">
    <div class="tab-menus flex md:gap-12 gap-8 border-b-2 border-[#E8E8E8] overflow-x-auto md:px-0 px-1">
      <x-tab-menu 
        menuName="Active Property"
        class="font-bold text-[#10398E] border-b-4 border-[#10398E] opacity-100"
      />
      <x-tab-menu 
        menuName="Nonactive Property"
      />
    </div>
  </div>

  <div class="property-control-section flex item-center justify-between">
    <div class="search-bar relative max-w-[485px] w-full">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-2 left-1.5">
        <path d="M16.3333 17.5L11.0833 12.25C10.6667 12.5833 10.1875 12.8472 9.64583 13.0417C9.10417 13.2361 8.52778 13.3333 7.91667 13.3333C6.40278 13.3333 5.12153 12.809 4.07292 11.7604C3.02431 10.7118 2.5 9.43056 2.5 7.91667C2.5 6.40278 3.02431 5.12153 4.07292 4.07292C5.12153 3.02431 6.40278 2.5 7.91667 2.5C9.43056 2.5 10.7118 3.02431 11.7604 4.07292C12.809 5.12153 13.3333 6.40278 13.3333 7.91667C13.3333 8.52778 13.2361 9.10417 13.0417 9.64583C12.8472 10.1875 12.5833 10.6667 12.25 11.0833L17.5 16.3333L16.3333 17.5ZM7.91667 11.6667C8.95833 11.6667 9.84375 11.3021 10.5729 10.5729C11.3021 9.84375 11.6667 8.95833 11.6667 7.91667C11.6667 6.875 11.3021 5.98958 10.5729 5.26042C9.84375 4.53125 8.95833 4.16667 7.91667 4.16667C6.875 4.16667 5.98958 4.53125 5.26042 5.26042C4.53125 5.98958 4.16667 6.875 4.16667 7.91667C4.16667 8.95833 4.53125 9.84375 5.26042 10.5729C5.98958 11.3021 6.875 11.6667 7.91667 11.6667Z" fill="#858381"/>
      </svg>
      <input type="text" placeholder="Search Property" class="py-2 pl-8 pr-2 bg-[#F8F8F8] rounded border border-[#cacaca] text-sm w-full focus:outline-[#264187]">
    </div>
    <div class="other-tools flex items-center text-sm gap-3">
      <div class="sort-button">
        <label for="sort text-xs text-[#858381]">Sort by</label>
        <select id="sort" class="bg-[#F1F1F1] text-[#182955] rounded border border-[#cacaca] font-medium p-1">
          <option value="price">Price</option>
          <option value="date">Date</option>
          <option value="alphabet">Alphabet</option>
        </select>
      </div>
      <a href="" class="px-4 py-1.5 border border-[#264187] box-border text-[#182955] rounded shadow-md hover:translate-y-0.5 transition-transform duration-300 active:ring active:ring-blue-100">
        <button>View Draft</button>
      </a>
      <a href=""  class="px-4 py-1.5 bg-[#182955] box-border text-[#fff] rounded shadow-md hover:translate-y-0.5 transition-transform duration-300 active:ring active:ring-blue-10 ">
        <button class="flex items-center gap-1">
          <span>Create New Property</span>
          <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.16797 7.33366H1.0013C0.765191 7.33366 0.567274 7.2538 0.407552 7.09408C0.24783 6.93435 0.167969 6.73644 0.167969 6.50033C0.167969 6.26421 0.24783 6.0663 0.407552 5.90658C0.567274 5.74685 0.765191 5.66699 1.0013 5.66699H5.16797V1.50033C5.16797 1.26421 5.24783 1.0663 5.40755 0.906576C5.56727 0.746853 5.76519 0.666992 6.0013 0.666992C6.23741 0.666992 6.43533 0.746853 6.59505 0.906576C6.75477 1.0663 6.83464 1.26421 6.83464 1.50033V5.66699H11.0013C11.2374 5.66699 11.4353 5.74685 11.5951 5.90658C11.7548 6.0663 11.8346 6.26421 11.8346 6.50033C11.8346 6.73644 11.7548 6.93435 11.5951 7.09408C11.4353 7.2538 11.2374 7.33366 11.0013 7.33366H6.83464V11.5003C6.83464 11.7364 6.75477 11.9344 6.59505 12.0941C6.43533 12.2538 6.23741 12.3337 6.0013 12.3337C5.76519 12.3337 5.56727 12.2538 5.40755 12.0941C5.24783 11.9344 5.16797 11.7364 5.16797 11.5003V7.33366Z" fill="#F8F8F8"/>
            </svg>
        </button>
      </a>

    </div>
  </div>

  <div class="active-property property-list grid xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 md:gap-x-4 mt-4" data-content="Active Property">
    {{-- loop from controller --}}
    @if($activeProperties->isEmpty())
      <p>No active properties found.</p>
    @else
      @foreach ($activeProperties as $data)
      {{-- @dd(gettype((float) $data->price)) --}}
        <x-property-card :price="$data->price" :discount="30" :propertyWidth="$data->building_area" :propertyPax="$data->max_pax" :propertyLandArea="$data->land_area">
          <x-slot:property>{{$data->id}}</x-slot:property>
          <x-slot:viewCount>{{$data->views}}</x-slot:viewCount>
          <x-slot:propertyName>{{$data->property_name}}</x-slot:propertyName>
          <x-slot:propertyLabel>{{$data->property_service}}</x-slot:propertyLabel>
          <x-slot:propertyLocation>{{$data->location}}</x-slot:propertyLocation>
        </x-property-card>
      @endforeach
    @endif
  </div>

  <div class="nonactive-property hidden property-list grid xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 md:gap-x-4 mt-4" data-content="Nonactive Property">
    @if($nonactiveProperties->isEmpty())
      <p>No nonactive properties found.</p>
    @else
      @foreach ($nonactiveProperties as $data)
      {{-- @dd(gettype((float) $data->price)) --}}
        <x-property-card :price="$data->price" :discount="30" :propertyWidth="$data->building_area" :propertyPax="$data->max_pax" :propertyLandArea="$data->land_area">
          <x-slot:property>{{$data->id}}</x-slot:property>
          <x-slot:viewCount>{{$data->views}}</x-slot:viewCount>
          <x-slot:propertyName>{{$data->property_name}}</x-slot:propertyName>
          <x-slot:propertyLabel>{{$data->property_service}}</x-slot:propertyLabel>
          <x-slot:propertyLocation>{{$data->location}}</x-slot:propertyLocation>
        </x-property-card>
      @endforeach
    @endif
  </div>

</x-admin-layout>