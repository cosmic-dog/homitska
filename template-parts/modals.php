<?php
/**
 * Contains all modals
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Homitska 1.0
 */

?>

<?php if (ICL_LANGUAGE_CODE == 'ru') : ?>
    <div class="block b-modal modal" id="contactus">
        <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

        <h3>Связаться с нами</h3>
        <h4>Пожалуйста заполните форму, мы с Вами свяжемся!</h4>
        
        <div class="b-modal-body">
            <?php echo do_shortcode('[contact-form-7 id="830"]'); ?> 
        </div>
    </div>

    <div class="block b-modal modal" id="signup">
        <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

        <h3>Записаться</h3>
        <h4>Пожалуйста заполните форму, мы с Вами свяжемся!</h4>
        
        <div class="b-modal-body">
            <?php echo do_shortcode('[contact-form-7 id="505" title="Записаться"]'); ?> 
        </div>
    </div>

    <div class="block b-modal modal" id="collaborate">
        <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

        <h3>Сотрудничать с Элгой</h3>
        <h4>Пожалуйста заполните форму, мы с Вами свяжемся!</h4>
        
        <div class="b-modal-body">
            <?php echo do_shortcode('[contact-form-7 id="328" title="Сотрудничать с Элгой"]'); ?> 
        </div>
    </div>
<?php endif; ?>


<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
    <div class="block b-modal modal" id="contactus">
        <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

        <h3>Связаться с нами EN</h3>
        <h4>Пожалуйста заполните форму, мы с Вами свяжемся!</h4>
        
        <div class="b-modal-body">
            <?php echo do_shortcode('[contact-form-7 id="830"]'); ?> 
        </div>
    </div>

    <div class="block b-modal modal" id="signup">
        <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

        <h3>Записаться</h3>
        <h4>Пожалуйста заполните форму, мы с Вами свяжемся!</h4>
        
        <div class="b-modal-body">
            <?php echo do_shortcode('[contact-form-7 id="505" title="Записаться"]'); ?> 
        </div>
    </div>

    <div class="block b-modal modal" id="collaborate">
        <svg class="modal-cross" viewBox="0 0 50 50"><path d="M1,1 l48,48 m-48,0 l48,-48"></path></svg>

        <h3>Сотрудничать с Элгой</h3>
        <h4>Пожалуйста заполните форму, мы с Вами свяжемся!</h4>
        
        <div class="b-modal-body">
            <?php echo do_shortcode('[contact-form-7 id="328" title="Сотрудничать с Элгой"]'); ?> 
        </div>
    </div>
<?php endif; ?>