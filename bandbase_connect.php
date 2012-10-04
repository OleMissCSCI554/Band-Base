<?php
   
   DEFINE ('host','wic.cs.olemiss.edu');
   DEFINE ('username','bandbase');
   DEFINE ('password','csci554');
   DEFINE ('database','BandBase');
   
   $dbc = @mysqli_connect(host, username, password, database) or 
die('Could not connectto MySQL: ' . mysqli_connect_error());
   
?>
