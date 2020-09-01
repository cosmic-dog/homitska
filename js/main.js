
H.menu.init();
H.stickyHeader.init();
H.modal.init();
H.formValidation.init();
H.wpGallery.init();
H.svg.init();

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






