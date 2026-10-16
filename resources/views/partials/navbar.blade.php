@php
  $menu = [
    ['Home', 'home'],
    ['About', 'tentang'],
    ['Artists', 'artists'],
    ['Activities', 'kegiatan'],
    ['New Arrival', 'new-arrival'],
    ['All Products', 'produk'],
  ];
@endphp

<header
  x-data="{ open: false }"
  class="relative z-50 mx-auto max-w-6xl px-6 py-4 md:px-12"
>
  <div class="flex items-center justify-between">

    {{-- Logo --}}
    <a
      href="#home"
      class="text-2xl font-extrabold tracking-tight text-ink"
    >
      {{ config('app.name') }}
    </a>

    {{-- Hamburger Mobile --}}
    <button
      type="button"
      @click="open = !open"
      :aria-expanded="open"
      aria-label="Buka menu"
      class="flex size-10 items-center justify-center text-ink md:hidden"
    >
      <span
        class="text-2xl leading-none"
        x-text="open ? '✕' : '☰'"
      >☰</span>
    </button>

<nav
  x-data="{
    hovered: null,
    left: 0,
    width: 0,
    move(el, id) {
      const nav = $refs.menu.getBoundingClientRect();
      const item = el.getBoundingClientRect();

      this.left = item.left - nav.left;
      this.width = item.width;
      this.hovered = id;
    }
  }"
  x-ref="menu"
  @mouseleave="hovered = null"
  :class="open ? 'flex' : 'hidden'"
  class="relative w-full flex-col items-center gap-2
         bg-paper px-6 py-4
         md:flex md:w-auto md:flex-row md:gap-7
         md:bg-transparent md:p-0"
>
  @foreach ($menu as [$label, $id])
    <a
      href="#{{ $id }}"
      @mouseenter="move($el, '{{ $id }}')"
      @focus="move($el, '{{ $id }}')"
      @click="open = false"
      class="relative flex min-h-11 items-center text-base
             font-medium text-ink transition-colors
             hover:text-neutral-600
             md:min-h-0 md:py-2 md:text-[19px]"
    >
      {{ $label }}
    </a>
  @endforeach

  <span
    class="pointer-events-none absolute bottom-0 hidden h-[4px]
           rounded-full bg-ink
           transition-all duration-300
           ease-[cubic-bezier(0.22,1,0.36,1)]
           md:block"
    :style="`
      left: ${left}px;
      width: ${width}px;
      opacity: hovered ? 1 : 0;
    `"
  ></span>
</nav>
  </div>
</header>
