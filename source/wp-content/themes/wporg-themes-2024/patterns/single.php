<?php
/**
 * Title: Theme Detail
 * Slug: wporg-themes-2024/single
 * Inserter: no
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group">
		<!-- wp:post-title {"level":1,"fontSize":"heading-5"} /-->

		<!-- wp:post-author-name {"isLink":true} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph -->
	<p>❤️</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">
	<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"0"}}} -->
	<div class="wp-block-column" style="flex-basis:70%">
		<!-- wp:post-featured-image /-->

		<!-- wp:paragraph -->
		<p>[style filters]</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%">
		<!-- wp:wporg/business-model-notice /-->

		<!-- wp:buttons {"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","metadata":{"bindings":{"url":{"source":"wporg-themes/meta","args":{"key":"preview-url"}}}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Preview', 'wporg-themes' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"metadata":{"bindings":{"url":{"source":"wporg-themes/meta","args":{"key":"download-url"}}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Download', 'wporg-themes' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:wporg/child-theme-notice /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"version"}}}}} -->
			<p>Version</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"last-updated"}}}}} -->
			<p>Last updated</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"active-installs"}}}}} -->
			<p>Active Installations</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"requires-wp"}}}}} -->
			<p>WordPress Version</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"requires-php"}}}}} -->
			<p>PHP Version</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"theme-link"}}}}} -->
			<p>Theme Homepage</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">
	<!-- wp:column {"width":"70%"} -->
	<div class="wp-block-column" style="flex-basis:70%">
		<!-- wp:post-content /-->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size"><?php esc_attr_e( 'Tags', 'wporg-themes' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:post-terms {"term":"post_tag"} /-->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size">Patterns</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>[set of images]</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size">Downloads per day</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>[graph]</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size">Community Options</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>[form for community repo URL]</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%">
		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size">Ratings</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>[ratings]</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size"><?php esc_html_e( 'Support', 'wporg-themes' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:button {"className":"is-style-outline is-small","metadata":{"bindings":{"url":{"source":"wporg-themes/meta","args":{"key":"support-forum-url"}}}}} -->
		<div class="wp-block-button is-style-outline is-small"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View support forum', 'wporg-themes' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size"><?php esc_html_e( 'Report', 'wporg-themes' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Does this theme have major issues?', 'wporg-themes' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--10)">
			<!-- wp:button {"className":"is-style-outline is-small","metadata":{"bindings":{"url":{"source":"wporg-themes/meta","args":{"key":"report-url"}}}}} -->
			<div class="wp-block-button is-style-outline is-small"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Report this theme', 'wporg-themes' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size"><?php esc_html_e( 'Translations', 'wporg-themes' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"translate-link"}}}}} -->
		<p>Translate this theme</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"heading-4"} -->
		<h2 class="wp-block-heading has-heading-4-font-size"><?php esc_html_e( 'Browse the code', 'wporg-themes' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"trac-log-link"}}}}} -->
			<p></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"trac-svn-link"}}}}} -->
			<p></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"trac-browse-link"}}}}} -->
			<p></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"wporg-themes/meta","args":{"key":"trac-tickets-link"}}}}} -->
			<p></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
<div style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);height:60px" aria-hidden="true" class="wp-block-spacer alignwide"></div>
<!-- /wp:spacer -->
