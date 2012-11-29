<?php
	 
	mysql_connect("wic.cs.olemiss.edu", "bandbase", "csci554") or die(mysql_error());
	mysql_select_db("BandBase") or die(mysql_error());
	$query = "SELECT * FROM Musician";
	$result = mysql_query($query) or die(mysql_error());
	 
	$doc = new DomDocument('1.0');
	$node = $doc->createElement("Musician");
	$parnode = $doc->appendChild($node);

	header("Content-type: text/xml");
	 
	while($row = mysql_fetch_array($result))
	{
		if($row['Street_Address1'] != NULL && $row['City'] != NULL && $row['State'] != NULL && $row['Zip'] != NULL)
		{
		$node = $doc->createElement("Musician");
		$newnode = $parnode->appendChild($node);
		if($row['Street_Address2'] != NULL)
		{
			$newnode->setAttribute("name", $row['First_Name']." ".$row['Middle_Name']." ".$row['Family_Name']);
			$newnode->setAttribute("address", $row['Street_Address1'].", ".$row['Street_Address2'].", ".$row['City'].", ".$row['State']." ".$row['Zip']);
		}
		else
		{
			$newnode->setAttribute("name", $row['First_Name']." ".$row['Middle_Name']." ".$row['Family_Name']);
			$newnode->setAttribute("address", $row['Street_Address1'].", ".$row['City'].", ".$row['State']." ".$row['Zip']);
		}
		}
	}
	 
	print $doc->saveXML();
	 
?>