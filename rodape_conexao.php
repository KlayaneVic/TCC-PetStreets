<?php
	// Executa o comando SQL
	$query = mysqli_query($con, $SQL);
	if($query){
		echo $texto;
	} else {
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>