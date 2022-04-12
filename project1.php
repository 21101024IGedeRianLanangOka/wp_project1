<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>21101024_I Gede Rian Lanang Oka</title>
</head>
<body>
	<form method="post">
    <h4>Konversi Suhu</h4>
   	konversi:<br>
    <input type="radio" name="konversi" value="fahrenhait" >Celcius ke Fahrenhait</input>
    <input type="radio" name="konversi" value="celcius" >Fahrenhait ke celcius</input>
    <br><br> 
   
    Nilai Suhu<br>
    <input type="text"  name="suhu"><br><br>
    <input type="submit" name="submit" value="CONVERSI" >
    </form>

<?php
    if(isset($_POST["submit"])){
        $suhu=$_POST['suhu'];
        $konversi=$_POST['konversi'];

    if($konversi=="fahrenhait"){
        $hasil=(9/5)*$suhu+32;
            echo "Hasil Konversi :<br>°F = (9/5) x °C + 32<br>°F = (9/5) x $suhu + 32<br>°F = $hasil";
    }else if($konversi=="celcius"){
    	$hasil1=(5/9)*($suhu-32);
    		echo "Hasil Konversi :<br>°C = (9/5) x (°F - 32)<br>°C = (9/5) x ($suhu - 32)<br>°C = $hasil1";
    }else {
            echo "Piih dulu konversinya";
         }
	 }
?> 
</body>
</html>