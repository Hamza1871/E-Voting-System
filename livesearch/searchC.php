<?php
$db= new PDO('mysql:host=localhost;dbname=e_voting_system','root','');
if(isset($_POST['search']))
{
	$search = $_POST['search'];
	$query = $db->prepare("SELECT * FROM nadra_record_candidate WHERE ID_No LIKE '%".$search."%' OR Full_Name LIKE '%".$search."%'");
	$query->execute(["%$search%"]);
	$count = $query->rowCount();
	if($count == 0)
	{
		echo "Sorry no result found!";
	}
	else
	{
		echo "<table class='table table-hover' style='width: 190%;max-width: 190%;'>";
		while($r = $query->fetch(PDO::FETCH_OBJ))
		{
			$name = $r->Full_Name;
			$cnic = $r->ID_No;
			$date_of_birth = $r-> Date_of_Birth;
			$address = $r->Address;
			$gender = $r->Gender;
			$party = $r->Party;
			$qualification = $r->Qualification;
			$pp = $r->pp_id;
			$na = $r->na_id;
			echo "<tbody>
			<tr>
			<td>$name</td>
			<td>$cnic</td>
			<td>$date_of_birth</td>
			<td>$address</td>
			<td>$gender</td>
			<td>$party</td>
			<td>$qualification</td>
			<td>$pp</td>
			<td>$na</td>
			</tr>
			</tbody>";
		}
	}
}
?>