<?php 
    $title = "Register";
?>
<?php include 'header.php';?>
<main>
    <div class="auth-forms">
        <div class="auth-forms-wrapper">
            <div class="auth-forms-content">
                <h3>Sign Up</h3>
                <form method="post" action=".">
                    <div class="form-group">
                        <input type="text" name="username" id="id_username"  autofocus required maxlength="150" placeholder="Username" class="form-control">
                        <p>Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.</p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="id_email"  required placeholder="Email Address" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <input type="password" name="password1" id="id_password1" required placeholder="Password" class="form-control">
                        <ul><li>Your password can&#39;t be too similar to your other personal information.</li><li>Your password must contain at least 8 characters.</li><li>Your password can&#39;t be a commonly used password.</li><li>Your password can&#39;t be entirely numeric.</li></ul>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" id="id_password2" required placeholder="Confirm Password" class="form-control">
                        <p>Enter the same password as before, for verification.</p>
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="btn btn-primary" />
                    </div>
                </form>
                <div>
                    <p>Already a member? <a href="login.php">Log in</a>!</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php';?>