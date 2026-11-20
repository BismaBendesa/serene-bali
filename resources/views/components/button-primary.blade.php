{{-- primary button (padding, font size, width, height, weight) --}}

{{-- Default value --}}
@php
    $buttonTitle = $buttonTitle ?? 'Button';
    $buttonText = $buttonText ?? 'ButtonText';
    $buttonStyle = $buttonStyle ?? 'block'
@endphp
<button type="submit" class="bg-[#182955] text-white rounded drop-shadow {{$buttonStyle}}" title="{{$buttonTitle}}">{{$buttonText}}</button>