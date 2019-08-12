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

const serviceImage = document.querySelectorAll('.service-companion-image');
console.log('img', serviceImage);

for (var i = 0; i < serviceImage.length; i++) {
  console.log(serviceImage.length);
  serviceImage[0].src = '/images/image-companion-one.png';
  serviceImage[1].src = '/images/image-companion-two.png';
}
