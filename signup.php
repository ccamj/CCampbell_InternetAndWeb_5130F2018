<html>
    <link rel="stylesheet" href="style/style.css">
    <?php
        require "header.php";
    ?>

    <main>
        <div class="mainContent">
            <section class="secDefault">
                <h1>Signup</h1>
                <form class="formSignup" action="login/signup_action.php" method="post">
                    <label for="lblName">Preferred Name:</label>
                    <input type="text" name="name" placeholder="John Smith">

                    <label for="lblName">Email (Used for login):</label>
                    <input type="text" name="email" placeholder="user@email.com">

                    <label for="lblName">Password:</label>
                    <input type="password" name="passwd" placeholder="Password">

                    <label for="lblName">Re-Enter Password:</label>
                    <input type="password" name="passwd2" placeholder="Re-Enter Password">

                    <button type="submit" name="submit">Create Account</button>
                </form>
            </section>
        </div>
    </main>
</html>