<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>

    <?php $this->load_parts( array( 'header-amp' ) ); ?>

    <?php $this->load_parts( array( 'main-content' ) ); ?>

    <?php $this->load_parts( array( 'footer-amp' ) ); ?>

    <?php do_action( 'amp_post_template_footer', $this ); ?>

</body>
</html>