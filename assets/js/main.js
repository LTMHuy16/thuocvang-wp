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

// Run tasks
jQuery(window).ready(() => {
    activeHeader();
});