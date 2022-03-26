
<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'easy course';

    // create connection
    $conn = mysqli_connect($server , $username , $password , $dbname );

    // check connection
    if(!$conn){
        die('Connection Failed : '.mysqli_connect_error());
    }



?>