<?php
session_start();

if(isset($_POST["kullaniciadi"]))
{
    $kullaniciadi = $_POST["kullaniciadi"];
    $sifre = $_POST["sifre"];

    if($kullaniciadi=="admin" && $sifre=="abc123")
    {
        $_SESSION["user"] = $kullaniciadi;

        header("Location: panel.php");
    }
    else
    {
        echo "<script>alert('Kullanıcı adı veya şifre hatalı');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Panel Giriş</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

form{
    width:400px;
    margin:100px auto;
    background:white;
    padding:30px;
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
}

button{
    width:100%;
    padding:12px;
    background:#04AA6D;
    color:white;
    border:none;
}

</style>

</head>
<body>

<form action="panelgiris.php" method="POST">

    <h2>Panel Giriş</h2>

    <input type="text"
           name="kullaniciadi"
           placeholder="Kullanıcı Adı">

    <input type="password"
           name="sifre"
           placeholder="Şifre">

    <button type="submit">
        Giriş Yap
    </button>

</form>

</body>
</html>