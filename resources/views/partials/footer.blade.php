
<footer class="w-full min-w-0 border-t-[3px] border-ink bg-ink px-5 pb-7 pt-10 text-paper sm:px-8 sm:pt-14 md:px-12">
    <div class="mx-auto flex w-full min-w-0 max-w-6xl flex-col gap-8 sm:gap-10">

       <div class="grid min-w-0 grid-cols-2 gap-x-4 gap-y-8 sm:gap-x-8 md:grid-cols-4 md:gap-8">
            {{-- Brand --}}
            <div class="col-span-2 flex min-w-0 flex-col items-start gap-3 md:col-span-1">
                <span class="max-w-full break-words font-display text-3xl uppercase leading-tight text-accent">
                    {{ config('app.name') }}
                </span>

                <p class="max-w-[280px] text-sm leading-relaxed text-paper/80">
                    Tagline singkat studio.
                </p>
            </div>

            {{-- Jelajahi --}}
            <div class="flex min-w-0 flex-col items-start gap-1">
                <span class="mb-2 text-xs font-bold tracking-widest text-accent">
                    JELAJAHI
                </span>

                <a href="{{ route('home') }}" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Home
                </a>
                <a href="{{ Route::has('arrivals') ? route('arrivals') : '#' }}" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    New Arrival
                </a>
                <a href="{{ Route::has('products') ? route('products') : '#' }}" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Semua Produk
                </a>
            </div>

            {{-- Studio --}}
            <div class="flex min-w-0 flex-col items-start gap-1">
                <span class="mb-2 text-xs font-bold tracking-widest text-accent">
                    STUDIO
                </span>

                <a href="{{ Route::has('about') ? route('about') : '#' }}" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Tentang
                </a>
                <a href="{{ Route::has('activities') ? route('activities') : '#' }}" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Kegiatan
                </a>
                <a href="#" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Kontak
                </a>
            </div>

            {{-- Ikuti --}}
            <div class="flex min-w-0 flex-col items-start gap-1">
                <span class="mb-2 text-xs font-bold tracking-widest text-accent">
                    IKUTI
                </span>

                <a href="#" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Instagram
                </a>
                <a href="#" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    YouTube
                </a>
                <a href="#" class="flex min-h-9 items-center text-sm transition-colors hover:text-accent">
                    Webtoon
                </a>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="break-words border-t border-neutral-600 pt-5 text-xs leading-relaxed text-paper/70 sm:text-[13px]">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>

    </div>
</footer>
