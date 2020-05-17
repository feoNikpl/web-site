<?php 
	$db_host = "localhost";
	$db_name = "Stat";
	$db_user ="root";
	$db_pasword = "Nikitin277///";
	$db = mysqli_connect($db_host,$db_user,$db_pasword,$db_name) or die ("невозможно подключиться");

	$usrIP = $_SERVER['REMOTE_ADDR'];
	$dat  = date("Y-m-d");

	$res = mysqli_query($db, "SELECT `id` FROM `IP` WHERE `date`='$dat' ");
	if (mysqli_num_rows($res) == 0){
		mysqli_query($db, "DELETE FROM `IP`");
		mysqli_query($db, "INSERT INTO `IP` SET `usrIP`='$usrIP', `views`=1, `date`='$dat' ");
	}else{
		mysqli_query($db, "UPDATE `IP` SET `views`=`views`+1 WHERE `usrIP`='$usrIP' ");
	}
    $res =  mysqli_query($db, "SELECT * FROM `IP` ORDER BY `views` DESC ");
	echo '';
	while ($row = mysqli_fetch_assoc($res)){
		echo '<tr>
					<td>'.$row['usrIP'].'</td>
					<td>'.$row['views'].'</td>
				</tr>';
	}
	
?>