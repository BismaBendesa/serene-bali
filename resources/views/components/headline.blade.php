@php
$headlineTitle = $headlineTitle ?? 'headlineTitle';
$description = $description ?? 'description';
$hideButton = $hideButton ?? 'block';

// $headlineTitle = title of the headline  
// $description = description of the title
// $hideButton = hidden / block (display properties)
@endphp
<div class="headline flex justify-between items-center md:max-w-[1920px] md:mx-auto">
  <div>
    <h3 class="text-lg font-semibold">{{$headlineTitle}}</h3>
    <span class="text-[#858381] text-sm">{{$description}}</span>
  </div>
  <a href="javascript:void(0)" class="text-[#3459BA] font-medium text-base underline {{$hideButton}}">More</a>
</div>