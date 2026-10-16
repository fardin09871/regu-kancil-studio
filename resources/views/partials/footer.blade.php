@php
  $footerMenu = [
    ['01', 'Home', '#home'],
    ['02', 'Tentang', '#tentang'],
    ['03', 'Artists', '#artists'],
    ['04', 'Kegiatan', '#kegiatan'],
    ['05', 'New Arrival', '#new-arrival'],
    ['06', 'Semua Produk', '#produk'],
  ];
@endphp

<footer class="bg-ink px-6 pb-7 pt-16 text-paper md:px-12">
  <div class="mx-auto flex max-w-6xl flex-col gap-14">
    <div class="flex flex-wrap justify-between gap-x-20 gap-y-12">
      <nav class="flex-[2_1_360px] border-t border-neutral-600">
        @foreach ($footerMenu as [$no, $label, $href])
          <a href="{{ $href }}" class="flex min-h-16 items-center justify-between gap-4 border-b border-neutral-600 text-3xl font-bold tracking-tight">
            <span class="flex items-baseline gap-5">
              <span class="text-sm font-medium text-accent">{{ $no }}</span>
              {{ $label }}
            </span>
            <span aria-hidden="true">→</span>
          </a>
        @endforeach
      </nav>

      <div class="flex flex-[1_1_200px] flex-col gap-1">
        <span class="pb-2.5 text-xs font-bold tracking-[0.12em] text-accent">DI TEMPAT LAIN</span>
        <a href="#" class="flex min-h-11 items-center text-[17px]">Instagram</a>
        <a href="#" class="flex min-h-11 items-center text-[17px]">Behance</a>
        <a href="#" class="flex min-h-11 items-center text-[17px]">YouTube</a>
      </div>
    </div>

    <div class="flex flex-wrap justify-between gap-3 border-t border-neutral-600 pt-5 text-[13px]">
      <span>© {{ date('Y') }} {{ config('app.name') }}</span>
      <span>[Tagline penutup studio.]</span>
    </div>
  </div>
</footer>