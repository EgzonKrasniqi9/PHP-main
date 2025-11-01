<?php
// home.php
$title = "Muzeu Kombëtar - Faqja Kryesore";

// shembull i të dhënave për koleksionet
    $koleksione = [
        ["titull" => "Kurora elizabetes", "eliza.jpg" => "eliza.jpg", "pershkrim" => "ezgoni"],
        ["titull" => "Piktura Shqiptare", "foto" => "https://via.placeholder.com/300x200?text=Piktura+Shqiptare", "pershkrim" => "Koleksion me vepra nga artistë shqiptarë."],
        ["titull" => "Ekspozita Moderne", "foto" => "https://via.placeholder.com/300x200?text=Ekspozita+Moderne", "pershkrim" => "Art bashkëkohor dhe instalacione moderne."]
        
    ];
?>

<!DOCTYPE html>
<html lang="sq">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; 
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        nav {
            background-color: #495057;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
        }
        h1, h2 {
            color: #333;
        }
        .koleksione {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .koleksion {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
            overflow: hidden;
        }
        .koleksion img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .koleksion h3 {
            margin: 10px 0 5px;
        }
        .koleksion p {
            padding: 0 10px 15px;
            color: #555;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Muzeu Kombëtar</h1>
    <p>Mirë se vini në muzeun që ruan historinë dhe kulturën tonë!</p>
</header>

<nav>
    <a href="#rreth">Rreth Nesh</a>
    <a href="#koleksione">Koleksione</a>
    <a href="#kontakt">Kontakt</a>
</nav>

<div class="container">
    <section id="rreth">
        <h2>Rreth Muzeut</h2>
        <p>
            Muzeu Kombëtar është themeluar për të ruajtur dhe promovuar trashëgiminë historike dhe kulturore shqiptare.
            Këtu mund të eksploroni ekspozita të periudhave të ndryshme dhe të mësoni më shumë për historinë tonë.
        </p>
    </section>

    <hr>

 <section id="koleksione">
    <h2>Koleksionet Kryesore</h2>
    <div class="koleksione">
        <?php foreach ($koleksione as $k): ?>
            <div class="koleksion">
                <img src="" alt="<?= $k['titull'] ?>">
                <h3><?= $k['titull'] ?></h3>
                <p><?= $k['pershkrim'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

    <hr>

    <section id="kontakt">
        <h2>Kontakt</h2>
        <p>Për më shumë informacion, na vizitoni në adresën: <strong>Bulevardi Dëshmorët e Kombit, Tiranë</strong>.</p>
        <p>Ose na kontaktoni në email: <a href="mailto:info@muzeu.al">info@muzeu.al</a></p>
    </section>
</div>

<footer>
    &copy; <?= date("Y"); ?> Muzeu Kombëtar. Të gjitha të drejtat e rezervuara.
</footer>

</body>
</html>
