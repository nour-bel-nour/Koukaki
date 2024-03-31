
/*************** H2 -- H3 *************/

const ratio = .3
const options = {
  root: null,
  rootMargin: "0px",
  threshold: ratio
};

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add('visible')
      observer.unobserve(entry.target)
    }
  });
}

const observer = new IntersectionObserver(handleIntersect, options);

observer.observe(document.querySelector(".story__title"));
observer.observe(document.querySelector(".characters__title"));
observer.observe(document.querySelector(".place__title"));
observer.observe(document.querySelector(".studio__title")); 
observer.observe(document.querySelector(".oscars__title")); 


/**************** SWIPER ***************/

const swiper = new Swiper('.swiper', {
    spaceBetween: 60,
    speed: 2000,
    autoplay: {
      delay: 1000,
    },
    effect: "coverflow",
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 60,
      stretch: 50,
      slideShadows: false,
    },
});
 

/***************** LIEU NUAGE ***********************/

const lieu = document.querySelector("#place");
const root = document.documentElement;

window.addEventListener("scroll", () => {
  
  position = Math.round(0 - (window.scrollY - lieu.offsetTop - 200));
  if (position > -450) {
    root.style.setProperty("--position", position + "px");
  }
});


/***************** MENU *****************************/

document.addEventListener("DOMContentLoaded", () => { 

  (function ($) {
    $(".modal__burger").click(function () {
      $(".modal__content").animate(
        { height: "toggle", opacity: "toggle" }
       )
      $(".modal__burger").toggleClass("close")
    })
  })(jQuery);
});

