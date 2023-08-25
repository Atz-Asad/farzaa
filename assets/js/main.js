// PRELOADER START
// document.body.style.position = "fixed";
// window.addEventListener("load", () => {
//     document.body.style.position = "";
//     document.querySelector("#pre-loader").style.opacity = 0;
//     document.querySelector("#pre-loader").style.visibility = "hidden";
// });
// PRELOADER END
(function ($) {
    'use strict';

    var $banner_slider = $('.fz-1-banner-slider'),
        $myaction = $('.mybody');

    

    // BANNER MODAL VIDEO
    $(".fz-banner-vid-btn").modalVideo();

    // banner slider 
    if ($banner_slider.length > 0) {
        $($banner_slider).owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            margin: 0,
            dots: false,

            responsive: {
                0: {
                    items: 1,
                    center: true,
                },

                480: {
                    items: 2,
                    center: false,
                },

                576: {
                    items: 2,
                },

                768: {
                    items: 3,
                },

                992: {
                    items: 4,
                },

                1200: {
                    margin: 30,
                }
            }
        })
    } 





    

/////////////////////////////////////////////////////
// Button Hover Animation
$('.fz-def-btn').on('mouseenter', function (e) {
    var x = e.pageX - $(this).offset().left;
    var y = e.pageY - $(this).offset().top;

    $(this).find('span').css({
        top: y,
        left: x
    });
});
$('.fz-def-btn').on('mouseout', function (e) {
    var x = e.pageX - $(this).offset().left;
    var y = e.pageY - $(this).offset().top;

    $(this).find('span').css({
        top: y,
        left: x
    });
});

/////////////////////////////////////////////////////
// Button Move Animation
const all_btn = gsap.utils.toArray(".fz-def_btn_wrapper");
const all_btn_cirlce = gsap.utils.toArray(".fz-def-btn");
all_btn.forEach((btn, i) => {
    $(btn).mousemove(function (e) {
        callParallax(e);
    });
    function callParallax(e) {
        parallaxIt(e, all_btn_cirlce[i], 80);
    }

    function parallaxIt(e, target, movement) {
        var $this = $(btn);
        var relX = e.pageX - $this.offset().left;
        var relY = e.pageY - $this.offset().top;

        gsap.to(target, 0.5, {
            x: ((relX - $this.width() / 2) / $this.width()) * movement,
            y: ((relY - $this.height() / 2) / $this.height()) * movement,
            ease: Power2.easeOut,
        });
    }
    $(btn).mouseleave(function (e) {
        gsap.to(all_btn_cirlce[i], 0.5, {
            x: 0,
            y: 0,
            ease: Power2.easeOut,
        });
    });
});


// COUNTDOWN JS START =====
$(".fz-hot-deal-countdown").syotimer({
    date: new Date(2023, 2, 24, 15),
    periodic: true,
    periodInterval: 10,
    periodUnit: "d",
});
//===== COUNTDOWN JS END


// NICE SELECT JS START =====
$(document).ready(function () {
    $('select').niceSelect();
});
// ===== NICE SELECT JS END

// ======= CATEGORY LIST OPEN/CLOSE START ======= 
const categoryArea = document.querySelector(".fz-category-area");
const categoryBtn = document.querySelector(".fz-category-btn");
const categoryList = document.querySelector(".fz-category-menu");

if (categoryBtn) {
    categoryBtn.addEventListener("click", () => {
        categoryList.classList.toggle("open");
    })
}
if (categoryList) {
    document.addEventListener("click", (e) => {
        if (!categoryArea.contains(e.target)) {
            categoryList.classList.remove("open");
        }
    })

    window.onscroll = () => {
        if (document.querySelector("header").classList.contains("fixed")) {
            categoryList.classList.remove("open")
        }
    }
}

// ======= CATEGORY LIST OPEN/CLOSE END =======

// NAV MENU OPEN/CLOSE BTN JS START =====
const hamburger = document.querySelector(".fz-hamburger");
const navbar = document.querySelector(".fz-offcanvas-main-nav-wrapper");

if (hamburger) {
    hamburger.addEventListener("click", () => {
        navbar.classList.add("open");
        body.style.overflow = "hidden";
    });
}
$('.fz-button-close').on('click', function () {
    $('.fz-offcanvas-main-nav-wrapper').removeClass('open');
    body.style.overflow = "auto";
})
//===== NAV MENU OPEN/CLOSE BTN JS END 

// ======= MEAN MENU OPTIONS START =======
$(document).ready(function () {
    $('.fz-header-nav').meanmenu({
        meanMenuContainer: '.mobile-menu-updated',
        meanScreenWidth: "991",
        meanExpand: ['+'],
        meanClose: ['-'],
    });
});
// ======= MEAN MENU OPTIONS END =======

// INDEX-2 SEARCH BAR JS START =====
$('.fz-2-search-btn').on('click', function (e) {
    $('.fz-cbsearchbar').addClass('fz-cb-searchbar-opened');
    $('.overlay').addClass('open');
})
$('.fz-cbsearchbar__close, .overlay').on('click', function (e) {
    $('.fz-cbsearchbar').removeClass('fz-cb-searchbar-opened');
    $('.overlay').removeClass('open');
})
//===== INDEX-2 SEARCH BAR JS END

// BANNER SLIDER JS START =====
$(".fz-3-banner-slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    margin: 200,
});
//===== BANNER SLIDER JS END

// LAYER-CAKE SECTION SLIDER JS START =====
$(".fz-3-layer-cake-slider").owlCarousel({
    items: 4,
    autoplay: true,
    loop: true,
    margin: 15,
    dots: false,
    navContainer: ".fz-3-layer-cake-slider-nav",
    navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
    responsiveBaseElement: document.body,

    responsive: {
        0: {
            items: 1,
            center: true,
        },

        480: {
            items: 2,
            center: false,
        },

        576: {
            items: 2,
        },

        768: {
            items: 3,
        },

        992: {
            items: 4,
        },

        1200: {
            margin: 30,
        }
    }
})
//===== LAYER-CAKE SECTION SLIDER JS END

// POUND-CAKE SECTION SLIDER JS START =====
$(".fz-3-pound-cake-slider").owlCarousel({
    items: 4,
    autoplay: true,
    loop: true,
    margin: 15,
    dots: false,
    navContainer: ".fz-3-pound-cake-slider-nav",
    navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
    responsiveBaseElement: document.body,

    responsive: {
        0: {
            items: 1,
        },

        480: {
            items: 2,
        },

        576: {
            items: 2,
        },

        768: {
            items: 3,
        },

        992: {
            items: 4,
        },

        1200: {
            margin: 30,
        }
    }
})
//===== POUND-CAKE SECTION SLIDER JS END

// CUP-CAKE SECTION SLIDER JS START =====
$(".fz-cup-cake-slider").owlCarousel({
    items: 4,
    autoplay: true,
    loop: true,
    margin: 15,
    dots: false,
    navContainer: ".fz-cup-cake-slider-nav",
    navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
    responsiveBaseElement: document.body,

    responsive: {
        0: {
            items: 1,
        },

        480: {
            items: 2,
        },

        576: {
            items: 2,
        },

        768: {
            items: 3,
        },

        992: {
            items: 4,
        },

        1200: {
            margin: 30,
        }
    }
})
//===== CUP-CAKE SECTION SLIDER JS START


$('#fz-2-testimonial-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    navContainer: ".fz-testimonial-slider-nav",
    navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
    dotsContainer: ".fz-testimonial-slider-dots",
    dots: true,
})

$('#fz-3-testimonial-slider').slick({
    slidesToShow: 1,
    vertical: true,
    verticalSwiping: true,
    asNavFor: '.testimonial-img-slider',
    appendArrows: $('.fz-3-testimonial-slider-nav'),
    prevArrow: '<button type="button" class="slick-prev"><i class="fa-regular fa-angle-up"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa-regular fa-angle-down"></i></button>',

    responsive: [
        {
            breakpoint: 992,
            settings: {
                verticalSwiping: false,
                vertical: false,
            }
        }
    ]
});

$('.testimonial-img-slider').slick({
    draggable: false,
    arrows: false,
    asNavFor: '#fz-3-testimonial-slider',
    fade: true,
});


$(".js-modal-btn").modalVideo();

const body = document.body;
const cartBtn = document.querySelector(".fz-header-cart-btn");
const cartModal = document.querySelector("#cart-area-modal");
const overlay = document.querySelector(".overlay");

if (cartBtn) {
    cartBtn.onclick = () => {
        cartModal.classList.add("open");
        overlay.classList.add("open");
        body.style.overflow = "hidden";
    }
}

const quantityOpts = document.querySelectorAll(".cart-product__quantity");

quantityOpts.forEach(quantityOpt => {
    const minusBtn = quantityOpt.querySelector(".cart-product__minus");
    const plusBtn = quantityOpt.querySelector(".cart-product__plus");

    const increasingQtyValue = () => {
        const productQuantityInput = quantityOpt.querySelector(".cart-product-quantity-input");
        productQuantityInput.value++;
    }

    const decreasingQtyValue = () => {
        const productQuantityInput = quantityOpt.querySelector(".cart-product-quantity-input");
        if (productQuantityInput.value > 1) {
            productQuantityInput.value--;
        }
    }

    plusBtn.onclick = () => {
        increasingQtyValue();
    }

    minusBtn.onclick = () => {
        decreasingQtyValue();
    }
});

// WISHLIST MODAL JS
const wishlistBtn = document.querySelector(".fz-header-wishlist-btn");
const wishlistModal = document.querySelector(".fz-wishlist-modal");

if (wishlistBtn) {
    wishlistBtn.onclick = () => {
        wishlistModal.classList.add("open");
        overlay.classList.add("open");
        body.style.overflow = "hidden";
    }
}


// CART & WISHLIST MODAL CLOSE
const closeBtns = document.querySelectorAll(".cart-area-modal-close-btn");
closeBtns.forEach(closeBtn => {
    closeBtn.onclick = () => {
        closeModal();
    }
})
overlay.addEventListener("click", () => {
    closeModal();
})

const closeModal = () => {
    cartModal.classList.remove("open");
    wishlistModal.classList.remove("open")
    overlay.classList.remove("open");
    body.style.overflow = "visible";
}



// INDEX-3 BANNER VIDEO MODAL
$(".fz-1-banner-vid-btn").modalVideo();

jQuery(".fz-1-banner-slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    nav: false,
    autoplayTimeout: 7000,
    responsive: {
        1200: {
            nav: true,
        }
    },
    navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
    onTranslated: function () {
        // Select the active slide
        var $activeSlide = $('.owl-item.active');

        // Apply the animation only to the active slide
        $activeSlide.find(".text5").each(function () {
            $(this).html($(this).text().replace(/\S+/g, "<span class='word'>$&</span>"));
        });


        var $text5 = $activeSlide.find(".text5 span"),
            tl_5 = new TimelineMax({ repeat: 0 });

        tl_5.staggerFrom(
            $text5,
            0.5,
            { alpha: 0, x: 20, ease: Power1.easeOut },
            0.2,
            "+=0.2"
        )
    }
});


$('.fz-2-heading').each(function () {
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='2_text'>$&</span>"));
});
var $fz2Heading = $(".fz-2-heading span"),
    tl_2 = new TimelineMax({ repeat: -1 });

tl_2
    .staggerFrom(
        $fz2Heading,
        0.5,
        { top: "+=25px", rotation: "-=-3deg", alpha: 0, scale: 0.8, ease: Power1.easeOut },
        0.08)
    .to($fz2Heading, 0.5, { alpha: 0, ease: Power1.easeOut }, '+=5');



$(".fz-1-products-container").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    adaptiveHeight: true,
    appendArrows: $('.fz-1-latest-products-slider-nav'),
    prevArrow: '<button type="button" class="slick-prev"><i class="fa-regular fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa-regular fa-angle-right"></i></button>',

    responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
            }
        },

        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                infinite: true,
                autoplay: true,
            }
        },

        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                infinite: true,
                autoplay: true,
            }
        },

        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
            }
        },

        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});




$(".filter-navs button").on("click", function () {
    // Remove active class from all buttons
    $(".filter-navs button").removeClass("active");

    // Add active class to clicked button
    $(this).addClass("active");

    var filter = $(this).data("filter");
    $(".fz-1-products-container").slick("slickUnfilter");

    if (filter == "wood-door") {
        $(".fz-1-products-container").slick("slickFilter", ".wood-door");
    }
    else if (filter == "fiberglass") {
        $(".fz-1-products-container").slick("slickFilter", ".fiberglass");
    }
    else if (filter == "solid-core") {
        $(".fz-1-products-container").slick("slickFilter", ".solid-core");
    }
    else if (filter == "mdf") {
        $(".fz-1-products-container").slick("slickFilter", ".mdf");
    }
    else if (filter == "all") {
        $(".fz-1-products-container").slick("slickUnfilter");
    }
});


$(".fz-1-modern-door-slider").owlCarousel({
    items: 4,
    loop: true,
    autoplay: true,
    nav: true,
    navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
    navContainer: ".fz-1-modern-door-slider-nav",
    margin: 15,
    responsiveBaseElement: body,
    responsive: {
        0: {
            items: 1,
        },

        480: {
            items: 2,
        },

        576: {
            items: 2,
        },

        768: {
            items: 3,
        },

        992: {
            items: 4,
        },

        1200: {
            items: 4
        }
    }
})

$(".fz-1-brands").owlCarousel({
    items: 5,
    loop: true,
    autoplay: true,
    responsive: {
        0: {
            items: 3,
        },

        480: {
            items: 3,
        },

        768: {
            items: 4,
        },

        992: {
            items: 5,
        }
    }
})


/*--- PRODUCT VIEW TYPE CHANGE JS START ---*/
const gridViewBtn = document.querySelector(".grid-view");
const listViewBtn = document.querySelector(".list-view");
const productsRow = document.querySelectorAll(".fz-inner-products-container .row > *");
const products = document.querySelectorAll(".fz-inner-products-container .fz-1-single-product");
const productsContainer = document.querySelector(".fz-inner-products-container");

if (listViewBtn) {
    listViewBtn.onclick = () => {
        productsContainer.classList.add("list-view-on");
        gridViewBtn.classList.remove("active");
        listViewBtn.classList.add("active");
    }
}

if (gridViewBtn) {
    gridViewBtn.onclick = () => {
        productsContainer.classList.remove("list-view-on");
        gridViewBtn.classList.add("active");
        listViewBtn.classList.remove("active");
    }
}
/*--- PRODUCT VIEW TYPE CHANGE JS END ---*/

// FAQ ACCORDION JS START =====
const accordionItems = document.querySelectorAll(".fz-single-accordion-item");

accordionItems.forEach((accordionItem) => {
    accordionItem.onclick = () => {
        const openedItems = document.querySelector(".fz-single-accordion-item.open");
        if (accordionItem.classList.contains("open")) {
            openedItems.classList.remove("open")
        } else {
            accordionItem.classList.toggle("open");
            if (openedItems) {
                openedItems.classList.remove("open")
            }
        }
    }
})
//===== FAQ ACCORDION JS START


// FIXED HEADER =====
window.addEventListener("scroll", () => {
    const toFixHeaders = document.querySelectorAll(".to-be-fixed");
    toFixHeaders.forEach(toFixHeader => {
        if (window.pageYOffset > 100) {
            toFixHeader.classList.add("fixed");
            document.body.style.paddingTop = toFixHeader.getBoundingClientRect().height + 'px';
        } else {
            toFixHeader.classList.remove("fixed");
            document.body.style.paddingTop = 0;
        }
    })
});
//===== FIXED HEADER

// QUICK VIEW MODAL JS =====
const quickviewBtns = document.querySelectorAll(".fz-3-quick-view");
const quickviewModal = document.querySelector(".fz-quick-view-modal");

quickviewBtns.forEach(quickviewBtn => {
    quickviewBtn.onclick = () => {
        quickviewModal.classList.add("open");
        overlay.classList.add("open");
        body.style.overflow = "hidden";
    }

    document.onclick = (e) => {
        if (!e.target.classList.contains("fz-3-quick-view") && !quickviewModal.contains(e.target)) {
            quickviewModal.classList.remove("open");
        }
    }
})
//===== QUICK VIEW MODAL JS

// CLIENTS SLIDER JS START =====
$('.clients').owlCarousel({
    items: 5,
    autoplay: true,
    loop: true,

    responsive: {
        0: {
            items: 3,
        },

        480: {
            items: 3,
        },

        768: {
            items: 4,
        },
        992: {
            items: 5,
        }
    }
})
//===== CLIENTS SLIDER JS END 

// --------------------------------- PRDUCTS FILTERING BY PRICE START ----------------------------------------
let keypressSlider = document.querySelector(".slider-keypress");
let input0 = document.querySelector(".input-with-keypress-0");
let input1 = document.querySelector(".input-with-keypress-1");
let inputs = [input0, input1];

if (keypressSlider) {
    noUiSlider.create(keypressSlider, {
        start: [240, 768],
        connect: true,
        step: 1,
        range: {
            min: [100],
            max: [1000]
        }
    });


    keypressSlider.noUiSlider.on("update", function (values, handle) {
        inputs[handle].innerText = values[handle];

        /* begin Listen to keypress on the input */
        function setSliderHandle(i, value) {
            var r = [null, null];
            r[i] = value;
            keypressSlider.noUiSlider.set(r);
        }

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {
            input.addEventListener("change", function () {
                setSliderHandle(handle, this.value);
            });

            input.addEventListener("keydown", function (e) {
                var values = keypressSlider.noUiSlider.get();
                var value = Number(values[handle]);

                // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                var steps = keypressSlider.noUiSlider.steps();

                // [down, up]
                var step = steps[handle];

                var position;

                // 13 is enter,
                // 38 is key up,
                // 40 is key down.
                switch (e.which) {
                    case 13:
                        setSliderHandle(handle, this.value);
                        break;

                    case 38:
                        // Get step to go increase slider value (up)
                        position = step[1];

                        // false = no step is set
                        if (position === false) {
                            position = 1;
                        }

                        // null = edge of slider
                        if (position !== null) {
                            setSliderHandle(handle, value + position);
                        }

                        break;

                    case 40:
                        position = step[0];

                        if (position === false) {
                            position = 1;
                        }

                        if (position !== null) {
                            setSliderHandle(handle, value - position);
                        }

                        break;
                }
            });
        });
        /* end Listen to keypress on the input */
    });
}
// -------------------------------- PRDUCTS FILTERING BY PRICE END -----------------------------------------



//----------------- PRODCUT DETAILS IMAGES SLIDER JS START ---------------------------------
$('#fz-product-details__img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
});

$('.fz-product-details__img-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.fz-product-details__img',
    dots: false,
    focusOnSelect: true,
});









})(jQuery);

// banner

// must be used the js file
// (function($){

// })(jQuery)



//----------------- PRODCUT DETAILS IMAGES SLIDER JS END ---------------------------------