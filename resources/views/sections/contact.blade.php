<section id="kontak" class="px-6 pb-24 md:px-12">
  <div class="mx-auto flex max-w-6xl flex-wrap gap-12 rounded-[36px] border-2 border-ink bg-accent p-8 md:p-14">

    <div class="flex flex-[1_1_380px] flex-col items-start gap-6">
      <span class="text-[13px] font-bold tracking-[0.12em]">LANGSUNG KE INTINYA</span>
      <h2 class="text-5xl font-extrabold leading-none tracking-[-0.035em] md:text-6xl">
        Punya ide yang layak
        <em class="font-serif font-normal italic tracking-normal">digambar?</em>
      </h2>

      <div class="flex flex-col gap-1 text-lg">
        <span>E-mail: regukancil@gmail.com</span>
        <span>WhatsApp: [+62 000 0000 0000]</span>
      </div>

      <div class="flex w-full max-w-sm flex-col gap-3">
        <div class="flex flex-col rounded-2xl border-2 border-ink bg-paper px-5 py-4">
          <span class="font-bold">Kota Sukabumi</span>
          <span class="text-sm text-neutral-700"></span>
        </div>
        <div class="flex flex-col rounded-2xl border-2 border-ink bg-paper px-5 py-4">
          <span class="font-bold">JL. Nanggeleng</span>
          <span class="text-sm text-neutral-700"></span>
        </div>
      </div>
    </div>

    <form method="POST" action="{{ route('contact.store') }}"
          class="flex flex-[1_1_380px] flex-col gap-5 rounded-3xl border-2 border-ink bg-paper p-7 shadow-[6px_6px_0_#121212]">
      @csrf

      <div class="hidden" aria-hidden="true">
        <input type="text" name="website" tabindex="-1" autocomplete="off">
      </div>

      @if (session('sent'))
        <div role="status" class="rounded-2xl border-2 border-ink bg-mint px-4 py-3 font-bold">
          Terima kasih! Pesanmu sudah terkirim.
        </div>
      @endif

      <label class="flex flex-col gap-1.5 text-sm font-bold">
        Nama
        <input type="text" name="name" value="{{ old('name') }}" required
               class="min-h-12 rounded-xl border-2 border-ink bg-paper px-3.5 text-base font-normal">
        @error('name') <span class="text-sm text-hot-text">{{ $message }}</span> @enderror
      </label>

      <label class="flex flex-col gap-1.5 text-sm font-bold">
        Email
        <input type="email" name="email" value="{{ old('email') }}" required
               class="min-h-12 rounded-xl border-2 border-ink bg-paper px-3.5 text-base font-normal">
        @error('email') <span class="text-sm text-hot-text">{{ $message }}</span> @enderror
      </label>

      <label class="flex flex-col gap-1.5 text-sm font-bold">
        Ceritakan proyekmu
        <textarea name="message" rows="5" required
                  class="rounded-xl border-2 border-ink bg-paper px-3.5 py-3 text-base font-normal">{{ old('message') }}</textarea>
        @error('message') <span class="text-sm text-hot-text">{{ $message }}</span> @enderror
      </label>

      <button type="submit"
              class="min-h-14 rounded-full border-2 border-ink bg-ink text-[17px] font-bold text-paper">
        Kirim Brief Proyek
      </button>
    </form>
  </div>
</section>