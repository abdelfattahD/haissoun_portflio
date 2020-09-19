<?php 

    $connection = mysqli_connect('Localhost','root','','haissoun_portflio');

    if($connection->connect_error){
		die("Connection failed: ".$connection->connect_error);
	}
	
	return $connection;

?>


