<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InHouse</title>
    </head>

    <header>
        <nav class="navHeader">
            <a class="headerLogo" href="#">
                <img src="resources/logo.png" alt="inhouse">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <div class="headerLogin">
                <form action="login/login.php" method="post">
                    <input type="text" name="username" placeholder="user@email.com">
                    <input type="password" name="passwd" placeholder="password">
                    <button type="submit" name="login">Login</button>
                </form>
                <a class="headerSignup" href="signup.php">Signup</a>
                <form action="login/logout.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </nav>
    </header>

</html>