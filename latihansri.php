<form    methot="get" action="">
		Nama<br>
			<input type="text" name="nama"><br>
		Jenis kelamin<br>
		    <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
		    <input type="radio" name="jk" value="Perempuan">Perempuan<br>
		Tinggi badan<br>
			<input type="text" name="tb"><br>
		Berat badan <br>
				<input type="text" name="bb"><br>
				<input type="submit" name="submit" value="Hitung">
</form>
</body>
</html>

<?php

if (isset($_GET['submit'])) {
    
    $tb            = $_GET['tb']/100;
    $bb            = $_GET['bb'];
    $nama        = $_GET['nama'];
    $jk    = $_GET['jk'];

    $bmi        = $bb / ($tb * $tb);

    echo '<div class="hasil">';
    echo "<h3>Hasil perhitungan BMI</h3>";
    echo "Nama Anda: $nama<br>";
    echo "Jenis kelamin: $jk<br>";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "<hr>BMI Anda: ".number_format($bmi);
    echo "<h4>Kesimpulan:</h4>";

    if ($jk==Perempuan) {
    if($bmi < 15.5) {
    }elseif ($bmi < 18 ) {
        echo "Anda memiliki berat badan terlalu kurus";
    }elseif ($bmi = 25 ) {
        echo "Anda memiliki berat badan normal";
    }elseif ($bmi = 27 ) {
        echo "Anda mengalami kegemukan";
    }elseif ($bmi > 27 ) {
        echo "Anda mengalami Obesitas ";
    }
}

  if ($jk==Lakilaki) {
    if($bmi < 15.5) {
    }elseif ($bmi < 17 ) {
        echo "Anda memiliki berat badan terlalu kurus";
    }elseif ($bmi = 23 ) {
        echo "Anda memiliki berat badan normal";
    }elseif ($bmi = 27 ) {
        echo "Anda mengalami kegemukan";
    }elseif ($bmi > 27 ) {
        echo "Anda mengalami Obesitas ";
    }
}
}

?>