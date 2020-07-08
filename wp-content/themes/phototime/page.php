<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package phototime
 */

get_header();
?>

	<section class="intro" id="intro" style="background: url(<?php the_field('intro_bg');?>) no-repeat; background-position: center bottom;
    background-size: cover;">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title"><?php the_field('main_title');?></h1>
                <h2 class="intro__subtitle"><?php the_field('main_subtitle');?></h2>
                <button type="button" class="intro__btn" data-start="#download">get started</button>
                <div class="socials">
                    <a href="" class="socials__btn">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="socials__btn">
                        <i class="fab fa-flickr"></i>
                    </a>
                    <a href="" class="socials__btn">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="start" id="start">
        <div class="container">
            <div class="start__inner">
                <div class="start__content">
                    <h3 class="start__title"><?php the_field('start_title');?></h3>
                    <div class="start__text">
                        <p><?php the_field('start_text');?></p> </div>
                    <button type="button" class="start__btn" data-start="#download">get started</button>
                </div>
                <div class="start__img">
                    <img class="hand__img" src="<?php the_field('start_image');?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="design" id="design">
        <div class="container">
            <div class="design__inner">
                <div class="design__image">
                    <img src="<?php the_field('design_image1');?>" alt="" class="design__img curry">
                    <img src="<?php the_field('design_image2');?>" alt="" class="design__img">
                    <img src="<?php the_field('design_image3');?>" alt="" class="design__img">
                    <img src="<?php the_field('design_image4');?>" alt="" class="design__img">
                    <img src="<?php the_field('design_image5');?>" alt="" class="design__img">
                </div>
                <div class="design__content">
                    <h3 class="design__title"><?php the_field('design_title');?></h3>
                    <div class="design__text">
                        <p><?php the_field('design_text');?></p>
                    </div>
                    <button type="button" class="start__btn start__btn--design">learn more</button>
                    <div class="slider">
                        <div class="slider__dates">
                            <div class="slider__date curry">01/05</div>
                            <div class="slider__date">02/05</div>
                            <div class="slider__date">03/05</div>
                            <div class="slider__date">04/05</div>
                            <div class="slider__date">05/05</div>
                        </div>
                        <div class="slider__arrows">
                            <a class="arrows arrows--prev" id="sliderDPrev">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a class="arrows arrows--next" id="sliderDNext">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="community" id="community">
       <div class="container">
           <div class="slider slider--community" id="communitySlider">
               <div class="slider__arrows slider__arrows--community">
                   <a class="arrows arrows--prev arrows--prev__community" id="sliderCPrev">
                       <i class="fas fa-chevron-left"></i>
                   </a>
                   <a class="arrows arrows--next arrows--next__community" id="sliderCNext">
                       <i class="fas fa-chevron-right"></i>
                   </a>
               </div>
           </div>
           <div class="community__inner">
               <div class="community__content">
                   <img src="<?php the_field('community_logo');?>" alt="" class="community__logo">
                   <div class="community__contain">
                       <h4 class="community__title"><?php the_field('community_title');?></h4>
                       <div class="community__text"><p><?php the_field('community_text');?></p> </div>
                   </div>
               </div>
                   <div class="community__image">
                       <img src="<?php the_field('community_image11');?>" alt="" class="community__img curry">
                       <img src="<?php the_field('community_image12');?>" alt="" class="community__img">
                       <img src="<?php the_field('community_image13');?>" alt="" class="community__img">
                   </div>
                   <div class="community__image community__image--slider">
                       <img src="<?php the_field('community_image21');?>" alt="" class="community__img community__img--slider curry">
                       <img src="<?php the_field('community_image22');?>" alt="" class="community__img community__img--slider">
                       <img src="<?php the_field('community_image23');?>" alt="" class="community__img community__img--slider">
                   </div>
           </div>
       </div>
    </section>
    <section class="subscribe" style="background: url(<?php the_field('subscribe_bg');?>) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="subscribe__inner">
                <h3 class="subscribe__title"><?php the_field('subscribe_title');?></h3>
                <form action="mail.php" method="post">
                    <input type="hidden" name="project_name" value="Название сайта">
                    <input type="hidden" name="admin_email" value="guk2001y@gmail.com">
                    <input type="hidden" name="form_subject" value="Лендинг оборудования - Заявка с верхней формы">

                    <input class="subscribe__email" type="email" name="email" placeholder="your email" required>
                    <button class="subscribe__btn" type="submit">
                        <i class="fas fa-check"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="download" id="download">
        <div class="container">
            <div class="download__inner">
                <h3 class="download__title"><?php the_field('download_title');?></h3>
                <div class="download__text">
                    <p><?php the_field('download_text');?></p>
                </div>
                <div class="download_buttons">
                    <div class="buttons__item">
                        <button type="button" class="download__btn">apple store</button>
                        <a class="download__img">
                            <i class="fab fa-apple"></i>
                        </a>
                    </div>
                    <div class="buttons__item">
                        <button type="button" class="download__btn">play store</button>
                        <a class="download__img">
                            <i class="fab fa-android"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    Modal-->
    <div class="modal" id="modal">
        <div class="modal__window">
            <button class="modal__exit" type="button" data-close="close">
                <img src="images/close.svg" alt="" class="modal__close">
            </button>
            <h4 class="modal__title">Thank you!</h4>
            <h5 class="modal__subtitle">Now you are with us</h5>
        </div>
    </div>

<?php
get_footer();
