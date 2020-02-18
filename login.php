<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
</head>
<body>


<center><h3> SELAMAT DATANG DIRESTORAN FAYA </h3> </center>
<p> Silahkan mengisi data </p>

<form action="Menu.php" method="GET">
<input type="text" name="nama_pemesan" placeholder="Nama_Pemesan">
<input type="text" name="nomer_meja" placeholder="Nomer_Meja">
<button type="submit"> submit </button>
</form>

<table>

<tr>
<td> Nama_Pemesan </td>  <td>:<?php echo $_GET['nama_pemesan'] ?? '' ?> </td>
</tr>
<tr>
<td> Nomer_Meja </td>  <td> : <?Php echo $_GET['nomer_meja'] ?? '' ?> </td>
</tr>
</table>

</body>
</html>