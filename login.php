<?php 
    $title = "Login";
?>
<?php include 'header.php';?>
<main>
    <div class="auth-forms">
        <div class="auth-forms-wrapper">
            <div class="auth-forms-content">
                <h3>Sign In</h3>
                <form method="post" action=".">
                    <div class="form-group">
                        <input type="text" name="username" id="id_username"  autofocus required placeholder="Username/Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password1" id="id_password1" required placeholder="Password" class="form-control">
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="btn btn-primary" />
                    </div>
                </form>
                <div>
                    <p>Not yet registered? <a href="register.php">Register</a>!</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php';?>