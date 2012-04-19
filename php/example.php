<?php

	require_once('class.php');
	$epl = new EltronProgrammingLanguage();
	$epl->initialize();
	echo $epl->create_label();
	echo $epl->add_ascii_text(
		$epl->set_x_axis( 0 ),
		$epl->set_y_axis( 0 ),
		$epl->set_rotation( 0 ),
		$epl->set_font( 0 ),
		$epl->set_x_expansion( 5 ),
		$epl->set_y_expansion( 5 ),
		$epl->set_reverse( true ),
		$epl->set_data( 'TEST!' )
	);
	echo $epl->add_barcode(
		$epl->set_x_axis( 0 ),
		$epl->set_y_axis( 0 ),
		$epl->set_rotation( 0 ),
		$epl->set_type( 3 ),
		$epl->set_narrow_bar_width( 0 ),
		$epl->set_wide_bar_width( 0 ),
		$epl->set_height( 100 ),
		$epl->set_show_text( true ),
		$epl->set_data( 'TEST!' )
	);
	echo $epl->print_label();

?>
