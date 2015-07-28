<?php
	$url = 'https://www.nangdee.com';
	$content = file_get_contents($url);
	
	$first_step = explode( '<div id="nd12Box_line_th">' , $content );
	$second_step = explode("</div>" , $first_step[1] );

print_r($second_step);
	// echo $second_step[0];
?>