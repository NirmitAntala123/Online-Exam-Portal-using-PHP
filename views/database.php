<?php
    $dbHost="localhost";  
    $dbName="Exam";  
    $dbUser="postgres";      //by default root is user name.  
    $dbPassword="1234";     //password is blank by default 
    $port="4050";

    try{  
        $db= new PDO("pgsql:host=$dbHost;port=$port;dbname=$dbName",$dbUser,$dbPassword);  
      //   Echo "Successfully connected with myDB database"; 
    } catch(Exception $e){  
    Echo "Connection failed" . $e->getMessage();  
    }  
   ?>
