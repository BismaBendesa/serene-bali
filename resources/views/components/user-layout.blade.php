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
  <x-nav-bar></x-nav-bar>
  <img src="{{asset('storage/background.png')}}" alt="background" class="absolute left-[-112px] top-[-31px] z-0">
  <main class="px-6 pt-16 md:px-16 z-9 relative">
    {{$slot}}
  </main>
<x-footer></x-footer>