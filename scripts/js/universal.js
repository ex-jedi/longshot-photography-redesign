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
// ** Scroll Zone  **
// =========================================

// Based on a CSS Animation Rocks tutorial - https://cssanimation.rocks/scroll-animations/

// Detect request animation frame
const scroll =
  window.requestAnimationFrame ||
  // IE Fallback
  // eslint-disable-next-line func-names
  function(callback) {
    window.setTimeout(callback, 1000 / 60);
  };
const elementsToShow = document.querySelectorAll('.fade-up-in');

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0 && rect.bottom >= 0) ||
    (rect.bottom >=
      (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <=
        (window.innerHeight || document.documentElement.clientHeight)) ||
    (rect.top >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight))
  );
}

// Loop through target elements

function loop() {
  // eslint-disable-next-line func-names
  elementsToShow.forEach(function(element) {
    if (isElementInViewport(element)) {
      element.classList.add('fade-up-in-reveal');
    }
  });

  scroll(loop);
}

// Call the loop for the first time
loop();
// =========================================
// ** Menu Scroll Hide  **
// =========================================
let scrollPos = 0;
const mainNav = document.querySelector('.main-nav');
// adding scroll event
// eslint-disable-next-line func-names
window.addEventListener('scroll', function() {
  // detects new state and compares it with the new one
  // eslint-disable-next-line prettier/prettier
  if (
    document.body.getBoundingClientRect().top < scrollPos &&
    !mainNav.classList.contains('nav-reveal')
  ) {
    mainNav.classList.add('menu-scroll-hide');
  } else {
    mainNav.classList.remove('menu-scroll-hide');
  }
  // saves the new position for iteration.
  scrollPos = document.body.getBoundingClientRect().top;
});

// =========================================
// ** Rellax  **
// =========================================

let rellax = new Rellax('.rellax');

// =========================================
// ** Lazy load  **
// =========================================
let lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy',
  // ... more custom settings?
});
