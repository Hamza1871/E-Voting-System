<?php
$db= new PDO('mysql:host=localhost;dbname=e_voting_system','root','');
if(isset($_POST['search']))
{
	$search = $_POST['search'];
	$query = $db->prepare("SELECT * FROM nadra_record_voter WHERE CNIC_No LIKE '%".$search."%' OR Name LIKE '%".$search."%'");
	$query->execute(["%$search%"]);
	$count = $query->rowCount();
	if($count == 0)
	{
		echo "Sorry no result found!";
	}
	else
	{
		echo "<table class='table table-hover' style='width: 140%;max-width: 140%;'>";
		while($r = $query->fetch(PDO::FETCH_OBJ))
		{
			$name = $r->Name;
			$cnic = $r->CNIC_No;
			$date_of_birth = $r-> Date_of_Birth;
			$address = $r->Address;
			$gender = $r->Gender;
			$pp = $r->pp_id;
			$na = $r->na_id;
			echo "<tbody>
			<tr>
			<td>$name</td>
			<td>$cnic</td>
			<td>$date_of_birth</td>
			<td>$address</td>
			<td>$gender</td>
			<td>$pp</td>
			<td>$na</td>
			</tr>
			</tbody>";
		}
	}
}
?>