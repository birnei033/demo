<?php include "includes/head.php";
include "includes/header.php"; ?>

        <div class="left">
            <h1>Introduction Title</h1>
            <p>Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. </p>
            <p>Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. </p>
            <p>Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. </p>
            <p>Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. </p>
            <p>Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. </p>
            <p>Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. Some introduction here. </p>
        </div>
        <div class="right">
            <h1>Not Registered yet?</h1>
            <h4>Please fill the form below</h4>
            <form action="/demo/registration.php" method="POST" class="registration-form">
                <span>First Name</span>
                <input type="text" name="firstname" class="textbox">
                <span>Last Name</span>
                <input type="text" name="lastname" class="textbox">
                <span>User Name</span>
                <input type="text" name="username" class="textbox" required>
                <span>Password</span>
                <input type="password" name="password" class="textbox" required>
                <span>Confirm Password</span>
                <input type="password" name="confirm_password" class="textbox" required>
                <input type="submit" value="Submit" name="submit_registration" class="btn">
            </form>
        </div>

        <script>
            $(document).ready(function () {
                $('input[name="submit_registration"]').click(function (e) { 
                    e.preventDefault();
                    var data = {
                        firstname: $('.registration-form input[name="firstname"]').val(),
                        lastname: $('.registration-form input[name="lastname"]').val(),
                        username: $('.registration-form input[name="username"]').val(),
                        password: $('.registration-form input[name="password"]').val(),
                        confirm_password: $('.registration-form input[name="confirm_password"]').val(),
                        submit_registration: $('.registration-form input[name="submit_registration"]').val(),
                    }
                    console.log(data);
                    $.ajax({
                        type: "POST",
                        url: "/demo/registration.php",
                        data: data,
                        dataType: "JSON",
                        success: function (response) {
                            console.log(response);
                            if (response.r === "success") {
                                alert("New user has been added");
                                location.href = "/demo/";
                            }else{
                                alert(response.r);
                            }
                        }
                    });
                });
            });
        </script>

<?php include "includes/footer.php" ?>