<?php

use function WordPressdotorg\Theme\Theme_Directory_2024\get_support_url;

/**
 * Convert a pattern object into a screenshot preview block.
 */
function get_pattern_preview_block( $pattern, $is_overflow = false ) {
	$args = array(
		'src' => $pattern->preview_link,
		// translators: %s pattern name.
		'alt' => sprintf( __( 'Pattern: %s', 'wporg-themes' ), $pattern->title ),
		'href' => $pattern->link,
		'width' => 275,
		// phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase -- Name comes from API.
		'viewportWidth' => $pattern->viewportWidth ?? 1200,
		// phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase -- Name comes from API.
		'viewportHeight' => isset( $pattern->viewportWidth ) ? $pattern->viewportWidth * 0.75 : 900,
		'fullPage' => false,
	);
	$block_markup = do_blocks( sprintf( '<!-- wp:wporg/screenshot-preview %s /-->', wp_json_encode( $args ) ) );

	if ( $is_overflow ) {
		// Wrap the block in a div to avoid conflicting with the screenshot store.
		$block_markup = '<div class="wporg-theme-patterns__overflow" data-wp-style--display="state.displayCSS">' . $block_markup . '</div>';
	}

	return $block_markup;
}

$current_post_id = $block->context['postId'];
if ( ! $current_post_id ) {
	return;
}

$theme_post = get_post( $block->context['postId'] );
$theme = wporg_themes_theme_information( $theme_post->post_name );

$url = 'https://wp-themes.com/' . $theme_post->post_name . '/';
$url = add_query_arg( 'rest_route', '/wporg-patterns/v1/patterns', $url );
$response = wp_remote_get( $url );
if ( is_wp_error( $response ) ) {
	return;
}

if ( 200 !== wp_remote_retrieve_response_code( $response ) ) {
	return;
}

// This is decoded twice because the response is a quoted JSON string.
// The first decode parses out to JSON, the second parses out to an object.
$patterns = json_decode( json_decode( wp_remote_retrieve_body( $response ) ) );
$initial_count = 6;

if ( ! count( $patterns ) ) {
	return '';
}

// Initial state to pass to Interactivity API.
$init_state = [
	'hideOverflow' => true,
	'initialCount' => $initial_count,
];
$encoded_state = wp_json_encode( $init_state );
?>
<div
	<?php echo get_block_wrapper_attributes(); // phpcs:ignore ?>
	data-wp-interactive="wporg/themes/theme-patterns"
	data-wp-context="<?php echo esc_attr( $encoded_state ); ?>"
>
	<h2 class="wp-block-heading has-heading-4-font-size"><?php esc_html_e( 'Patterns', 'wporg-themes' ); ?></h2>

	<div class="wporg-theme-patterns__grid">
		<?php
		foreach ( $patterns as $i => $pattern ) {
			echo get_pattern_preview_block( $pattern, $i >= $initial_count ); // phpcs:ignore
		}
		?>
	</div>

	<?php if ( count( $patterns ) > $initial_count ) : ?>
	<div class="wporg-theme-patterns__button wp-block-button is-style-text is-small">
		<button
			class="wp-block-button__link wp-element-button"
			data-wp-on--click="actions.showAll"
			data-wp-style--display="state.buttonCSS"
		>
			<?php esc_html_e( 'Show all patterns', 'wporg-themes' ); ?>
		</button>
	</div>
	<?php endif; ?>
</div>
