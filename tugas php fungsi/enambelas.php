
<?php 
echo date("sekarang tanggal d – F – Y");
//output ‘sekarang tanggal 16-September–2019’
?> <br><br>

<?php
echo "sekarang tanggal " . date("d-F-Y");
//jika menggunakan code di atas hasil tidak sesuai. karena fungsi date hanya mengenali format d-F-Y.
?>


