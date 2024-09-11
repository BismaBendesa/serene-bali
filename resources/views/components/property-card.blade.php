{{-- Default value --}}
@php
    $propertyName = $propertyName ?? 'propertyName';
    $propertyLabel = $propertyLabel ?? 'propertyLabel';
    $viewCount = $viewCount ?? 'viewCount';
    $propertyLocation = $propertyLocation ?? 'propertyLocation';
    $propertyWidth = $propertyWidth ?? 'propertyWidth';
    $propertyBedroomCount = $propertyBedroomCount ?? 'propertyBedroomCount';
    $propertyShower = $propertyShower ?? 'propertyShower';
    $price = $price ?? 0;
    $discount = $discount ?? 0;
    $promoPrice = ($price / 100) * $discount  ?? 0;
    $hideStrikedPrice = $hideStrikedPrice ?? 'block' // can use hidden or block
@endphp

<div class="property-card flex w-full border border-[#cacaca] rounded-lg drop-shadow justify-between bg-[#F8F8F8] my-4 md:flex-col ">
  <img src="{{asset('storage/villa-sample.png')}}" alt="property card" class="max-w-[160px] object-cover rounded-lg md:max-w-full relative grow-0">
  <span class="bg-[#02205E] text-white text-sm font-medium rounded-md drop-shadow px-1.5 py-1.5 absolute left-[10px] top-[10px]">{{ $propertyLabel}}</span>
  <div class="px-4 py-4 grow">
    <h3 class="text-lg font-semibold">{{$propertyName}}</h3>
    <div class="view-count flex items-center gap-1">
      <span class="material-symbols-rounded text-xl text-[#333231]">visibility</span>
      <span class="text-xs text-[#333231] xl:text-sm">{{$viewCount}}</span>
    </div>
    <div class="property-detail my-2 md:my-3 lg:grid lg:grid-cols-2">
      <div class="text-xs flex gap-1 items-center">
        <span class="material-symbols-rounded text-xl text-[#333231]">location_on</span>
        <span class="text-[#333231] xl:text-sm">{{$propertyLocation}}</span>
      </div>
      <div class="text-xs flex gap-1 items-center">
        <span class="material-symbols-rounded text-xl text-[#333231]">home</span>
        <span class="text-[#333231] xl:text-sm">{{$propertyWidth}} m<sup>2</sup></span>
      </div>
      <div class="text-xs flex gap-1 items-center">
        <span class="material-symbols-rounded text-xl text-[#333231]">bed</span>
        <span class="text-[#333231] xl:text-sm">{{$propertyBedroomCount == '1' ? $propertyBedroomCount . ' bedroom' : $propertyBedroomCount . ' bedrooms'}} </span>
      </div>
      <div class="text-xs flex gap-1 items-center">
        <span class="material-symbols-rounded text-xl text-[#333231]">shower</span>
        <span class="text-[#333231] xl:text-sm">{{$propertyShower}} Shower</span>
      </div>
    </div>
    <div class="price-section flex justify-between mt-2">
      <div class="price">
        <s class="text-[#858381] text-sm {{$hideStrikedPrice}}">IDR. {{$price}}</s>
        <div class="text-xl font-semibold">IDR. {{$hideStrikedPrice == true ? number_format($price, "0", ",", ".") : $promoPrice}}</div>
      </div>
      <div class="discount-tag border border-[#264187] text-[#264187] px-2 py-1 rounded drop-shadow-sm flex items-center text-xs font-semibold h-fit self-end {{$hideStrikedPrice}}">{{$discount}} % OFF</div>
    </div>
  </div>
</div>