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
 * Show Navbar in Mobile
 */
const showMenuInMobile = () => {
    jQuery(".hamburger").click(() => {
        jQuery(".header_navbar-nav_list").toggleClass("active");
    });
};

/**
 * Show SubMenu in Mobile
 */
const showSubMenuMobile = () => {
    const menuLinks = document.querySelectorAll(".menu-item-has-children > .dropdown-trigger");

    menuLinks.forEach(el => {
        el.addEventListener("click", () => {
            const ulDropdown = el.parentElement.querySelector('.dropdown-content');

            ulDropdown.classList.toggle('show');
        });
    })
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

/**
 * Carousel Reviews Section
 */
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

/**
 * Single Services Tabs
 */
const showTabs = () => {
    const tabTitle = jQuery(".tabs_services .tabs_services-triggers_trigger");
    const tabContents = jQuery(".tabs_services-content .content");

    tabTitle.click((e) => {
        const tabSelected = e.target;

        /**
         *  Tab:
         *  + remove all active tab
         *  + active current tag
         */
        tabTitle.removeClass("active");
        tabSelected.classList.add("active");

        /**
         *  Content:
         *  + remove all active content
         *  + active current content
         */
        tabContents.removeClass("active");
        const idSelectedTab = tabSelected.getAttribute("data-id");
        const selectedContent = jQuery(
            `.tabs_services-content .content[data-id="${idSelectedTab}"]`
        );
        selectedContent.addClass("active");
    });
};

/**
 * Toggle Accordion
 */
const toggleAccordion = () => {
    const accordions = document.querySelectorAll(
        ".faq_accordion .accordion-wrapper .faq_accordion-trigger"
    );

    accordions.forEach((accordion) => {
        accordion.addEventListener("click", (e) => {
            const parentEl = accordion.parentElement;
            const content = parentEl.querySelector(".faq_accordion-content");
            const plusIcon = accordion.querySelector(".faq_accordion-trigger_icon");

            if (plusIcon.classList.contains("icon-plus")) {
                plusIcon.classList.replace("icon-plus", "icon-minus");
            } else {
                plusIcon.classList.replace("icon-minus", "icon-plus");
            }

            accordion.classList.toggle("collapsed");
            parentEl.classList.toggle("expanded");
            content.classList.toggle("show");
        });
    });
};

/**
 * BaguetteBox Gallery
 */
const activeGallery = () => {
    baguetteBox.run(".gallery_list");
};

// Run tasks
jQuery(window).ready(() => {
    activeHeader();
    showMenuInMobile();
    showSubMenuMobile();
    activeScrollToTop();
    carouselServices();
    carouselReviews();
    toggleAccordion();
    activeGallery();
    showTabs();
});
