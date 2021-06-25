<?php

    define("SERVERNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "logboekregistratie");

    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die("werkt niet");
    
    ?>