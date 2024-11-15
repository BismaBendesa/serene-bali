@php
  $icon = $icon ?? 'icon';
  $name = $name ?? 'name';
  $type = $type ?? 'type';
  $distance = $distance ?? 'distance';
@endphp


<div class="public-facility w-56">
  <span class="material-symbols-rounded text-[40px] mb-1">{{$icon}}</span>
  <h5 class="text-xl">{{$name}}</h5>
  <p class="text-[#858381] text-sm mb-2">{{$type}}</p>
  <p class="text-[#9E9C9A] text-sm">{{$distance}}</p>
</div>