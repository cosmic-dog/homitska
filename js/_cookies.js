H.cookies = (function () {
    let banner = $('.cookie-banner'),
        acceptBtn = $('#accept-cookies');
    
    function loadBanner() { 
        if (!localStorage.getItem('cookiesAccepted'))
            banner.show();
    }

    function acceptCookie() {
        banner.hide();
        localStorage.setItem('cookiesAccepted', true);
    }

    function init() {
        if(typeof(Storage) !== "undefined")
            loadBanner();
        else
            banner.show();

        acceptBtn.click(acceptCookie);
    };

    return {
        init: init
    }
})();