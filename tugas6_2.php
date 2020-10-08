<?php
$h_jambu = 15000;
$h_dus = 2000;
$j_dus = 6;
$j_jambu = 5*$j_dus;
$t_penjualan = ($h_jambu * $j_jambu)+($h_dus*$j_dus);


echo "==============================================";
echo "<br>Harga Jambu = Rp $h_jambu /Kg";
echo "<br>Harga Kardus = Rp $h_dus /pcs";
echo "<br>Total Penjualan (Dus dan Jambu) = Rp ".$t_penjualan;
echo "<br>==============================================";



?>