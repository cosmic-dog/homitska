H.wpGallery = (function() { 
    let i = 0.1,
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