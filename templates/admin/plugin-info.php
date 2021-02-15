<?php
/**
 * This template contains info for a plugin.
 *
 * @version 1.0
 * @package Friends
 */

$api = $args['api'];
$more_info_url = $api->more_info;

?><div class="plugin-card plugin-card-<?php echo $api->slug; ?>">
	<div class="plugin-card-top">
		<div class="name column-name">
			<h3>
				<a class="thickbox open-plugin-details-modal" href="<?php echo esc_url( $more_info_url ); ?>"><?php echo $api->name; ?> <?php echo $api->version; ?></a>
			</h3>
		</div>

		<div class="desc column-description">
			<p><?php echo $api->short_description; ?></p>
			<p class="authors">
				<cite>
					<?php /* translators: %s is a plugin author */ printf( __( 'By %s' ), $api->author ); ?>
				</cite>
			</p>
		</div>
	</div>

	<div class="plugin-card-bottom">
		<a class="<?php echo $args['button_classes']; ?>" data-slug="<?php echo $api->slug; ?>" data-name="<?php echo $api->name; ?>" href="<?php echo esc_url( $args['install_url'] ); ?>" aria-label="<?php echo /* translators: %1$s is a plugin name, %2$s is a plugin version. */ sprintf( esc_html__( 'Install %1$s %2$s now', 'framework' ), $api->name, $api->version ); ?>"><?php echo esc_html( $args['button_text'] ); ?></a>

		<a class="button thickbox" href="<?php echo esc_url( $more_info_url ); ?>" aria-label="<?php echo /* translators: %s is a plugin name. */ sprintf( esc_html__( 'More information about %s' ), $api->name ); ?>" data-title="<?php echo $api->name; ?>"><?php _e( 'More Details' ); ?></a>

		<a class="button thickbox deactivate <?php echo $args['deactivate_button_class']; ?>"
			data-slug="<?php echo esc_attr( $api->slug ); ?>"
			data-name="<?php echo esc_attr( $api->name ); ?>"
			href="<?php echo esc_url( $args['install_url'] ); ?>">
			<?php echo esc_html_e( 'Deactivate' ); ?>
		</a>

	</div>
</div>