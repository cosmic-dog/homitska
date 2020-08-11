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


H.svg = (function() {
    let toDraw = [$(".header_logo-svg")],
        line = $(".header_logo-line");
        
    function init() {
        $.each(toDraw, function(index, item) {
            var paths = $(item).find("path");
            $.each(paths, function(subIndex, subItem) {
                var length = subItem.getTotalLength();
                $(subItem).css({
                    "stroke-dashoffset": length+"px",
                    "stroke-dasharray": length+"px",
                    "fill": "transparent",
                    "stroke": "rgba(0,0,0,.4)"
                })

                setTimeout(function() {
                    $(subItem).css({
                        "stroke-dashoffset": "0px",
                        "transition": "all ease-in-out 2.8s, fill ease-in-out 1s"
                    });
                }, 100)

                setTimeout(function() {
                    $(subItem).css("fill", "#333");
                    line.css("width", "10em");
                }, 2000);
            })
            $(item).css("visibility", "visible");
        })
    }

    return {
        init: init
    }
})();



H.stickyHeader.init();
H.modal.init();
H.formValidation.init();
H.wpGalleryAnimate.init();
H.svg.init();

var wow;
var wowInit = function() {
    if(WOW){
        wow = new WOW({
            offset: 0
        }).init();
    }
}

wowInit();


$(document).ready(() => {
    let title = $('h1').first().text();
   
    $('.ctopic-hidden').val(title);
});






