<?php include "includes/connect.php";
include "includes/head.php";
include "includes/header_logged_in.php";

if (isset($_POST['login-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND userpassword = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Your are now logged in.</h1>";
    } else {
        ?>
        <script>
            alert("Incorrect Username or Password");
            location.href = "/demo/";
        </script>
        
        <?php
    }

    mysqli_close($conn);
}else{
    header("Location: /demo/");
}

include "includes/footer.php";