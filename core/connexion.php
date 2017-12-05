<?php

try {
    //Conection stringwith error handling turned on
    $conn = new PDO('mysql:host=localhost;dbname=todo_app','root', 'root');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully or Database and table users created successfully.";
    }
catch(PDOException $e)
    //Handle error
    {
    echo "Connection failed: " . $e->getMessage();
    }
