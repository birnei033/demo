<?php 

    include "header.php";
    include "navi-logged.php";
?>
        <?php 
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                     ?>
                        <h1>Your are logged in</h1>
                    <?php

                    } else {
                        header('Location: /demo');
                       ?>
                    <?php
                    
                }
                $conn->close();
            }else{
                header('Location: /demo');
            }
        
        ?>



<?php include "footer.php"; ?>