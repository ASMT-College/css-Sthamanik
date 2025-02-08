<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-top">
                <a href="./signup.php" class="signup-link">Signup</a>
            </div>
            <div class="nav-main">
                <div class="logo-container">
                    <a href="#">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook Logo" class="logo">
                    </a>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Posts</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="login-container">
        <form class="login-form">
            <h2>Login to Facebook</h2>
            <input type="email" placeholder="Email or Phone" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Log In</button>
            <a href="#" class="forgot-password">Forgotten password?</a>
        </form>
        <hr>
        <a href='./signup.php' class="create-account">Create New Account</a>
    </div>

    <footer>
        Copyright &copy; project
        <span id="myYear">
            <?= date("Y") ?>
        </span>
    </footer>
</body>
</html>
