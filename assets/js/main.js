var H = {};

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

H.formValidation = (function() {
    function validateTelNumber() {
        let tcodeInput =  $(this).find('.tcode'),
            tnumberInput =  $(this).find('.tnumber'),
            tcode = tcodeInput.val(),
            tnumber = tnumberInput.val();
            
        if (tcode && !tnumber) {
            event.preventDefault();
            tnumberInput.addClass('not-valid');
        }
        else if (!tcode && tnumber) {
            event.preventDefault();
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

H.wpGalleryAnimate = (function() { 
    let i = 0.3,
        wpGalleryItems = $('.wp-block-gallery li');

    function init() {
        wpGalleryItems.each(function() {
            $(this).addClass('wow fadeInRight');
            $(this).attr('data-wow-delay', i+'s');
            i = i + 0.1;
        });
    }

    return {
        init: init
    }
})();

H.stickyHeader.init();
H.modal.init();
H.formValidation.init();
H.wpGalleryAnimate.init();

$(document).ready(() => {
    let title = $('h1').first().text();
   
    $('.ctopic-hidden').val(title);
});








