H.modal = (function() {
    function disableScroll(hide) {
        let body = $('body'),
            winWidth = window.innerWidth,
            bodyWidth = body.width(),
            scrollWitdh = winWidth-bodyWidth;
        
        if (hide)
            $('body').css('overflow', 'unset').css('padding-right', 0);
        else
            $('body').css('overflow', 'hidden').css('padding-right', scrollWitdh);
    };

    function modalClose(e) {
        e.preventDefault();
        disableScroll(true);
        $('.overlay').fadeOut(300);
        $(this).parents('.modal').hide();
    };

    function modalOpen(e) {
        let modal = $(this).data('modal');
        
        e.preventDefault();
        disableScroll();
        $('.overlay').fadeIn(200);
        $('#' + modal).fadeIn(300);
    };

    function init () {
        $('.modal-cross').click(modalClose);
        $('[data-modal]').click(modalOpen);
    };
    
    return {
        init: init
    }
})();