import './bootstrap';
import Dropzone from 'dropzone';
import 'dropzone/dist/dropzone.css';

Dropzone.autoDiscover = false;

// Optionally export a function for init (like previous example)
export function initTestimonialDropzone() {
  // Your dropzone initialization code here
}

// Run immediately or expose function for use later
document.addEventListener('DOMContentLoaded', () => {
  initTestimonialDropzone();
});

