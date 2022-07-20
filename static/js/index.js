// ********************
// ANIMATE NAV
// ********************

const nav = document.querySelector(".nav");

window.onscroll = () => {
  if (window.scrollY > 0) {
    nav.classList.add("is-scrolled");
  } else {
    nav.classList.remove("is-scrolled");
  }
};
