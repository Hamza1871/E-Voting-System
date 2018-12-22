<?php

 
 $con=mysqli_connect('localhost','root','','e_voting_system');
 
 if(!$con)
 {
	 die('Please Check Your Connection!'.mysqli_error($con));
 }

?>