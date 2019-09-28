<!DOCTYPE html>
<html
<head>
    <title></title>
</head>
<body>
    <h1>Ganjil Genap dan Bilangan Prima</h1>
</body>
</html>

<?php
$x="Sevia ";
$x.="Febriana";
echo $x. "<br>";
?>

<?php
echo"<br>";
for ($x=1; $x <=100 ; $x++) {
    if ($x%2) {
        $data = $x."Ganjil <br>";
    } else {
        $data = $x. " Genap <br>";
    }
    echo $data."<br>";
}
?>
<?php
$angka_awal = 1;
$angka_akhir = 100;
for($i=$angka_awal; $i <=$angka_akhir ; $i++) {
    $faktor = 0;
    for ($p= 1; $p <=$i ; $p++) {
        if ($i % $p == 0) {
            $faktor++;
        }
    }
    if ($faktor==2) {
        echo " Bilangan Prima". $i . "<br/>";
    }
}
?>                                                      
