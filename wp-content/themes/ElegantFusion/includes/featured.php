<?php
	$featured_slider_class = '';
	if ( 'on' == et_get_option( 'fusion_slider_auto', 'false' ) ) $featured_slider_class = ' et_slider_auto et_slider_speed_' . et_get_option( 'fusion_slider_autospeed', '7000' );
?>
<div id="et-slider-wrapper" class="header-background">
	<div id="et-slides">

	</div> <!-- #et-slides -->
</div> <!-- #et-slider-wrapper -->