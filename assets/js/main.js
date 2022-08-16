function activeNavbar() {
  const navbar = document.querySelector(".header__navbar");
  const menuIcon = document.querySelector(".header__toggle");
  const menuClose = document.querySelector(".header__close");
  const overlay = document.querySelector(".overlay");

  menuIcon.addEventListener("click", () => {
    navbar.classList.add("show");
    overlay.classList.add("active");
  });

  menuClose.addEventListener("click", () => {
    navbar.classList.remove("show");
    overlay.classList.remove("active");
  });

  overlay.addEventListener("click", () => {
    navbar.classList.remove("show");
    overlay.classList.remove("active");
  });
}

function toggleQuestionBox() {
  const questionBoxs = document.querySelectorAll(
    ".about__accordion .about__panel"
  );

  questionBoxs.forEach((item) => {
    item.addEventListener("click", () => {
      item.classList.toggle("show");
    });
  });
}

function addFixedHeader() {
  const header = document.querySelector(".header");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 400) {
      header.classList.add("fixed");
    } else {
      header.classList.remove("fixed");
    }
  });
}

function runCarousel() {
  if (jQuery(".project__carousel")) {
    jQuery("#testimonial__carousel").owlCarousel({
      loop: true,
      margin: 30,
      dotsEach: true,
      responsive: {
        0: {
          items: 1,
        },
        1024: {
          items: 2,
        },
      },
    });
  }
}

window.addEventListener("load", () => {
  activeNavbar();
  toggleQuestionBox();
  runCarousel();
  addFixedHeader();
});

console.log('REndered');