<?php
include("baglanti.php");

if(isset($_POST["adsoyad"]))
{
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $email   = $_POST["email"];
    $konu    = $_POST["konu"];
    $mesaj   = $_POST["mesaj"];

    if(
        !empty($adsoyad) &&
        !empty($telefon) &&
        !empty($email) &&
        !empty($konu) &&
        !empty($mesaj)
    )
    {
        $ekle = "INSERT INTO iletisim(adsoyad,telefon,email,konu,mesaj)
                 VALUES('$adsoyad','$telefon','$email','$konu','$mesaj')";

        if(mysqli_query($baglan,$ekle))
        {
            echo "<script>alert('Mesajınız başarıyla gönderildi.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Adli Bilişim Mühendisliği</title>

<link rel="stylesheet" href="stil.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<section id="menu">

    <div id="logo">
        ABM
    </div>

    <nav>

        <nav>

    <a href="#banner">
        <i class="fa-regular fa-house ikon"></i>
        Anasayfa
    </a>

    <a href="#dersler">
        <i class="fa-solid fa-user-graduate ikon"></i>
        Dersler
    </a>

    <a href="#personel">
        <i class="fa-solid fa-user-plus ikon"></i>
        Akademik Personel
    </a>

    <a href="#hakkimizda">
        <i class="fa-solid fa-address-card ikon"></i>
        Hakkımızda
    </a>

    <a href="#iletisim">
        <i class="fa-solid fa-info ikon"></i>
        İletişim
    </a>

</nav>

</section>

<section id="banner">

    <div id="black"></div>

    <div id="icerik">

        <h1>Adli Bilişim Mühendisliği</h1>

        <hr>

        <p>
            Adli bilişim mühendisliği; dijital delillerin elde edilmesi,
            incelenmesi ve raporlanması süreçlerinde görev alan önemli
            bir mühendislik alanıdır.
        </p>

    </div>

</section>

<section id="hakkimizda">

    <h3>Hakkımızda</h3>

    <div id="container">

        <div id="sol">

            <h5 id="h5sol">
                Adli Bilişim Mühendisliği Bölümü
            </h5>

        </div>

        <div id="sag">

            <span>A</span>

            <p id="psag">
                dli bilişim mühendisliği günümüzde dijital suçların
                araştırılması, delillerin korunması ve analiz edilmesi
                süreçlerinde önemli görevler üstlenmektedir.
                Öğrencilerimiz web güvenliği, ağ güvenliği ve
                dijital delil inceleme alanlarında eğitim almaktadır.
            </p>

        </div>

        <img
            src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=1200"
            alt="Adli Bilişim"
            class="img-fluid">

        <p id="pson">
            Bölümümüz öğrencilerine web güvenliği,
            ağ güvenliği, sayısal delil analizi ve
            sızma testleri gibi alanlarda uygulamalı
            eğitimler sunmaktadır.
        </p>

    </div>

</section>
<section id="dersler">

    <h3>Dersler</h3>

    <div class="kartlar">

        <div class="kart">
            <h4>Web Güvenliği</h4>
            <p>
                XSS, SQL Injection, CSRF ve güvenli kodlama teknikleri.
            </p>
        </div>

        <div class="kart">
            <h4>Ağ Güvenliği</h4>
            <p>
                Ağ izleme, IDS/IPS sistemleri ve saldırı tespiti.
            </p>
        </div>

        <div class="kart">
            <h4>Sayısal Delil Analizi</h4>
            <p>
                Disk imajı alma ve dijital delil inceleme süreçleri.
            </p>
        </div>

    </div>

</section>


<section id="personel">

    <h3>Akademik Personel</h3>

    <div class="kartlar">

        <div class="kart">
            <img src="https://picsum.photos/200/200?1">
            <h4>Dr. Ahmet Yılmaz</h4>
            <p>Bölüm Başkanı</p>
        </div>

        <div class="kart">
            <img src="https://picsum.photos/200/200?2">
            <h4>Doç. Ayşe Kaya</h4>
            <p>Adli Bilişim Uzmanı</p>
        </div>

        <div class="kart">
            <img src="https://picsum.photos/200/200?3">
            <h4>Dr. Mehmet Demir</h4>
            <p>Siber Güvenlik Uzmanı</p>
        </div>

    </div>

</section>
<section id="iletisim">

    <h3>İletişim</h3>

    <div class="iletisim-form">

        <form action="index.php" method="POST">

            <div class="sol-form">

                <input
                    type="text"
                    name="adsoyad"
                    placeholder="Ad Soyad"
                    required
                    class="form-kontrol">

                <input
                    type="text"
                    name="telefon"
                    placeholder="Telefon"
                    required
                    class="form-kontrol">

            </div>

            <div class="sag-form">

                <input
                    type="email"
                    name="email"
                    placeholder="E-Mail"
                    required
                    class="form-kontrol">

                <input
                    type="text"
                    name="konu"
                    placeholder="Konu"
                    required
                    class="form-kontrol">

            </div>

            <textarea
                name="mesaj"
                rows="8"
                placeholder="Mesajınızı Yazınız"
                required
                class="form-kontrol"></textarea>

            <input
                type="submit"
                value="Gönder"
                id="gonder">

        </form>

    </div>

    <footer>

        <p>© 2026 Adli Bilişim Mühendisliği</p>

        <div class="sosyal">

            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>

        </div>

    </footer>

    <a href="#menu" id="up">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

</section>

</body>
</html>