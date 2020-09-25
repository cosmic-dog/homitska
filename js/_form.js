H.form = (function() {
    let cmButton =$('.contact-method li');

    function contactMethod() {
        let btn = $(this),
            parent = btn.parents('.form-row'),
            numberField = parent.find('.twrap'),
            accField = parent.find('.taccount'),
            methodLabel = btn.find('span').text();
        
        btn.addClass('active').siblings().removeClass('active');
        parent.find('.tmethod').val(methodLabel);
        
        if (btn.attr('data-field') == 'number') {
            numberField.show();
            accField.hide();
        }
        else {
            numberField.hide();
            accField.show();
        }
    }

    function wpcfFormAction() {
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            window.location = '/spasibo/';
        }, false );
        
        document.addEventListener( 'wpcf7mailfailed', function( event ) {
            //window.location = 'http://example.com/';
        }, false );
    };
    
    function init() {
        wpcfFormAction();
        cmButton.click(contactMethod)
    }

    return {
        init: init
    }
})();




// wpcf7invalid — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because there are fields with invalid input.
// wpcf7spam — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because a possible spam activity has been detected.
// wpcf7mailsent — Fires when an Ajax form submission has completed successfully, and mail has been sent.
// wpcf7mailfailed — Fires when an Ajax form submission has completed successfully, but it has failed in sending mail.
// wpcf7submit — Fires when an Ajax form submission has completed successfully, regardless of other incidents.