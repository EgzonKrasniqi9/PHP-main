<?php 
include_once('config.php'); 

if (empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();
$users_data = $selectUsers->fetchAll();
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
  color: #ffffff !important;
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

/* --- PËRMBAJTJA KRYESORE --- */
main {
  background-color: rgba(255, 255, 255, 0.85);
  backdrop-filter: blur(4px);
  border-radius: 8px;
  margin-top: 80px;
  padding: 30px;
  box-shadow: 0 0 15px rgba(62, 47, 28, 0.2);
}

h1.h2 {
  color: #6b4e1f;
  border-bottom: 2px solid #b89b6c;
  padding-bottom: 10px;
  margin-bottom: 25px;
}

/* --- TABELA --- */
table {
  width: 100%;
  border-collapse: collapse;
  background-color: #f8f4ec;
  border: 1px solid #b89b6c;
  box-shadow: 0 0 10px rgba(62, 47, 28, 0.1);
}

th {
  background-color: #b89b6c;
  color: #fff;
  padding: 12px;
  text-align: left;
  font-weight: 600;
  letter-spacing: 0.5px;
}

td {
  padding: 10px;
  border-bottom: 1px solid #d8c9a1;
}

tr:nth-child(even) {
  background-color: #fdfaf4;
}

tr:hover {
  background-color: #f0e5d2;
}

a {
  color: #6b4e1f;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

a:hover {
  color: #b89b6c;
  text-decoration: underline;
}

/* --- PËR MOBILE --- */
@media (max-width: 768px) {
  .sidebar {
    display: none;
  }
  main {
    margin-top: 100px;
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
            <a class="nav-link active" href="dashboard.php">
              🏠 Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="profile.php">
              👤   Edit Profile
            </a>
          </li>

        

      
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              📚 Home
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Museum Dashboard</h1>
      </div>  

      <div>
        <?php 
        include_once('config.php');
        $getUsers = $conn->prepare("SELECT * FROM users");
        $getUsers->execute();
        $users = $getUsers->fetchAll();
        ?>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
          <?php foreach ($users as $user): ?>
            <tr> 
              <td><?= $user['id'] ?></td>
              <td><?= $user['username'] ?></td>
              <td><?= $user['name'] ?></td> 
              <td><?= $user['surname'] ?></td> 
              <td><?= $user['email'] ?></td>
              <td>
                <a href="profile.php?id=<?= $user['id'] ?>">✏️ Update</a> |
                <a href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');">🗑️ Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include("footer.php"); ?>
