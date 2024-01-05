
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    @if(isset($ana_sayfa->sirket_adi))
    <h1 class="logo me-auto"><a href="{{route('index')}}">{{$ana_sayfa->sirket_adi}}</a></h1>
    @else
    <h1 class="logo me-auto"><a href="{{route('index')}}">Auto Gallery</a></h1>
    @endif

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#cars">Araçlar</a></li>

          <li><a class="nav-link scrollto" href="#contact">İletişim</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
