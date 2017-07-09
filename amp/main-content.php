
<?php
if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
	echo '<div class="single-featured-image-header">';
	echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
	echo '</div><!-- .single-featured-image-header -->';
endif;
?>

<main id="content" role="main" class="">
    <div class="site-content-contain">
        <div id="content" class="site-content">

            <article class="amp-wp-article photo-article">
                <?php
                if ( is_sticky() && is_home() ) :
                    echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
                endif;
                ?>
                <header class="amp-wp-article-header">
                    <?php
                    if ( 'post' === get_post_type() ) {
                        echo '<div class="entry-meta">';
                        twentyseventeen_posted_on ();
                    }
                    echo '</div><!-- .entry-meta -->';

                    the_title( '<h1 class="entry-title">', '</h1>' );
                    ?>
                </header>

                <div class="entry-content amp-wp-article-content">
                    <?php echo $this->get( 'post_amp_content' ); ?>
                </div>

                <?php amp_post_navigation(); ?>
        
                <footer class="amp-wp-article-footer">
                    <?php $this->load_parts( apply_filters( 'amp_post_article_footer_meta', array( 'meta-taxonomy', 'meta-comments-link' ) ) ); ?>
                </footer>

            </article>
        </div>
    </div>
</main>


<?php //$this->load_parts( array( 'featured-image' ) ); ?>

