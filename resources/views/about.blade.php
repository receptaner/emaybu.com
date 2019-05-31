@extends('layouts.master')
@section('title', 'Hakkımızda')
@section('content')

    <div style="background-color: #F7F7F7;">
        <div class="container">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-12 mt-5">
                    <h2 class="text-uppercase mt-5">Neden Emaybu ?</h2>
                    <hr style="        width: 5%;
        border-width: 5px;
        border-color: #000;" class="container my-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <img src="img/hakkimizda1.jpg" class="w-100 mb-3">
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <p style="font-weight: 100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                        hendrerit, orci id rhoncus cursus, libero elit euismod ante, a pellentesque lorem justo at enim.
                        Sed interdum nunc dolor, vitae facilisis tortor vestibulum eu. Duis eu est feugiat, dictum ante
                        eu, maximus libero. Proin vehicula, leo non interdum cursus, justo est viverra nisl, quis
                        consequat lorem urna at justo. Nam sit amet enim mi. Proin scelerisque eu ipsum vel accumsan.
                        Nulla facilisi. Praesent feugiat mi fringilla auctor bibendum. Sed ac pellentesque quam.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center mx-auto">
                <h2><i class="fas fa-tasks"></i></h2>
                <h3>
                    Misyonumuz
                </h3>
                <p>
                    Hizmet alanımızda, ilerleyen teknolojiyle birlikte bu hizmeti sürekli iyileştirmek ve
                    müşterilerimizin istediği sürede destek, bakım ve eğitim hizmetini vermek.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 text-center mx-auto">
                <h2><i class="fas fa-chess"></i></h2>
                <h3>
                    Vizyonumuz
                </h3>
                <p>
                    Müşterilerimizin ihtiyaç ve taleplerine, profesyonel bir ekip çalışmasına dayalı kaliteli ve
                    zamanında teslim garantisini veren bir hizmet sunmak.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 text-center mx-auto">
                <h2><i class="far fa-smile-beam"></i></h2>
                <h3>
                    Müşteri Memnuniyeti
                </h3>
                <p>
                    Kaliteli hizmetten asla ödün vermez
                    Beklenenden daha kaliteli hizmet ve proje yaratmaya çalışır
                    Müşteri memnuniyeti için bütün birikimini kullanır
                    Ticari ve mesleki etik değerlere inanır ve bu değerleri korur
                    Ekip çalışmasının ve işbirliğinin yararına inanır.
                </p>
            </div>
        </div>
    </div>

    <div style="background-color: #F7F7F7;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mt-5">Ekibimiz</h2>
                    <hr style="        width: 5%;
                border-width: 5px;
                border-color: #000;" class="container my-4">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-2 col-md-12 mx-auto">
                    <img src="img/user.png" class="w-100">
                    <h5 class="text-center mt-2">Ekip Adı</h5>
                    <p class="text-center mt-3">Pozisyonu</p>
                </div>
                <div class="col-lg-2 col-md-12 mx-auto">
                    <img src="img/user.png" class="w-100">
                    <h5 class="text-center mt-2">Ekip Adı</h5>
                    <p class="text-center mt-3">Pozisyonu</p>
                </div>
                <div class="col-lg-2 col-md-12 mx-auto">
                    <img src="img/user.png" class="w-100">
                    <h5 class="text-center mt-2">Ekip Adı</h5>
                    <p class="text-center mt-3">Pozisyonu</p>
                </div>
                <div class="col-lg-2 col-md-12 mx-auto">
                    <img src="img/user.png" class="w-100">
                    <h5 class="text-center mt-2">Ekip Adı</h5>
                    <p class="text-center mt-3">Pozisyonu</p>
                </div>
                <div class="col-lg-2 col-md-12 mx-auto">
                    <img src="img/user.png" class="w-100">
                    <h5 class="text-center mt-2">Ekip Adı</h5>
                    <p class="text-center mt-3">Pozisyonu</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid mt-3"
         style="background: linear-gradient(to top right, #2193b0 0%, #6dd5ed 100%); height: 200px;;">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="text-uppercase mt-5" style="color:white;">
                    Hazırsanız Başlayalım</p>
                    <button class="text-uppercase mt-2 buttton" type="button">Teklif İstiyorum</button>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-print-block" style="background-color:#353535;">
        <div class="row mx-auto">
            <div class="col-6 col-md mt-3">
                <h5 style="color:#fff;">Hakkımızda</h5>
                <p class="" style="color:#f8f8f8;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis venenatis felis. Nulla lobortis interdum nulla eu convallis. Duis et sagittis libero. Suspendisse
                </p>
            </div>
            <div class="col-6 col-md mt-3">
                <h5 style="color:#fff;">İletişim</h5>
                <ul class="list-unstyled text-small">
                    <li><p style="color:#f8f8f8;">Telefon : 05392458823</p></li>
                    <li><p style="color:#f8f8f8;">Adres : Yiğitler Mahallesi, 2. Sanayi Cd. no:208, 16300 Yıldırım/Bursa</p></li>
                    <li><p style="color:#f8f8f8;">E-Posta : info@emaybu.com</p></li>
                </ul>
            </div>
            <div class="col-6 col-md mt-3">
                <h5 style="color:#fff;">Sosyal Medya</h5>
                <ul class="list-unstyled text-small">
                    <li><a style="color:#f8f8f8;" href="#"><i class="fab fa-instagram"></i> İnstagram</a></li>
                    <li><a style="color:#f8f8f8;" href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a style="color:#f8f8f8;" href="#"><i class="fab fa-linkedin"></i> Linkledin</a></li>
                    <li><a style="color:#f8f8f8;" href="#"><i class="fab fa-twitter-square"></i> Tiwitter</a></li>
                </ul>
            </div>
            <div class="col-6 col-md mt-3">
                <h5 style="color:#fff;">Menü</h5>
                <ul class="list-unstyled text-small">
                    <li><a style="color:#f8f8f8;" href="index.html">Anasayfa</a></li>
                    <li><a style="color:#f8f8f8;" href="about.html">Hakkımızda</a></li>
                    <li><a style="color:#f8f8f8;" href="services.html">Hizmetlerimiz</a></li>
                    <li><a style="color:#f8f8f8;" href="references.html">Referanslarımız</a></li>
                    <li><a style="color:#f8f8f8;" href="contact.html">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>


@endsection