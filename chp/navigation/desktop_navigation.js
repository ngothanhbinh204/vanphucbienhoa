// Desktop Navigation Scripts
jQuery(document).ready(function(){

    // ---------- Open 'em up ----------- //
    jQuery('.tray_link_hover').hover(function(){
        // Assign active class to correct link in menu
        jQuery('.tray_link_hover').removeClass('active');
        jQuery(this).addClass('active');
        // Close other trays
        jQuery('.mega_menu_tray').removeClass('open');
        // Find ID of current hovered item
       var this_link_id = jQuery(this).attr('id');
       var that_tray_id = '#' + this_link_id + '_tray';
       // Open relevant tray
       jQuery(that_tray_id).addClass('open');
       // Open tray background
        jQuery('.mega_tray_background').addClass('open');
        // Prevent scroll
        jQuery('html').addClass('no_scroll');
        jQuery('html').attr("data-lenis-prevent", true);
    });
    jQuery('.mobile_tray_link_hover').click(function(){
        jQuery('.mobile_tray_link_hover').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.mega_menu_tray').removeClass('open');
        var this_link_id = jQuery(this).attr('id');
        var that_tray_id = '#' + this_link_id + '_tray';
        jQuery(that_tray_id).addClass('open');
        jQuery('.mega_tray_background').addClass('open');
        jQuery('html').addClass('no_scroll');
        jQuery('html').attr("data-lenis-prevent", true);
    });
    // Normie nav link hover
    jQuery(".normal_nav_link").mouseenter(function() {
        jQuery(this).addClass('active');
    });
    jQuery('.normal_nav_link').mouseleave(function() {
        jQuery(this).removeClass('active');
    });

    // ---------- Close 'em down ----------- //
    // Things that close the nav bar down, on hover
    jQuery('.normal_nav_link, .button_menu, .global_message_bar, .mega_tray_background, .main_logo').hover(function(){
        // Close all trays and backgrounds
        jQuery('.tray_link_hover').removeClass('active');
        jQuery('.mega_tray_background').removeClass('open');
        jQuery('.mega_menu_tray').removeClass('open');
        // Allow Scroll
        jQuery('html').removeClass('no_scroll');
        jQuery('html').removeAttr("data-lenis-prevent");
    });

    // On Mega Tray Background Click
    jQuery('.mega_tray_background').click(function(){
        // Close all trays and backgrounds
        jQuery('.tray_link_hover').removeClass('active');
        jQuery('.mega_tray_background').removeClass('open');
        jQuery('.mega_menu_tray').removeClass('open');
        // Allow Scroll
        jQuery('html').removeClass('no_scroll');
        jQuery('html').removeAttr("data-lenis-prevent");
    });
});

// ---------- Bump 'er up ----------- //
function bumping() {
    var headerHeight = jQuery('header').innerHeight();
    if (jQuery(window).width() < 1299.98) {
        jQuery('div.header_bumper').css('max-height', headerHeight);
    } else {
        jQuery('div.header_bumper').css('max-height', headerHeight);
    }
    //console.log('bumped');
}

function recalculate_bumping() {
    // var intervalId = setInterval(function() {
    //     bumping();
    // }, 1); // run every 5ms
    //
    // setTimeout(function(){
    //     clearInterval(intervalId);
    // },600) // stop it after 600ms

    setTimeout(function(){
        bumping();
    },220);
}

jQuery(document).ready(function(){
    bumping();
    setTimeout(function(){
        bumping();
    },220);
    setTimeout(function(){
        bumping();
    },1000);
});
jQuery(window).on('resize orientationchange', function(){
    recalculate_bumping();
});
jQuery(function($) {
    jQuery(window).scroll(function(){
        if (jQuery(window).scrollTop() < 1) {
            recalculate_bumping();
        }
    });
});


// ---------- Bump search overlay down ----------- //
// position the search bar directly underneath the global message bar or mobile nav - whichever.
function positionSearch() {
    var globalMessageBarHeight = jQuery('div.global_message_bar').innerHeight();
    var mobileMenuHeight = jQuery('div.mobile_menu_bar').innerHeight();

    if (jQuery(window).width() < 1299.98) {
        var mobileElementsTotal = globalMessageBarHeight + mobileMenuHeight;
        // jQuery('#dynamicSearch').css('top', mobileElementsTotal);
        // jQuery('#dynamicSearch .dynamic_search_background.background_overlay').css('top', mobileElementsTotal);
        jQuery('#dynamicSearch').css('top', 'unset');
        jQuery('#dynamicSearch .dynamic_search_background.background_overlay').css('top', 'unset');
    } else {
        jQuery('#dynamicSearch').css('top', globalMessageBarHeight);
        jQuery('#dynamicSearch .dynamic_search_background.background_overlay').css('top', globalMessageBarHeight);
    }
}

function positionMobileBar() {
    var globalMessageBarHeight = jQuery('div.global_message_bar').innerHeight();

    if (jQuery(window).width() < 1299.98) {
        jQuery('div.mobile_menu_bar').css('top', globalMessageBarHeight);
    }
}
function chpSearchBar(){
    jQuery(document).ready(function() {
        jQuery('.search-button-toggle').click(function() {
            jQuery('.nav-search-bar').toggleClass('active');
        });
    });
    jQuery(document).click(function(event) {
        if (!jQuery(event.target).closest('.nav-search-bar').length) {
            if (!jQuery(event.target).closest('.search-button-toggle').length) {
                jQuery('.nav-search-bar').removeClass('active');
            }
        }
    });
}


jQuery(document).ready(function(){
   // positionSearch();
    positionMobileBar();
    chpSearchBar()
});
jQuery(window).on('resize orientationchange', function(){
   // positionSearch();
    positionMobileBar();
});


jQuery(document).ready(function(){
    // Open the desktop search.
    jQuery('button#search_desktop_open').click(function(){

        //alert('Need search button link please.');

        jQuery('#dynamicSearch').addClass('open');
        setTimeout(function(){
            jQuery("input.site-search-input").focus();
        }, 500);
    });
    // close dat.
    jQuery('.dynamic_search_background, #search_bar__close_button').click(function(){
        jQuery('#dynamicSearch').removeClass('open');
    });
});

jQuery(document).ready(function(){
    jQuery('a#shop_link_desktop').click(function() {
        alert('Need shop button link please.');
    });
});

jQuery(document).ready(function(){
    jQuery('#mobile_navigation .mobile_menu_button').click(function(){
        jQuery('#mobile_navigation_tray').toggleClass('open');
        jQuery('.mobile_navigation_tray_background').toggleClass('open');
        // Prevent scroll
        jQuery('html').addClass('no_scroll');
        jQuery('html').attr("data-lenis-prevent", true);
    });
    jQuery('#mobile_navigation_tray .mobile_close_tray, .mobile_mega_menu_sub_tray .mobile_close_tray').click(function(){
        jQuery('#mobile_navigation_tray').toggleClass('open');
        jQuery('.mobile_navigation_tray_background').toggleClass('open');
        jQuery('.mobile_mega_menu_sub_tray .mobile_mega_menu_tray').removeClass('open');
        // Allow scroll
        jQuery('html').removeClass('no_scroll');
        jQuery('html').removeAttr("data-lenis-prevent", true);
    });
});




// Mobile Navigation Scripts
jQuery(document).ready(function(){
    // ---------- Open 'em up ----------- //
    jQuery('.tray_link_mobile').click(function(){
        // Assign active class to correct link in menu
        jQuery('.tray_link_mobile').removeClass('active');
        jQuery(this).addClass('active');
        // Close other trays
        jQuery('.mobile_menu_tray').removeClass('open');
        // Find ID of current hovered item
        var this_link_id = jQuery(this).attr('id');
        var that_tray_id = '#' + this_link_id + '_mobile_tray';
        // Open relevant tray
        jQuery(that_tray_id).addClass('open');
        // Open tray background
        jQuery('.mega_tray_background').addClass('open');
    });

    // On Mega Tray Background Click
    jQuery('.mobile_navigation_tray_background').click(function(){
        // Close all trays and backgrounds
        jQuery('.mobile_navigation_tray_background').removeClass('open');
        jQuery('#mobile_navigation_tray').removeClass('open');
        jQuery('.mobile_mega_menu_sub_tray .mobile_mega_menu_tray').removeClass('open');
    });

    // On Back Button Click
    jQuery('.mobile_mega_menu_sub_tray .sub_tray_back').click(function() {
        // Close all sub trays
        jQuery('.mobile_mega_menu_sub_tray .mobile_mega_menu_tray').removeClass('open');
    });
});


// --- Check if Touch Device --- //
function isTouchDevice() {
    return (('ontouchstart' in window) ||
        (navigator.maxTouchPoints > 0) ||
        (navigator.msMaxTouchPoints > 0));
    // returns true if it is a touch device.
}

// ------------ preventNavBarLinkClicksOnMobile ------------ //
function preventNavBarLinkClicksOnMobile() {
    // Touch Device Function Set...
    if(isTouchDevice()) { // If is a touch device, don't allow link to click through.
        jQuery(".tray_link_hover").each(function () {
            jQuery(this).click(function (event) {
                event.preventDefault();
            });
        });
    }
    else {
        jQuery(".tray_link_hover").each(function () {  // If isn't a touch device, click through.
            jQuery(this).click(function (event) {
                return true;
            });
        });
    }
    // Window Size Function Set...
    if (jQuery(window).width() < 1299.98) { // If is when mobile nav kicks in, don't allow link to click through.
        jQuery(".tray_link_hover").each(function () {
            jQuery(this).click(function (event) {
                event.preventDefault();
            });
        });
    } else if (jQuery(window).width() > 1299.98 && isTouchDevice() === false){
        jQuery(".tray_link_hover").each(function () { // If is when desktop nav kicks in, and isn't a touch device, allow click.
            jQuery(this).click(function (event) {
                return true;
            });
        });
    }
}
function toggleHeadingClassOnScroll() {
    function checkScroll() {

        if (jQuery(window).scrollTop() > 30) {
            jQuery('header').addClass('scrolled');
        } else {
            jQuery('header').removeClass('scrolled');
        }
    }
    jQuery(window).on('scroll', checkScroll);
    checkScroll();
}

function addSpaceToTheHeader(){
    function initializeHeaderScroll(){
        var header = jQuery('#trustpilot-widget-trustbox-0-wrapper + .site header.header');
        if (header.length) {
            var initialTop = 24;
            jQuery(window).scroll(function() {
                var newTop = initialTop - jQuery(this).scrollTop();
                if (newTop < 0) {
                    newTop = 0;
                }
                header.css('top', newTop + 'px');
            });
        }
    }
    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.addedNodes.length) {
                mutation.addedNodes.forEach(function(node) {
                    if (node.id === 'trustpilot-widget-trustbox-0-wrapper') {
                        initializeHeaderScroll();
                        observer.disconnect();
                    }
                });
            }
        });
    });
    observer.observe(document.body, { childList: true, subtree: true });
}
jQuery(document).ready(function(){
    isTouchDevice();
    preventNavBarLinkClicksOnMobile();
    toggleHeadingClassOnScroll();
    addSpaceToTheHeader();
});
jQuery(window).on('resize orientationchange', function(){
    isTouchDevice();
    preventNavBarLinkClicksOnMobile();
});





