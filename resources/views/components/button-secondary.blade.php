{{-- primary button (padding, font size, width, height, weight) --}}

{{-- Default value --}}
@php
    $buttonTitle = $buttonTitle ?? 'Button';
    $buttonText = $buttonText ?? 'ButtonText';
    $buttonStyle = $buttonStyle ?? 'block'
@endphp
<button type="submit" class="bg-white text-[#02205E] rounded drop-shadow border border-[#10398E] {{$buttonStyle}}" title="{{$buttonTitle}}">{{$buttonText}}</button>