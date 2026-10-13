@php
  $menu = [
    ['Home', 'home'],
    ['Tentang', 'about'],
    ['Artists', 'artists'],
    ['Kegiatan', 'activities'],
    ['New Arrival', 'arrivals'],
    ['Semua Produk', 'products'],
    
  ];
@endphp
<header class="flex flex-wrap items-center justify-between gap-4 border-b-[3px] border-ink px-6 py-4 md:px-12">
  <a href="{{ route('home') }}" class="font-display text-3xl uppercase">{{ config('app.name') }}</a>
  <nav class="flex flex-wrap items-center gap-1">
    @foreach ($menu as [$label, $route])
      <a href="{{ Route::has($route) ? route($route) : '#' }}"
         class="flex min-h-11 items-center px-3.5 text-[15px] font-bold {{ request()->routeIs($route) ? 'bg-ink text-paper' : '' }}">
        {{ $label }}
      </a>
    @endforeach
  </nav>
</header>