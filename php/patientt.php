<?php

// for patient signup

$Server_name = "localhost";
$username = "root";
$Password = "";
$databasename = "healthlink";

$conn = mysqli_connect($Server_name, $username, $Password, $databasename);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $national_id = $_POST["NID"];
    $fname = $_POST["FName"];
    $lname = $_POST["Lname"];
    $DOB = $_POST["DoB"];
    $gender = $_POST["Gender"];
    $Contact = $_POST["contact"];
    $password = $_POST["Password"];

    $sql_query = "INSERT INTO patient (NationalId, Fname, Lname, DoB, Gender, Contact, password)
    VALUES ('$national_id', '$fname', '$lname', '$DOB', '$gender', '$Contact', '$password')";

    if (mysqli_query($conn, $sql_query)) {
        // echo 'Registration successful.';
        header("location:../plogin.html");
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
    mysqli_close($conn);
}


?>

