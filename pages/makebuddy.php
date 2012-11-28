<?php
include_once '../bandbase_connect.php';

//Use user who is logged in! This is only a sample user, because there is no login
$user_id=mysql_fetch_array(mysql_query("SELECT UID from Musician where First_Name='Alex'")) or die("could not get current user!"); 
$uid=$user_id['UID'];

$userinfo="SELECT * from Musician where UID='$user_id'";
$userinfo2=mysql_query($userinfo) or die("could not get user stats!");
$userinfo3=mysql_fetch_array($userinfo2);

$newfriend=$_POST['add'];
$uname=$userinfo3['First_Name'];

$friendinfo="SELECT * from Musician where First_Name='$newfriend'";
$friendinfo2=mysql_query($friendinfo) or die("could not get friend stats!");
$friendinfo3=mysql_fetch_array($friendinfo2);
$fid=$friendinfo3['UID'];

$ck_friendlist = "SELECT A FROM Friends WHERE B = '".$fid."'";
$ck_friend = "SELECT UID FROM Musician WHERE UID = '".$fid."'";

if( $newfriend == NULL){
die("The friend you want to add has no name. Please try again.<br>
	<form name=\"back\" action=\"buddylist.php\"
	method=\"post\">
	<input type=\"submit\" value=\"Try Again\">
	</form>
	");	
}

//this will just make sure that the user you are adding is a valid user, because why add someone that doesn't 
//exist?
if( mysql_num_rows( mysql_query( $ck_friend ) ) == 0 ){
die("The user you are trying to add doesn't exist. Please go back and try again.<br>
<form name=\"back\" action=\"buddylist.php\"
method=\"post\">
<input type=\"submit\" value=\"Try Again\">
</form>
");
}
//this ensures that you aren't already friends with that user, it checks the db to see if it is repeating itself pretty
// much
elseif( mysql_num_rows( mysql_query( $ck_friendlist ) ) !== 0 ){
echo "You already are friends with this user, go back and add another person!<br><br>";
echo "<a href='buddylist.php'>Go Back</a>";

}
//this checks to make sure that the name you entered isn't your own
elseif( $newfriend = $user ){
echo "You can't add yourself! Go back and add someone else!<br><br>";
echo "<a href='buddylist.php'>Go Back</a>";

}
else{
//this is the stage where it has passed all of the checks and is okay, now it is adding the values to the "friends" 
//table 
mysql_query("INSERT INTO `Friends`(`A`, `B`) VALUES ('$uid','$fid')") OR die("Could not add the user: <br>".mysql_error()); 
//echo "Uid: ".$uid." ";
//echo "Fid: ".$fid." ";
echo "Friend was successfully added!";
?>
<form name="back" action="buddylist.php"
method="post">
<input type="submit" value="Add another friend">
</form>
<?php
}
?>