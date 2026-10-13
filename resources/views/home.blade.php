@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section class="bg-[radial-gradient(circle,rgba(18,18,18,.13)_1.3px,transparent_1.7px)] [background-size:14px_14px] px-6 py-16 md:px-12 md:py-20">
  <div class="mx-auto flex max-w-6xl flex-wrap items-center gap-14">
    <div class="flex min-w-0 flex-[1_1_480px] flex-col items-start gap-6">
      <span class="border-[3px] border-ink bg-hot px-3.5 py-1.5 text-[13px] font-bold tracking-widest">RILIS TERBARU</span>
      <h1 class="font-display text-6xl uppercase leading-[0.95] md:text-8xl">{{ $latest['title'] }}</h1>
      <p class="max-w-lg text-lg leading-relaxed">{{ $latest['synopsis'] }}</p>
      <a href="#" class="flex min-h-[52px] items-center border-[3px] border-ink bg-accent px-7 text-[17px] font-bold shadow-[6px_6px_0_#121212]">Lihat Detail</a>
    </div>
    <div class="flex min-w-0 flex-[1_1_320px] justify-center">
      <img src="{{ asset($latest['cover']) }}" alt="Cover {{ $latest['title'] }}"
     class="aspect-[3/4] w-full max-w-[380px] rotate-2 border-4 border-ink object-cover shadow-[14px_14px_0_#121212]">
    </div>
  </div>
</section>
@endsection