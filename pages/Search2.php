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
<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
				//connection to mysql
				$page_title= 'Seach Page';
				//include('header.html');
				require('bandbase_connect.php');
				
				
			  if(isset($_POST['submit'])){
      										
							$searchINtype=$_POST['searchINtype'];
						    $searchSKlevel=$_POST['searchSKlevel'];
							
												
						
							// Retrieve data from database 
							    $sql = "(SELECT UID FROM Instruments WHERE Instrument = '$searchINtype' AND Skill_Level='$searchSKlevel') 												                                        UNION ( SELECT 	Website FROM Band )";
										
							          $result = mysqli_query($dbc, $sql) or die("Error: ".mysqli_error($dbc));
									 
								
									   // Start looping rows in mysql database.	
									    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
										if (mysqli_num_rows($result) > 0) {
								        
										
				                         echo    '<br/>' ;
										 echo    '<br/>';
									
										
											echo '<table border="1" cellspacing="0" cellpadding="0" align="center">
											<tr>																	
											<td ><b><h2>' . 'Website Addresses of Band Members Using the Instrument Type'."-" . $searchINtype  . ' and on Skill Level'."-". $searchSKlevel. '<h2/></b>
											</td>
											</tr>';

											// Fetch each thread:
											while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	
												echo '<tr>
												<td >' . $row['UID'] . '</td>	
																		
				
												</tr>';
	
											}
	
											echo '</table>'; // Complete the table.
	
										} else {
										echo '<p>There are no information associated with the search.</p>';
						
							
										}
										
										
				}
			?>
</div>
</body>
</html>