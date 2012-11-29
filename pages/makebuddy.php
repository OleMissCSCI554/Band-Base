<html>
<head>
  <title>Band Base</title>
  <link rel="stylesheet" href="../static/css/buddylist.css" type="text/css" />
  
  <?php
   	include_once '../bandbase_connect.php';
	include 'header1.html';
   ?>

</head>
<body>
<div id="info">

<?php

//Use user who is logged in! This is only a sample user, because there is no login
$user_id=mysql_fetch_array(mysql_query("SELECT UID from Musician where First_Name='Alex'")) or die("could not get current user!"); 
$uid=$user_id['UID'];

$userinfo="SELECT * from Musician where UID='$user_id'";
$userinfo2=mysql_query($userinfo) or die("could not get user stats!");
$userinfo3=mysql_fetch_array($userinfo2);

if($_POST['delete'] == NULL) {
	$friend=$_POST['add'];
} 
else {
	$friend=$_POST['delete'];
}

$friendinfo="SELECT * from Musician where First_Name='$friend'";
$friendinfo2=mysql_query($friendinfo) or die("could not get friend stats!");
$friendinfo3=mysql_fetch_array($friendinfo2);
$fid=$friendinfo3['UID'];

$ck_friendlist = "SELECT A FROM Friends WHERE B = '.$fid.' AND A = '.$uid.'";
$ck_friend = "SELECT UID FROM Musician WHERE UID = '".$fid."'";

//Check if Name is provided
if( $friend == NULL){
die("The friend you want to add has no name. Please try again.<br/><br/>
	<form name=\"back\" action=\"buddylist.php\"
	method=\"post\">
	<input type=\"submit\" value=\"Try Again\">
	</form>
	");	
}
//Check if it is a deletion
elseif($_POST['delete'] !== NULL) {
	mysql_query("DELETE FROM `Friends` WHERE A = '$uid' AND B = '$fid'") OR die("Could not delete the friend: <br>".mysql_error()); 
	mysql_query("DELETE FROM `Friends` WHERE B = '$uid' AND A = '$fid'") OR die("Could not delete the friend: <br>".mysql_error()); 	
	echo "Friend was successfully deleted!<br/><br/>";
	?>
	<form name="back" action="buddylist.php"
	method="post">
	<input type="submit" value="Delete another friend">
	</form>
	<?php
}
//this will just make sure that the user you are adding is a valid user, because why add someone that doesn't 
//exist?
elseif( mysql_num_rows( mysql_query( $ck_friend ) ) == 0 ){
die("The user you are trying to add doesn't exist. Please go back and try again.<br/><br/>
<form name=\"back\" action=\"buddylist.php\"
method=\"post\">
<input type=\"submit\" value=\"Try Again\">
</form>
");
}
//this ensures that you aren't already friends with that user, it checks the db to see if it is repeating itself pretty
// much
elseif( mysql_num_rows( mysql_query( $ck_friendlist ) ) !== 0 ){
echo "You already are friends with this user, go back and add another person!<br/><br/>";
echo "<a href='buddylist.php'>Go Back</a>";

}
//this checks to make sure that the name you entered isn't your own
elseif( $newfriend = $user ){
echo "You can't add yourself! Go back and add someone else!<br/><br/>";
echo "<a href='buddylist.php'>Go Back</a>";

}
else{
//this is the stage where it has passed all of the checks and is okay, now it is adding the values to the "friends" 
//table 
mysql_query("INSERT INTO `Friends`(`A`, `B`) VALUES ('$uid','$fid')") OR die("Could not add the user: <br>".mysql_error()); 
mysql_query("INSERT INTO `Friends`(`A`, `B`) VALUES ('$fid','$uid')") OR die("Could not add the user: <br>".mysql_error()); 
echo "Friend was successfully added!<br/><br/>";
?>
<form name="back" action="buddylist.php"
method="post">
<input type="submit" value="Add another friend">
</form>
<?php
}
?>
</div>
</body>
</html>