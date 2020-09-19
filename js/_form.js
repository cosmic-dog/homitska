

document.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log('mail sent nice');
    window.location = '/spasibo/';
}, false );

document.addEventListener( 'wpcf7mailfailed', function( event ) {
    console.log('mail didnt send');
    //location = 'http://example.com/';
}, false );


// wpcf7invalid — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because there are fields with invalid input.
// wpcf7spam — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because a possible spam activity has been detected.
// wpcf7mailsent — Fires when an Ajax form submission has completed successfully, and mail has been sent.
// wpcf7mailfailed — Fires when an Ajax form submission has completed successfully, but it has failed in sending mail.
// wpcf7submit — Fires when an Ajax form submission has completed successfully, regardless of other incidents.