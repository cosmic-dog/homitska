H.products = (function() { 
    let buyBtn = $('.product-buy-btn'),
        consent = $('.product-consent'),
        consentBtn = $('.consent-btn');

    function loadConsent() {
        consent.show();
        consentBtn.attr('href', $(this).data('buy-url'));
        $(window).scrollTop(consent.offset().top)
    };

    function init() {
        buyBtn.click(loadConsent);
    };

    return {
        init: init
    }
})();