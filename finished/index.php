<?php 

    include "header.php";
    include "navi-login.php";
?>
        <div class="left">
            <h1>Introduction Title</h1>
            <p>Some introduction paragraph, Some introduction paragraph Some introduction paragraphSome introduction paragraph
            Some introduction paragraph
            Some introduction paragraph.</p>
            <p>Some introduction paragraph, Some introduction paragraph Some introduction paragraphSome introduction paragraph
            Some introduction paragraph
            Some introduction paragraph.</p>
            <p>Some introduction paragraph, Some introduction paragraph Some introduction paragraphSome introduction paragraph
            Some introduction paragraph
            Some introduction paragraph.</p>
        </div>
        <div class="right">
            <div class="registration">
            <h1>Not Registered yet?</h1>
            <h2>Please fill the form below.</h2>
                <form action="/demo/reg_submit.php" method="post" class="registration-form">
                    <span>First Name</span>
                    <input  class="textbox" type="text" name="firstname">
                    <span>Last Name</span>
                    <input type="text"   class="textbox" name="lastname">
                    <span>User Name</span>
                    <input type="text"  class="textbox" name="username" required>
                    <span>Password</span>
                    <input type="password" class="textbox" name="password" required>
                    <span>Confirm Password</span>
                    <input type="password" class="textbox" name="confirm_password" required>
                    <input id="reg-submit" type="submit" name="reg-submit" value="Submit" class="btn">
                </form>
            </div>
        </div>



        <script>
            $(document).ready(function () {
                $('#reg-submit').click(function (e) { 
                    e.preventDefault();
                    var data = {
                        firstname: $('.registration-form input[name="firstname"]').val(),
                        lastname: $('.registration-form input[name="lastname"]').val(),
                        username: $('.registration-form input[name="username"]').val(),
                        password: $('.registration-form input[name="password"]').val(),
                        confirm_password: $('.registration-form input[name="confirm_password"]').val()
                    }
                    console.log(data);
                    
                  $.ajax({
                      type: "POST",
                      url: location.pathname+"reg_submit.php",
                      data: data,
                      dataType: "JSON",
                      success: function (response) {
                          console.log(response);
                          alert(response.response);
                          if (response.response === "success") {
                              location.href = "/demo/";
                          }
                      }
                  });
                    
                });
                
            });
        
        </script>
    <?php include "footer.php"; ?>