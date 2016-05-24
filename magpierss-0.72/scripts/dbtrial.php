<!DOCTYPE html>
<html>
<head>
<style>
header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;	 
}
/*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1%;
	border: 1px solid #73AD21;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }

/*  GRID OF THREE  */
.span_3_of_3 { width: 100%; }
.span_2_of_3 { width: 66.13%; }
.span_1_of_3 { width: 32.26%; }

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
}

li{
    height: 180px;
   }

</style>
</head>

<body>

<header>
<h1>News Feeds</h1>
<form>
<input type="submit" value="Refresh">
</form></header>

<div class="section group">
	<div class="col span_1_of_3">
	<span style="color:black;font-weight:bold"><center><font size = "5">Top Cricket</font></center> </span>

<?php
@mysql_connect("localhost", "root", "") or die(mysql_error());
@mysql_select_db("dbNewsFeed") or die(mysql_error());

define('MAGPIE_DIR', '../');
require_once(MAGPIE_DIR.'rss_fetch.inc');


?>	


<?php

$url = array("http://www.ibnlive.com/rss/sports.xml","http://feeds.feedburner.com/NDTV-Cricket","http://www.rediff.com/rss/cricketrss.xml","http://www.thehindu.com/sport/cricket/?service=rss","http://www.ecb.co.uk/live-scores.xml");

mysql_query("TRUNCATE tblcricket ")or die(mysql_error()); // truncate before fetching new news
$indexer = 0;

if ( $url[0] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[0] );
	
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer = $indexer+ 1;
		mysql_query("INSERT INTO tblcricket  VALUES('$href', '$ajimage', '$pubdate', '$title', '0', '$indexer') ")or die(mysql_error());
	
		/*$result1 = mysql_query("SELECT mtest from tblentertainment");
		
		echo "<table border='1'>";
		echo ("<tr><th>mtest</th></tr>");
		while($row = mysql_fetch_array($result1)){
			//print content of each row into table
			echo"<tr><td>";
			echo base64_decode($row['mtest']);
			echo"</td></tr>";
		}
		echo "</table>";
		
		$ajimage = base64_decode($ajimage);
		echo "<li><span style=\"color:blue;font-weight:bold\">$title</span> <br />$ajpubdate &nbsp &nbsp &nbsp &nbsp &nbsp <a href = $href>read more...</a>$ajimage  </li>";*/
	}
	
}

if ( $url[1] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[1] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblcricket  VALUES('$href', '$ajimage', '$pubdate', '$title', '0', '$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[2] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[2] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblcricket  VALUES('$href', '$ajimage', '$pubdate', '$title', '0', '$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[3] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[3] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblcricket  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[4] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[4] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblcricket  VALUES('$href', '$ajimage', '$pubdate', '$title', '0', '$indexer') ")or die(mysql_error());
	
	}	
}

?>






<?php

$url = array("http://www.firstshowing.net/feed/","http://www.thehindu.com/entertainment/?service=rss","http://www.nowrunning.com/cgi-bin/rss/showtimes.xml","http://www.nowrunning.com/cgi-bin/rss/showtimes.xml","http://www.nowrunning.com/cgi-bin/rss/news_hindi.xml");

mysql_query("TRUNCATE tblentertainment ")or die(mysql_error()); // truncate before fetching new news
$indexer = 0;

if ( $url[0] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[0] );
	
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblentertainment  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
		/*$result1 = mysql_query("SELECT mtest from tblentertainment");
		
		echo "<table border='1'>";
		echo ("<tr><th>mtest</th></tr>");
		while($row = mysql_fetch_array($result1)){
			//print content of each row into table
			echo"<tr><td>";
			echo base64_decode($row['mtest']);
			echo"</td></tr>";
		}
		echo "</table>";
		
		$ajimage = base64_decode($ajimage);
		echo "<li><span style=\"color:blue;font-weight:bold\">$title</span> <br />$ajpubdate &nbsp &nbsp &nbsp &nbsp &nbsp <a href = $href>read more...</a>$ajimage  </li>";*/
	}
	
}

if ( $url[1] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[1] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblentertainment  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[2] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[2] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
	
		mysql_query("INSERT INTO tblentertainment  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[3] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[3] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblentertainment  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[4] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[4] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblentertainment  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

?>


<?php

$url = array("http://www.ibnlive.com/rss/lifestyle.xml","http://www.thehindu.com/sci-tech/health/?service=rss","http://rss.medicalnewstoday.com/alcohol-addiction-illegal_drugs.xml","http://www.medicinenet.com/rss/general/mental_health.xml","http://www.medpagetoday.com/rss/Headlines.xml");

mysql_query("TRUNCATE tblhealth ")or die(mysql_error()); // truncate before fetching new news
$indexer = 0;

if ( $url[0] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[0] );
	
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblhealth  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
		/*$result1 = mysql_query("SELECT mtest from tblentertainment");
		
		echo "<table border='1'>";
		echo ("<tr><th>mtest</th></tr>");
		while($row = mysql_fetch_array($result1)){
			//print content of each row into table
			echo"<tr><td>";
			echo base64_decode($row['mtest']);
			echo"</td></tr>";
		}
		echo "</table>";
		
		$ajimage = base64_decode($ajimage);
		echo "<li><span style=\"color:blue;font-weight:bold\">$title</span> <br />$ajpubdate &nbsp &nbsp &nbsp &nbsp &nbsp <a href = $href>read more...</a>$ajimage  </li>";*/
	}
	
}

if ( $url[1] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[1] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblhealth  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[2] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[2] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblhealth  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[3] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[3] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblhealth  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

if ( $url[4] ) {
	$num_items = 2;
	$rss = fetch_rss( $url[4] );
		
	$items = array_slice($rss->items, 0, $num_items);
	
	foreach ($items as $item) {
		$href = base64_encode($item['link']);
		$title = base64_encode($item['title']);
		$ajimage = base64_encode($item['description']);
		$pubdate = base64_encode($item['pubdate']);
		$indexer++;
		mysql_query("INSERT INTO tblhealth  VALUES('$href', '$ajimage', '$pubdate', '$title', '0','$indexer') ")or die(mysql_error());
	
	}	
}

?>

