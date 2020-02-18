<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="Menu.php" method="GET">
    <center> <h1> PEMBAYARAN </h1></center>
    <p></p>

    <?php 
$makanan1 = "Nasi Goreng";
$makanan2 = "Lontong Mie";
$makanan3 = "Rujak";
$makanan4 = "Mie Tek Tek";
$makanan5 = "Bakso";

if($makanan1){
    echo "Harga = 15000"
};

else{
    if($makanan2){
        echo "Harga = 10000"
    };
else{
    if($makanan3){
        echo "Harga = 10000"
    };
else{
    if($makanan4){
        echo "Harga = 12500"
    };
else{
        echo "Harga = 10000"
    };}}}}

    $minuman1 = "Aneka jus";
    $minuman2 = "Est Teah";
    $minuman3 = "Est Buah";

    if($minuman1){
        echo "Harga = 8000"
    };
    else{
        if($minuman2){
            echo "Harga = 5000"
        };
    else{
        if($minuman3){
            echo "Harga = 7000"
        };
    }    
    }

    <h5> Silahkan Pilih Menu : </h5>

?>

<table>
<h6> Menu yang dibeli : </h6>
<h6> Total harga : </h6>
<h6> Yang dibayar : </h6>
<h6> Kembalian : </h6>

<h6> Terima kasih </h6>

</table>
       
 

</body>
</html>

