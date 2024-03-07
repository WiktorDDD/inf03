<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep dla uczniów</title>
</head>
<body>
    <section id="banner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </section>
    <section id="left-banner">
        <h2>taniej o 30%</h2>
        <ol>
            <!-- skrypt -->
            <?php
                $id_polaczenie = mysqli_connect("localhost", "root", "", "sklep");
                $id_zapytanie1 = 'SELECT nazwa FROM towary WHERE promocja = 1';
                $wynik_zapytania1 = mysqli_query($id_polaczenie, $id_zapytanie1);
                while($wiersz = mysqli_fetch_array($wynik_zapytania1)){
                    echo("<li>".$wiersz['nazwa']);
                    echo'';
                }
            ?>
        </ol>
    </section>
    <section id="middle">
        <h2>Sprawdź cenę</h2>
        <form action="index.html" method="post">
            <select name="wares">
                <option value="1">Gumka do mazania</option>
                <option value="2">Cienkopis</option>
                <option value="3">Pisanki 60szt</option>
                <option value="4">Markery 60szt</option>
            </select>
            <input type="submit" value="Sprawdź">
        </form>
        <div>
            <!-- skrypt -->
        </div>
    </section>
    <section id="right-banner">
        <h2>Kontakt</h2>
        <p>
            <a href="bok@sklep.pl">bok@sklep.pl</a>
            <img src="promocja.png" alt="promocja">
        </p>
    </section>
    <section id="footer">
        <h4>autor strony : 413213123</h4>
    </section>

</body>
</html>