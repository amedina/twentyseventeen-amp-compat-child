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
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">

<?php $this->load_parts( array( 'side-bar' ) ); ?>
<?php $this->load_parts( array( 'header-bar' ) ); ?>

<div id="page" class="site">





