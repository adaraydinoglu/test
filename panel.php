<?php

session_start();

if ($_SESSION["user"] == "") {
    echo "
    <script>
    window.location.href='cikis.php';
    </script>
    ";
}

include "baglanti.php";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Yönetim Paneli</title>

<style>

#subat{
    font-family:Arial;
    border-collapse:collapse;
    width:100%;
}

#subat td,
#subat th{
    border:1px solid #ddd;
    padding:8px;
}

#subat tr:nth-child(even){
    background:#f2f2f2;
}

#subat tr:hover{
    background:#ddd;
}

#subat th{
    padding-top:12px;
    padding-bottom:12px;
    text-align:left;
    background:#04AA6D;
    color:white;
}

</style>

</head>
<body>

<h2>Gelen Mesajlar</h2>
    <form method="GET">

    <input type="text"
           name="ara"
           placeholder="Mesaj Ara">

    <button type="submit">
        Ara
    </button>

</form>

<br>

<table id="subat">

<tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
</tr>

<?php
if(isset($_GET["ara"]))
{
    $ara = $_GET["ara"];

    $sec = "SELECT * FROM iletisim
            WHERE adsoyad LIKE '%$ara%'
            OR konu LIKE '%$ara%'
            OR mesaj LIKE '%$ara%'";
}
else
{
    $sec = "SELECT * FROM iletisim";
}

$sonuc = mysqli_query($baglan,$sec);

while ($cek = mysqli_fetch_assoc($sonuc)) { ?>

<tr>
    <td><?php echo $cek["adsoyad"]; ?></td>
    <td><?php echo $cek["telefon"]; ?></td>
    <td><?php echo $cek["email"]; ?></td>
    <td><?php echo $cek["konu"]; ?></td>
    <td><?php echo $cek["mesaj"]; ?></td>
</tr>

<?php }
?>

</table>

</body>
</html>