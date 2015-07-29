<?php

header('Content-Type: text/json');
 


 $url ="http://www.digg.com/search/?q=".rawurlencode($_GET['title'])."&format=rss";
$feed_url=file_get_contents($url);
  
$xml = simplexml_load_string($feed_url);
echo json_encode($xml, JSON_PRETTY_PRINT), "\n";

?>