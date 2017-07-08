<?php $post_author = $this->get( 'post_author' ); ?>
<?php if ( $post_author ) : ?>
	<div class="amp-wp-meta amp-wp-byline">
		<?php if ( function_exists( 'get_avatar_url' ) ) : ?>
            <?php
            $gravatar_url = esc_url( get_avatar_url( $post_author->user_email, array( 'size' => 24 ) ) );
            $secure_gravtar_url = apply_filters( 'amp_secure_link', $gravatar_url);
            ?>
			<amp-img src="<?php echo $secure_gravtar_url ?>" width="24" height="24" layout="fixed"></amp-img>
		<?php endif; ?>
		<span class="amp-wp-author author vcard"><?php echo esc_html( $post_author->display_name ); ?></span>
	</div>
<?php endif; ?>

<!--esc_url( get_avatar_url( $post_author->user_email, array( 'size' => 24 ) ) );-->