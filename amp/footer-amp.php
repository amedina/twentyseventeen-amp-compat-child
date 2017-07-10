<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

</div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrap">
                <?php
                    $this->load_parts( array( 'footer-widgets' ) );
                    $this->load_parts( array( 'site-info' ) );
                ?>
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->

<!--TODO Check (@amedina): this function enables a hook for adding scripts that invalidate AMP -->
<!--TODO (@amedina): figure out how to control the output of this action-->
<?php //wp_footer(); ?>

</body>
</html>
