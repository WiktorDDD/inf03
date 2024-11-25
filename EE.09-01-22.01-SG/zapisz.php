<?php
$id_polaczenia = mysqli_connect("localhost", "root", "", "wedkowanie");
//Pobranie danych z folmularza
$imie = $_POST['first_name'];
$nazwisko = $_POST['last_name'];
$adres = $_POST['address'];
$zapytanie = 'INSERT INTO karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) VALUES ("' . $imie . '", "' . $nazwisko . '","' . $adres . '" , NULL, NULL)';
//wysyłanie zapytanie i wykonywania
mysqli_query($id_polaczenia, $zapytanie);
//rozłączenie z bazą
mysqli_close($id_polaczenia);
?>