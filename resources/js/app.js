import './bootstrap';
import '../css/app.css';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
import initScrollZoom from './scroll-zoom';
initScrollZoom();

import Lenis from 'lenis';

const lenis = new Lenis({ lerp: 0.1, anchors: true });
const raf = (time) => {
  lenis.raf(time);
  requestAnimationFrame(raf);
};
requestAnimationFrame(raf);