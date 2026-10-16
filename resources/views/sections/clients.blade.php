<section class="overflow-hidden border-y-2 border-ink py-7">
  <p class="mx-auto mb-5 max-w-6xl px-6 text-[13px] font-bold tracking-[0.12em] md:px-12">DIPERCAYA OLEH</p>

  <div class="flex w-max animate-marquee motion-reduce:animate-none">
    @foreach ([1, 2] as $copy)
      <div class="flex gap-4 pr-4" @if ($copy === 2) aria-hidden="true" @endif>
        @foreach ($clients as $client)
          <div class="flex h-[72px] w-[180px] flex-none items-center justify-center rounded-2xl border-2 border-dashed border-ink text-sm font-bold">
            {{ $client }}
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
</section>