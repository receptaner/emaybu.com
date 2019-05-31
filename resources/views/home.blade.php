@extends('layouts.master')
@section('title', 'Anasayfa')
@section('content')
    <div class="container-fluid" style="        height: 100vh;
        background: linear-gradient(to top right, #2193b0 0%, #6dd5ed 100%);">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-12 align-self-center">
                <h1 class="text-uppercase" style="        color: white;">Emaybu Yazılım Hizmetleri</h1>
                <hr style="        width: 5%;
        border-width: 5px;
        border-color: #FFF;" class="container my-4">
                <h5 style="        color: white;font-weight: 100;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                </h5>
                <button class="text-uppercase mt-2 buttton" type="button">Teklif İstiyorum</button>
            </div>
        </div>
    </div>

    <div style="        background-color: #f2eee9;">
        <div class="container h-100">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h2 class="text-uppercase">Neler Yapıyoruz ?</h2>
                </div>
                <hr style="        width: 5%;
        border-width: 5px;
        border-color: #353535;" class="container my-4">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center mt-5">
                    <p style="        color: #353535;
        font-size: 30px;"><i class="fas fa-code"></i>Web Tasarım</p>
                    <p style="font-weight: 100;">
                        Dijital dünyada yansıtacağı etkiyi yılların tecrübesi ve günümüz modernliğinde tasarlıyoruz
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 text-center mt-5">
                    <p style="        color: #353535;
        font-size: 30px;"><i class="fas fa-terminal"></i>Web Yazılım</p>
                    <p style="font-weight: 100;">
                        Yeniliklere anında adapte olan yazılım ekibiyle size özgü çözümler ve teknik destek sağlıyoruz.
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 text-center mt-5">
                    <p style="        color: #353535;
        font-size: 30px;"><i class="fas fa-desktop"></i>Masaüstü Yazılım</p>
                    <p style="font-weight: 100;">
                        Yeniliklere anında adapte olan yazılım ekibiyle size özgü çözümler ve teknik destek sağlıyoruz.
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 text-center mt-5 mb-5">
                    <p style="        color: #353535;
        font-size: 30px;"><i class="fas fa-mobile-alt"></i>Mobil Uygulama</p>
                    <p style="font-weight: 100;">
                        Yeniliklere anında adapte olan yazılım ekibiyle size özgü çözümler ve teknik destek sağlıyoruz.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container h-100">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2 class="text-uppercase">Müşterilerimiz</h2>
            </div>
            <hr style="width: 5%; border-width: 5px; border-color: #353535;" class="container my-4">
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
            <div class="col-lg-3 col-md-12">
                <img src="img/marka1.jpg" class="w-100 mt-3 img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3"
         style="background: linear-gradient(to top right, #2193b0 0%, #6dd5ed 100%); height: 200px;;">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="text-uppercase mt-5" style="color:white;">
                    Hazırsanız Başlayalım</h3>
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