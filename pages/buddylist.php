<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Band Base - Friendlist</title>
  <link rel="stylesheet" href="../static/css/buddylist.css" type="text/css" />
</head>
<body>

<?php
include_once '../bandbase_connect.php';
include 'header1.html';

//Use user who is logged in! This is only a sample user, because there is no login
$user_id=mysql_query("SELECT UID from Musician where First_Name='Alex'"); 

$userinfo="SELECT * from Musician where UID='$user_id'";
$userinfo2=mysql_query($userinfo) or die("could not get user stats!");
$userinfo3=mysql_fetch_array($userinfo2);
 ?>

<div id="content">
        <div id="intro">
        	JANE DOE<br />
        	<font size="6">FRIENDS</font><br />
        </div>
        <div id="bandlist">
			BANDS <br/><br/>
			<div id="band"></div>
		</div>
        <div id="buddy_add">
                <form name="message" action="makebuddy.php" method="post">
                Add Friend (Enter first name): <br/> 
				<input type="text" name="add">
				<input type="submit" name="submit" value="Add">
                </form>
				<br/><br/>
                <form name="message" action="makebuddy.php" method="post">
                Delete Friend (Enter first name): <br/> 
				<input type="text" name="delete">
				<input type="submit" name="submit" value="Delete">
                </form>
        </div>
<div>
<div style="clear: both;"></div>
<div id="buddylist">
            BUDDIES<br /><br/>
			<div>
			<?php
			$buddies=mysql_query("SELECT B from Friends where A=1") or die("could not get buddies!");

			while ($row = mysql_fetch_array($buddies)){
			    $data[] = $row;
			}

			foreach ($data as $row){
			   $buddy_id=$row['B'];
			   $result = mysql_query("SELECT First_Name from Musician where UID='$buddy_id'") or die("could not get buddyname!");
			   $buddy_name=mysql_fetch_array($result);
			   echo "<div id='entry'>";
			   echo $buddy_name['First_Name'];
			   echo "</div>";
			}

			?>
			</div>
</div>
<div style="clear: both;"></div>
<div id="buddylist">
            PLAYED WITH<br /><br/>
		<div id="entry"></div>
		<div id="entry"></div>
		<div id="entry"></div>
</div>
</body>
</html>
