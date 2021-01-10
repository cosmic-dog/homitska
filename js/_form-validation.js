H.formValidation = (function() {
    function validateTelNumber(e) {
        let tcodeInput =  $(this).find('.tcode'),
            tnumberInput =  $(this).find('.tnumber'),
            tcode = tcodeInput.val(),
            tnumber = tnumberInput.val();
            
        if (tcode && !tnumber) {
            e.preventDefault();
            tnumberInput.addClass('not-valid');
        }
        else if (!tcode && tnumber) {
            e.preventDefault();
            tcodeInput.addClass('not-valid');
        }
        else {
            tcodeInput.removeClass('not-valid');
            tnumberInput.removeClass('not-valid');
        }
    };
    
    function init() {
        $('.wpcf7-form').submit(validateTelNumber);
    };

    return {
        init: init
    }
})();