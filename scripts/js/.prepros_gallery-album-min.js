const sliderQuery = window.matchMedia('(max-width: 1100px)');
function sliderHide() {
  const carousel = document.querySelector('.main-carousel');
  const flkty = new Flickity(carousel, {
    imagesLoaded: true,
    percentPosition: false,
  });

  const imgs = carousel.querySelectorAll('.gallery-album-image');
  // get transform property
  const docStyle = document.documentElement.style;
  const transformProp = typeof docStyle.transform === 'string' ? 'transform' : 'WebkitTransform';

  flkty.on('scroll', function () {
    flkty.slides.forEach(function (slide, i) {
      const img = imgs[i];
      const x = ((slide.target + flkty.x) * -1) / 3;
      img.style[transformProp] = `translateX(${x}px)`;
    });
  });

  if (sliderQuery.matches) {
    flkty.destroy();
  }
}
sliderHide();

window.addEventListener('resize', sliderHide);

//# sourceMappingURL=.prepros_gallery-album-min.js.map