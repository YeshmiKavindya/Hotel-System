<?php
    define('SERVERNAME','127.0.0.0:3306');
    define('USERNAME','root');
    define('PASSWORD','mariadb');
    define('DBNAME','hotelsystem');

    $connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

?>