// =========================================
// ** Responsive Menu  **
// =========================================

const app = new Vue({
  el: '#vue-wrapper',
  data: {
    navPull: false,
    outlineHide: true,
    categoryReveal: false,
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

// *=========================================
// ** ScrollMagic  **
// *=========================================

// * Init ScrollMagic
const controller = new ScrollMagic.Controller();

// Collect elements to fade in
const fadeUpIn = document.querySelectorAll('.fade-up-in');

// Loop through elements to add animation
fadeUpIn.forEach(item => {
  const sceneOne = new ScrollMagic.Scene({
    triggerElement: item,
    triggerHook: 0.95,
    reverse: false,
  })
    .setClassToggle(item, 'fade-up-in-reveal')
    // TODO: Remove indicators
    .addTo(controller);
});

// ********** Footer and contact form **********

const footer = document.querySelector('.main-footer');
const colourChange = document.querySelectorAll('.colour-will-change');

colourChange.forEach(item => {
  const sceneTwo = new ScrollMagic.Scene({
    triggerElement: footer,
    triggerHook: 0.8,
    // reverse: false,
  })
    .setClassToggle(item, 'colour-change')
    // TODO: Remove indicators
    // .addIndicators({ colorTrigger: '#f00' })
    .addTo(controller);
});

// =========================================
// ** Menu Scroll Hide  **
// =========================================
let scrollPos = 0;
const mainNav = document.querySelector('.main-nav');
const iosNavPull = document.querySelector('.ios-nav-pull');
// adding scroll event
// eslint-disable-next-line func-names
window.addEventListener('scroll', function() {
  // detects new state and compares it with the new one
  // eslint-disable-next-line prettier/prettier
  if (
    document.body.getBoundingClientRect().top < scrollPos &&
    !mainNav.classList.contains('nav-reveal') &&
    window.scrollY > 10
  ) {
    mainNav.classList.add('menu-scroll-hide');
  } else {
    mainNav.classList.remove('menu-scroll-hide');
  }

  if (document.body.getBoundingClientRect().top < scrollPos && window.innerWidth <= 700 && window.scrollY > 10) {
    iosNavPull.classList.add('button-scroll-hide');
  } else {
    iosNavPull.classList.remove('button-scroll-hide');
  }
  // saves the new position for iteration.
  scrollPos = document.body.getBoundingClientRect().top;
});

// =========================================
// ** Lazy load  **
// =========================================

const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy',
});

// *=========================================
// ** Cookie Warning  **
// *=========================================

const cookieBanner = document.querySelector('.cookie-warning-wrapper');
const cookieWarningButton = document.querySelector('.cookie-warning-button');

if (localStorage.getItem('cookieSeen') !== 'shown') {
  cookieBanner.classList.add('show-cookie-warning');
} else {
  cookieBanner.style.display = 'none';
}

cookieWarningButton.addEventListener(
  'click',
  () => {
    localStorage.setItem('cookieSeen', 'shown');
    cookieBanner.classList.remove('show-cookie-warning');
    cookieBanner.addEventListener('transitionend', () => {
      cookieBanner.style.display = 'none';
    });
  },
  { once: true }
);
