<?php
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <script>
        if (window.location.href.search("#signup") !== -1) {
            document.querySelector(".card__side--login").classList.toggle("card__side--login-rotate");
            document.querySelector(".card__side--signup").classList.toggle("card__side--signup-rotate");
        }
        else
        {
            document.querySelector(".card__side--signup").classList.toggle("card__side--signup-rotate");
            document.querySelector(".card__side--login").classList.toggle("card__side--login-rotate");
        }
    </script>
    <title>Welcome to FitFeminine!</title>
</head>

<body>
    <main>
        <section class="login__register">
            <div class="card">
                <!-- LOGIN FORM -->
                <div class="card__side card__side--login" id="login">
                    <div class="nav__title mb-lg">
                        <div class="nav__title--logo"><img src="img/icon3.png" alt="FitFeminine icon"></div>
                        <div class="nav__title--tag">FitFeminine</div>
                    </div>
                    <p class="card__heading mb-lg"><b>Login</b></p>
                    <p class="error"><?php echo $account->getError(Constants::$loginFailed); ?></p>
                    <form action="register.php" method="post" id="login_form" class="form mb-lg">
                        <div class="form__group">
                            <input type="text" class="form__input" name="username" placeholder='Type your username' id="logname" required autocomplete="off">
                            <label for="username" class="form__label">Username</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" name="password" placeholder="Enter your password" id="logpassword" required>
                            <label for="password" class="form__label">Password</label>
                        </div>
                        <div class="form__group">
                            <input type="checkbox" onclick="showPassword()" class="showPass"><span class="showPass--text">Show Password</span>
                        </div>
                        <div class="form__group">
                            <button class="btn btn--styled" name="loginButton">Login</button>
                        </div>
                    </form>
                    <div class="switch mb-sm">
                        <h4 class="switch__heading">Don't have an account yet?</h4>
                        <a class="btn--text">Sign Up here</a><br><br>
                        <a class="btn--text" href="home.php">Back to home page</a>
                    </div>
                </div>

                <!-- SIGNUP FORM -->

                <div class="card__side card__side--signup" id="signup">
                    <div class="nav__title mb-lg">
                        <div class="nav__title--logo"><img src="img/icon3.png" alt="FitFeminine icon"></div>
                        <div class="nav__title--tag">FitFeminine </div>
                    </div>
                    <p class="card__heading mb-sm"><b>signup</b></p>
                    <p class="error"><?php echo $account->getError(Constants::$usernameTaken); ?></p>
                    <p class="error"><?php echo $account->getError(Constants::$passwordInvalid); ?></p>
                    <form action="register.php#signup" method="post" id="signup_form" class="form mb-lg">
                        <div class="form__group">
                            <input type="text" class="form__input" name="username" placeholder='Type your username' id="name" required autocomplete="off">
                            <label for="username" class="form__label">Username</label>
                        </div>

                        <div class="form__group">
                            <input type="email" class="form__input" name="useremail" placeholder='Type your email' id="email" required autocomplete="off">
                            <label for="email" class="form__label">Email</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" name="password" placeholder="Your password" id="password" required>
                            <label for="password" class="form__label">Password</label>
                        </div>
                        <div class="form__group">
                            <button class="btn btn--styled" name="signupButton">Signup</button>
                            
                        </div>
                    </form>
                    <div class="switch mb-sm">
                        <h4 class="switch__heading">Already registered?</h4>
                        <a class="btn--text">Login here</a><br><br>
                        <a class="btn--text" href="home.php">Back to home page</a>

                    </div>
                </div>

            </div>
        </section>
    </main>
    <script>
        let btn_text = document.querySelectorAll(".btn--text");

        for (let index = 0; index < btn_text.length; index++) {
            const element = btn_text[index];
            element.addEventListener("click", function() {
                console.log("btn--text got clicked!");

                document.querySelector(".card__side--login").classList.toggle("card__side--login-rotate");
                document.querySelector(".card__side--signup").classList.toggle("card__side--signup-rotate");
            })
        }

        if (window.location.href.search("#signup") !== -1) {
            document.querySelector(".card__side--login").classList.toggle("card__side--login-rotate");
            document.querySelector(".card__side--signup").classList.toggle("card__side--signup-rotate");
        }

        function showPassword() {
            var x = document.getElementById("logpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>