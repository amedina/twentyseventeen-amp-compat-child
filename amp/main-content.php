<main id="content" role="main" class="">
    <article class="amp-wp-article photo-article">
	
	    <?php
	    if ( is_sticky() && is_home() ) :
		    echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	    endif;
	    ?>
     
		<?php $this->load_parts( array( 'featured-image' ) ); ?>

        <header class="amp-wp-article-header">
            <h1 class="entry-title amp-wp-title"><?php echo wp_kses_data( $this->get( 'post_title' ) ); ?></h1>
			<?php $this->load_parts( apply_filters( 'amp_post_article_header_meta', array( 'meta-author', 'meta-time' ) ) ); ?>
        </header>

        <div class="amp-wp-article-content">
			<?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>
        </div>
		
		<?php amp_post_navigation(); ?>

        <footer class="amp-wp-article-footer">
			<?php $this->load_parts( apply_filters( 'amp_post_article_footer_meta', array( 'meta-taxonomy', 'meta-comments-link' ) ) ); ?>
        </footer>

    </article>
</main>