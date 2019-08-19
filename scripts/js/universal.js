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
  window.webkitRequestAnimationFrame ||
  window.mozRequestAnimationFrame ||
  window.msRequestAnimationFrame ||
  window.oRequestAnimationFrame ||
  // IE Fallback, you can even fallback to onscroll
  // eslint-disable-next-line func-names
  function(callback) {
    window.setTimeout(callback, 1000 / 60);
  };

// Target which elements will have reveal class added

const elementsToShow = document.querySelectorAll('.fade-up-in');

// Helper function to check when element is in viewport, adapted from: http://stackoverflow.com/a/7557433/274826

function isElementInViewport(el) {
  const bounding = el.getBoundingClientRect();

  //Set how far the element 'peeks' into the viewport
  let offsetTop = 50; // Offset in pixels or bounding.height * 0.9 (fraction of elements height)
  let offsetBottom = 0; // Offset in pixels or bounding.height * 0.9 (fraction of elements height)

  let offsetFirst = offsetTop - bounding.height;
  let offsetSecond = bounding.height - offsetBottom;
  return (
    bounding.top >= offsetFirst &&
    bounding.bottom <=
      (window.innerHeight + offsetSecond ||
        document.documentElement.clientHeight + offsetSecond)
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
