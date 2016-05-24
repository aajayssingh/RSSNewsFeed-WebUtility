<!DOCTYPE html>
<html>
<head>
<style>
header {
    background-color:blue;
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

/*li{
    height: 400px;
   }
*/
</style>
</head>

<body bgcolor="#E6E6FA">


<?php
define('MAGPIE_DIR', '../');
require_once(MAGPIE_DIR.'rss_fetch.inc');

@mysql_connect("localhost", "root", "") or die(mysql_error());
@mysql_select_db("dbNewsFeed") or die(mysql_error());

?>


<header>
<h1>News Feeds</h1>
<form>
<input type="submit" formaction="magpie_simple.php" value="Refresh">
</form></header>

<div class="section group">
	<div class="col span_1_of_3">
	<span style="color:black;font-weight:bold"><center><font size = "5">Top Cricket</font></center> </span><hr /> <hr />
	
<?php

echo "<ul>";
	//on like call a func that stores the priority +1 and stays on same page. on refresh display data in inc decreasing order of priority.
	$result1 = mysql_query("SELECT * from tblcricket ORDER BY priority DESC");
		$buttonid = 0;
		while($row = mysql_fetch_array($result1)){
			//print content of each row into table
			$href = base64_decode($row['link']);
			$title = base64_decode($row['title']);
			$ajimage = base64_decode($row['description']);
			$ajpubdate = base64_decode($row['pubdate']);	
			$buttonid = $row['index'];
		echo "<li><span style=\"color:blue;font-weight:bold\">$title</span><form action=\"magpie_simple.php\" method = \"POST\"><input type=\"submit\" name=\"$buttonid\" value=\"like\"> <input type=\"hidden\" name=\"cricket\" value=\"cricketNews\"> </form> <br />$ajpubdate &nbsp &nbsp &nbsp &nbsp &nbsp <a href = $href>read more... <br /></a>$ajimage  </li><hr />";
	}
	echo "</ul>";
	

?>
	</div>
	<div class="col span_1_of_3">
	<span style="color:black;font-weight:bold"><center><font size = "5">Top Entertainment</font></center> </span><hr /><hr />
	<?php
echo "<ul>";
	//on like call a func that stores the priority +1 and stays on same page. on refresh display data in inc decreasing order of priority.
	$result1 = mysql_query("SELECT * from tblentertainment ORDER BY priority DESC");
		$buttonid = 0;
		while($row = mysql_fetch_array($result1)){
			//print content of each row into table
			$href = base64_decode($row['link']);
			$title = base64_decode($row['title']);
			$ajimage = base64_decode($row['description']);
			$ajpubdate = base64_decode($row['pubdate']);	
			$buttonid = $row['index'];
		echo "<li><span style=\"color:blue;font-weight:bold\">$title</span><form action=\"magpie_simple.php\" method = \"POST\"><input type=\"submit\" name=\"$buttonid\" value=\"like\"> <input type=\"hidden\" name=\"entertainment\" value=\"entertainmentNews\"> </form> <br />$ajpubdate &nbsp &nbsp &nbsp &nbsp &nbsp <a href = $href>read more... <br /></a>$ajimage  </li><hr />";
	}
	echo "</ul>";

?>

	</div>
	<div class="col span_1_of_3">
	<span style="color:black;font-weight:bold"><center><font size = "5">Top Health</font></center> </span><hr /><hr />
	<?php
echo "<ul>";
	//on like call a func that stores the priority +1 and stays on same page. on refresh display data in inc decreasing order of priority.
	$result1 = mysql_query("SELECT * from tblhealth ORDER BY priority DESC");
		$buttonid = 0;
		while($row = mysql_fetch_array($result1)){
			//print content of each row into table
			$href = base64_decode($row['link']);
			$title = base64_decode($row['title']);
			$ajimage = base64_decode($row['description']);
			$ajpubdate = base64_decode($row['pubdate']);	
			$buttonid = $row['index'];
		echo "<li><span style=\"color:blue;font-weight:bold\">$title</span><form action=\"magpie_simple.php\" method = \"POST\"><input type=\"submit\" name=\"$buttonid\" value=\"like\"> <input type=\"hidden\" name=\"health\" value=\"healthNews\"> </form> <br />$ajpubdate &nbsp &nbsp &nbsp &nbsp &nbsp <a href = $href>read more... <br /></a>$ajimage  </li><hr />";
	}
	echo "</ul>";

?>

	</div>
</div>


</body>
</html>

<?php
function updateDBC()
{
        if(isset($_POST['1'])){
    //  echo "tbl row unique index 1";
	  $index = 1;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
    }
	else if(isset($_POST['2'])){
	//echo "tbl row unique index 2";
		$index = 2;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['3'])){
		//echo "tbl row unique index 3";
		$index = 3;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['4'])){
	//	echo "tbl row unique index 4";
		$index = 4;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['5'])){
		//echo "tbl row unique index 5";
		$index = 5;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['6'])){
		//echo "tbl row unique index 6";
		$index = 6;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['7'])){
		//echo "tbl row unique index 7";
		$index = 7;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['8'])){
		//echo "tbl row unique index 8";
		$index = 8;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['9'])){
		//echo "tbl row unique index 9";
		$index = 9;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 // echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['10'])){
		//echo "tbl row unique index 10";
		$index = 10;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	 //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}

}


if(isset($_POST['cricket']))//hidden input type name
{
   updateDBC();
}
?>

<?php
function updateDBE()
{
        if(isset($_POST['1'])){
     // echo "tbl row unique index 1";
	  $index = 1;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
    }
	else if(isset($_POST['2'])){
		//echo "tbl row unique index 2";
		$index = 2;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['3'])){
		//echo "tbl row unique index 3";
		$index = 3;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['4'])){
		//echo "tbl row unique index 4";
		$index = 4;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['5'])){
		//echo "tbl row unique index 5";
		$index = 5;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['6'])){
		//echo "tbl row unique index 6";
		$index = 6;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['7'])){
		//echo "tbl row unique index 7";
		$index = 7;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['8'])){
		//echo "tbl row unique index 8";
		$index = 8;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['9'])){
		//echo "tbl row unique index 9";
		$index = 9;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['10'])){
		//echo "tbl row unique index 10";
		$index = 10;
	  $result = mysql_query("SELECT priority from tblentertainment WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblentertainment SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}

}


if(isset($_POST['entertainment']))//hidden input type name
{
   updateDBE();
}
?>

<?php
function updateDBH()
{
        if(isset($_POST['1'])){
     // echo "tbl row unique index 1";
	  $index = 1;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
    }
	else if(isset($_POST['2'])){
		//echo "tbl row unique index 2";
		$index = 2;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['3'])){
		//echo "tbl row unique index 3";
		$index = 3;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['4'])){
		//echo "tbl row unique index 4";
		$index = 4;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['5'])){
		//echo "tbl row unique index 5";
		$index = 5;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['6'])){
		//echo "tbl row unique index 6";
		$index = 6;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['7'])){
		//echo "tbl row unique index 7";
		$index = 7;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['8'])){
		//echo "tbl row unique index 8";
		$index = 8;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['9'])){
		//echo "tbl row unique index 9";
		$index = 9;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['10'])){
		//echo "tbl row unique index 10";
		$index = 10;
	  $result = mysql_query("SELECT priority from tblhealth WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  //echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblhealth SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}

}


if(isset($_POST['health']))//hidden input type name
{
   updateDBH();
}
?>










<!--
<form>
	RSS URL: <input type="text" size="30" name="url" value="<?php echo $url ?>"><br />
	<input type="submit" value="Parse RSS">
</form>
-->  

