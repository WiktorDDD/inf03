<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal ogłoszeniowy</title>
        <link rel="stylesheet" href="styl1.css">
    </head>
    <body>
        <header>
            <h1>Portal Ogłoszeniowy</h1>
        </header>

        <div id="lewy">
            <h2>Kategorie ogłoszeń</h2>
            <ol>
                <li>Książki</li>
                <li>Muzyka</li>
                <li>Filmy</li>
            </ol>
            <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
            <table>
                <tr>
                    <td>Liczba ogłoszeń</td>
                    <td>Cena ogłoszenia</td>
                    <td>Bonus</td>
                </tr>
                <tr>
                    <td>1 - 10</td>
                    <td>1 PLN</td>
                    <td rowspan="3">Subskrypcja newstellera to upust 0,20 PLN na ogłoszenie</td>
                </tr>
                <tr>
                    <td>11 - 50</td>
                    <td>0,80 PLN</td>
                </tr>
                <tr>
                    <td>51 i więcej</td>
                    <td>0,60 PLN</td>
                </tr>
            </table>
        </div>

        <div id="prawy">
            <h2>Ogłoszenia kategorii książki</h2>
            <?php
                // Skrypt #1
                $conn = new mysqli("localhost","root","","ogloszenia");

                $sql1 = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1;";
                $sql2 = "SELECT telefon FROM uzytkownik, ogloszenie WHERE uzytkownik.id = ogloszenie.uzytkownik_id";
                $result1 = $conn->query($sql1);
                $result2 = $conn->query($sql2);
                
                while($row1 = $result1 -> fetch_array()) {
                    $row2 = $result2 -> fetch_array();
                    echo "<b>".$row1["id"]." ".$row1["tytul"]."</b><br><br>".$row1["tresc"]."<br><br>";
                    echo "telefon kontaktowy: ".$row2["telefon"]."<br>";
                    echo "<br>";
                }
                
                $conn -> close();
            ?>
        </div>

        <footer>
            Portal ogłoszeniowy opracował: <a href="https://ee-informatyk.pl/" target="_blank" style="color: #fff;">EE-Informatyk.pl</a>
        </footer>
    </body>
</html>