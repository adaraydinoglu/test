<?php
include("baglanti.php");

if (isset($_POST["adsoyad"])) {
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    if (
        !empty($adsoyad) &&
        !empty($telefon) &&
        !empty($email) &&
        !empty($konu) &&
        !empty($mesaj)
    ) {
        $ekle = "INSERT INTO iletisim(adsoyad,telefon,email,konu,mesaj)
                 VALUES('$adsoyad','$telefon','$email','$konu','$mesaj')";

        if (mysqli_query($baglan, $ekle)) {
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

    <title>Adar AYDINOĞLU</title>

    <link rel="stylesheet" href="stil.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <section id="menu">

        <div id="logo">
            ABM
        </div>

        <nav>

            <a href="#banner">
                <i class="fa-solid fa-house ikon"></i>
                Anasayfa
            </a>

            <a href="#dersler">
                <i class="fa-solid fa-graduation-cap ikon"></i>
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
                <i class="fa-solid fa-circle-info ikon"></i>
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
                Adli Bilişim Mühendisliği 2. Sınıf Öğrencisi
            </p>

        </div>

    </section>

    <section id="hakkimizda">

        <h3 class="bolum-baslik">Hakkımızda</h3>

        <div id="container">

            <div class="hakkimizda-ust-grup">
                <div id="sol">
                    <h5 id="h5sol">
                        Adli Bilişim Mühendisliği 2. sınıf öğrencisi olarak
web güvenliği, siber güvenlik ve adli bilişim
alanlarında kendimi geliştirmeye odaklanıyorum.
                    </h5>
                </div>

                <div id="sag">
                    <span>A</span>
                    <p id="psag">
                        Adli Bilişim Mühendisliği 2. sınıf öğrencisiyim.
Siber güvenlik alanında hem savunma hem de saldırı
perspektiflerini anlayarak kendimi geliştirmeye
odaklanıyorum.
                    </p>
                </div>
            </div>

            <img src="ben.jpg" alt="Adar Aydınoğlu" class="profil-foto">

            <p id="pson">

SIEM sistemleri üzerinden log analizi,
tehdit avcılığı ve güvenlik olaylarının
tespit süreçleri üzerine çalışırken;
aynı zamanda saldırı tekniklerinin çalışma mantığını,
saldırı simülasyonlarını ve web güvenliği
zafiyetlerini araştırıyorum.

OWASP Top 10 kapsamındaki açıklıkları,
XSS ve SQL Injection gibi zafiyetlerin
çalışma mantığını uygulamalı laboratuvar
ortamlarında analiz ediyorum.

Teorik bilgimi laboratuvar çalışmaları,
CTF etkinlikleri ve çeşitli projelerle
destekleyerek güncel tehditleri takip ediyor,
hem savunma hem de saldırı teknikleri
konusunda yetkinliklerimi geliştirmeye
odaklanıyorum.

</p>

        </div>

    </section>

    <section id="dersler">

        <h3 class="bolum-baslik">Dersler</h3>

        <div class="kartlar">

            <div class="kart">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500" alt="Ders Görseli">
                <h4>İnternet Ve E-Ticaret Dersi</h4>
                <p class="kart-alt-baslik">İnternet Üzerinden Saldırı Ve Savunmaları İnceler.</p>
            </div>

            <div class="kart">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500" alt="Ders Görseli">
                <h4>Bilgisayar Ağları</h4>
                <p class="kart-alt-baslik">İnternet Üzerinden Saldırı Ve Savunmaları İnceler.</p>
            </div>

            <div class="kart">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500" alt="Ders Görseli">
                <h4>İşletim Sistemleri</h4>
                <p class="kart-alt-baslik">İnternet Üzerinden Saldırı Ve Savunmaları İnceler.</p>
            </div>

        </div>

    </section>


    <section id="personel">

        <h3 class="bolum-baslik">Akademik Personel</h3>

        <div class="kartlar">

            <div class="kart">
                <img
                    src="https://apiabs.firat.edu.tr/images/userProfilePicture/9ef72b27-af89-446d-929f-99723806eee9.jpeg">
                <h4>Prof. Dr. Şengül Doğan</h4>
                <p>Bölüm Başkanı</p>
            </div>

            <div class="kart">
                <img
                    src="https://apiabs.firat.edu.tr/images/userProfilePicture/a1d1a43d-d238-4b31-953f-62d5c5a44151.jpg">
                <h4>İlhan Fırat Kılınçer</h4>
                <p>Dr. Öğretim Üyesi</p>
            </div>

            <div class="kart">
                <img
                    src="https://apiabs.firat.edu.tr/images/userProfilePicture/7027d538-90e1-4c82-9167-f700123ad881.JPG">
                <h4>Erhan Akbal</h4>
                <p>Doç. Dr.</p>
            </div>

        </div>

    </section>

    <section id="iletisim">

        <h3 class="bolum-baslik-iletisim">İletişim</h3>

        <div class="iletisim-kapsayici">

            <div class="iletisim-cam-kutu">

                <div class="iletisim-sol">
                    <form action="index.php" method="POST">
                        <input type="text" name="adsoyad" placeholder="Ad Soyad" required class="form-kontrol">

                        <input type="text" name="telefon" placeholder="Telefon Numarası" required class="form-kontrol">

                        <input type="email" name="email" placeholder="E-Mail Adresi" required class="form-kontrol">

                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-kontrol">

                        <textarea name="mesaj" rows="5" placeholder="Mesajınızı yazınız" required
                            class="form-kontrol"></textarea>

                        <input type="submit" value="Gönder" id="gonder">
                    </form>
                </div>

                <div class="iletisim-sag">
                    <h3>Adres:</h3>
                    <p>Alparslan Mah.</p>
                    <p>232323 Sok. No: 45/10</p>
                    <p>Elazığ</p>
                </div>

            </div>

        </div>

        <footer>

            <p>2026 Adar AYDINOĞLU</p>

            <div class="sosyal">
                <span class="parantez-ikon">[ <i class="fa-brands fa-linkedin-in"></i> ]</span>
                <span class="parantez-ikon">[ <i class="fa-solid fa-graduation-cap"></i> ]</span>
                <span class="parantez-ikon">[ <i class="fa-brands fa-google"></i> ]</span>
            </div>

        </footer>

        <a href="#menu" id="up">
            <i class="fa-solid fa-arrow-up"></i>
        </a>

    </section>

</body>


</html>