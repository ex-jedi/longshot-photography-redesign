// =========================================
// ** Responsive Menu  **
// =========================================

const app = new Vue({
  el: '#vue-wrapper',
  data: {
    navPull: false,
    outlineHide: true,
  },
});

// Allows menu to be closed with escape key
document.addEventListener('keyup', evt => {
  if (evt.keyCode === 27) {
    app.navPull = false;
  }
});

// Removes outline hiding when tab key is pressed
document.addEventListener('keyup', evt => {
  if (evt.keyCode === 9) {
    app.outlineHide = false;
  }
});

// =========================================
// ** Rellax  **
// =========================================

let rellax = new Rellax('.rellax');

// =========================================
// ** Lazy load  **
// =========================================
var lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy',
  // ... more custom settings?
});
