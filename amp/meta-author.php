<?php
    $post_author = $this->get( 'post_author' );
    $byline = sprintf(
        /* translators: %s: post author */
        __( 'by %s', 'amp' ),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . $post_author->get( 'display_name' ) . '</a></span>'
    );
?>
<?php if ( $post_author ) : ?>
	<div class="amp-wp-meta amp-wp-byline">
        <?php
            echo '<span class="posted-on">' . twentyseventeen_time_link() . '</span><span class="byline"> ' . $byline . '</span>';
        ?>
	</div>
<?php endif; ?>


