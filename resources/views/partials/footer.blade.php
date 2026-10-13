<footer class="bg-ink px-6 pb-7 pt-14 text-paper md:px-12">
  <div class="mx-auto flex max-w-6xl flex-col gap-10">
    <div class="flex flex-wrap justify-between gap-x-16 gap-y-10">
      <div class="flex flex-[1_1_260px] flex-col gap-3">
        <span class="font-display text-3xl uppercase text-accent">{{ config('app.name') }}</span>
        <span class="max-w-[280px] text-sm leading-relaxed">Tagline singkat studio.</span>
      </div>

      <div class="flex flex-col gap-0.5">
        <span class="pb-2 text-xs font-bold tracking-widest text-accent">JELAJAHI</span>
        <a href="{{ route('home') }}" class="flex min-h-9 items-center text-[15px]">Home</a>
        <a href="#" class="flex min-h-9 items-center text-[15px]">New Arrival</a>
        <a href="#" class="flex min-h-9 items-center text-[15px]">Semua Produk</a>
      </div>

      <div class="flex flex-col gap-0.5">
        <span class="pb-2 text-xs font-bold tracking-widest text-accent">STUDIO</span>
        <a href="#" class="flex min-h-9 items-center text-[15px]">Tentang</a>
        <a href="#" class="flex min-h-9 items-center text-[15px]">Kegiatan</a>
        <a href="#" class="flex min-h-9 items-center text-[15px]">Kontak</a>
      </div>

      <div class="flex flex-col gap-0.5">
        <span class="pb-2 text-xs font-bold tracking-widest text-accent">IKUTI</span>
        <a href="#" class="flex min-h-9 items-center text-[15px]">Instagram</a>
        <a href="#" class="flex min-h-9 items-center text-[15px]">YouTube</a>
        <a href="#" class="flex min-h-9 items-center text-[15px]">Webtoon</a>
      </div>
    </div>

    <span class="border-t border-neutral-600 pt-5 text-[13px]">© {{ date('Y') }} {{ config('app.name') }}</span>
  </div>
</footer>