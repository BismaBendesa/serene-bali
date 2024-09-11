{{-- primary button (padding, font size, width, height) --}}

{{-- Default value --}}
@php
    $buttonTitle = $buttonTitle ?? 'Button';
    $buttonText = $buttonText ?? 'ButtonText';
@endphp
<button class="bg-[#182955] text-white rounded drop-shadow {{$buttonStyle}}" title="{{$buttonTitle}}">{{$buttonText}}</button>