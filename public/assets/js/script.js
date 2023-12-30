(function ($) {
    "use strict"; // Start of use strict
    /*
        - Aos animation
        - To Top
        - Navbar
        - Background image
        - Sidebar filters
        - Append row
        - Collapse text
        - Counter
        - FileUp
        - Testimonial
        - Theia sticky sidebar
        - Image parallax
        - Owl carousel
        - Range slider
        - Select 2
        - Grid container
        - Popup youtube & gallery
        - Toggle password
        - Two step verification form
        - Tooltip
    */
    /*-------------------------------------------
        Aos animation
    --------------------------------------------- */
    AOS.init({
        // once: true,
        // whether animation should happen only once - while scrolling down
    });
    /*-------------------------------------------
        To Top
    --------------------------------------------- */
    $('body').append('<div id="toTop" class="btn-top"><i class="fa-solid fa-arrow-up"></i></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    /*-------------------------------------------
        Navbar
    --------------------------------------------- */
    //navbar add remove calss
    var header = $(".navbar-transfarent");
    var logo = $(".navbar-wrap");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            header.removeClass('navbar-transfarent').addClass("navbar-bg");
        } else {
            header.removeClass("navbar-bg").addClass('navbar-transfarent');
        }
        if (scroll >= 44) {
            logo.addClass("nav-bg");
        } else {
            logo.removeClass("nav-bg");
        }
    });

    // Navbar collapse hide
    $(".navbar-collapse .collapse-close").on("click", function () {
        $(".navbar-collapse").collapse("hide");
    });
    // navbar toggle icon
    $('#nav-icon').click(function () {
        $(this).toggleClass('open');
    });

    /*-------------------------------------------
        Background image
    --------------------------------------------- */
    if ($('.js-bg-image').length) {
        $(".js-bg-image").css("backgroundImage", function () {
            var bg = "url(" + $(this).data("image-src") + ")";
            return bg;
        });
    }
    /*-------------------------------------------
        Sidebar filters
    --------------------------------------------- */
    $('.all-filters').on('click', function () {
        $('.js-sidebar-filters-mobile').toggleClass('active');
        $('.map-content').removeClass('opened');
    });

    $('.sidebarCollapse').on('click', function () {
        $('.js-sidebar-filters-mobile, .map-content').toggleClass('active');
    });

    $('#mapCollapse, .map-close-icon').on('click', function () {
        $('.map-content').toggleClass('opened');
    });

    $('.filter-close').on('click', function () {
        $('.js-sidebar-filters-mobile').removeClass('active');
    });

    /*-------------------------------------------
          Append row
      --------------------------------------------- */
    var faqs_row = 0;

    function addItem() {
        var rowHtml = '<tr id="faqs-row' + faqs_row + '">';
        rowHtml += '<td><input type="text" class="form-control"></td>';
        rowHtml += '<td><input type="text" class="form-control"></td>';
        rowHtml += '<td><input type="text" class="form-control" placeholder="USD"></td>';
        rowHtml += '<td class="mt-10"><button type="button" class="btn btn-danger delete-btn"><i class="fa fa-trash"></i></button></td>';
        rowHtml += '</tr>';
        $('#faqs tbody').append(rowHtml);
        faqs_row++;
    }

    // Use event delegation for dynamically added elements
    $('#faqs').on('click', '.delete-btn', function () {
        $(this).closest('tr').remove();
    });

    // Use jQuery for the "Add New" button click
    $('.text-center').on('click', 'button', function () {
        addItem();
    });

    /*-------------------------------------------
        Collapse text
    --------------------------------------------- */
    if ($('.collapseText').length) {
        var button = $(".collapseText");
        var originalText = "Hide filters";
        var newText = "Show filters";
        var isToggled = false;

        button.on("click", function () {
            var span = button.find("span");

            if (isToggled) {
                span.text(originalText);
            } else {
                span.text(newText);
            }

            isToggled = !isToggled;
        });
    }

    /*-------------------------------------------
        Counter
    --------------------------------------------- */
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 1,
            time: 500,
        });
    }
    /*-------------------------------------------
        FileUp
    --------------------------------------------- */
    if ($('.fileUp').length) {
        $('.fileUp').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    }
    /*-------------------------------------------
        Testimonial
    --------------------------------------------- */
    if ($('.testimonial-carouse').length) {
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            items: 1,
            nav: true,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>'
            ],
        })
    }

    /*-------------------------------------------
        Theia sticky sidebar
    --------------------------------------------- */
    // $(".content, .sidebar").theiaStickySidebar({
    //     additionalMarginTop: 90
    // });

    /*-------------------------------------------------
        Image parallax
    ------------------------------------------------ */
    if ($('.js-image-parallax').length) {
        var image = document.getElementsByClassName('js-image-parallax');
        new simpleParallax(image, {
            delay: .6,
            transition: 'cubic-bezier(0,0,0,1)'
        });
    }

    /*-------------------------------------------------
        Owl carousel
    ------------------------------------------------ */
    if ($('.place-carousel').length) {
        var placeCarousel = $(".place-carousel");
        placeCarousel.owlCarousel({
            loop: true,
            margin: 24,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        })
    }
    if ($('.testimonial-carousel').length) {
        var owl = $(".testimonial-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            items: 1,
            nav: true,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>'
            ],
        })
    }
    if ($('.blog-carousel').length) {
        var owl = $(".blog-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 24,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                992: {
                    items: 3,
                }
            }
        })
    }
    if ($('.listings-carousel').length) {
        var owl = $(".listings-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 24,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                992: {
                    items: 3,
                }
            }
        })
    }
    if ($('.header-carousel').length) {
        var headerOwl = $(".header-carousel");
        headerOwl.owlCarousel({
            loop: true,
            margin: 10,
            items: 1,
            nav: false,
            dots: false,
            autoplay: true,
            animateOut: 'fadeOut'
        })
    }

    /*-------------------------------------------------
      Range slider
    ------------------------------------------------ */
    if ($('.js-range-slider').length) {
        var rangeSlider = $(".js-range-slider");
        rangeSlider.ionRangeSlider({
            skin: "round",
            type: "double",
            min: 0,
            max: 2000000,
            from: 0,
            to: 500000,
            // prefix: "$"
        });
    }
    /*-------------------------------------------------
      Select 2
    ------------------------------------------------ */
    if ($('.select2').length) {
        var selectOption = $(".select2");
        selectOption.select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    }
    /*-------------------------------------------------
      Grid container
    ------------------------------------------------ */
    if ($('.blog-grid').length) {
        var masonry = new Macy({
            container: '.blog-grid',
            trueOrder: false,
            waitForImages: false,
            useOwnImageLoader: false,
            debug: true,
            mobileFirst: true,
            columns: 1,
            margin: 24,
            breakAt: {
                1200: 2,
                992: 2,
                768: 2,
                576: 1
            }
        });
    }
    /*-------------------------------------------
    Popup youtube & gallery
    --------------------------------------------- */
    if ($('.popup-youtube').length) {
        $(".popup-youtube").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: true
        });
    }
    if ($('.zoom-gallery').length) {
        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function (element) {
                    return element.find('img');
                }
            }
        });
    }

    /*-------------------------------------------
        Toggle password
    --------------------------------------------- */
    if ($('.toggle-password').length) {
        $(".toggle-password").click(function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("data-bs-toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    /*-------------------------------------------
        Two step verification form
    --------------------------------------------- */
    if ($('.verification-form').length) {
        // Get all input elements
        const inputs = document.querySelectorAll('.verification-form');

        // Add event listener to each input
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                // Allow only numbers
                e.target.value = e.target.value.replace(/[^0-9]/g, '');

                // Move focus to the next input when a character is entered
                if (e.target.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            // Move focus to the previous input when backspace is pressed
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    }

    /*-------------------------------------------
        Tooltip
    --------------------------------------------- */
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

})(jQuery);


