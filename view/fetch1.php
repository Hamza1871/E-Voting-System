<?php
//Artworks of Scanhead   HNU 2017
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()

$conn = $mydb->connect();

if(isset($_POST["query"]))
{

$q = $_POST["query"];
	
$results = $conn->prepare("SELECT * FROM nadra_record_candidate INNER JOIN na_constituency ON na_constituency.na_id = nadra_record_candidate.na_id WHERE ID_No LIKE '%" . $q . "%'
OR Full_Name LIKE '%".$q."%'
");


}
else
{
 
 $results = $conn->prepare("SELECT * FROM nadra_record_candidate INNER JOIN na_constituency ON na_constituency.na_id = nadra_record_candidate.na_id ");

}

$results->execute();
while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	 echo '<tr onclick="javascript:showRow(this);">' . 
    '<td>' . $row['Full_Name'] . '</td>' . 
    '<td>' . $row['ID_No'] . '</td>' . 
    '<td>' . $row['Date_of_Birth'] . '</td>' .
	'<td>' . $row['Gender'] . '</td>' .
	'<td>' . $row['Address'] . '</td>' .
	'<td>' . $row['na_id'] . '</td>' .
	'</tr>';
} 


?>