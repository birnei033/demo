<?php
include "includes/connect.php";
if (isset($_POST['submit_registration'])) {
    $response = "";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if ($username != "" && $password != "") {
        if ($password === $confirm_password) {
            $sql = "INSERT INTO users (first_name, last_name, username, userpassword)
            VALUES ('$firstname', '$lastname', '$username', '$password')";
    
            if (mysqli_query($conn, $sql)) {
                $response = "success";
            } else {
                $response = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }else{
            $response = "Password not matched.";
        }
    }else{
        $response = "User name and password are required.";
    }
    echo json_encode(array(
        'r'=>$response
    )); 

}else{
    header("location: /demo/");
}
?>