// *=========================================
// ** Picture animation  **
// *=========================================

// ********** Main Collage Animation **********

const collageImage = document.querySelectorAll('.homepage-collage-image');
const collageWrapper = document.querySelector('.homepage-collage-section');

collageImage.forEach(item => {
  item.style.animationDelay = `0.${Math.floor(Math.random() * 1000)}s`;
  const sceneOne = new ScrollMagic.Scene({
    triggerElement: collageWrapper,
    triggerHook: 0.5,
    reverse: false,
  })
    .setClassToggle(collageImage, 'collage-image-reveal')
    .addTo(controller);
});

// ********** Mobile Collage Animation **********

const mobileCollageImage = document.querySelectorAll('.homepage-mobile-collage-image');

mobileCollageImage.forEach(item => {
  const sceneTwo = new ScrollMagic.Scene({
    triggerElement: item,
    triggerHook: 0.8,
    reverse: false,
  })
    .setClassToggle(item, 'mobile-collage-image-reveal')
    .addTo(controller);
});

// =========================================
// ** Rellax  **
// =========================================

const rellax = new Rellax('.rellax');
