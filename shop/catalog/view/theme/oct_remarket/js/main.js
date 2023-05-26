/*********** Function viewport ***********/
function viewport() {
    var e = window,
        a = 'inner';
    if (!('innerWidth' in window)) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return {
        width: e[a + 'Width'],
        height: e[a + 'Height']
    };
}

/*********** Function preloader ***********/

function masked(element, status) {
    if (status == true) {
        $('body').append('<div class="rm-preloader-overlay d-flex justify-content-center align-items-center"><div class="rm-preloader-spinner"><div></div><div></div><div></div><div></div></div></div>');
    } else {
        setTimeout(function() {
            $('.rm-preloader-overlay').remove();
        }, 600);
    }
}

/*********** Function Show Location Map ***********/

function octShowMap(content, target) {

    var octMap = $(target);

    if (octMap.hasClass('not_in')) {
        octMap.html(content);
        octMap.removeClass('not_in');
    }

}

/*********** Function Show More Product in modules ***********/

function octShowMoreModule(module_id, lozadEnable = 0, button_id, html_module_id, page_id, path = 0) {
    let page = parseInt(document.querySelector("#" + page_id).value) + 1;

    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'index.php?route=extension/module/oct_product_modules/modulePage',
        data: 'module_id=' + module_id + '&page=' + page + '&oct_path=' + path,
        cache: false,
        beforeSend: function() {
            // enable loader
            masked('body', true);

            document.querySelector('#' + button_id).classList.add('oct-animated');
        },
        complete: function() {
            // check lozad
            if (lozadEnable == 1) {
                lozad('.oct-lazy').observe();
            }

            // remove loader
            masked('body', false);

            document.querySelector('#' + button_id).classList.remove('oct-animated');
        },
        success: function(octContent) {
            // parce octProducts
            let wrapper = document.createElement('div');
            wrapper.innerHTML = octContent;

            // write and write new products
            let productsToFind = wrapper.querySelectorAll('.rm-module-col');
            const productsArray = Array.from(productsToFind);
            let newProducts = document.querySelector("#" + html_module_id);
            productsArray.forEach(element => newProducts.insertAdjacentElement('beforeend', element));

            // check and write new button
            let buttonToFind = wrapper.querySelectorAll("#" + button_id);
            const buttonArray = Array.from(buttonToFind);

            document.querySelector("#" + page_id).value = page;
			// remove old button
			let checkButton = wrapper.querySelector(".oct-load-more-button-wrapper");

			if (checkButton === null) {
				document.querySelector('#' + html_module_id).nextElementSibling.classList.add('d-none');
			}
        }
    });
}

/*********** Function popups ***********/

function octPopupCallPhone() {
    masked('body', true);
    $(".modal-backdrop").remove();
    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'index.php?route=octemplates/module/oct_popup_call_phone',
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-holder").html(data);
            $("#rm-callback-modal").modal("show");
        }
    });
}

function octPopupSubscribe() {
    if ($(".modal-backdrop").length > 0) {
        return;
    }

    masked('body', true);

    $(".modal-backdrop").remove();

    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'index.php?route=octemplates/module/oct_subscribe',
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-holder").html(data);
            $("#rm-popup-subscribe").modal("show");
        }
    });
}

function octPopupFoundCheaper(product_id) {
    masked('body', true);

    $(".modal-backdrop").remove();

    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'index.php?route=octemplates/module/oct_popup_found_cheaper',
        data: 'product_id=' + product_id,
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-holder").html(data);
            $("#rm-cheaper-modal").modal("show");
        }
    });
}

function octPopupLogin() {
    masked('body', true);

    $(".modal-backdrop").remove();

    $.ajax({
        type: "post",
        url: 'index.php?route=octemplates/module/oct_popup_login',
        data: $(this).serialize(),
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-holder").html(data);
            $("#rm-popup-login").modal("show");
        }
    });
}

function octPopUpView(product_id) {
    masked('body', true);

    $(".modal-backdrop").remove();

    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'index.php?route=octemplates/module/oct_popup_view',
        data: 'product_id=' + product_id,
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-holder").html(data);
            $("#rm-popup-quickview").modal("show");
        }
    });
}

function octPopPurchase(product_id) {
    masked('body', true);

    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'index.php?route=octemplates/module/oct_popup_purchase',
        data: 'product_id=' + product_id,
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-backdrop").remove();
            $(".modal-holder").html(data);
            $("#rm-popup-quickorder").modal("show");
        }
    });
}

function octPopupCart() {
    masked('body', true);

    $(".modal-backdrop").remove();

    $.ajax({
        type: 'get',
        dataType: 'html',
        url: 'index.php?route=octemplates/module/oct_popup_cart&isPopup=1',
        cache: false,
        success: function(data) {
            masked('body', false);
            $(".modal-holder").html(data);
            $("#rm-popup-cart").modal("show");
        }
    });
}

/*********** Button column ***********/

function octColumnProducts(octButtonPrevID, octButtonNextID, octModuleID) {
    const buttonPrevID = octButtonPrevID;
    const buttonNextID = octButtonNextID;
    const moduleID = octModuleID + ' > .rm-item';

    $("#" + moduleID).slice(0, 1).show();

    $("#" + octButtonNextID).click(function() {
        const visibleProduct = $("#" + moduleID + ":visible");
        const NextProduct = visibleProduct.next();

        if (NextProduct.length > 0) {
            visibleProduct.css('display', 'none');
            NextProduct.fadeIn("slow");
        } else {
            visibleProduct.css('display', 'none');
            $("#" + moduleID + ":hidden:first").fadeIn('slow');
        }
    });

    $("#" + buttonPrevID).click(function() {
        const visibleProduct = $("#" + moduleID + ":visible");
        const NextProduct = visibleProduct.prev();

        if (NextProduct.length > 0) {
            visibleProduct.css('display', 'none');
            NextProduct.fadeIn("slow");
        } else {
            visibleProduct.css('display', 'none');
            $("#" + moduleID + ":hidden:last").fadeIn('slow');
        }
    });
}

/*********** Get User Cookie function ***********/

function getOCTCookie(name) {
    var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));

    return matches ? decodeURIComponent(matches[1]) : 'undefined';
}

/*********** Animate scroll to element function ***********/

function scrollToElement(hrefTo) {
    const currentWidth = viewport().width;

    let topPosition = $(hrefTo).offset().top - 170;
    let width = document.documentElement.clientWidth;

    if (width < 992) {
        topPosition = $(hrefTo).offset().top - 105;
    }

    $('body,html').animate({
        scrollTop: topPosition
    }, 700);
}

/*********** Notify function ***********/

function rmNotify(type, text) {
    var iconType = 'info';
    switch (type) {
        case 'success':
            iconType = 'fas fa-check';
            break;
        case 'danger':
            iconType = 'fas fa-times';
            break;
        case 'warning':
            iconType = 'fas fa-exclamation';
            break;
    }
    $.notify({
        message: text,
        icon: iconType
    }, {
        type: type
    });
}

/*********** Mask function ***********/
function rmInputMask(selector, mask) {
    $(selector).inputmask({
        'mask': mask
    });
}

/*********** Sidebar & menus ***********/
function rmSidebar(title, type, showCategories = 0) {
    if (!title && !type) return;

    var dataQuery, queryUrl, isMenu = 0;

    $('.rm-sidebar-title-text').html(title);

    $('#rm_sidebar_content').html('<div></div>');

    switch (type) {
        // show main menu
        case 'menu':
            queryUrl = "index.php?route=octemplates/menu/oct_menu";
            isMenu = 1;
            dataQuery = 'mobile=1';
            break;

            // show locations
        case 'locations':
            $(".rm-header-address .rm-dropdown-toggle").trigger("click");
            $('#rm_header_locations').clone().prependTo('#rm_sidebar_content').removeClass('rm-dropdown-inner');
            $('#rm_sidebar, #rm_overlay').addClass('active');
            $('#rm_overlay').addClass('transparent');
            $('.rm-header-location-contacts-btn .rm-btn').removeClass('secondary').addClass('dark w-100 text-center');
            $('body').addClass('no-scroll');
            return;
            break;

            // show contacts
        case 'contacts':
            queryUrl = "index.php?route=octemplates/main/oct_functions/mobileContacts";
            break;

            // show account
        case 'login':
            queryUrl = "index.php?route=octemplates/module/oct_popup_login";
            dataQuery = 'mobile=1';
            break;

        case 'account':
            queryUrl = "index.php?route=octemplates/module/oct_popup_login/account";
            break;

            // show viewed products
        case 'viewed':
            // ajax query url
            queryUrl = "index.php?route=octemplates/main/oct_functions/productViews";
            break;
    }
    // main ajax query
    masked('#rm_sidebar', true);
    $.ajax({
        type: "post",
        url: queryUrl,
        data: dataQuery,
        cache: false,
        success: function(data) {
            $('#rm_sidebar_content').html(data);

            rmSidebarInit();
            masked('#rm_sidebar', false);

            $('#rm_sidebar, #rm_overlay').addClass('active');
            $('#rm_overlay').addClass('transparent');
            $('body').addClass('no-scroll');

            if (isMenu === 1) {
                $("#language").prependTo("#oct_mobile_language");
                $("#currency").prependTo("#oct_mobile_currency");
            }

            if (showCategories === 1) {
                $("#rm_mobile_menu_toggle_button").trigger("click");
            }


        }
    });
}


function rmSidebarInit() {
    var width = document.documentElement.clientWidth;

    if (width <= 1024) {
        /*********** Mobile scripts ***********/

        if (width < 768) {

            $('body').on('click', '.rm-product-tabs .nav-link', function() {
                scrollToElement('.tab-content');
            });

            $('body').on('click', '#reviews-quick-view', function() {
                $('#product_reviews').tab('show');
            });

            $('body').on('click', '#attr-quick-view', function() {
                $('#product_attributes').tab('show');
            });
        }

        $('body').on('click', '.rm-dropdown-box', function() {
            $(this).addClass('active');
            $('#rm_overlay').addClass('active');

        });

        $('body').on('click', '.rm-dropdown-toggle', function(event) {
            event.preventDefault();
        })

        /*********** End of Mobile scripts ***********/
    } else {
        /*********** Dropdowns ***********/
        $('.rm-dropdown-box').hover(
            function() {
                $(this).addClass('active');
            },
            function() {
                $(this).removeClass('active');
            });
        /*********** End of Dropdowns ***********/
    }
}

window.addEventListener("orientationchange", function() {
    rmSidebarInit();
}, false);

$(function() {
    /*********** Header locations ***********/
    $(document).on("click", ".rm-header-location", function() {
        $('.rm-header-location').not(this).removeClass('active');
        $(this).toggleClass('active');
    });
    /*********** Category qauntity ***********/
    $(document).on("click", ".rm-plus", function() {
        const oldVal = $(this).prev().val();
        var newVal = (parseInt($(this).prev().val(), 10) + 1);
        $(this).prev().val(newVal);
    });

    $(document).on("click", ".rm-minus", function() {
        const oldVal = $(this).next().val();
        const minimum = $(this).parent().find('.min-qty').val();
        if (oldVal > 1) {
            var newVal = (parseInt($(this).next().val(), 10) - 1);
        } else {
            newVal = 1;
        }
        if (newVal < minimum) {
            newVal = minimum;
        }
        $(this).next().val(newVal);
    });

    $(document).on('click', '.rm-cat-button-cart', function() {
        const productID = $(this).parent().parent().parent().prev().find('input[name="product_id"]').val();
        const quantity = $(this).parent().parent().parent().prev().find('.form-control').val();
        cart.add(productID, quantity);
    });

    /*********** Fixed contacts ***********/

    $('#rm_fixed_contact_button').on('click', function() {
        $(this).toggleClass('clicked');
        $('.rm-fixed-contact-dropdown').toggleClass('expanded');
        $('.rm-fixed-contact-icon .fa-envelope, #back-top').toggleClass('d-none');
        $('.rm-fixed-contact-icon .rm-fixed-contact-text').toggleClass('d-none');
        $('#rm_fixed_contact_substrate').toggleClass('active');
    });

    $('#rm_fixed_contact_substrate').on('click', function() {
        $(this).removeClass('active');
        $('.rm-fixed-contact-dropdown').removeClass('expanded');
        $('.rm-fixed-contact-icon .fa-envelope, #back-top').removeClass('d-none');
        $('.rm-fixed-contact-icon .rm-fixed-contact-text').toggleClass('d-none');
        $('#rm_fixed_contact_button').removeClass('clicked');
    });

    $('.rm-fixed-contact-dropdown').click(function(e) {
        e.stopPropagation();
    });
    /*********** End of Fixed contacts ***********/

    /*********** To top button ***********/
    $("#back-top").hide(),
        $(function() {
            $(window).scroll(function() {
                    $(this).scrollTop() > 650 ? $("#back-top").fadeIn() : $("#back-top").fadeOut()
                }),
                $("#back-top").click(function() {
                    return $("body,html").animate({
                        scrollTop: 0
                    }, 800), !1
                })
        });

    $(document).ready(function() {
        /*********** Category column module ***********/
        $(document).on("click", ".rm-categories-toggle", function() {
            if ($(this).hasClass('clicked') || $(this).parent().parent().hasClass('active')) {
                $(this).parent().parent().removeClass('active');
                $(this).parent().next().removeClass('expanded');
                $(this).removeClass('clicked');
            } else {
                $(this).toggleClass('clicked').parent().next().toggleClass('expanded');
            }
        });
        /*********** End of Category column module ***********/
        /*********** Menu ***********/
        $(document).on("click", "#menu_toggle_button", function() {
            $(this).toggleClass('active');
            $('#rm-menu, #rm_overlay').toggleClass('active');
            $('#rm-menu nav > ul > li:first-child').addClass('active');
        });
        $('.rm-menu-list-item').hover(function() {
            $('.rm-menu-list-item').removeClass('active');
            $(this).addClass('active');
        });
        /*********** End of Menu ***********/

        $(document).on("click", ".rm-sidebar-title-close", function() {
            $('#rm_sidebar, #rm_overlay').removeClass('active');
            $('body').removeClass('no-scroll');
            $('.rm-sidebar-title').removeClass('hidden');
            $("#language").prependTo("#oct_desktop_language");
            $("#currency").prependTo("#oct_desktop_currency");
        });

        // First level
        $(document).on("click", "#rm_mobile_menu_toggle_button", function() {
            $(this).parent().css('transform', 'translateX(-100%)').next().css('transform', 'translateX(0)');
            $('.rm_mobile_menu_first').addClass('noscroll');
            $('.rm-sidebar-content > .rm-sidebar-title').addClass('hidden');
        });

        $(document).on("click", "#rm_mobile_account_toggle_button", function() {
            $(this).parent().css('transform', 'translateX(-100%)');
            $('.rm_mobile_account').css('transform', 'translateX(0)');
            $('.rm_mobile_menu_first').addClass('noscroll');
            $('.rm-sidebar-content > .rm-sidebar-title').addClass('hidden');
        });

        $(document).on("click", "#rm_mobile_viewed_toggle_button", function() {
            $(this).parent().css('transform', 'translateX(-100%)');
            $('.rm_mobile_viewed').css('transform', 'translateX(0)');
            $('.rm_mobile_menu_first').addClass('noscroll');
            $('.rm-sidebar-content > .rm-sidebar-title').addClass('hidden');
            masked('#rm_sidebar', true);
            $.ajax({
                type: "post",
                url: "index.php?route=octemplates/main/oct_functions/productViews",
                cache: false,
                success: function(data) {
                    masked('#rm_sidebar', false);
                    $('#oct_sidebar_viewed').html(data);

                }
            });
        });

        $(document).on("click", ".rm_mobile_menu_first_back", function() {
            $(this).parent().parent().css('transform', 'translateX(100%)');
            $('.rm_mobile_menu_first').removeClass('noscroll').css('transform', 'translateX(0)');
            $(this).parent().next().scrollTop(0);
            $('.rm-sidebar-content > .rm-sidebar-title').removeClass('hidden');
        });

        // Second level
        $(document).on("click", ".rm_mobile_menu_second_button", function() {
            $(this).parent().parent().parent().css('transform', 'translateX(-100%)').prev().css('transform', 'translateX(-200%)');
            $(this).next().css('visibility', 'visible');
        });

        $(document).on("click", ".rm_mobile_menu_second_back", function() {
            $(this).parent().parent().css('visibility', 'hidden').parent().parent().parent().css('transform', 'translateX(0)').prev().css('transform', 'translateX(-100%)');
            $(this).parent().next().scrollTop(0);
        });

        //Third level
        $(document).on("click", ".rm_mobile_menu_third_button", function() {
            $(this).parent().parent().parent().css('transform', 'translateX(-100%)');
            $(this).next().css('transform', 'translateX(-100%)').css('visibility', 'visible');
        });

        $(document).on("click", ".rm_mobile_menu_third_back", function() {
            $(this).parent().parent().css('visibility', 'hidden').parent().parent().parent().css('transform', 'translateX(0)');
            $(this).parent().next().scrollTop(0);
        });

        //Fourth level
        $(document).on("click", ".rm_mobile_menu_fourth_button", function() {
            $(this).parent().parent().parent().css('transform', 'translateX(-200%)');
            $(this).next().css('visibility', 'visible');
        });

        $(document).on("click", ".rm_mobile_menu_fourth_back", function() {
            $(this).parent().parent().css('visibility', 'hidden').parent().parent().parent().css('transform', 'translateX(-100%)');
            $(this).parent().next().scrollTop(0);
        });

        $(document).on("click", ".third-level-landing-button", function() {
            $(this).toggleClass('active').next().toggleClass('expanded');
        });

        /*********** End of Mobile menu ***********/
        /*********** Overlay ***********/
        $(document).on("click", "#rm_overlay", function() {
            $(this).removeClass('active');
            $(this).removeClass('transparent');
            $('#rm-menu, #menu_toggle_button, #rm_sidebar, .rm-dropdown-box').removeClass('active');
            $('body').removeClass('no-scroll');
            clearLiveSearch();
        });
        /*********** End of Overlay ***********/
        /*********** Footer mobile accordeon ***********/
        $(document).on("click", ".rm-footer-title-toggle", function() {
            $(this).toggleClass('clicked').next().toggleClass('expanded');
            scrollToElement(this);
        });
        /*********** End of Footer mobile accordeon ***********/
    });

    var width = document.documentElement.clientWidth;

    if (width > 992) {
        window.addEventListener("resize", rmSidebarInit);
    }

    rmSidebarInit();

    /* Ocfilter overlay */
    $('#rm_overlay').on('click', function() {
        $(this).removeClass('active');
        $('.ocf-offcanvas').removeClass('active');
        $('body').removeClass('modal-open');
    });
});
