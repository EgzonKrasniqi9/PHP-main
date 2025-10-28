<?php
session_start();
// Include the database connection file (Make sure the path is correct)
require_once './models/database.php'; // This should set $db to a PDO instance

// Check if the form is submitted
if (isset($_POST['submit'])) {
    try {
    
      // Prepare the SQL query using the PDO connection
        $stmt = $db->prepare("SELECT * FROM users WHERE email =:email");

        $stmt->bindParam(":email",$_POST['email'],PDO::PARAM_STR);
        //SQL INJECTION 
        $stmt->execute();

        // Fetch the results
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Check if the result contains any rows
        if (count($result) > 0) {
          //qitu i bjen qe useri ekziston 
            //na vyn my kallzu qatij userit qe qeky email osht i regjistrum
            echo "1";  // Data found
        } else {
          //qitu i bjen qe useri nuk ekziston 
          $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
          $stmt = $db->prepare("INSERT INTO users (name,email,password) VALUES(:name,:email,:password)");
          $stmt->bindParam("name",$_POST['name'],PDO::PARAM_STR);
          $stmt->bindParam("email",$_POST['email'],PDO::PARAM_STR);
          $stmt->bindParam("password",$password,PDO::PARAM_STR);

          $stmt->execute();

          $_SESSION['logged_in'] = true;
        }
    } catch (PDOException $e) {
        // Handle query errors
        echo "Error: " . $e->getMessage();
    }
}
?>


<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="register.php" >

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your username</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="confirm_password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <div>

                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  </div>
                  <div>
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>

                  </div>
                </div>

                <div class="d-flex justify-content-center">
                  <button name="submit" type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="Login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
