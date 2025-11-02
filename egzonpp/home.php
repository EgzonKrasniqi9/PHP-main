<?php
$title = "Muzeu Kombëtar - Faqja Kryesore";
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
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 25px 0;
        }
        nav {
            background-color: #495057;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .koleksione {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .koleksion {
            background: white;
            width: 280px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            padding-bottom: 15px;
        }
        .koleksion img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }
        .koleksion h3 {
            color: #007bff;
            margin: 10px 0 5px;
        }
        .koleksion p {
            color: #555;
            padding: 0 10px;
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
    
    <a href="dashboard.php">Dashbord</a>
    <a href="#rreth">Rreth Nesh</a>
    <a href="#koleksione">Koleksione</a>
    <a href="#kontakt">Kontakt</a>
</nav>

<div class="container">
    <section id="rreth">
        <h2>Rreth Muzeut</h2>
        <p>
            Muzeu Kombëtar është themeluar për të ruajtur dhe promovuar trashëgiminë historike dhe kulturore shqiptare.
            Vizitorët mund të shohin objekte të rralla, artefakte historike dhe ekspozita tematike.
        </p>
    </section>

    <hr>

    <section id="koleksione">
        <h2>Koleksionet Kryesore</h2>
        <div class="koleksione">
            <div class="koleksion">
                <img src="photo/eliza.jpg" alt="Koleksioni 1">
                <h3>Kurora e Elizabeth</h3>
                <p>Kurora që përdori Mbretëresha Elizabeth II në kurorëzimin e saj quhet St. Edward’s Crown (Kurora e Shën Eduardit).
Ajo u përdor më 2 qershor 1953, gjatë ceremonisë në Westminster Abbey në Londër.</p>
            </div>

            <div class="koleksion">
                <img src="photo/OIP.jpg" alt="Koleksioni 2" >
                <h3>Shpata e Napoleonit</h3>
                <p>Shpata ishte një armë ceremoniale, e cila u përdor nga Napoleon Bonaparti gjatë fushatave të tij ushtarake në fillim të shekullit XIX.
Nuk ishte një armë e zakonshme lufte — por një simbol i autoritetit dhe nderit ushtarak.</p>
            </div>

            <div class="koleksion">
                <img src="photo/skender.jpg" alt="Koleksioni 3">
                <h3>shpata e Skenderbeut</h3>
                <p>Shpata origjinale e Skënderbeut është një armë e gjatë dhe e rëndë, e punuar me çelik të lartë cilësor.

Pesha e saj është rreth 3 kilogramë, që tregon fuqinë fizike të madhe që kishte heroi për ta përdorur.

Tehu është i drejtë dhe i gjerë, me majë të mprehtë, tipike për armët e shekullit XV.

Doreza është e punuar me kujdes, e stolisur me argjend dhe ar, dhe ka në mes një mbishkrim latin.</p>
            </div>
        </div>
    </section>

    <hr>

    <section id="kontakt">
        <h2>Kontakt</h2>
        <p>Na gjeni në adresën: <strong>Bulevardi Dëshmorët e Kombit, Tiranë</strong>.</p>
        <p>Email: <a href="mailto:info@muzeu.al">info@muzeu.al</a></p>
    </section>
</div>

<footer>
    &copy; <?= date("Y"); ?> Muzeu Kombëtar. Të gjitha të drejtat e rezervuara.
</footer>

</body>
</html>
