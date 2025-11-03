<?php include("header.php"); ?>

<style>
body {
  background: url('images/museum-bg.jpg') no-repeat center center/cover;
  font-family: 'Playfair Display', serif;
  color: #3e2f1c;
  margin: 0;
  padding: 0;
}

.signup {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(4px);
}

.form-signin {
  background-color: #f8f4ec;
  padding: 40px 50px;
  border-radius: 12px;
  box-shadow: 0 0 20px rgba(50, 40, 20, 0.2);
  width: 100%;
  max-width: 450px;
  text-align: center;
}

.form-signin h1 {
  margin-bottom: 25px;
  font-size: 26px;
  color: #6b4e1f;
  border-bottom: 2px solid #b89b6c;
  padding-bottom: 10px;
}

.form-control {
  width: 100%;
  padding: 12px 15px;
  margin-bottom: 18px;
  border: 1px solid #b89b6c;
  border-radius: 6px;
  font-size: 16px;
  background-color: #fffdf7;
}

.btn-primary {
  background-color: #b89b6c;
  border: none;
  color: #fff;
  padding: 10px 0;
  width: 100%;
  font-size: 18px;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}

.btn-primary:hover {
  background-color: #a3824b;
}

small {
  display: block;
  margin-top: 15px;
  font-size: 14px;
}

small a {
  color: #6b4e1f;
  text-decoration: underline;
}

.text-muted {
  color: #a89a84 !important;
  margin-top: 25px;
  font-size: 13px;
}
</style>

<div class="signup">
  <form class="form-signin" action="register.php" method="post">
    
    <h1>Create Your Museum Account</h1>

    <label for="name" class="sr-only">Name</label>
    <input type="text" id="name" class="form-control" placeholder="Name" name="name" required autofocus>

    <label for="surname" class="sr-only">Surname</label>
    <input type="text" id="surname" class="form-control" placeholder="Surname" name="surname" required>

    <label for="username" class="sr-only">Username</label>
    <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>

    <label for="email" class="sr-only">Email</label>
    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required>

    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>

    <small>Already have an account? <a href="login.php">Log In</a></small>

    <p class="mt-5 mb-3 text-muted">© 2025 Museum of Digital Culture</p>
  </form>
</div>

<?php include("footer.php"); ?>
