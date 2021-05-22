<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed:top">
        <div class="container-fluid">
            <!--a class="navbar-brand" href="#">Navbar</a-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Menü">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ozgecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IlgiAlanlarim.html">ilgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim3.html">İletişim</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"> Giriş Yap
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--NAVBAR BITTI-->



    <!----LOGIN EKRANI-->
    <div class="loginDiv">
        <br><h2>Giriş Yap</h2><br>
    </div>

    <div class="loginDiv2">
        <form action="bilgileriniz.php" method="POST">

            <div class="loginEleman">
                <label for="kullanaci">Emailiniz :</label>
                <input type="text" name="kullanici" id="kullanici" placeholder="Kullanıcı mailinizi giriniz." required>
            </div>
            <br>

            <div class="loginEleman">
                <label for="sifre">Şifreniz  :</label>
                <input type="password" name="sifre" id="sifre" placeholder="Şifrenizi giriniz" required>
            </div>

            <br> <br>
            <button class="buton1" name="girisbuton" id="girisbuton">Giriş Yap</button>
        </form>

    </div>

 
   
    <footer class="loginFooter">Web Teknolojileri Proje Ödevi-Eda Eren</footer>

    <!----js bootstrap------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>


</body>



</html>