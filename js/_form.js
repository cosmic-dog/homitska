H.form = (function() {
    let cmButton = $('.contact-method a'),
        phonetext = $('.wpcf7-phonetext');

    function contactMethod(e) {
        let btn = $(this),
            parent = btn.parents('.form-row'),
            numberField = parent.find('.twrap'),
            accField = parent.find('.taccount'),
            methodLabel = btn.find('span').text();
            
        e.preventDefault();
        btn.addClass('active').siblings().removeClass('active');
        parent.find('.tmethod').val(methodLabel);
        
        if (btn.data('field') == 'number') {
            numberField.show();
            accField.hide();
        }
        else {
            numberField.hide();
            accField.show();
        }
    }

    function phonetextValidation(e) {
        let key = e.keyCode || e.which;
        console.log(key);
        if ((key >= 48 && key <= 57) || key == 46 || key == 8 || (key >= 37 && key <=40)) {
            // GO
        }
        else
            e.preventDefault();
    }

    function wpcfFormAction() {
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            let form = $(event.target),
                formIdHolder = form.find('[data-formid]'),
                formNameHolder = form.find('[data-formname]');

            if (formIdHolder.length) {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    event: 'formSubmissionSuccess',
                    formId: formIdHolder.data('formid'),
                    formName: formNameHolder.data('formname')
                });
            }

            window.location = '/spasibo/';
        }, false );
        
        document.addEventListener( 'wpcf7mailfailed', function( event ) {
            let form = $(event.target),
                formIdHolder = form.find('[data-formid]'),
                formNameHolder = form.find('[data-formname]');

            if (formIdHolder.length) {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    event: 'formSubmissionFail',
                    formId: formIdHolder.data('formid'),
                    formName: formNameHolder.data('formname')
                });
            }
        }, false );
    };
    
    function init() {
        wpcfFormAction();
        cmButton.click(contactMethod);
        phonetext.keydown(phonetextValidation);
    }

    return {
        init: init
    }
})();