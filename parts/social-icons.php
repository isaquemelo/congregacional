<?php 
/**
 *
 * Social iconds (header & footer)
 *
*/
if ( did_action(  'get_footer' ) > 0 ) {
	$is_footer = true;
	$option_name = 'footer_social';
	$icon_name = 'footer_icon';
} else {
	$is_footer = false;
	$option_name = 'header_social';
	$icon_name = 'header_icon';
}
$links = get_theme_mod( $option_name, false );
?>
<?php if ( $links && is_array( $links ) ) : ?>
	<?php foreach( $links as $link ) : ?>
		<a href="<?php echo esc_url( $link[ 'link'] );?>">
			<span class="<?php echo esc_attr( $link[ $icon_name ] );?>"></span>
		</a>
	<?php endforeach;?>
<?php endif; ?>