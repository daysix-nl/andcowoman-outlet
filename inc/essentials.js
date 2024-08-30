// // add padding top to show content behind navbar
// $("body").css("padding-top", $(".navbar").outerHeight() + "px");

// // detect scroll top or down
// if ($(".smart-scroll").length > 0) {
//   // check if element exists
//   var last_scroll_top = 0;
//   clicked = false;
//   $(window).on("scroll", function () {
//     scroll_top = $(this).scrollTop();

//     if (scroll_top < last_scroll_top || scroll_top < 100) {
//       $(".smart-scroll").removeClass("scrolled-down").addClass("scrolled-up");
//       clicked = false;
//     } else {
//       $(".smart-scroll").removeClass("scrolled-up").addClass("scrolled-down");
//       $(".dropdown-menu.show").removeClass("show");
//       if (!clicked && !$(".navbar-toggler").hasClass("collapsed")) {
//         $(".navbar-toggler").click();
//         clicked = true;
//       }
//     }
//     last_scroll_top = scroll_top;
//   });
// }


// Navbar

$(".navbar-toggler").click(function() {
    if ($(".navbar-toggler").hasClass("collapsed")) {
        $("#Hamburger").removeClass("d-none");
        $("#Close").addClass("d-none");
        $("#navv").removeClass("bgd");
    } else {
        $("#Hamburger").addClass("d-none");
        $("#Close").removeClass("d-none");
        $("#navv").addClass("bgd");
    }
});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $(".wrap img").addClass("hideicon");
    } else {
        $(".wrap img").removeClass("hideicon");
    }
});


// Navbar resize on scroll

$(document).ready(function() {
    $(window).on('scroll', function() {
        if (Math.round($(window).scrollTop()) > 50) {
            $('nav').addClass('scrolled');
            $('main').addClass('sticky-padding');
        } else {
            $('nav').removeClass('scrolled');
            $('main').removeClass('sticky-padding');
        }
    });
});



const actualBtn = document.getElementById("input_1_6");

const fileChosen = document.getElementById("file-chosen");

actualBtn.addEventListener("change", function() {
    fileChosen.textContent = this.files[0].name;
});


smoothScroll.init();


var button = document.querySelector(".balk-icon");
var elementBalk = document.querySelector(".balk");
var elementNone = document.querySelector(".header-add");
var elementTop = document.querySelector(".header-top");
var elementCart = document.querySelector(".cart-add");
var elementMain = document.querySelector("main");

button.addEventListener("click", function() {
    elementBalk.classList.toggle("balk-big");
    elementNone.classList.toggle("none");
    elementTop.classList.toggle("none-fixed");
    elementCart.classList.toggle("none");
    elementMain.classList.toggle("overlay-grey");
});