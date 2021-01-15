H.modal = (function() {
    function modalClose(e) {
        e.preventDefault();
        H.assets.disableScroll(true);
        $('.overlay').fadeOut(300);
        $(this).parents('.modal').hide();
    };

    function modalOpen(e) {
        let modal;
        
        if (e.type) {
            e.preventDefault();
            modal = $(this).data('modal');
        }
        else {
            modal = e;
        }

        H.assets.disableScroll();
        $('.overlay').fadeIn(200);
        $('#' + modal).fadeIn(300);
    };

    function init () {
        $('.modal-cross').click(modalClose);
        $('[data-modal]').click(modalOpen);
    };
    
    return {
        init: init,
        modalOpen: modalOpen
    }
})();