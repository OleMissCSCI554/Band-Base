<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
				ini_set('display_errors', 1);
				//connection to mysql
				$page_title= 'Seach Page';
				require('bandbase_connect.php');

				//Query the database to be used to populate the dropdown list  
				$sqll = "SELECT * FROM Instruments";

				$queryy = mysqli_query($dbc, $sqll);

				//select everything in our table and loop it into an array of objects containing the results
   
				while( $array[] = mysqli_fetch_object ($queryy ) );
  
				array_pop ( $array );  
  
				

				?>
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
							<p align="center"><label>Instrument Type: 
								<select name="searchINtype" class="selectoption">
								<option  value= " "> </option><?php foreach($array as $option): ?>
								<option  value= "<?php echo $option->Instrument;?>"><?php echo $option->Instrument; ?>
								</option><?php endforeach; ?>
								</select></label>
							</p>
				          </label>
			            <p align="center">
					      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skill Level:
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
		</div>
		  </div>
		</div>   
    </div>
</body>
</html>