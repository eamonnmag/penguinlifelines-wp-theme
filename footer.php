<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

</div><!-- #main .wrapper -->

<footer id="colophon" role="contentinfo">
    <div class="site-info" align="center">

        <div class="pull-left" align="left" style="width: 45%;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/penguin-lifelines-dark.svg"><br/>

            Copyright 2012-Present, Penguin Lifelines. Designed and implemented by Antarctic Design. Powered by
            Wordpress.
        </div>

        <div class="pull-right" style="width: 45%;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/oxford.svg"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/zsl.svg"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/darwin.svg"/>
        </div>
        <br/>

        <div class="clearfix"></div>

    </div>

    <!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>