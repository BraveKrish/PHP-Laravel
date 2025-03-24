<?php
// super globals $_POST, $_GET, $_SERVER
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $age =  $_POST['age'];

    if ($age > 18) {
        // true result
        echo "You are eligible to vote.";
    } else {
        // for false result
        echo "You are too young to vote.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Laravel Form</title>
</head>

<body>
    <!-- POST Method is for secure transmission -->
    <!-- GET Method is for data transmission throug http method and url -->
    <form action="form.php" method="POST">
        <input type="number" name="age" id=""> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>