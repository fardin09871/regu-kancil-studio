@php
  $faqs = [
    ['Bagaimana cara memulai proyek bersama studio?', '[Jawaban singkat: kirim brief lewat form di bawah, lalu dijadwalkan sesi ngobrol.]'],
    ['Berapa lama satu proyek biasanya dikerjakan?', '[Jawaban singkat: estimasi durasi untuk komik, ilustrasi, dan animasi.]'],
    ['Apakah ada revisi?', '[Jawaban singkat: jumlah putaran revisi yang termasuk dalam paket.]'],
    ['Apakah studio menerima proyek dari luar kota atau luar negeri?', '[Jawaban singkat: cara kerja jarak jauh dan zona waktu.]'],
  ];
@endphp

<section id="faq" class="px-6 py-24 md:px-12">
  <div x-data="{ open: 0 }" class="mx-auto flex max-w-6xl flex-wrap gap-x-12 gap-y-10">
    <div class="flex flex-[1_1_280px] flex-col items-start gap-4">
      <span class="text-[13px] font-bold tracking-[0.12em]">FAQ</span>
      <h2 class="text-4xl font-normal leading-[1.05] tracking-[-0.03em] md:text-5xl">
        Pertanyaan yang
        <em class="font-serif italic tracking-normal text-hot-text">sering</em>
        muncul
      </h2>
    </div>

    <div class="flex-[2_1_480px] border-t-2 border-ink">
      @foreach ($faqs as $i => [$question, $answer])
        <div class="border-b-2 border-ink">
          <button type="button"
                  @click="open = open === {{ $i }} ? -1 : {{ $i }}"
                  :aria-expanded="open === {{ $i }}"
                  class="flex min-h-[72px] w-full items-center justify-between gap-4 py-4 text-left text-xl font-bold">
            <span>{{ $question }}</span>
            <span class="flex-none text-3xl leading-none" x-text="open === {{ $i }} ? '−' : '+'">+</span>
          </button>
          <p x-show="open === {{ $i }}" x-cloak x-transition.opacity
             class="max-w-2xl pb-6 leading-relaxed text-neutral-700">
            {{ $answer }}
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>