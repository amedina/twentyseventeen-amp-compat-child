<?php
$featured_image = $this->get( 'featured_image' );

if ( empty( $featured_image ) ) {
	return;
}

$amp_html = $featured_image['amp_html'];
$caption = $featured_image['caption'];
?>

<figure class="amp-wp-article-featured-image wp-caption ampstart-image-fullpage-hero m0 relative mb4">
	<?php echo $amp_html; // amphtml content; no kses ?>
	<?php if ( $caption ) : ?>
        <p class="wp-caption-text">
			<?php echo wp_kses_data( $caption ); ?>
        </p>
	<?php endif; ?>
    <figcaption class="absolute top-0 right-0 bottom-0 left-0">
        <header class="p3">
            <h1 class="ampstart-fullpage-hero-heading mb3">
          <span class="ampstart-fullpage-hero-heading-text">
            The Year's Best Animal Photos
          </span>
            </h1>
        </header>
    </figcaption>
</figure>
