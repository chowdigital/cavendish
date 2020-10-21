<?php
/**
 * Template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<div id="searchwrap">
		<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label for="s" class="assistive-text"><?php _e( 'Search', 'twentyeleven' ); ?></label>
				<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />&nbsp;<i class="dashicons dashicons-search toggle"></i>
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
		</form>
	</div>
