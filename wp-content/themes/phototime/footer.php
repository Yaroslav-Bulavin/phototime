<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phototime
 */

?>

	<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__content">
                    <nav class="footer__nav">
                        <a href="" class="footer__nav__link"><?php the_field('footer_nav_link1');?></a>
                        <a href="" class="footer__nav__link"><?php the_field('footer_nav_link2');?></a>
                        <a href="" class="footer__nav__link"><?php the_field('footer_nav_link3');?></a>
                    </nav>
                    <div class="footer__text">
                        <p><?php the_field('footer_text');?></p>
                    </div>
                </div>
                <div class="footer__image">
                    <img src="<?php the_field('footer_logo');?>" alt="" class="footer__img">
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/main.js"></script>
</body>
</html>
