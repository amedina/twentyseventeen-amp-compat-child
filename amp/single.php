<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
	<script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>
	<script custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" async=""></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">

<?php $this->load_parts( array( 'header-bar' ) ); ?>

<?php $this->load_parts( array( 'side-bar' ) ); ?>


<main id="content" role="main" class="">
	<article class="amp-wp-article photo-article">
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
<?php $this->load_parts( array( 'footer' ) ); ?>

<?php do_action( 'amp_post_template_footer', $this ); ?>

</body>
</html>