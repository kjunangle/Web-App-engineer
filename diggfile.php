


<?php

header('Content-Type: text/xml');
 
 
$feed_url=file_get_contents("http://digg.com/search/?q=Iron%man&format=rss");
$xml = simplexml_load_string($feed_url);
echo json_encode($xml, JSON_PRETTY_PRINT), "\n";

?>