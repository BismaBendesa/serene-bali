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
<body class="font-poppins m-auto bg-[#EAEAEA]">
  <x-nav-bar></x-nav-bar>
  <main>
    {{$slot}}
  </main>
<x-footer></x-footer>