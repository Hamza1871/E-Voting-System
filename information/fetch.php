<?php
//Artworks of Scanhead   HNU 2017
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()

$conn = $mydb->connect();

if(isset($_POST["query"]))
{

$q = $_POST["query"];
	
$results = $conn->prepare("SELECT * FROM ward_info WHERE ward_Name LIKE '%" . $q . "%'
OR ward_No LIKE '%".$q."%'
");


}
else
{
 
 $results = $conn->prepare("SELECT * FROM ward_info");

}

$results->execute();
while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	 echo '<tr onclick="javascript:showRow(this);">' . 
	 '<td>' . $row['w_id'] . '</td>' . 
    '<td>' . $row['ward_Name'] . '</td>' . 
    '<td>' . $row['ward_No'] . '</td>' . 
	'</tr>';
} 


?>