const sliderQuery=window.matchMedia("(max-width: 1100px)");function sliderHide(){const e=document.querySelector(".main-carousel"),t=new Flickity(e,{imagesLoaded:!0,percentPosition:!1}),r=e.querySelectorAll(".gallery-album-image"),i="string"==typeof document.documentElement.style.transform?"transform":"WebkitTransform";t.on("scroll",(function(){t.slides.forEach((function(e,n){const o=r[n],s=-1*(e.target+t.x)/3;o.style[i]=`translateX(${s}px)`}))})),sliderQuery.matches&&t.destroy()}sliderHide(),window.addEventListener("resize",sliderHide);
//# sourceMappingURL=gallery-album-min.js.map