<?php

    $server	= 'localhost';
    $user	= 'root';
    $pass	= '493388';
    $db 	= 'krishna';

    $conn = new mysqli($server, $user, $pass, $db);
    
    // Change character set to utf8
    mysqli_query($conn,"SET CHARACTER SET 'utf8'");
    mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");

?>