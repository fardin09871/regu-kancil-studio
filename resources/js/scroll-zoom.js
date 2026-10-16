const clamp = (n, min, max) => Math.min(Math.max(n, min), max);

function targetScale(el, min) {
  const r = el.getBoundingClientRect();
  const vh = window.innerHeight;
  const dist = Math.abs(r.top + r.height / 2 - vh / 2) / vh; // 0 = pas di tengah
  const t = clamp(dist / 0.5, 0, 1);
  const eased = t * t * (3 - 2 * t); // smoothstep
  return 1 - (1 - min) * eased;
}

export default function initScrollZoom() {
  const els = [...document.querySelectorAll('[data-scroll-zoom]')];
  if (!els.length) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const items = els.map((el) => {
    const min = parseFloat(el.dataset.min ?? '0.82');
    const start = targetScale(el, min);
    el.style.transform = `scale(${start})`;
    return { el, min, current: start };
  });

  let running = false;

  const frame = () => {
    let moving = false;
    for (const it of items) {
      const target = targetScale(it.el, it.min);
      it.current += (target - it.current) * 0.12; // makin kecil = makin lembut
      if (Math.abs(target - it.current) < 0.0005) it.current = target;
      else moving = true;
      it.el.style.transform = `scale(${it.current.toFixed(4)})`;
    }
    running = moving;
    if (moving) requestAnimationFrame(frame);
  };

  const kick = () => {
    if (!running) {
      running = true;
      requestAnimationFrame(frame);
    }
  };

  window.addEventListener('scroll', kick, { passive: true });
  window.addEventListener('resize', kick);
}