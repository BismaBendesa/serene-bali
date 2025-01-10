{{-- Default value --}}
@php
    $property = $property ?? '-';
    $propertyName = $propertyName ?? 'propertyName';
    $propertyLabel = $propertyLabel ?? 'propertyLabel';
    $viewCount = $viewCount ?? 'viewCount';
    $propertyLocation = $propertyLocation ?? 'propertyLocation';
    $propertyWidth = $propertyWidth ?? 'propertyWidth';
    $propertyPax = $propertyPax ?? 'propertyPax';
    $propertyLandArea = $propertyLandArea ?? 'propertyLandArea';
    $price = $price ?? 0;
    $discount = $discount ?? 0;
    $promoPrice = $price - (($price / 100) * $discount)  ?? 0;
    $hideStrikedPrice = $discount == 0 ? 'hidden' : 'block' // can use hidden or block
@endphp


  <div class="property-card flex w-full border border-[#cacaca] rounded-lg drop-shadow bg-[#F8F8F8] my-4 md:flex-col ">
    <a href="{{ '/user/property/'. $property}}" class="group relative" draggable="false">
      <img src="{{asset('storage/villa-sample.png')}}" alt="property card" class="max-w-[160px] top-0 bottom-0 h-full object-cover rounded-lg md:max-w-full relative grow-0" draggable="false">
      {{-- Overlay --}}
      <div class="hidden md:flex absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <button class="text-white text-sm font-medium bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg">View Property</button>
      </div>
      {{-- Nonactive Property Overlay --}}
    </a>

    <span class="bg-[#02205E] text-white text-sm font-medium rounded-md drop-shadow px-1.5 py-1.5 absolute left-[10px] top-[10px] capitalize">{{ $propertyLabel}}</span>
    {{-- Desktop without link --}}
    <div class="px-4 py-4 grow hidden md:block">
      <h3 class="text-lg font-semibold md:text-xl">{{$propertyName}}</h3>
      <div class="view-count flex items-center gap-1">
        <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
        <span class="text-xs text-[#333231] xl:text-sm">{{$viewCount}}</span>
      </div>
      <div class="property-detail my-2 md:my-3 lg:grid lg:grid-cols-[2fr_1fr] gap-x-2">
        <div class="text-xs flex gap-1 items-center">
          <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
          <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyLocation}}</span>
        </div>
        <div class="text-xs flex gap-1 items-center">
          <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
          <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyWidth}} m<sup>2</sup></span>
        </div>
        <div class="text-xs flex gap-1 items-center">
          <span class="material-symbols-rounded text-xl text-[#333231]">group</span>
          <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyPax . " Pax"}} </span>
        </div>
        <div class="text-xs flex gap-1 items-center">
          <span class="material-symbols-rounded text-xl text-[#333231]">crop_landscape</span>
          <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyLandArea}} m<sup>2</sup></span>
        </div>
      </div>
      <div class="price-section flex justify-between mt-2">
        <div class="price">
          <s class="text-[#858381] text-sm cursor-text {{$hideStrikedPrice}}">IDR. {{ number_format($price, "0", ",", ".")}}</s>
          <div class="text-lg font-semibold cursor-text">IDR. {{$discount == 0 ? number_format($price, "0", ",", ".") : number_format($promoPrice, "0", ",", ".")}}</div>
        </div>
        <div class="discount-tag  bg-[#CADBFF] text-[#10398E] px-2 py-1 rounded drop-shadow-sm flex items-center text-xs font-bold h-fit self-end cursor-text drop-shadow {{$hideStrikedPrice}}">{{$discount}}% OFF</div>
      </div>
    </div>

    {{-- mobile with link --}}
    <a href="{{ '/user/property/'. $property}}" class="md:hidden grow">
      <div class="px-4 py-4 grow">
        <h3 class="text-lg font-semibold">{{$propertyName}}</h3>
        <div class="view-count flex items-center gap-1">
          <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
          <span class="text-xs text-[#333231] xl:text-sm">{{$viewCount}}</span>
        </div>
        <div class="property-detail my-2 md:my-3 lg:grid lg:grid-cols-2">
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
            <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyLocation}}</span>
          </div>
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
            <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyWidth}} m<sup>2</sup></span>
          </div>
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">group</span>
              <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyPax . "pax"}} </span>
          </div>
          <div class="text-xs flex gap-1 items-center">
            <span class="material-symbols-rounded text-xl text-[#333231]">crop_landscape</span>
            <span class="text-[#333231] xl:text-sm cursor-text">{{$propertyLandArea}} m<sup>2</sup></span>
          </div>
        </div>
        <div class="price-section flex flex-col justify-between mt-2">
          <div class="price">
            <div class="discount-tag bg-[#CADBFF] text-[#10398E] px-2 py-1 rounded drop-shadow-sm inline text-xs font-bold h-fit cursor-text mb-2 {{$hideStrikedPrice}}">{{$discount}}% OFF
            </div>
            <s class="text-[#858381] text-sm cursor-text mt-2 {{$hideStrikedPrice}}">IDR. {{ number_format($price, "0", ",", ".")}}</s>
            <div class="text-base font-semibold cursor-text">IDR. {{$discount == 0 ? number_format($price, "0", ",", ".") : number_format($promoPrice, "0", ",", ".")}}</div>
          </div>
        </div>
      </div>
    </a>
  </div>
