"use strict";function isElementInViewport(e){var t=e.getBoundingClientRect(),o=offsetTop-t.height,n=t.height-offsetBottom;return t.top>=o&&t.bottom<=(window.innerHeight+n||document.documentElement.clientHeight+n)}function loop(){elementsToShow.forEach(function(e){isElementInViewport(e)&&e.classList.add("fade-up-in-reveal")}),scroll(loop)}var app=new Vue({el:"#vue-wrapper",data:{navPull:!1,outlineHide:!0}});document.addEventListener("keyup",function(e){27===e.keyCode&&(app.navPull=!1)}),document.addEventListener("keyup",function(e){9===e.keyCode&&(app.outlineHide=!1)});var scroll=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)},elementsToShow=document.querySelectorAll(".fade-up-in"),offsetTop=document.querySelector(".fade-up-in").getAttribute("data-offset-top"),offsetBottom=document.querySelector(".fade-up-in").getAttribute("data-offset-bottom");offsetTop||(offsetTop=0),offsetBottom||(offsetBottom=0),console.log(offsetBottom),loop();var rellax=new Rellax(".rellax"),lazyLoadInstance=new LazyLoad({elements_selector:".lazy"});
//# sourceMappingURL=universal-min.js.map