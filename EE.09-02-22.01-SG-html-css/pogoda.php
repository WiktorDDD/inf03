<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <section id="banner-left">
        <img src="logo.png" alt="meteo">
    </section>
    <section id="banner-middle">
        <h1>Prognoza dla Wrocławia</h1>
    </section>
    <section id="banner-right">
        <p>maj, 2019 r.</p>
    </section>
    <section id="main">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <!-- Efekt działnia skryptu 1 -->
            <?php
            $idpolaczenia = mysqli_connect("localhost", "root", " ", "prognoza");
            $zapytanie = "SELECT * FROM pogoda WHERE miasta_id = 1"
            $wynik_zapytania = mysqli_query($idpolaczenia, $zapytanie);
            while($wiersz = mysqli_fetch_array($wynikzapytania)) {
                echo("<tr>"."<td>".$wiersz['data_prognozy']."</td>"."<td>"$wiersz['temperatura_noc']."</td>"."<td>".$wiersz['temperatura_dzien']."</td>"."<td>".$wiersz['opady']."</td>"."<td>".$wiersz['cisnienie']."</td>"."<th>");
            }
            ?>
        </table>
    </section>
    <section id="panel-left">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </section>
    <section id="panel-right">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="footer">
        <p>Stronę wykonał: 345345345</p>
    </section>
</body>
</html>