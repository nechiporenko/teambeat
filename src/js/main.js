//Application Scripts
jQuery(document).ready(function ($) {
    var breakpoint = 740;
    
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
});
