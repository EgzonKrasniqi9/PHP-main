<?php
// ====== Lista e veprave ======
$vepra = [
    ["Titulli" => "Mona Lisa", "Autori" => "Leonardo da Vinci", "Viti" => "1503"],
    ["Titulli" => "Vajtimi i Krishtit", "Autori" => "Michelangelo", "Viti" => "1498"],
    ["Titulli" => "Vajza me vath perle", "Autori" => "Johannes Vermeer", "Viti" => "1665"],
    ["Titulli" => "Nata me yje", "Autori" => "Vincent van Gogh", "Viti" => "1889"],
    ["Titulli" => "Darka e fundit", "Autori" => "Leonardo da Vinci", "Viti" => "1495"],
];

// ====== Hyrje simbolike ======
$mesazh = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"] ?? "";
    $pass = $_POST["pass"] ?? "";

    if ($user === "vizitor" && $pass === "muzeu123") {
        $mesazh = "Mirë se erdhe në Galerinë e Brendshme të Muzeut, $user!";
    } else {
        $mesazh = "⚠️ Kredencialet nuk janë të sakta. Provo përsëri.";
    }
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Muzeu i Artit Antik</title>
<style>
    body {
        background-color: #f8f1e5;
        font-family: 'Times New Roman', serif;
        color: #3b2f2f;
        margin: 0;
        padding: 0;
    }

    header {
        background: linear-gradient(to right, #6b4e31, #b8905d);
        color: #fffaf0;
        text-align: center;
        padding: 30px 0;
        border-bottom: 5px double #d4af37;
    }

    header h1 {
        font-size: 2.7em;
        letter-spacing: 2px;
    }

    .container {
        width: 85%;
        margin: 40px auto;
        background: #fffaf0;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        border: 2px solid #d4af37;
        border-radius: 10px;
    }

    h2 {
        color: #5a3e1b;
        border-bottom: 2px solid #d4af37;
        padding-bottom: 5px;
    }

    /* ====== Login Box ====== */
    .login-box {
        background: #f3e9d2;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        text-align: center;
    }

    input[type=text], input[type=password] {
        padding: 10px;
        width: 40%;
        margin: 5px;
        border: 1px solid #bfa86d;
        border-radius: 5px;
        font-family: inherit;
    }

    input[type=submit] {
        padding: 10px 20px;
        background: #6b4e31;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    input[type=submit]:hover {
        background: #8a6d47;
    }

    .message {
        margin-top: 10px;
        font-weight: bold;
    }

    /* ====== Tabela ====== */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #d4af37;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #e6d3a3;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f3e9d2;
    }

    /* ====== Galeria ====== */
    .gallery {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .gallery img {
        width: 200px;
        border: 3px solid #d4af37;
        border-radius: 8px;
        margin: 10px;
        transition: transform 0.3s;
    }

    .gallery img:hover {
        transform: scale(1.1);
    }

    .quote {
        font-style: italic;
        text-align: center;
        margin-top: 30px;
        color: #5a4633;
    }

    footer {
        text-align: center;
        padding: 15px;
        background: #6b4e31;
        color: #fffaf0;
        border-top: 5px double #d4af37;
        margin-top: 50px;
    }
</style>
</head>
<body>
    <header>
        <h1>Muzeu i Artit Antik</h1>
        <p>Një udhëtim përmes kohës dhe bukurisë</p>
    </header>

   <div class="container">
    <h2>Fakte Interesante nga Arti Antik</h2>
    <div class="facts">
        <div class="fact">
            <h3>🎨 Pikturat e lashta</h3>
            <p>Pikturat më të hershme të njohura janë gjetur në shpellat e Francës dhe datojnë rreth 30,000 vite më parë. Ato tregonin histori të gjuetisë dhe jetës së përditshme.</p>
        </div>

        <div class="fact">
            <h3>🏺 Skulpturat greke</h3>
            <p>Skulptorët grekë besonin se bukuria përfaqësonte harmoninë hyjnore — ndaj statujat e tyre ishin perfekte në përmasa dhe të balancuara si simbole të shpirtit.</p>
        </div>

        <div class="fact">
            <h3>🖌️ Leonardo da Vinci</h3>
            <p>Përveç se piktor, Leonardo ishte edhe shkencëtar, shpikës dhe muzikant. Ai mbante gjithmonë një fletore ku vizatonte idetë e tij për robotë, ura, madje edhe aeroplanë.</p>
        </div>

        <div class="fact">
            <h3>⏳ Muret e Romës</h3>
            <p>Romakët i dekoronin muret e shtëpive me afreske shumëngjyrëshe, që ruheshin me kujdes nën shtresa gipsi — disa janë ende të paprekura sot.</p>
        </div>
    </div>

    <div class="quote">
        “Kultura është ajo që mbetet kur gjithçka tjetër harrohet.”  
        <br>– André Malraux
    </div>
</div>


        <h2>Galeria e Veprave</h2>
        <table>
            <tr><th>Titulli</th><th>Autori</th><th>Viti</th></tr>
            <?php foreach ($vepra as $v): ?>
            <tr>
                <td><?= htmlspecialchars($v["Titulli"]) ?></td>
                <td><?= htmlspecialchars($v["Autori"]) ?></td>
                <td><?= htmlspecialchars($v["Viti"]) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div class="quote">
            “Arti është mënyra se si shpirti flet përtej kohës.”  
            <br>– Anonim
        </div>

        <h2>Galeria Vizuale</h2>
        <div class="gallery">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Mona_Lisa.jpg" alt="Mona Lisa">
            <img src="photo/qika.jpg" alt="Lady with an Ermine">
            <img src="photo/vajza.jpg" alt="Vajza me vath perle">
            <img src="photo/aut.jpg" alt="Autoportreti">
        </div>
    </div>
    <div class="home-btn">
    <a href="home.php" class="btn-home">🏛️ Shko në Faqen Kryesore</a>
</div>
<style>
    .home-btn {
    text-align: center;
    margin: 30px 0;
}

.btn-home {
    display: inline-block;
    padding: 12px 25px;
    background: linear-gradient(to right, #b8905d, #6b4e31);
    color: #fffaf0;
    font-family: 'Times New Roman', serif;
    font-size: 1.1em;
    text-decoration: none;
    border-radius: 8px;
    border: 2px solid #d4af37;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.btn-home:hover {
    background: linear-gradient(to right, #d4af37, #7a5a38);
    transform: translateY(-3px);
    box-shadow: 0 6px 10px rgba(0,0,0,0.3);
}

</style>

    <footer>
        &copy; <?= date("Y") ?> Muzeu i Artit Antik | Krijuar me dashuri për kulturën
    </footer>
</body>
</html>
