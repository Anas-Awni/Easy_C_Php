/* Scroll to Top */

$(".totop").hide();
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.totop').fadeIn();
        } else {
            $('.totop').fadeOut();
        }
    });

    $('.totop a').click(function(e) {
        e.preventDefault();
        $('body,html').animate({ scrollTop: 0 }, 200);
    });

});


/*
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll("nav #menu li a");
window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop - sectionHeight / 3) {
            current = section.getAttribute("id");
        }
    });

    navLi.forEach((li) => {
        li.classList.remove("active");
        if (li.classList.contains(current)) {
            li.classList.add("active");
        }
    });
});
*/