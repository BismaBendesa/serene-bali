@php
  $iconName = $iconName ?? 'icon';
  $description = strip_tags($description ?? 'text', '<sup><b>');
@endphp

<div class="facility flex items-center gap-1">
  <span class="material-symbols-rounded text-[#333231]">{{$iconName}}</span>
  <span class="text-[#333231]">{!!$description!!}</span>
</div>