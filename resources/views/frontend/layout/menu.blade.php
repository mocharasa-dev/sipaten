<!-- Search Overlay -->   
<div id="myOverlay" class="overlay-search">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="{{--route('frontend.search')--}}" method="POST">
            {{csrf_field()}}
            <input type="text" placeholder="Cari..." name="keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-info shadow py-2">
    <div class="container">
        <a class="navbar-brand" href="{{route('frontend.beranda')}}"><strong>SIPATEN</strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('frontend.beranda') ? 'active' : '' }}" href="#">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Layanan 1</a></li>
                        <li><a class="dropdown-item" href="">Layanan 2</a></li>
                        <li><a class="dropdown-item" href="">Layanan 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengumuman</a>
                </li>
                <li class="nav-item dropdown {{ Request::routeIs('frontend.login') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Akun</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::routeIs('frontend.login') ? 'active' : '' }}" href="{{route('frontend.login')}}">Login</a></li>
                        <li><a class="dropdown-item {{ Request::routeIs('frontend.register') ? 'active' : '' }}" href="{{route('frontend.register')}}">Register</a></li>
                        <li><a class="dropdown-item" href="">Tulisan panjang but diwrap ga overflow nembus layar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{route('frontend.saran')}}">Hubungi Kami</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="openBtn" href="#" onclick="openSearch()"><i class="fas fa-search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>