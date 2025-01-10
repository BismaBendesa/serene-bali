{{-- Default value --}}
@php
    $hideHeadlineDescription = $hideHeadlineDescription ?? 'inline'; // hidden || block
    $headlineTitle = $headlineTitle ?? 'Welcome back ' . auth()->user()->username;
    $headlineDescription = $headlineDescription ?? 'Pick where you left off'
@endphp

<div class="dashboard-header md:max-w-[1920px] md:mx-auto pt-4">
  <span class="text-sm text-[#858381]">{{ Breadcrumbs::render($slot) }}</span>
  <div class="flex gap-4 items-center my-2">
    <a href="{{ url()->previous() }}">
      <div class="rounded-full border border-[#61605E] flex w-10 h-10 justify-center items-center">
        <span class="material-symbols-rounded">
          arrow_back
        </span>
      </div>
    </a>
    <div>
      <h3 class="font-medium text-lg">{{$headlineTitle}}</h3>
      <span class="text-sm text-[#61605E] {{$hideHeadlineDescription}}">{{$headlineDescription}}</span>
    </div>
  </div>
</div>