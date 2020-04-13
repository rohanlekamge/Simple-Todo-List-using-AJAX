<?php 
	$task_id = strip_tags( $_POST['task_id'] );

	require("connect.php");

	$SQL="DELETE FROM tasks WHERE id='$task_id'";
	//run SQL query for connected DB or exit and display error message
	$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
	
?>