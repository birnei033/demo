<?php include "includes/connect.php" ?>
<header>
        <div class="container">
            <div class="title-wrapper">
                <span class="title">FesBook</span>
            </div>
            <div class="login-wrapper">
                <form action="/demo/user_logged_in.php" method="POST" class="login-form">
                    <input type="text" name="username" placeholder="User Name" class="textbox" required>
                    <input type="password" name="password" placeholder="Password" class="textbox" required>
                    <input type="submit" value="Submit" name="login-submit" class="btn">
                </form>
            </div>
        </div>
    </header>
    
    <div class="body container">