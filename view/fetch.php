<?php
//Artworks of Scanhead   HNU 2017
include('db.class.php'); // call db.class.php
$mydb = new db(); // create a new object, class db()

$conn = $mydb->connect();

if(isset($_POST["query"]))
{

$q = $_POST["query"];
	
$results = $conn->prepare("SELECT * FROM nadra_record_voter WHERE CNIC_No LIKE '%" . $q . "%'
OR Name LIKE '%".$q."%'
");


}
else
{
 
 $results = $conn->prepare("SELECT * FROM nadra_record_voter ");

}

$results->execute();
while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	 echo '<tr onclick="javascript:showRow(this);">' . 
    '<td>' . $row['Name'] . '</td>' . 
    '<td>' . $row['CNIC_No'] . '</td>' . 
    '<td>' . $row['Date_of_Birth'] . '</td>' .
	'<td>' . $row['Gender'] . '</td>' .
	'<td>' . $row['Address'] . '</td>' .
	'<td>' . $row['Nationality'] . '</td>' .
	'<td>' . $row['pp_id'] . '</td>' .
	'<td>' . $row['na_id'] . '</td>' .
	'</tr>';
} 


?>