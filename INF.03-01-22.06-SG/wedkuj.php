<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wędkowanie</title>
	<link rel="stylesheet" type="text/css" href="styl_1.css">
</head>
<body>
	<section id="banner">
		<h1>Portal dla wędkarzy</h1>
	</section>
	<section id="content-left">
		<section id="left-one">
			<h3>Ryby zamieszkujące rzeki</h3>
			<ol>
				<!-- Efekt działania skryptu 1 -->
                <?php
                $id_poloczenie = mysqli_connect("localhost", "root", "", "wedkowanie");
                $zapytanie1 = 'SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1';
                $wynik_zapytania = mysqli_query($id_poloczenia,$zapytanie1);
                while($rekord = mysqli_fetch_array($wynik_zapytania)) {
                    echo '<tr>';
                    echo '<td>' . $rekord['id'] . '</td>';
                    echo '<td>' . $rekord['nazwa'] . '</td>';
                    echo '<td>' . $rekord['wystepowanie'] . '</td>';
                    echo '</tr>';
                }
                mysqli_close($id_poloczenia)


                ?>

			</ol>
		</section>
		<section id="left-two">
			<h3>Ryby drapieżne naszych wód</h3>
			<table>
				<tr>
					<th>L.p.</th>
					<th>Gatunek</th>
					<th>Występowanie</th>
				</tr>
				<!-- Efekt działania skryptu 2 -->
			</table>
		</section>
	</section>
	<section id="content-right">
		<img src="ryba1.jpg" alt="Sum">
		<a href="kwerendy.txt">Pobierz kwerendy</a>
	</section>
	<section id="footer">
		<p>Stronę wykonał: 238787456</p>
	</section>
</body>
</html>