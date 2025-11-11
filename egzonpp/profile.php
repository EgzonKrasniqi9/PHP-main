<?php 
session_start();
include_once('config.php');

if (empty($_SESSION['username'])) {
    header('Location: login.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=:id";
$selectUser = $conn->prepare($sql);
$selectUser->bindParam(':id', $id);
$selectUser->execute();

$user_data = $selectUser->fetch();
?>

<?php include("header.php"); ?>

<style>
/* --- PËRGJITHSHME --- */
body {
  background: url('images/museum-bg.jpg') no-repeat center center/cover;
  font-family: 'Playfair Display', serif;
  color: #3e2f1c;
  margin: 0;
  padding: 0;
}

/* --- NAVBAR --- */
.navbar {
  background-color: #3e2f1c !important;
  border-bottom: 3px solid #b89b6c;
}

.navbar-brand {
  color: #f3e6cc !important;
  font-size: 18px;
  font-weight: bold;
}

.nav-link {
  color: #e4cfa3 !important;
  transition: 0.3s;
}

.nav-link:hover {
  color: #fff !important;
  text-decoration: underline;
}

/* --- SIDEBAR --- */
.sidebar {
  background-color: rgba(62, 47, 28, 0.95);
  min-height: 100vh;
  padding-top: 30px;
  border-right: 2px solid #b89b6c;
}

.sidebar .nav-link {
  color: #d5c19e !important;
  font-weight: 500;
  padding: 12px 15px;
  display: block;
  transition: 0.3s;
}

.sidebar .nav-link:hover {
  background-color: #b89b6c;
  color: #fff !important;
  border-radius: 5px;
}

/* --- MAIN CONTENT --- */
main {
  background-color: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(4px);
  border-radius: 8px;
  margin-top: 80px;
  padding: 40px;
  box-shadow: 0 0 20px rgba(62, 47, 28, 0.2);
}

h1.h2 {
  color: #6b4e1f;
  border-bottom: 2px solid #b89b6c;
  padding-bottom: 10px;
  margin-bottom: 25px;
}

/* --- FORMA E PROFILIT --- */
.form-profile {
  background-color: #f8f4ec;
  padding: 30px 35px;
  border-radius: 10px;
  box-shadow: 0 0 15px rgba(62, 47, 28, 0.1);
  max-width: 500px;
}

.form-profile .form-control {
  border: 1px solid #b89b6c;
  border-radius: 6px;
  margin-bottom: 15px;
  padding: 10px;
  background-color: #fffdf7;
  font-size: 16px;
}

.form-profile .form-control:focus {
  border-color: #a3824b;
  box-shadow: 0 0 5px rgba(184, 155, 108, 0.5);
}

.form-profile span {
  display: block;
  color: #6b4e1f;
  font-weight: 600;
  margin-bottom: 5px;
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

/* --- PËR MOBILE --- */
@media (max-width: 768px) {
  .sidebar {
    display: none;
  }
  main {
    margin-top: 100px;
    padding: 20px;
  }
}
</style>

<nav class="navbar navbar-dark fixed-top p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
    🏛️ Welcome, <i><?php echo $_SESSION['username']; ?></i>
  </a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">🏠 Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="profile.php?id=<?= $user_data['id']; ?>">👤 Edit Profile</a>
          </li>
            <li class="nav-item">
            <a class="nav-link active" href="user.php">
              👤   
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">📚 Home</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Your Profile</h1>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form class="form-profile" action="update.php" method="post">
              <span>ID</span>
              <input type="number" class="form-control" name="id" value="<?= $user_data['id'] ?>" readonly>

              <span>Name</span>
              <input class="form-control" type="text" name="name" value="<?= $user_data['name'] ?>" required>

              <span>Surname</span>
              <input class="form-control" type="text" name="surname" value="<?= $user_data['surname'] ?>" required>

              <span>Username</span>
              <input class="form-control" type="text" name="username" value="<?= $user_data['username'] ?>" required>

              <span>Email</span>
              <input class="form-control" type="email" name="email" value="<?= $user_data['email'] ?>" required>

              <span>Password</span>
              <input class="form-control" type="password" name="password" placeholder="Enter new password" required>

              <button class="btn btn-lg btn-primary mt-3" type="submit" name="update">Update</button>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<?php include("footer.php"); ?>
