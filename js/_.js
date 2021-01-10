var wow, 
    $ = jQuery,
    H = {};


H.assets = {
    disableScroll: function(hide) {
        let body = $('body'),
            winWidth = window.innerWidth,
            bodyWidth = body.width(),
            scrollWitdh = winWidth-bodyWidth;
        
        if (hide)
            $('body').css('overflow', 'unset').css('padding-right', 0);
        else
            $('body').css('overflow', 'hidden').css('padding-right', scrollWitdh);
    },

    getLanguage: function() {
        return $('body').data('language');
    }
}