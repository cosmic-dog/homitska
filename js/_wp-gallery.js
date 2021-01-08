H.wpGallery = (function() { 
    let i = 0.1,
        customGallery = $('.custom-gallery'),
        blocksGalleryGrid = $('.blocks-gallery-grid'),
        wpGalleryItems = $('.wp-block-gallery li');

    function amendCustomGallery() {
        customGallery.removeClass('wp-block-gallery');
        blocksGalleryGrid.removeClass('blocks-gallery-grid');
        customGallery.find('img').each(function() {
            $(this).unwrap();
        });
        customGallery.find('a').each(function() {
            $(this).unwrap();     
        });
    }

    function init() {
        amendCustomGallery();

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