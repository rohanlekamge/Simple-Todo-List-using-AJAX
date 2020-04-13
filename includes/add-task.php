<?php 
	$task = strip_tags( $_POST['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');

	require("connect.php");

	$SQL1="INSERT INTO tasks VALUES ('', '$task', '$date', '$time')";
	mysqli_query($conn, $SQL1) or die (mysqli_error());


	$SQL2="SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time'";
	$exeSQL=mysqli_query($conn, $SQL2) or die (mysqli_error());

	while( $row = mysqli_fetch_array($exeSQL) ){
		$task_id = $row['id'];
		$task_name = $row['task'];
	}

	mysqli_close($conn);

	echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
?>