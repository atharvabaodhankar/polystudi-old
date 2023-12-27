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

// Courses GSAP

gsap.from(".ch-h1", {
  x: 300,
  duration: 1.2,
  opacity: 0,
  scrollTrigger: {
    trigger: ".ch-h1",
    scroller: "body",
    start: "top 40%",
  },
});
gsap.from(".course-box ul li", {
  x: 300,
  duration: 1.2,
  opacity: 0,
  // delay:.5,
  stagger: .4,
  scrollTrigger: {
    trigger: ".course-box ul li",
    scroller: "body",
    start:"top 40%"
  },
});
gsap.from(".course-box ul h1", {
  y: -50,
  duration: 1.2,
  opacity: 0,
  delay:.2,
  stagger: .4,
  scrollTrigger: {
    trigger: ".course-box ul h1",
    scroller: "body",
    start: "top 30%",
  },
});

// About Us GSAP

gsap.from(".au-h1", {
  x: 100,
  duration: 1.2,
  opacity: 0,
  scrollTrigger: {
    trigger: ".au-h1",
 
    scroller: "body",
    start:"top 40%"
  },
});
gsap.from(".aboutus-box", {
  y: -200,
  scale:0,
  duration: 1.2,
  opacity: 0,
  scrollTrigger: {
    trigger: ".aboutus-box",
    scroller: "body",
    start: "top 55%"
  },
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
