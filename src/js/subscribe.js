jQuery(document).ready(function ($) {
    $('#subscribe').on('submit', function () {
        var $form = $(this),
			email = $('#MERGE0').val(),
            $btn = $form.find('button[type="submit"]');

        
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            cache: false,
            dataType: 'json',
            contentType: "application/json; charset=utf-8",
            beforeSend: function (data) {
                $btn.attr('disabled', 'disabled').html('<i class="icon-spin4 animate-spin"></i>');
            },
            error: function (err) {
                $form.find('p').after('<div class="notice">Error :( <a href="#" class="icon-remove"><i class="icon-cancel"></i></a></div>');
                $btn.text('Subscribe');
            },
            success: function (data) {
                if (data.result != "success") {
                    // Something went wrong, do something to notify the user. maybe alert(data.msg);
                    $form.find('p').after('<div class="notice">Error :( <a href="#" class="icon-remove"><i class="icon-cancel"></i></a></div>');
                    $btn.text('Subscribe');
                } else {
                    // It worked, carry on...
                    $btn.html('<i class="icon-ok"></i>');
                }
            },
            complete: function (data) {
                $btn.prop('disabled', false);
            }
        });
        return false;
    });
});