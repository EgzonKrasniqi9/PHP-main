<?php
session_start();
include_once("config.php");

if (empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = :id";
$selectProduct = $conn->prepare($sql);
$selectProduct->bindParam(":id", $id);
$selectProduct->execute();
$product_data = $selectProduct->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Product - Muzeu Kombëtar</title>

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  background-color: #f9f7f3;
  font-family: 'Poppins', sans-serif;
}

.navbar {
  background: linear-gradient(90deg, #4b3823, #6b512e);
}

.navbar .navbar-brand i {
  color: #f1d9b8;
}

.navbar a.nav-link {
  color: #f1d9b8 !important;
  font-weight: 500;
}

.navbar a.nav-link:hover {
  color: #dcb573 !important;
  transition: 0.3s ease;
}

/* Sidebar */
.sidebar {
  min-height: 100vh;
  background: #f4efe6;
  border-right: 1px solid #e0d5c3;
  box-shadow: 2px 0 8px rgba(0,0,0,0.05);
}

.sidebar a.nav-link {
  color: #4b3823;
  font-weight: 500;
  padding: 10px 15px;
  margin: 5px 0;
  border-radius: 8px;
}

.sidebar a.nav-link:hover, 
.sidebar a.nav-link.active {
  background-color: #b89b6c;
  color: white !important;
  transition: 0.3s ease;
}

/* Main form style */
main {
  padding-top: 40px;
}

.form-profile {
  background-color: #fff;
  padding: 35px;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
}

.form-profile:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.form-profile input {
  border-radius: 8px;
  border: 1px solid #ddd;
  transition: all 0.3s ease;
}

.form-profile input:focus {
  border-color: #b89b6c;
  box-shadow: 0 0 0 0.2rem rgba(184,155,108,0.25);
}

.btn-primary {
  background-color: #b89b6c;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  padding: 10px 20px;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #967743;
  transform: translateY(-2px);
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

h1.h2 {
  color: #4b3823;
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  letter-spacing: 0.5px;
}
</style>
</head>

<body>
  

<!-- Navbar -->
<nav class="navbar navbar-dark fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
      Hello, <i><?php echo htmlspecialchars($_SESSION['username']); ?></i>
    </a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Sign out</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar pt-5">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="Dashboard.php">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="productDashboard.php">
              Product Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php?id=<?= $_SESSION['user_id'] ?? ''; ?>">
              Edit Profile
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5">
      <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h1 class="h2">✏️ Përditëso Produktin</h1>
      </div>

      <div class="container mt-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form class="form-profile" action="updateProduct.php" method="post">
              <input type="hidden" name="id" value="<?= htmlspecialchars($product_data['id']) ?>">

              <label class="text-muted mt-2">ID</label>
              <input type="number" class="form-control" value="<?= htmlspecialchars($product_data['id']) ?>" readonly>

              <label class="text-muted mt-3">Titulli</label>
              <input class="form-control" type="text" name="title" value="<?= htmlspecialchars($product_data['title']) ?>" required>

              <label class="text-muted mt-3">Përshkrimi</label>
              <textarea class="form-control" name="description" rows="3" required><?= htmlspecialchars($product_data['description']) ?></textarea>

              <label class="text-muted mt-3">Sasia</label>
              <input class="form-control" type="number" name="quantity" value="<?= htmlspecialchars($product_data['quantity']) ?>" required>

              <label class="text-muted mt-3">Çmimi (€)</label>
              <input class="form-control" type="number" step="0.01" name="price" value="<?= htmlspecialchars($product_data['price'] / 100) ?>" required>

              <div class="text-center mt-4">
                <button class="btn btn-primary btn-lg" type="submit" name="update">Përditëso Produktin</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
