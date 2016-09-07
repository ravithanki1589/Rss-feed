<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Rss Feed Demo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

$(document).ready(function($) {
    setInterval(function() {
         var firstLi = $('#content_1 li').first().detach();
        $('#content_1').append($(firstLi));
     }, 1000);

});

</script>

</head>
<body>
<?php 
require_once "function.php"; 
ini_set('max_execution_time', 1000);
?>
<div id="wrap">
 

    <div id="mainContent">
 
        <div id="content_1">
            <?php $feed1 = getFeed("http://www.court-side.com/news/feed"); ?>
        </div><!--end content 1-->
 
        <div id="content_2">
            <?php $feed2 = getFeed("http://www.slamonline.com/feed/"); ?>
        </div><!--end content 2-->
 
        <div id="content_3">
            <?php $feed3 = getFeed("http://www.insidehoops.com/blog/?feed=rss2"); ?>
        </div>
		
		<div id="content_5">
            <?php $feed5 = getFeed("http://sports.yahoo.com/ncaa/basketball/rss.xml"); ?>
        </div>
		<div id="content_6">
            <?php $feed6 = getFeed("http://sports.yahoo.com/nba/rss.xml"); ?>
        </div>
		<div id="content_7">
            <?php $feed7 = getFeed("http://www.nba.com/rss/highlights.rss"); ?>
        </div>
		<div id="content_8">
            <?php $feed8 = getFeed("http://espn.go.com/espn/rss/nba/news"); ?>
        </div>
		
 
    </div><!--end main content -->

</div><!--end wrap-->
</body>
</html>
<style>
#content_1 > li:first-child {
 display: block !important;            
}
</style>