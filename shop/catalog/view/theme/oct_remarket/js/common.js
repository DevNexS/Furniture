function getURLVar(key) {
    var value = [];

    var query = String(document.location).split('?');

    if (query[1]) {
        var part = query[1].split('&');

        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');

            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }

        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

$(document).ready(function() {

    var cols = $('#column-right, #column-left').length;

    if (cols && cols == 2) {
        $('#content .product-grid').attr('class', 'product-layout product-grid rm-module-col col-6 col-md-6');
    } else if (cols == 1) {
        $('#content .product-grid').attr('class', 'product-layout product-grid rm-module-col col-12 col-md-4 col-lg-4');
    } else {
        $('#content .product-grid').attr('class', 'product-layout product-grid rm-module-col col-6 col-md-4 col-lg-2');
    }

    // Highlight any found errors
    $('.text-danger').each(function() {
        var element = $(this).parent().parent();

        if (element.hasClass('form-group')) {
            element.addClass('has-error');
        }
    });

    // Currency
    $('body').on('click', '#form-currency .currency-select', function(e) {
        e.preventDefault();

        $('#form-currency input[name=\'code\']').val($(this).attr('name'));

        $('#form-currency').submit();
    });

    // Language
    $('body').on('click', '#form-language .language-select', function(e) {
        e.preventDefault();

        $('#form-language input[name=\'code\']').val($(this).attr('name'));

        $('#form-language').submit();
    });

    /* Search */
    $('#search input[name=\'search\']').parent().find('button').on('click', function() {
        var url = $('base').attr('href') + 'index.php?route=product/search';

        var value = $('#search input[name=\'search\']').val();

        if (value.length > 0) {
            url += '&search=' + encodeURIComponent(value);
            location = url;
        }

    });

    $('#search input[name=\'search\']').on('keydown', function(e) {
        if (e.keyCode == 13) {
            $('#search input[name=\'search\']').parent().find('button').trigger('click');
        }
    });

    const searchForm = document.getElementById('search');
    searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
    });

    /* Blog Search */
    $('#oct-blog-search-button').on('click', function() {
        var url = $('base').attr('href') + 'index.php?route=octemplates/blog/oct_blogsearch';

        var value = $('#blog_search input[name=\'blog_search\']').val();

        if (value.length > 0) {
            url += '&search=' + encodeURIComponent(value);
            location = url;
        }

    });

    $('#blog_search input[name=\'blog_search\']').on('keydown', function(e) {
        if (e.keyCode == 13) {
            $('#oct-blog-search-button').trigger('click');
        }
    });

    // Menu
    $('#menu .dropdown-menu').each(function() {
        var menu = $('#menu').offset();
        var dropdown = $(this).parent().offset();

        var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 10) + 'px');
        }
    });

    // hide tooltip after click
    $("#grid-view, #list-view").mouseleave(function() {
        $('[data-toggle="tooltip"]').tooltip("hide");
    });


    // Product List
    $('#list-view').click(function() {
        $('#content .product-grid').attr('class', 'product-layout product-list rm-module-col col-12');
        $('#grid-view').removeClass('active');
        $('#list-view').addClass('active');

        localStorage.setItem('display', 'list');
    });

    // Product Grid
    $('#grid-view').click(function() {
        // What a shame bootstrap does not take into account dynamically loaded columns
        var cols = $('#column-right, #column-left').length;

        if (cols && cols == 2) {
            $('#content .product-layout').attr('class', 'product-layout product-grid rm-module-col col-6 col-md-6');
        } else if (cols == 1) {
            $('#content .product-layout').attr('class', 'product-layout product-grid rm-module-col col-12 col-md-4 col-lg-4');
        } else {
            $('#content .product-layout').attr('class', 'product-layout product-grid rm-module-col col-6 col-md-4');
        }

        $('#list-view').removeClass('active');
        $('#grid-view').addClass('active');

        localStorage.setItem('display', 'grid');
    });

    if (localStorage.getItem('display') == 'list') {
        $('#list-view').trigger('click');
        $('#list-view').addClass('active');
    } else {
        $('#grid-view').trigger('click');
        $('#grid-view').addClass('active');
    }

    // Checkout
    $(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
        if (e.keyCode == 13) {
            $('#collapse-checkout-option #button-login').trigger('click');
        }
    });

    // tooltips on hover
    $('[data-toggle=\'tooltip\']').tooltip({
        container: 'body',
        boundary: 'window'
    });

    // Makes tooltips work on ajax generated content
    $(document).ajaxStop(function() {
        $('[data-toggle=\'tooltip\']').tooltip({
            container: 'body',
            boundary: 'window'
        });
    });
});

// Cart add remove functions
var cart = {
    'add': function(product_id, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                $('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error'] && json['error']['error_warning']) {
                    rmNotify('danger', '<div class="alert-text-item">' + json['error']['error_warning'] + '</div>');
                }

                if (json['success']) {
                    if (json['isPopup']) {
                        octPopupCart();
                    } else {
                        rmNotify('success', json['success']);
                    }

                    if (typeof octYandexEcommerce == 'function') {
                        octYandexEcommerce(json);
                    }

                    // Need to set timeout otherwise it wont update the total
                    setTimeout(function() {
                        $('#oct-cart-quantity, .rm-header-cart-quantity, #mobile_cart_index, .oct-fixed-bar-quantity-cart').html(json['total_products']);
                        $('.rm-header-cart-text').html(json['total_amount']);
                    }, 100);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'update': function(key, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/edit',
            type: 'post',
            data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                setTimeout(function() {
                    $('#oct-cart-quantity, .rm-header-cart-quantity, #mobile_cart_index, .oct-fixed-bar-quantity-cart').html(json['total_products']);
                    $('.rm-header-cart-text').html(json['total_amount']);
                }, 100);

                var now_location = String(document.location.pathname);

                if ((now_location == '/cart/') || (now_location == '/cart') || (now_location == '/checkout/') || (now_location == '/checkout') || (getURLVar('route') == 'checkout/cart') || (getURLVar('route') == 'checkout/checkout')) {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                setTimeout(function() {
                    $('#oct-cart-quantity, .rm-header-cart-quantity, #mobile_cart_index, .oct-fixed-bar-quantity-cart').html(json['total_products']);
                    $('.rm-header-cart-text').html(json['total_amount']);
                }, 100);

                var now_location = String(document.location.pathname);

                if ((now_location == '/cart/') || (now_location == '/cart') || (now_location == '/checkout/') || (now_location == '/checkout') || (getURLVar('route') == 'checkout/cart') || (getURLVar('route') == 'checkout/checkout')) {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var voucher = {
    'add': function() {

    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                setTimeout(function() {
                    $('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
                }, 100);

                var now_location = String(document.location.pathname);

                if ((now_location == '/cart/') || (now_location == '/cart') || (now_location == '/checkout/') || (now_location == '/checkout') || (getURLVar('route') == 'checkout/cart') || (getURLVar('route') == 'checkout/checkout')) {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var wishlist = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=account/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            cache: false,
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {
                    rmNotify('success', json['success']);
                    $('.oct-fixed-bar-wishlist-quantity').html(json['total_wishlist']);
                }

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}

var compare = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            cache: false,
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['success']) {
                    rmNotify('success', json['success']);

                    $('.oct-fixed-bar-compare-quantity').html(json['total_compare']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
    e.preventDefault();
    masked('body', true);
    $('#modal-agree').remove();

    var element = this,
        link = '';
    var r = $(element).data('rel');

    if (r && r != 'undefined') {
        link = 'index.php?route=information/information/agree&information_id=' + r;
    } else {
        link = $(element).attr('href');
    }

    $.ajax({
        url: link,
        type: 'get',
        dataType: 'html',
        cache: false,
        success: function(data) {
            html = '<div class="modal show" id="modal-agree" tabindex="-1" role="dialog" aria-labelledby="modal-agree" aria-hidden="true">';
            html += '  <div class="modal-dialog modal-dialog-centered" role="document">';
            html += '    <div class="modal-content">';
            html += '      <div class="modal-header">';
            html += '        <h5 class="modal-title">' + $(element).text() + '</h5>';
            html += '        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">';
            html += '        	<span aria-hidden="true" class="modal-close-icon modal-close-left"></span>';
            html += '        	<span aria-hidden="true" class="modal-close-icon modal-close-right"></span>';
            html += '        </button>';
            html += '      </div>';
            html += '      <div class="modal-body rm-content">' + data + '</div>';
            html += '    </div>';
            html += '  </div>';
            html += '</div>';

            $('body').append(html);
            masked('body', false);
            $('#modal-agree').modal('show');
        }
    });
});

// Autocomplete */
(function($) {
    $.fn.autocomplete = function(option) {
        return this.each(function() {
            this.timer = null;
            this.items = new Array();

            $.extend(this, option);

            $(this).attr('autocomplete', 'off');

            // Focus
            $(this).on('focus', function() {
                this.request();
            });

            // Blur
            $(this).on('blur', function() {
                setTimeout(function(object) {
                    object.hide();
                }, 200, this);
            });

            // Keydown
            $(this).on('keydown', function(event) {
                switch (event.keyCode) {
                    case 27: // escape
                        this.hide();
                        break;
                    default:
                        this.request();
                        break;
                }
            });

            // Click
            this.click = function(event) {
                event.preventDefault();

                value = $(event.target).parent().attr('data-value');

                if (value && this.items[value]) {
                    this.select(this.items[value]);
                }
            }

            // Show
            this.show = function() {
                var pos = $(this).position();

                $(this).siblings('ul.dropdown-menu').css({
                    top: pos.top + $(this).outerHeight(),
                    left: pos.left
                });

                $(this).siblings('ul.dropdown-menu').show();
            }

            // Hide
            this.hide = function() {
                $(this).siblings('ul.dropdown-menu').hide();
            }

            // Request
            this.request = function() {
                clearTimeout(this.timer);

                this.timer = setTimeout(function(object) {
                    object.source($(object).val(), $.proxy(object.response, object));
                }, 200, this);
            }

            // Response
            this.response = function(json) {
                html = '';

                if (json.length) {
                    for (i = 0; i < json.length; i++) {
                        this.items[json[i]['value']] = json[i];
                    }

                    for (i = 0; i < json.length; i++) {
                        if (!json[i]['category']) {
                            html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
                        }
                    }

                    // Get all the ones with a categories
                    var category = new Array();

                    for (i = 0; i < json.length; i++) {
                        if (json[i]['category']) {
                            if (!category[json[i]['category']]) {
                                category[json[i]['category']] = new Array();
                                category[json[i]['category']]['name'] = json[i]['category'];
                                category[json[i]['category']]['item'] = new Array();
                            }

                            category[json[i]['category']]['item'].push(json[i]);
                        }
                    }

                    for (i in category) {
                        html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

                        for (j = 0; j < category[i]['item'].length; j++) {
                            html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
                        }
                    }
                }

                if (html) {
                    this.show();
                } else {
                    this.hide();
                }

                $(this).siblings('ul.dropdown-menu').html(html);
            }

            $(this).after('<ul class="dropdown-menu"></ul>');
            $(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

        });
    }
})(window.jQuery);
