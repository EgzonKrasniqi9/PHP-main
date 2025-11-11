<?php
session_start();

// Shembull i thjeshtë për testim
// Mund ta ndryshosh varësisht nga mënyra si bëhet login te projekti yt
// $_SESSION['roli'] = 'admin'; // ose 'user'

$title = "Muzeu Kombëtar - Faqja Kryesore";
?>

<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>

<!-- Fonta të mira për stil muzeal -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
:root {
  --ngjyra-primare: #4b3823;
  --ngjyra-sekundare: #b89b6c;
  --sfondi: #f8f4ee;
  --tekst: #2c2c2c;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: var(--sfondi);
  color: var(--tekst);
  line-height: 1.6;
}

/* HEADER */
header {
  background: linear-gradient(to bottom right, #4b3823, #6b512e);
  color: white;
  text-align: center;
  padding: 60px 20px;
  font-family: 'Playfair Display', serif;
  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

header h1 {
  font-size: 45px;
  letter-spacing: 2px;
  margin-bottom: 15px;
}

header p {
  font-size: 18px;
  max-width: 800px;
  margin: 0 auto;
  opacity: 0.95;
}

/* NAVIGIMI */
nav {
  background-color: var(--ngjyra-primare);
  text-align: center;
  padding: 15px 0;
  position: sticky;
  top: 0;
  z-index: 100;
}

nav a {
  color: #f8f4ee;
  text-decoration: none;
  margin: 0 20px;
  font-weight: 600;
  transition: 0.3s;
}

nav a:hover {
  color: var(--ngjyra-sekundare);
}

/* KONTEINERI */
.container {
  width: 90%;
  max-width: 1100px;
  margin: 50px auto;
}

/* SEKSIONET */
section h2 {
  font-family: 'Playfair Display', serif;
  font-size: 32px;
  color: var(--ngjyra-primare);
  text-align: center;
  margin-bottom: 20px;
  position: relative;
}

section h2::after {
  content: "";
  width: 80px;
  height: 3px;
  background-color: var(--ngjyra-sekundare);
  display: block;
  margin: 10px auto;
  border-radius: 2px;
}

section p {
  text-align: center;
  font-size: 17px;
  max-width: 800px;
  margin: 0 auto;
}

/* KOLEKSIONET */
.koleksione {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  margin-top: 40px;
}

.koleksion {
  background: white;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: 0.3s ease;
}

.koleksion:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.15);
}

.koleksion img {
  width: 100%;
  height: 210px;
  object-fit: cover;
}

.koleksion h3 {
  color: var(--ngjyra-primare);
  margin: 15px 0 5px;
  font-family: 'Playfair Display', serif;
}

.koleksion p {
  padding: 0 15px 20px;
  color: #555;
  font-size: 15px;
}

/* KONTAKTI */
#kontakt {
  background: linear-gradient(rgba(255,247,234,0.95), rgba(255,248,236,0.95));
  padding: 60px 30px;
  text-align: center;
  border-top: 4px solid var(--ngjyra-sekundare);
  border-bottom: 4px solid var(--ngjyra-sekundare);
  box-shadow: 0 0 20px rgba(0,0,0,0.15);
}

#kontakt h2 {
  color: var(--ngjyra-primare);
}

#kontakt a {
  color: var(--ngjyra-sekundare);
  text-decoration: none;
  font-weight: 600;
}

#kontakt a:hover {
  text-decoration: underline;
  color: #967743;
}

/* FOOTER */
footer {
  background: linear-gradient(to right, #3e2f1c, #5a4428, #3e2f1c);
  color: #e4d3ad;
  text-align: center;
  padding: 30px 20px;
  font-family: 'Playfair Display', serif;
  letter-spacing: 0.5px;
  border-top: 4px solid var(--ngjyra-sekundare);
  box-shadow: inset 0 5px 10px rgba(0,0,0,0.3);
}

.btn {
  display: inline-block;
  background-color: #b89b6c;
  color: #fff;
  text-decoration: none;
  padding: 10px 18px;
  border-radius: 5px;
  font-weight: 600;
  margin-top: 10px;
  transition: all 0.3s ease;
  font-family: 'Poppins', sans-serif;
}

.btn:hover {
  background-color: #967743;
  transform: translateY(-3px);
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

footer:hover {
  background: linear-gradient(to right, #4b3823, #6b512e, #4b3823);
  transition: 0.4s ease;
}
</style>
</head>

<body>

<header>
  <h1>Muzeu Kombëtar</h1>
  <p>Një udhëtim përmes kohës, ku çdo objekt ruan kujtimet e një epoke. Ejani të zbuloni trashëgiminë që na bashkon.</p>
</header>

<nav>
  <a href="user.php"><--</a>
  
  <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
      <a class="dash" href="dashboard.php">Dashboard</a>
  <?php endif; ?>

  <a href="#rreth">Rreth Nesh</a>
  <a href="#koleksione">Koleksione</a>
  <a href="#kontakt">Kontakt</a>
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container">

<section id="rreth">
  <h2>Rreth Muzeut</h2>
  <p>Muzeu Kombëtar ruan dhe promovon trashëgiminë historike shqiptare me objekte, artefakte dhe ekspozita që tregojnë rrugëtimin tonë kulturor.</p>
</section>

<section id="koleksione">
  <h2>Koleksionet Kryesore</h2>

  <div class="koleksione">
  
    <div class="koleksion">
      <img src="photo/eliza.jpg" alt="Kurora e Elizabeth">
      <h3>Kurora e Elizabeth</h3>
      <p>Kurora e Shën Eduardit e përdorur në ceremoninë e kurorëzimit të Mbretëreshës Elizabeth II më 2 qershor 1953.</p>
      <a href="#" class="btn" onclick="shkoArtikull('artikulli-elizabeth.php')">Lexo më shumë</a>

    </div>

    <div class="koleksion">
      <img src="photo/OIP.jpg" alt="Shpata e Napoleonit">
      <h3>Shpata e Napoleonit</h3>
      <p>Një armë ceremoniale që simbolizonte autoritetin dhe nderin ushtarak të Napoleon Bonapartit.</p>
      <a href="#" class="btn" onclick="shkoArtikull('artikulli-napoleon.php')">Lexo më shumë</a>

      
    </div>

    <div class="koleksion">
      <img src="photo/skender.jpg" alt="Shpata e Skënderbeut">
      <h3>Shpata e Skënderbeut</h3>
      <p>Një armë e rëndë dhe e punuar me mjeshtëri, simbol i forcës dhe guximit të Heroit tonë Kombëtar.</p>
      <a href="#" class="btn" onclick="shkoArtikull('artikulli-elizabeth.php')">Lexo më shumë</a>

    </div>

    <div class="koleksion">
      <img src="photo/lisa.jpg" alt="Piktura e Monalisës">
      <h3>Piktura e Monalisës</h3>
      <p>Pikturuar nga Leonardo da Vinci rreth viteve 1503–1506, një nga veprat më të njohura në historinë e artit botëror.</p>
     <a href="#" class="btn" onclick="shkoArtikull('artikulli-elizabeth.php')">Lexo më shumë</a>

    </div>

    <div class="koleksion">
      <img src="photo/nefertit.jpg" alt="Busti i Nefertitit">
      <h3>Busti i Nefertitit</h3>
      <p>Busti 3,300-vjeçar i Mbretëreshës egjiptiane Nefertiti, një kryevepër e artit të lashtë egjiptian me ngjyrat origjinale ende të ruajtura.</p>
     <a href="#" class="btn" onclick="shkoArtikull('artikulli-elizabeth.php')">Lexo më shumë</a>

    </div>

    <div class="koleksion">
      <img src="photo/tut.jpg" alt="Maska e Tutankhamunit">
      <h3>Maska e Tutankhamunit</h3>
      <p>Maska prej ari 24 karatësh e Faraonit Tutankhamun — një nga objektet më ikonike dhe të çmuara të Egjiptit të lashtë.</p>
     <a href="#" class="btn" onclick="shkoArtikull('artikulli-elizabeth.php')">Lexo më shumë</a>

    </div>
  </div>
</section>
<br><br>

<section id="kontakt">
  <h2>📞 Kontakt</h2>
  <p>Na gjeni në adresën: <strong>Bulevardi Dëshmorët e Kombit, Tiranë</strong></p>
  <p>Email: <a href="mailto:info@muzeu.al">info@muzeu.al</a></p>
</section>

</div>

<footer>
  &copy; <?= date("Y"); ?> Muzeu Kombëtar. Të gjitha të drejtat e rezervuara.
</footer>
<script>
function shkoArtikull(artikulli) {
    // PHP do e zëvendësojë këtë pjesë me rolin aktual
    const roli = "<?= isset($_SESSION['role']) ? $_SESSION['role'] : 'guest' ?>";
    
    if (roli === 'admin') {
        // Nëse është admin, e çon tek faqja e artikullit
        // window.location.href = artikulli;
        // window.location.href = "dashboard.php";
                alert("Ky artikull është i disponueshëm vetëm për Ty!  Vetem ndreqe edhe tbon okej");

    } else if (roli === 'user') {
        // Nëse është user, e çon tek dashboard.php
        alert("Ky artikull është i disponueshëm vetëm për administratorin!  Paguaj per te par me shum");
        
    } else {
        // Nëse s’është as user as admin (pa hyrje)
        alert("Ju lutem hyni për të parë artikujt!");
        window.location.href = "login.php";
    }
}
</script>

</body>
</html>
