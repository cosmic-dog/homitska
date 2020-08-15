H.stickyHeader = (function() {
    let body = $('body'),
        header = $('header');
    
    function scrollAction() {
        let st = $('html').scrollTop();
        
        if (st > 0) {
            body.addClass('sticky');
            header.addClass('fixed');
        }
        else {
            body.removeClass('sticky');
            header.removeClass('fixed');
        }
    }

    function init() {
        scrollAction();

        $(window).scroll(scrollAction);
    }

    return {
        init: init
    }
})();