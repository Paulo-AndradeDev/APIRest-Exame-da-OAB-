<?php 

	$url = "http://localhost:8080";

	$class = '/dados';

	$method = '/estado';

	$param = '/AC'; 


	$response = header("location:".$url.$class.$method.$param);

	#file_get_contents()




?>