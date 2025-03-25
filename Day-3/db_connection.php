<?php 
   // server/hostname, dbname, password, username http://127.0.0.1:8000/
   $server = "localhost";
   $username = "root";
   $password = "";
   $databasename = "student_enrollment_db";

   $con = new mysqli($server, $username, $password, $databasename);

   if($con){
    echo "database connection succesfull.";
   }else{
    echo "connection failed".$con->connect_error;
   }

?>