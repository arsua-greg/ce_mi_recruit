var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2.7,
  loop: true,
  a11y: false,
  autoplay: false,
  breakpoints: {
    1000: {
      slidesPerView: 5,
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//toggle navmenu
function toggleMenu() {
  var hamburgerMenu = document.querySelector(".hamburger_menu");
  var navSp = document.querySelector(".nav_sp");

  hamburgerMenu.classList.toggle("isActive");
  navSp.classList.toggle("isOpen");
}

//offset on anchor tag
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        const offset = 50; // Adjust this value based on your needs
        const targetPosition = targetElement.offsetTop - offset;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }
    });
  });
});


$(document).ready(function() {
  $(".drop_btn").on("click", function(event) {
    event.preventDefault();
    var $dropDown = $(this).next(".drop_down");
    $dropDown.slideToggle();

    var $image = $(this).find("img");
    $image.toggleClass("rotate"); // Just toggle the class without checking
  });
});

