<h1><?= $title ?></h1>
<div class="form-container">
    <h2>Login</h2>
    <form action="/login" method="POST">
        <div class="form-group">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" name="email" required>
        </div>
        <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Login">
        </div>
    </form>
</div>
<div class="form-container">
    <h2>Registration</h2>
    <form action="/register" method="POST">
        <div class="form-group">
            <label for="register-name">Name</label>
            <input type="text" id="register-name" name="name" required>
        </div>
        <div class="form-group">
            <label for="register-email">Email</label>
            <input type="email" id="register-email" name="email" required>
        </div>
        <div class="form-group">
            <label for="register-password">Password</label>
            <input type="password" id="register-password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>
</div>
