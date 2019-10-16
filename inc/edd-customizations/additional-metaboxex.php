<?php
/**
 * EDD additional metaboxex.
 *
 * @package luzdelaluna
 */


$gallery_metabox = array(
	'id'       => 'gallery',
	'title'    => __( 'Image Gallery', 'luzdelaluna' ),
	'page'     => array( 'download' ),
	'context'  => 'normal',
	'priority' => 'high',
	'fields'   => array(

		array(
			'name'  => __( 'Upload image one', 'luzdelaluna' ),
			'desc'  => __( 'Upload image here that will b shown as gallery in shop single page', 'luzdelaluna' ),
			'id'    => 'ecpt_gallery_one',
			'class' => 'ecpt_gallery_one',
			'type'  => 'upload',
		),
		array(
			'name'  => __( 'Upload image two', 'luzdelaluna' ),
			'desc'  => __( 'Upload image here that will b shown as gallery in shop single page', 'luzdelaluna' ),
			'id'    => 'ecpt_gallery_two',
			'class' => 'ecpt_gallery_two',
			'type'  => 'upload',
		),
		array(
			'name'  => __( 'Upload image three', 'luzdelaluna' ),
			'desc'  => __( 'Upload image here that will b shown as gallery in shop single page', 'luzdelaluna' ),
			'id'    => 'ecpt_gallery_three',
			'class' => 'ecpt_gallery_three',
			'type'  => 'upload',
		),
	),
);

/**
 * Register metabox.
*/
function luzdelaluna_add_gallery_meta_box() {

	global $gallery_metabox;

	foreach ( $gallery_metabox['page'] as $page ) {
		add_meta_box( $gallery_metabox['id'], $gallery_metabox['title'], 'luzdelaluna_show_gallery_box', $page, 'normal', 'high', $gallery_metabox );
	}
}
add_action( 'admin_menu', 'luzdelaluna_add_gallery_meta_box' );


/**
 * Callback function for beats detail metabox.
 *
 * @param object $post The post object.
 */
function luzdelaluna_show_gallery_box( $post ) {
	global $gallery_metabox;

	// Use nonce for verification
	wp_nonce_field( basename( __FILE__ ), 'luzdelaluna_gallery_nonce' );

	foreach ( $gallery_metabox['fields'] as $field ) {
		// get current post meta data

		$meta = get_post_meta( $post->ID, $field['id'], true );

		switch ( $field['type'] ) {
			case 'upload':
				?>
				<p>
					<strong><?php echo esc_html( $field['name'] ); ?>:</strong>
				</p>
				<p>
				<input type="url"  name="<?php echo esc_html( $field['id'] ); ?>" id="<?php echo esc_html( $field['id'] ); ?>" value="<?php echo esc_url( $meta ? $meta : '' ); ?>" placeholder="Upload or enter the file URL">
				<button type="button" class="button" id="counseler-image_btn" data-media-uploader-target="#<?php echo esc_html( $field['id'] ); ?>"><?php echo esc_html__( 'Upload a File', 'luzdelaluna' ); ?></button>
				</p>
				<?php
				break;

		}
	}

}

/**
 * Function to save values of metabox.
 *
 * @param int $post_id The post id.
 */
function luzdelaluna_gallery_save( $post_id ) {
	global $gallery_metabox;

	// verify nonce.
	if ( ! isset( $_POST['luzdelaluna_gallery_nonce'] ) || ! wp_verify_nonce( $_POST['luzdelaluna_gallery_nonce'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	// check permissions
	if ( 'page' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	foreach ( $gallery_metabox['fields'] as $field ) {

		$old = get_post_meta( $post_id, $field['id'], true );
		$new = $_POST[ $field['id'] ];

		if ( $new && $new !== $old ) {
			if ( $field['type'] == 'date' ) {
				$new = ecpt_format_date( $new );
				update_post_meta( $post_id, $field['id'], $new );
			} else {
				if ( is_string( $new ) ) {
					$new = $new;
				}
				update_post_meta( $post_id, $field['id'], $new );

			}
		} elseif ( '' === $new && $old ) {
			delete_post_meta( $post_id, $field['id'], $old );
		}
	}
}
add_action( 'save_post', 'luzdelaluna_gallery_save' );



/**
 * Enqueing scripts.
 */
function luzdelaluna_load_admin_scripts( $hook ) {

	if ( 'post-new.php' === $GLOBALS['pagenow'] || 'post.php' === $GLOBALS['pagenow'] ) {
		wp_enqueue_media();
		// Registers and enqueues the required javascript.
		wp_register_script( 'meta-box-media', get_template_directory_uri() . '/js/media-upload.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
		wp_localize_script(
			'meta-box-media',
			'meta_media',
			array(
				'title'  => __( 'Choose or Upload Media', 'events' ),
				'button' => __( 'Use this media', 'events' ),
			)
		);
		wp_enqueue_script( 'meta-box-media' );
	}
}
	add_action( 'admin_enqueue_scripts', 'luzdelaluna_load_admin_scripts', 10, 1 );
