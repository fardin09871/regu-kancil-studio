
@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="flex flex-1 items-center overflow-hidden bg-[radial-gradient(circle,rgba(18,18,18,.13)_1.3px,transparent_1.7px)] [background-size:14px_14px] px-5 py-8 sm:px-8 md:px-12 md:py-12">


    <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-8 sm:gap-10 md:grid-cols-2 md:gap-10">

        {{-- Hero Content --}}
        <div class="flex min-w-0 flex-col items-start gap-5 sm:gap-6">

            <span class="border-[3px] border-ink bg-hot px-3 py-1.5 text-[11px] font-extrabold tracking-[0.18em] sm:px-4 sm:py-2 sm:text-xs">
                NEW ARRIVALS
            </span>

            <h1 class="max-w-full break-words font-display text-[clamp(3rem,8vw,5.5rem)] uppercase leading-[0.92] tracking-tight text-ink">
                {{ $latest['title'] }}
            </h1>

            <p class="max-w-md text-base leading-relaxed text-ink/80 sm:text-lg">
                {{ $latest['synopsis'] }}
            </p>

            <a
                href="#koleksi"
                class="inline-flex min-h-12 items-center justify-center gap-3 border-[3px] border-ink bg-accent px-5 py-3 text-sm font-extrabold shadow-[4px_4px_0_#121212] transition-all duration-150 hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_#121212] active:translate-x-1 active:translate-y-1 active:shadow-none sm:min-h-14 sm:px-7 sm:text-base"
            >
                Lihat Detail
                <span class="text-xl" aria-hidden="true">&rarr;</span>
            </a>

        </div>

        {{-- Comic Cover --}}
        <div class="flex min-w-0 justify-center md:justify-end">
            <img
                src="{{ asset($latest['cover']) }}"
                alt="Cover {{ $latest['title'] }}"
                class="aspect-[3/4] w-[min(72%,260px)] rotate-2 border-[3px] border-ink bg-white object-cover shadow-[7px_7px_0_#121212] transition-transform duration-300 hover:rotate-0 sm:w-full sm:max-w-[300px] sm:shadow-[10px_10px_0_#121212] md:max-w-[320px]"
            >
        </div>

    </div>
</section>
@endsection
