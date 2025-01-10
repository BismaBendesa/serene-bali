<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite('resources/css/app.css')
  <title>{{ $title }}</title>
</head>
<body class="font-poppins m-auto bg-[#fff]">
  {{-- <x-nav-bar></x-nav-bar> --}}
  <x-sidebar-admin class="z-9"></x-sidebar-admin>
  <img src="{{asset('storage/background.png')}}" alt="background" class="absolute left-[-12px] top-[-111px] z-[-1]">
  <main class="pl-6 pr-4 md:pl-32 md:pr-12 z-8 relative">
    {{$slot}}
  </main>
{{-- <x-footer></x-footer> --}}
</body>
</html>