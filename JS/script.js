// Scroll Navbar

window.addEventListener("scroll", () => {
  if (scrollY > 600) {
    document.body.classList.add("sticky");
  } else {
    document.body.classList.remove("sticky");
  }
});

// Menu and Navbar

var menu = document.querySelector(".menu-btn");
const navBtns = document.querySelectorAll(".nav-btn");
var nav = document.querySelector("#nav");

menu.addEventListener("click", () => {
  menu.classList.toggle("active");
  nav.classList.toggle("active");
});

navBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    menu.classList.remove("active");
    nav.classList.remove("active");
  });
});

// Shery.mouseFollower({
//   skew: true,
//   ease: "cubic-bezier(0.23, 1, 0.320, 1)",
//   duration: 0.2,
// });

Shery.makeMagnet(".magnet");

// Hero page GSAP

var heroAnimate = gsap.timeline();

Shery.textAnimate(".hero-h1", {
  style: 2,
  y: 10,
  delay: 1,
  duration: 2,
  ease: "cubic-bezier(0.13, 1, 0.320, 1)",
  multiplier: 0.1,
});

heroAnimate.from(".hero-div-main h3", {
  x: -100,
  delay: 0.4,
  duration: 1.3,
  opacity: 0,
  stagger: 2,
});
heroAnimate.from(".hero-div-main p", {
  y: 100,
  duration: 1.4,
  opacity: 0,
  stagger: 2,
});

gsap.from(".magnet", {
  y: -100,
  opacity: 0,
  stagger: 0.2,
  duration: 1,
  delay: 0.4,
});

let MenuAnimateFix = gsap.matchMedia();

MenuAnimateFix.add("(max-width: 500px)", () => {
  gsap.to(".nav-ul li", {
    none,
  });
});

gsap.from(".nav-ul li", {
  y: -100,
  stagger: 0.2,
  duration: 0.7,
});
