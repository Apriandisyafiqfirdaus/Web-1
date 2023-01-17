<?php

$akhir=$_POST['nilai'];					

if 		($akhir >= 80)	{ $grade="A"; }
elseif 	($akhir >= 70)	{ $grade="B"; }
elseif 	($akhir >= 60)	{ $grade="C"; }
elseif 	($akhir >= 50)	{ $grade="D"; }
else 					{ $grade="E"; }

echo "Nilai Anda : $akhir <br>";
echo "Grade : $grade";
?>












<br><br>
<a href="index.php" style="text-decoration:none;"><font color=gold face=arial>KEMBALI KE AWAL</font></a>
</div>
<hr color=gold>