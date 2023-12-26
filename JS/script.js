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
const navBtns = document.querySelectorAll('.nav-btn');
var nav = document.querySelector("#nav");

menu.addEventListener("click", () => {
  menu.classList.toggle("active");
  nav.classList.toggle("active");
});

navBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    menu.classList.remove("active");
    nav.classList.remove("active");
  });
});


Shery.mouseFollower({
  skew: true,
  ease: "cubic-bezier(0.23, 1, 0.320, 1)",
  duration: 0.2,
});

Shery.makeMagnet(".magnet");


