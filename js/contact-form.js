function initContactForm() {

    var contactForm = $('.contact-form');

    contactForm.on('submit', function() {

        var requiredFields = $(this).find('.required'),
            formData = contactForm.serialize(),
            formAction = $(this).attr('action'),
            formSubmitMessage = $('.response-message');

        requiredFields.each(function() {

            inputType = $(this).attr('type');

            if( inputType == "checkbox" ) {
                if ( !$(this).is(':checked') ) {
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            } else {
                if( $(this).val() == "" ) {
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                } 
            } 

        });

        function validateEmail(email) { 
            var exp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return exp.test(email);
        }

        var emailField = $('.contact-form-email');

        if( !validateEmail(emailField.val()) ) {

            emailField.addClass("input-error");

        }

        if ($(".contact-form :input").hasClass("input-error")) {
            return false;
        } else {

            $.post(formAction, formData, function(data) {
                formSubmitMessage.text(data);
                requiredFields.val("");
                $('.buttons').slideUp();

                setTimeout(function() {
                    formSubmitMessage.slideUp();
                }, 5000);
            });

        }

        return false;

    });

}

initContactForm();