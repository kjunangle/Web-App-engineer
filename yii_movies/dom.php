<?php
// require_once('simple_html_dom.php');
// // $dom_object = file_get_html('http://nangdee.com//');

// // //this we will have Object array
// // $allHrefNodes = $dom_object->find('a');
// // print '<pre>';
// // foreach( $allHrefNodes as $aNode )
// // print '<h1>' . $aNode->attr['href'] . '</h1>';

// $domain = 'https://lifeatpkru.wordpress.com';
// // $domain = 'http://nangdee.com';
 
// $target = file_get_html($domain);
// $i = 0;
// // foreach($target->find('#recent-posts-2 ul li a') as $el) {
// print($target->find('#nd12Box_line_th'));
// exit();
//  foreach($target->find('#nd12Box_line_th') as $el) {
//  if($el->plaintext != null) {
//  echo '<li><a href="'.$el->href.'">'.$el->plaintext.'</a></li>';
//  $i++;
//  }
// }

// foreach($target->find('#nd12Box_line2') as $el) {
//  if($el->plaintext != null) {
//  echo '<li><a href="'.$el->href.'">'.$el->plaintext.'</a></li>';
//  $i++;
//  }
// }
// echo '</ul>';
// echo '<h2 style="color:red;">ค้นหาพบทั้งหมด : '.$i.' link</h2>';
// $target->clear();
// unset($target);

$url = 'https://www.google.co.th/';
$content = file_get_contents($url);
$first_step = explode( '<div id="footer">' , $content );
$second_step = explode("</div>" , $first_step[1] );

echo $second_step[0];
?>