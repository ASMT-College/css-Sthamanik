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
                <a href="./" class="login-link">Login</a>
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
    
    <div class="signup-container">
        <form class="signup-form">
            <h2>Create a New Account</h2>
            <p>It's quick and easy.</p>
            <input type="text" placeholder="First name" required>
            <input type="text" placeholder="Last name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="New password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <footer>
        Copyright &copy; project
        <span id="myYear">
            <?= date("Y") ?>
        </span>
    </footer>
</body>
</html>
