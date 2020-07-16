<?php
/**
 * Block for displaying About second section
 *
 *
 * @package WordPress
 * @subpackage Homitska
 * @since Homitska 1.0
 */
?>

<div class="block b-question">
    <h2 class="wow fadeInDown"><?php block_field( 'heading' ); ?></h2>

    <div class="b-question-left b-question-left-bg">
        <div class="b-question-inner">
            <h3 class="wow fadeInLeft" data-wow-delay="0.1s"><?php block_field( 'section-first' ); ?></h3>
            <p class="wow fadeInLeft" data-wow-delay="0.4s"><?php block_field( 'section-first-text' ); ?></p>
        </div>
    </div>
    
    <div class="b-question-right b-question-right-bg">
        <div class="b-question-inner">
            <h3 class="wow fadeInRight" data-wow-delay="0.5s"><?php block_field( 'section-second' ); ?></h3>
            <p class="wow fadeInRight" data-wow-delay="0.8s"><?php block_field( 'section-second-text' ); ?></p>
        </div>
    </div>

    <div class="b-question-left b-question-left-bga">
        <div class="b-question-inner">
            <h3 class="wow fadeInLeft" data-wow-delay="0.1s"><?php block_field( 'section-third' ); ?></h3>
            <p class="wow fadeInLeft" data-wow-delay="0.4s"><?php block_field( 'section-third-text' ); ?></p>
        </div>
    </div>
    
    <div class="b-question-right">
        <div class="b-question-inner">
            <form class="wow fadeInRight" data-wow-delay="0.5s">
                <h3>Задай вопрос Элге</h3>
                <div class="form-row">
                    <label for="question-name">Имя</label>
                    <input id="question-name" type="text" name="question-name">
                </div>
                <div class="form-row">
                    <label for="question-email">Email</label>
                    <input id="question-email" type="email" name="question-email">
                </div>
                <div class="form-row">
                    <label for="question-text">Вопрос</label>
                    <input id="question-text" type="text" name="question-text">
                </div>
                <div class="form-row">
                    <input type="checkbox">
                    <label for="">Согласие на обработку личных данных</label>
                </div>

                <div class="form-row form-row-btn">
                    <button>
                        <span>Задать вопрос</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>