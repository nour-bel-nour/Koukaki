/*************** H2 -- H3 *************/
const ratio = .2
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



