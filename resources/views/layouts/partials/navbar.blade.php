<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="        background-color: black;">
    <div class="container">
        <a class="navbar-brand" style="font-size: 18px;" href="index.html"><img src="img/logo.png" width="30" height="30" class="d-inline-block align-top"> Emaybu</a>
        <button class="navbar-toggler" type="button" onclick="openNav()" onfocusout="closeNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}" style="font-weight: 100;">
                        Anasayfa <i class="fas fa-angle-left"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('hakkimizda') }}" style="font-weight: 100;">
                        Hakkımızda <i class="fas fa-angle-left"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html" style="font-weight: 100;">
                        Hizmetlerimiz <i class="fas fa-angle-left"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="references.html" style="font-weight: 100;">
                        Referanslarımız <i class="fas fa-angle-left"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" style="font-weight: 100;">
                        İletişim <i class="fas fa-angle-left"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">Anasayfa</a>
        <a href="about.html">Hakkımızda</a>
        <a href="services.html">Hizmetlerimiz</a>
        <a href="references.html">Referanslarımız</a>
        <a href="contact.html">İletişim</a>
    </div>
</nav>