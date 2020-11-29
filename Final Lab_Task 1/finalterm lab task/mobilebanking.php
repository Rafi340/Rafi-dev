<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='mobileBankingApp'){
		header("location: ../view/login.php");
	}
	else{
	$username= $_SESSION['username'];
	
	}
	include('../data/dbConn.php');
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<body>

<h1>Mobile Banking Application</h1>
<table border= "1"  cellpadding= "25" >
<tr>
	<th> SL </th>
	<th> Username </th>
	<th> Balance </th>
	<th> Action </th>
</tr>
<?php 
 $i=0;
	$satatement = $db-> prepare("select * from users");
	$satatement->execute();
	$result = $satatement-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
		$i++;
			?>
			<tr>
			<td > <?php echo $i ; ?> </td>
			<td> <?php echo $row['username']; ?> </td>
			<td> <?php echo $row['balance']; ?> </td>
			<td> <a href= "../controller/deposit.php?id=<?php echo $row['id'] ?>" > Deposit</a> |
				<a href= "../controller/withdraw.php?id=<?php echo $row['id'] ?>">withdraw </a> 
			</td>
			</tr>
			<?php
	}
?>
</table>

</body>
</html>