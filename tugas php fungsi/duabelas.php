
<?php 
$string = "Rekayasa Perangkat Lunak";

echo strtoupper($string);
//outputnya adl ‘REKAYASA PERANGKAT LUNAK’
//seharusnya tidak menggunakan 'upper' tetapi menggunakan 'strtoupper'
?> <br>

	
<?php 
$string = "Rekayasa Perangkat Lunak";

echo strtolower($string);
//outputnya adl ‘rekayasa perangkat lunak’
//seharusnya tidak menggunakan 'lower' tetapi menggunakan 'strtolower' 
?> <br>


<?php 
$string = "rekayasa perangkat lunak";

echo ucwords($string);
//outputnya adl ‘Rekayasa Perangkat Lunak’
?> <br>


<?php 
$string = "rekayasa perangkat lunak";

echo ucfirst($string);
//outputnya adl ‘Rekayasa perangkat lunak’
?> <br>

