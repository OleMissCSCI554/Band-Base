<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Search</title>
  <link   href="css/search.css" type="text/css" rel="stylesheet" />
  <!--
    Course: Csci 554 - Web Architecture and Programming
    Student Name: Funke Makanjuola
    Date: 09/20/2012-->
</head>
<body >
	<div class="box3">
		<div id="div3"> 
			<div align="center">
			<br/>
					<h1 align="center">Search</h1>
					<br/>
					<div id="div4">
					  <form action="Search2.php" method="post" >
					          <label>
							 <p align="center">Instrument Type: 
					        <select name="searchINtype"  class="selectoption">
					          <option  value= " "> </option>
					          <option  value= "piano">Piano</option>
					          <option  value= "Guiter">Guiter</option>
					          <option  value= "	Synthesizer">	Synthesizer</option>
								Synthesizer
								</select>
				          </label>
			            <p align="center">
					      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skill Level:
								<select name="searchSKlevel"  class="selectoption" >
								<option  value= " "> </option>
								 <option value="Novice">Novice</option>
  								 <option value="Intermediate ">Intermediate</option>
								 <option value="Expert">Expert</option>
								 <option value="Professional">Professional</option>
						  </select></label>
						</p>
							<p align="center">&nbsp;</p>
						<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;<br/>
						  <input name="submit"  id="submit_B"  type="submit" value="submit"  />
					  </p>
					  </form>		
				
					<div>
			</div>
		</div><div  id="div5"></div>
		<div  id="div6"><?php
		error_reporting(E_ALL);
				ini_set('display_errors', 1);
				//connection to mysql
				$page_title= 'Seach Page';
				//include('header.html');
				require('bandbase_connect.php');
				
				
			  if(isset($_POST['submit'])){
      										
							$searchINtype=$_POST['searchINtype'];
						    $searchSKlevel=$_POST['searchSKlevel'];
												
						//	echo $searchINtype , $searchSKlevel , $searchGen ,$searchLoc;
							// Retrieve data from database 
							    $sql ="SELECT Instruments.UID,  Musician.First_Name, Musician.Middle_Name, Musician.Family_Name, Musician.Email_Address ,Band.Website FROM Instruments, Musician, Band WHERE Instruments.Instrument LIKE '%$searchINtype%' AND Instruments.Skill_Level LIKE '%$searchSKlevel%' ";                                   								 
							          $result = mysqli_query($dbc, $sql)
									  or die("Error: ".mysqli_error($dbc));
									 
									  echo  "Musician UserID     First Name 	Middle_Name  Family_Name   Email  Band-Website";
									   // Start looping rows in mysql database.	
								  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
								  
								  echo "</br>";
								  
								  //echo "Musician Email Address";
								  echo "</br>";
								  echo $row["UID"]. " ". $row["First_Name"]. " ". $row["Middle_Name"]. " ". $row["Family_Name"]. " ". $row["Email_Address"]. " ". $row["Website"];
								 						 				   
   									 }

    						mysqli_free_result($result);
							
							}
			?></div>
		
	</div>
	
       </div><p>&nbsp;</p><br/>
	   <p>&nbsp;</p><br/>
	   
    </div>
</body>
</html>