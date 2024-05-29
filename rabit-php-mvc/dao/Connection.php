<?php

/**
 * This function define the connection parameters for the MySQL database.
 *
 * @return mysqli|void|null
 */
function connect(){
    define('DB_HOST', 'localhost');
    define('DB_USR', 'root');
    define('DB_PW', '');
    define('DB_NAME', 'rabit');

    $conn = mysqli_connect(DB_HOST, DB_USR, DB_PW) or die("Connection error!");

    if (!mysqli_select_db($conn, "rabit")) {
        return null ;
    }

    if (mysqli_select_db($conn, DB_NAME )  ) {
        mysqli_query($conn, 'SET NAMES UTF8');
        mysqli_query($conn, 'SET character_set_results=utf8');
        mysqli_set_charset($conn, 'utf8');
    }

    return $conn;
}
