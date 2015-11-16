//Application Scripts
jQuery(document).ready(function ($) {
    var breakpoint = 780;
    
    //placeholder helper
    if (!Modernizr.input.placeholder) {

        $('[placeholder]').focus(function () {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function () {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur();
        $('[placeholder]').parents('form').submit(function () {
            $(this).find('[placeholder]').each(function () {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            })
        });
    };
    
    //sticky aside subscribe form 
    var $wnd = $(window),
        offset_top = 114,
        $subscribe_form=$('#subscribe');

    function sticky_form() {
        var w = $wnd.width();
        if (w > breakpoint) {
            $subscribe_form.stick_in_parent({//fixed position
                parent: $('#content'),
                offset_top: offset_top,
                recalc_every: 3
            });
        } else {
            $subscribe_form.trigger("sticky_kit:detach"); //static position for small resolutions
        }
    }

    $('#content, .post-img' ).imagesLoaded(function () {
        sticky_form();
    });
    

    $wnd.on('resize', function () {
        setTimeout(sticky_form, 200);
    });

    //SVG fallback
    if (!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function () {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }


    //make single post images responsives
    $('#content main.single-post > article img').addClass('max-full-width');

    //notices
    $(document).on('click', '.notice a[class^="icon-remove"]', function (e) {
        e.preventDefault();
        var notice = $(this).parents('.notice');
        $(this).hide();
        notice.fadeOut('slow');
    });



    //scroll to section (link on Product Page menu)
    $('.blog-header').on('click', '[data-scroll]', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        if (target) {
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 800);
        }
    });



    //tabs init
    $('.tabs').each(function () {
        var current = $(this).find('.tabs__link.active');
        if (current.length < 1) { current = $(this).find('li:first').find('a').addClass('active'); }
        current = $(this).find('.tabs__link.active').attr('href');
        $(current).fadeIn();
    });
    //tabs click
    $('.tabs').on('click', '.tabs__link', function (e) {
        e.preventDefault();
        var $tabs = $(this).parents('ul');
        if ($(this).hasClass('active')) {
            return false;
        } else {
            var tab_current = $tabs.find('a.active').attr('href'),
                target = $(this).attr('href');
            $tabs.find('a').removeClass('active');
            $(tab_current).hide();
            $(this).addClass('active');
            $(target).fadeIn();
            history.pushState(null, null, window.location.search + $(this).attr('href'));
        }
    });

    // tab hashtag identification and auto-focus
    var wantedTag = window.location.hash;
    if (wantedTag != "") {
        try {
            var $allTabs = $(".tabs a[href^=" + wantedTag + "]").parents('.tabs').find('a');
            var defaultTab = $allTabs.filter('.active').attr('href');
            $(defaultTab).hide();
            $allTabs.removeClass('active');
            $(".tabs a[href^=" + wantedTag + "]").addClass('active');
            $("#" + wantedTag.replace('#', '')).show();
        } catch (e) {
            // I have no idea what to do here, so I'm leaving this for the maintainer.
        }
    }
});
