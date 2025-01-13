<?php
    define('SERVERNAME','127.0.0.0:3306');
    define('USERNAME','root');
    define('PASSWORD','mariadb');
    define('DBNAME','hotelsystem');
    // define('SERVERNAME','localhost');
    // define('USERNAME','root');
    // define('PASSWORD','');



    $connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

    if(!$connect){
		die("connection failed");
	}else{
		//echo "connect successfully";
	}

?>