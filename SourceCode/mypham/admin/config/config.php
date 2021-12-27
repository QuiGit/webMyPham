<?php
    $mysqli = new mysqli("localhost","root","","mysqli");

        // Check connection
        if ($mysqli->connect_errno) {
            echo "Ket noi loi: " . $mysqli->connect_error;
        exit();
    }
?>