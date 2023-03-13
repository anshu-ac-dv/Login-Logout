<?php

    define('SERVER','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DB','registration');

    $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
    if (!$conn) {
        echo "Error to Connect Database" . mysqli_error();
    }
    else{
        //echo "Connection successfuly";
    }

?>