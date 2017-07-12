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

<?php
    twentyseventeen_include_svg_icons();
?>

</body>
</html>
