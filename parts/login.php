<?php
session_start();
if (!isset($_SESSION['user'])):
?>
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="login.php">
            <div class="row">
                <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="YourUsername"
                    pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{4,20}$" required />
                </label>
            </div>
            <div class="row">
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" required />
                </label>
            </div>
            <div class="row">
                <div class="remember">
                    <div>
                        <input type="checkbox" name="remember" value="1"><span>Remember me</span>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="row">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="row">
            <p>Or via social</p>
            <div class="social-btn-2">
                <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                <a class="tw" href="#"><i class="ion-social-twitter"></i>Twitter</a>
            </div>
        </div>
    </div>
</div>

<!--signup form popup-->
<div class="login-wrapper" id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Sign up</h3>
        <form method="post" action="signup.php">
            <div class="row">
                <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="YourUsername"
                    pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{4,20}$" required />
                </label>
            </div>
            <div class="row">
                <label for="email-2">
                    Your email:
                    <input type="email" name="email" id="email-2" placeholder="your@email.com" required />
                </label>
            </div>
            <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" required />
                </label>
            </div>
            <div class="row">
                <label for="repassword-2">
                    Re-type Password:
                    <input type="password" name="confirm_password" id="repassword-2" required />
                </label>
            </div>
            <div class="row">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>
</div>
<!--end of login/signup popups-->
<?php endif; ?>
