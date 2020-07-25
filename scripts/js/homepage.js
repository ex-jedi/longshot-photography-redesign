// *=========================================
// ** Picture animation  **
// *=========================================

const collageImage = document.querySelectorAll('.homepage-collage-image');
const collageWrapper = document.querySelector('.homepage-collage-section');

collageImage.forEach(item => {
  item.style.animationDelay = `0.${Math.floor(Math.random() * 1000)}s`;
  const sceneOne = new ScrollMagic.Scene({
    triggerElement: collageImage,
    triggerHook: 0.5,
    reverse: false,
  })
    .setClassToggle(collageImage, 'collage-image-reveal')
    // TODO: Remove indicators
    .addTo(controller);
});
