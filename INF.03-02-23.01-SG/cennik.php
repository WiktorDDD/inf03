<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <section id="banner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </section>
    <section id="container-left">
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpg" alt="pokoje">
    </section>
    <section id="container-middle">
        <a href="cennik.php">CENNIK</a>
        <table>
            <!-- Efekt działania skryptu 1 -->
            <?php
            $id_poloczenia = mysqli_connect("localhost", "root", "","wynajem");
            $zapytanie = 'SELECT nazwa, id, cena FROM pokoje';
            $wynik_zapytania = mysqli_query($id_poloczenia,$zapytanie);
            
            while($rekord = mysqli_fetch_array($wynik_zapytania)) {
                echo '<tr>';
                    echo '<td>' . $rekord['id'] . '</td>';
                    echo '<td>' . $rekord['nazwa'] . '</td>';
                    echo '<td>' . $rekord['cena'] . '</td>';
                echo '</tr>';
            }
            mysqli_close($id_poloczenia);
            
            ?>
        </table>
    </section>
    <section id="container-right">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </section>
    <section id="footer">
        <p>Stronę opracował: 45</p>
    </section>
</body>

</html>