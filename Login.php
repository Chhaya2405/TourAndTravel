<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <h1>Login and Sign Up to visit Ghumakkad</h1>
      
        <div id="login-form" class="form">
            <h2>Login</h2>
            <form action="register.php" method="post">
                <div class="input-container">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" ><br><br>
                </div>
                <div class="input-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"><br>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
            <p><h5>Don't have an account? <a href="#" id="signup-link">Sign Up</a></h5></p>
        </div>
		
        <div id="signup-form" class="form" style="display: none;">
            <h2>Sign Up</h2>
            <form action="register.php" method="post">
                <div class="input-container">
                    <label for="new-username">Enter Your name:</label>
                    <input type="text" id="name" name="name"><br>
                </div>
                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br>
                </div>
                <div class="input-container">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone"><br>
                </div>
				<div class="input-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"><br>
                </div>
                <div class="input-container">
                    <label for="password">Confirm Password:</label>
                    <input type="password" id="conpassword" name="conpassword"><br>
                </div>
                <button type="submit" name="signup">Sign Up</button><br><br>
            </form>
            <p><h5>Already have an account? <a href="#" id="login-link">Login</a></h5></p>
        </div>
    </div>

    <script>
        const loginForm = document.getElementById("login-form");
        const signupForm = document.getElementById("signup-form");
        const loginLink = document.getElementById("login-link");
        const signupLink = document.getElementById("signup-link");

        loginLink.addEventListener("click", () => {
            loginForm.style.display = "block";
            signupForm.style.display = "none";
        });

        signupLink.addEventListener("click", () => {
            loginForm.style.display = "none";
            signupForm.style.display = "block";
        });
    </script>
</body>
</html>
