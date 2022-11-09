<?php

//  include 'Upload.php';

define('DB_SERVER', 'localhost');
define('DB_NAME', 'root');
define('DB_PASSWORD', '');
define('DB_DBNAME', 'chronos_project');

$connection = mysqli_connect(DB_SERVER, DB_NAME, DB_PASSWORD, DB_DBNAME);

if($connection == true){
    // echo "Connection established";
}else {
    // echo "Sorry Nigga";
}




                


?>