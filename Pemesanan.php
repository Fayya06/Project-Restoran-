<?php
include 'Menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
</head>
<body>
    <table>
    <tr>
    </tr>
        <td> Makanan yang dipesan </td>
        <td> : </td>
        <td><input type="text" name="Makanan pesanan"></td>
    <tr>
    </tr>
        <td> Jumlah Makanan </td>
        <td> : </td>
        <td><input type="number" name="Jumlah Makanan"></td>
    <tr>
    </tr>        
        <td> Waktu Pesan </td>
        <td> : </td>
        <td><input type="time" value="<?php echo date ("h:i:s"); ?>"></td>
    <tr>
    </tr>
        <td> Keterangan </td>
        <td> : </td>
        <td><textarea class="text" name="Keterangan"></textarea> </td>
    <tr>
    </tr>
        <button name="sub" class="btn"> Submit </button>
        
    </table>

</body>
</html>
