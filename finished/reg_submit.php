<?php 
    include "db_connect.php";
    if (($_POST['username'] != "") && $_POST['password'] != "" ) {
        if ($_POST['password'] === $_POST['confirm_password']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $sql = "INSERT INTO users (first_name, last_name, username, userpassword) VALUES ('$firstname', '$lastname', '$username', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo json_encode(array(
                    'response'=>'success'
                ));
            } else {
                echo json_encode(array(
                    'response'=>$conn->error
                ));
                // echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // mysqli_close($conn);
        }else{
            echo json_encode(array(
                'response'=>"Password do not matched"
            ));
        }
    }else{
        echo json_encode(array(
            'response'=>"user name and password are required"
        ));
    }

?>