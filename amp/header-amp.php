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

<!---->
<!--    <div-->
<!--            role="button"-->
<!--            aria-label="open sidebar"-->
<!--            on="tap:header-sidebar.toggle"-->
<!--            tabindex="0"-->
<!--            class="ampstart-navbar-trigger  pr2">-->
<!--        ☰-->
<!--    </div>-->
<!--    --><?php //$this->load_parts( array( 'sidebar-amp' ) ); ?>
<!--    -->
<!--    <div id="page" class="site">-->
<!--        <header id="masthead" class="site-header" role="banner">-->
<!--            --><?php //if ( has_nav_menu( 'top' ) ) : ?>
<!--                <div class="navigation-top">-->
<!--                    <div class="wrap">-->
<!--                        --><?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
<!--                    </div><!-- .wrap -->-->
<!--                </div><!-- .navigation-top -->-->
<!--            --><?php //endif; ?>
<!--        </header><!-- #masthead -->-->
<!---->
<!---->
<!--        -->
<!--        <div class="site-content-contain">-->
<!--            <div id="content" class="site-content">-->



