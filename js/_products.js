H.products = (function() { 
    let total = 0,
        checkbox = $('.b-product-block input'),
        sumLabel = $('.b-product-blocks-sum span'),
        buyBtn = $('.b-product-buy-btn'),
        blocksWrap = $('.b-product-block-wrap');

    function blockSelect(e) {
        let checbox = $(this),
            block = $(this).parents('.b-product-block'),
            price = block.find('.b-product-block-price').text() * 1;

        if (checbox.is(':checked'))
            total = total + price;
        else if (total > 0)
            total = total - price;
        else 
            total = 0;

        sumLabel.text(total);
    };

    function buyAction() {
        var blocksHeader = $('.b-product-blocks-header'),
            headerHeight = $('header').height();
            buyUrl = $(this).attr('data-buy-url');
            
       if (buyUrl) {
            window.location = buyUrl;
       }
       else {
            blocksWrap.show();
            $('html').scrollTop(blocksHeader.offset().top - headerHeight);
       }    
    };

    function init() {
        checkbox.click(blockSelect);
        buyBtn.click(buyAction);
    };

    return {
        init: init
    }
})();