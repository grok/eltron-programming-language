<?php

	require_once('class.php');
	$epl = new EltronProgrammingLanguage();
	$epl->initialize();
	echo $epl->create_label();
	echo $epl->add_ascii_text(0,0,0,0,5,5,'N','TEST!');
	echo $epl->print_label();

?>
