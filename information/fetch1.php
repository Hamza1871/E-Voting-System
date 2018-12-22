<?php
//Artworks of Scanhead   HNU 2017
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()

$conn = $mydb->connect();

if(isset($_POST["query"]))
{

$q = $_POST["query"];
	
$results = $conn->prepare("SELECT * FROM na_constituency WHERE na_Name LIKE '%" . $q . "%'
OR na_No LIKE '%".$q."%'
");


}
else
{
 
 $results = $conn->prepare("SELECT * FROM na_constituency");

}

$results->execute();
while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	 echo '<tr onclick="javascript:showRow(this);">' . 
	 '<td>' . $row['na_id'] . '</td>' .
    '<td>' . $row['na_Name'] . '</td>' . 
    '<td>' . $row['na_No'] . '</td>' . 
	'</tr>';
} 


?>