H.products = (function() { 
    let buyBtn = $('.product-buy-btn'),
        consent = $('.product-consent'),
        consentBoxes = consent.find('input[type="checkbox"]'),
        consentBtn = $('.consent-btn');

    function loadConsent() {
        consent.show();
        consentBtn.attr('href', $(this).data('buy-url'));
        $(window).scrollTop(consent.offset().top)
    };

    function checkDisabled(e) {
        if ($(this).hasClass('disabled')) 
            e.preventDefault();
    }

    function checkConsent() {
        let allChecked = false; 
       
        allChecked = !consentBoxes.filter(function() {
            return !$(this).is(':checked');
        }).length;
       
        if (allChecked)
            consentBtn.removeClass('disabled');
        else
            consentBtn.addClass('disabled');
    }

    function init() {
        buyBtn.click(loadConsent);
        consentBtn.click(checkDisabled);
        consentBoxes.change(checkConsent);
    };

    return {
        init: init
    }
})();