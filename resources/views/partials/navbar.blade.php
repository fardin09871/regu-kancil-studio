@php
    $menu = [
        ['Home', 'home'],
        ['About', 'tentang'],
        ['Artists', 'artists'],
        ['Activities', 'activities'],
        ['New Arrival', 'arrivals'],
        ['All Products', 'products'],
    ];
@endphp

<header class="relative z-50 border-b-[3px] border-ink bg-paper">
    <div class="mx-auto flex min-h-[76px] max-w-7xl items-center justify-between gap-4 px-5 py-3 sm:px-8 md:px-12">

        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            class="shrink-0 font-display text-3xl uppercase leading-none tracking-tight"
        >
            {{ config('app.name') }}
        </a>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Navigasi utama">
            @foreach ($menu as [$label, $route])
                <a
                    href="{{ Route::has($route) ? route($route) : '#' }}"
                    @if (request()->routeIs($route)) aria-current="page" @endif
                    class="flex min-h-11 items-center border-2 border-transparent px-3 text-sm font-bold transition-colors hover:border-ink hover:bg-accent {{ request()->routeIs($route) ? 'border-ink bg-ink text-paper hover:bg-ink hover:text-paper' : '' }}"
                >
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        {{-- Mobile Menu Toggle --}}
        <details class="group relative lg:hidden">
            <summary
                class="flex h-11 w-11 cursor-pointer list-none items-center justify-center border-[3px] border-ink bg-accent shadow-[3px_3px_0_#121212] transition-transform active:translate-x-0.5 active:translate-y-0.5 active:shadow-none [&::-webkit-details-marker]:hidden"
                aria-label="Buka atau tutup menu navigasi"
            >
                <svg class="h-6 w-6 group-open:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="square" d="M4 7h16M4 12h16M4 17h16"/>
                </svg>

                <svg class="hidden h-6 w-6 group-open:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="square" d="m6 6 12 12M18 6 6 18"/>
                </svg>
            </summary>

            <nav
                class="absolute right-0 top-[calc(100%+12px)] w-[min(290px,calc(100vw-40px))] border-[3px] border-ink bg-paper p-2 shadow-[6px_6px_0_#121212]"
                aria-label="Navigasi mobile"
            >
                @foreach ($menu as [$label, $route])
                    <a
                        href="{{ Route::has($route) ? route($route) : '#' }}"
                        @if (request()->routeIs($route)) aria-current="page" @endif
                        class="flex min-h-12 items-center justify-between border-b border-ink/15 px-4 py-3 text-sm font-bold last:border-b-0 hover:bg-accent {{ request()->routeIs($route) ? 'bg-ink text-paper hover:bg-ink' : '' }}"
                    >
                        {{ $label }}

                        @if (request()->routeIs($route))
                            <span aria-hidden="true">←</span>
                        @endif
                    </a>
                @endforeach
            </nav>
        </details>

    </div>
</header>
