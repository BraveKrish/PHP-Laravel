<?php 
  
  // we should include connection file here. 
  include "./db_connection.php";

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // print_r($_POST);
    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    // sql query to insert data
    // crud -> create, read, update and delete
    $sqlQuery = "insert into enrollments(fname,lname,email,phone,dob,courses,address) values('$fn','$ln','$email','$phone','$dob','$course','$address')";

    // execute/run sql query
    $result = $con->query($sqlQuery);

    if($result){
        // echo "Record inserted in our table.";
        header("Location: form.php");
    }else{
        echo "Insertion Failed: ".$con->error;
    }
  }

?>