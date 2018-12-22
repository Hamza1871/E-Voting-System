<?php
//Artworks of Scanhead   HNU 2017
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()

$conn = $mydb->connect();

if(isset($_POST["query"]))
{

$q = $_POST["query"];
	
$results = $conn->prepare("SELECT * FROM pp_constituency WHERE pp_id LIKE '%" . $q . "%'
OR pp_Name LIKE '%".$q."%'
");


}
else
{
 
 $results = $conn->prepare("SELECT * FROM pp_constituency ");

}

$results->execute();
while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	 echo '<tr onclick="javascript:showRow(this);">' . 
	'<td>' . $row['pp_id'] . '</td>' .
    '<td>' . $row['pp_Name'] . '</td>' . 
    '<td>' . $row['pp_No'] . '</td>' . 
	'</tr>';
} 


?>