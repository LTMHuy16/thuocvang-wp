/**
 * Active header
 */
const activeHeader = () => {
    const header_navbar = jQuery(".header_navbar");
    jQuery(window).scroll(() => {
        if (jQuery(window).scrollTop() > 50) {
            header_navbar.addClass("sticky");
        } else {
            header_navbar.removeClass("sticky");
        }
    });
};

/**
 * Active ScrollToTop Button
 */
const activeScrollToTop = () => {
    const scrollToTop = jQuery("#scrollToTop");
    jQuery(window).scroll(() => {
        if (jQuery(window).scrollTop() > 500) {
            scrollToTop.addClass("active");
        } else {
            scrollToTop.removeClass("active");
        }
    });
};

/**
 * Carousel Service Section
 */
const carouselServices = () => {
    jQuery(".services_slider").owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        dotsClass: "tns-nav",
        animateIn: "fadeOut",
        animateOut: "fadeOut",
    });
};

const carouselReviews = () => {
    jQuery(".reviews_slider").owlCarousel({
        loop: true,
        items: 2,
        navs: true,
        responsive: {
            0: {
                items: 1,
                margin: 0,
            },
            992: {
                item: 2,
                margin: 30,
            },
        },
    });
};

// Run tasks
jQuery(window).ready(() => {
    activeHeader();
    activeScrollToTop();
    carouselServices();
    carouselReviews();
});
