<?php
//Tinh tong tu 1 den 100
$i = 0;
$tong = 0;
while($i <= 100){
    $tong += $i;
    $i++;
    if($i > 50)
    break;
}
echo "i: $i <br>";
echo "Tong: $tong";
?>