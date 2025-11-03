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
            background-color:   #e4c9a1;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #3e2f1c;
            color: white;
            text-align: center;
            padding: 25px 0;
        }
        nav {
            background-color: #3e2f1c;
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
            background-color: #3e2f1c;
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
    <p>Mirë se vini në Muzeun tonë!
Një udhëtim përmes kohës, ku çdo objekt ruan kujtimet e një <br> epoke dhe çdo sallë tregon një histori.
Që nga artefaktet e lashta e deri te ekspozitat bashkëkohore, <br> muzeu ynë është një urë midis të kaluarës, të tashmes dhe brezave që vijnë.
Ejani dhe zbuloni trashëgiminë që na bashkon – <br> një përvojë që frymëzon, mëson dhe ngjall respekt për historinë tonë të përbashkët.</p>
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
        <br><br>
        <div class="koleksione">
            <div class="koleksion">
                <img src="photo/lisa.jpg" alt="Koleksioni 1">
                <h3>Piktura e Monalises</h3>
                <p>E ka pikturuar Leonardo da Vinci rreth viteve 1503–1506, ndoshta duke e përmirësuar edhe më vonë.
                    Është pikturuar me bojë vaji mbi dru plepi (poplar wood) — jo në kanavacë si shumica e pikturave të tjera.</p>
            </div>

            <div class="koleksion">
                <img src="photo/nefertit.jpg" alt="Koleksioni 2" >
                <h3>Shpata e Napoleonit</h3>
                <p>📍 Muzeu: Neues Museum, Berlin, Gjermani <br>
                    💰 Vlera kulturore: e paçmueshme <br>
                    👑 Ky bust prej 3,300 vitesh paraqet mbretëreshën egjiptiane Nefertiti 
                    me ngjyrat origjinale ende të ruajtura. Është një nga veprat më të bukura
                     të artit të lashtë egjiptian.</p>
            </div>

            <div class="koleksion">
                <img src="photo/tut.jpg" alt="Koleksioni 3">
                <h3>shpata e Skenderbeut</h3>
                <p>📍 Muzeu: Egyptian Museum, Kajro <br>
                    👑 Maska e arit e faraonit Tutankhamun është një nga objektet më ikonike të Egjiptit të lashtë — e bërë nga ar 24 karatësh me gurë të çmuar. <br>a
                    💰 Vlera e saj kulturore: e pallogaritshme..</p>       
            </div>
        </div>
       
    </section> 

    <hr>

   <section id="kontakt">
  <h2>📞 Kontakt</h2>
  <p>Na gjeni në adresën: <strong>Bulevardi Dëshmorët e Kombit, Tiranë</strong>.</p>
  <p>Email: <a href="mailto:info@muzeu.al">info@muzeu.al</a></p>
</section>

<style>
/* --- Seksioni i Kontaktit me stil muzeal --- */
#kontakt {
  background: linear-gradient(rgba(255, 248, 236, 0.95), rgba(255, 247, 229, 0.95)),
              url('images/museum-texture.jpg') center/cover no-repeat;
  border-top: 4px solid #b89b6c;
  border-bottom: 4px solid #b89b6c;
  padding: 60px 30px;
  text-align: center;
  font-family: 'Playfair Display', serif;
  color: #3e2f1c;
  box-shadow: 0 0 20px rgba(62, 47, 28, 0.2);
}

#kontakt h2 {
  font-size: 34px;
  color: #6b4e1f;
  margin-bottom: 20px;
  letter-spacing: 1px;
  position: relative;
  display: inline-block;
}

#kontakt h2::after {
  content: "";
  display: block;
  width: 60%;
  margin: 10px auto 0;
  border-bottom: 3px solid #b89b6c;
}

#kontakt p {
  font-size: 18px;
  color: #3e2f1c;
  margin: 10px 0;
  line-height: 1.6;
}

#kontakt strong {
  color: #6b4e1f;
  font-weight: 700;
}

#kontakt a {
  color: #b89b6c;
  font-weight: bold;
  text-decoration: none;
  transition: 0.3s;
}

#kontakt a:hover {
  color: #8e6d3f;
  text-decoration: underline;
}

/* --- Efekt muzeal dekorativ --- */
#kontakt::before {
  content: "🏛️";
  display: block;
  font-size: 50px;
  color: #b89b6c;
  margin-bottom: 10px;
}

/* --- Responsive --- */
@media (max-width: 768px) {
  #kontakt {
    padding: 40px 20px;
  }

  #kontakt h2 {
    font-size: 28px;
  }

  #kontakt p {
    font-size: 16px;
  }
}
</style>

</div>

<footer>
  &copy; <?= date("Y"); ?> Muzeu Kombëtar. Të gjitha të drejtat e rezervuara.
</footer>

<style>
/* --- FOOTER me stil muzeal --- */
footer {
  background: linear-gradient(to right, #3e2f1c, #5a4428, #3e2f1c);
  color: #e4d3ad;
  text-align: center;
  padding: 30px 20px;
  font-family: 'Playfair Display', serif;
  font-size: 16px;
  letter-spacing: 0.5px;
  border-top: 4px solid #b89b6c;
  position: relative;
  overflow: hidden;
  box-shadow: inset 0 5px 10px rgba(0,0,0,0.3);
}

/* --- Efekt dekorativ --- */
footer::before {
  content: "⚜️";
  position: absolute;
  top: 10px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 22px;
  color: #b89b6c;
  opacity: 0.8;
}

footer::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 100%;
  background: linear-gradient(to right, #b89b6c, #d4b47a, #b89b6c);
}

/* --- Efekt i butë ndriçimi për tekstin --- */
footer span, footer {
  text-shadow: 0 0 6px rgba(184, 155, 108, 0.5);
}

/* --- Hover nëse dëshiron ta bësh klikues (opsional) --- */
footer:hover {
  background: linear-gradient(to right, #4b3823, #6b512e, #4b3823);
  transition: 0.4s ease;
}

/* --- Responsive --- */
@media (max-width: 768px) {
  footer {
    font-size: 14px;
    padding: 20px 10px;
  }
}
</style>


</body>
</html>
