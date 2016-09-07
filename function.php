<?php
 
function getFeed($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
  
     
    foreach($x->channel->item as $entry) {
        echo "<li style='display:none;'>" . $entry->title . "</li>";
    }
   
}
?>