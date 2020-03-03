<?php
$host_bdd="192.168.1.2";
$dbname ="devoucoux_c";
$user_id_bdd="devoucoux_c";
$password_bdd="devoucoux_c";

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host='.$host_bdd.';dbname=' .$dbname,$user_id_bdd, $password_bdd, $pdo_options);
	$bdd->exec('SET NAMES utf8');
}catch(PDOExeption $e){
	$msg = 'ERREUR PDO dans ' . $e->getfile() . ' L. ' . $e->getline() . ' : ' . $e->getMessage();
		die($msg);
}

$sql= 'SELECT ename, sal from EMP;';
?>




<table>
				<tr>
					<th> Ename </th>
					<th> Sal </th>
				</tr>
				<tr>
					<td> Clement </td>
					<td> 30 000 </td>
				</tr>
				<tr>
					<td> Thierry </td>
					<td> 28 000 </td>
				</tr>
				<tr>
					<td> Matis </td> 
					<td> 25 000 </td>
				</tr>
<?php 
				
foreach ($bdd->query($sql) as $row) {
	echo "<TR><TD>";
	print $row['ename'] . "\t";
	echo "</TD><TD>";
	print $row['sal'] . "\t";
	echo "</TD></TR>";
}
?>				
				
</table> 