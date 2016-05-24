<?php
@mysql_connect("localhost", "root", "") or die(mysql_error());
@mysql_select_db("dbNewsFeed") or die(mysql_error());
?>

<?php
echo "lol  -  ";

if($_POST){
    if(isset($_POST['1'])){
      echo "tbl row unique index 1";
	  $index = 1;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
    }
	else if(isset($_POST['2'])){
		echo "tbl row unique index 2";
		$index = 2;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['3'])){
		echo "tbl row unique index 3";
		$index = 3;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['4'])){
		echo "tbl row unique index 4";
		$index = 4;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['5'])){
		echo "tbl row unique index 5";
		$index = 5;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['6'])){
		echo "tbl row unique index 6";
		$index = 6;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['7'])){
		echo "tbl row unique index 7";
		$index = 7;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['8'])){
		echo "tbl row unique index 8";
		$index = 8;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['9'])){
		echo "tbl row unique index 9";
		$index = 9;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	else if(isset($_POST['10'])){
		echo "tbl row unique index 10";
		$index = 10;
	  $result = mysql_query("SELECT priority from tblcricket WHERE `index` = '$index'")or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  $p = $row['priority'] + 1;
	  echo "$p - $index";
	  //update priority where index =1
	  mysql_query("UPDATE tblcricket SET priority= '$p' WHERE `index` = '$index'")or die(mysql_error());
	}
	
  }


?>