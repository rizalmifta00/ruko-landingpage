    <header class="header_area navbar_fixed">
      <div class="main_menu">
        {{-- <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div> --}}
      

        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{route('home')}}">
              <img src="{{asset('frontend/template/img/logoruko.png')}}" style="height: 60px" alt=""/>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('home')}}">Beranda</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Kelas</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('front.uji-kemampuan')}}">Uji Kemampuan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('front.kursus-bahasa-korea')}}"
                        >Kursus  Korea</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('front.kursus-topik')}}">Kursus TOPIK</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href=" ">TryOut EPS TOPIK</a>
                    </li> --}}
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('front.kursusBi')}}">Kursus Indonesia</a>
                    </li>
                     {{-- <li class="nav-item">
                      <a style="font-size:13px"class="nav-link" href="">Korean Daily Speaking</a>
                    </li> --}}
                     <li class="nav-item">
                      <a style="font-size:11px;font-weight:500"class="nav-link" href="{{route('kelas.talent-scouting')}}">Talent Scouting to Korea</a>
                    </li>
                  </ul>
                </li> 
                 <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Layanan</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('layanan.inginKorea')}}">Ingin Korea</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('layanan.interpreter')}}"
                        >Interpreter</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{route('layanan.translator')}}">Translator</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('layanan.konsultasi')}}">Konsultasi</a>
                    </li>
                   
                   
                  </ul>
                </li> 
                 <li class="nav-item">
                  <a href="{{route('front.tentangkami')}}" class="nav-link" > Tentang Ruko</a>
                </li>
                <li class="nav-item">
                  <a id="contact"class="nav-link" >Kontak</a>
                </li>
               
                {{-- <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li> --}}
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    

@push('script')
<script>
    $(document).ready(function () {
        $("#contact").click(function () {
            var targetDistance = 20;
            $('html, body').animate({
                scrollTop: $("#footer").offset().top - targetDistance
            }, 3000);
        });
       
    });

</script>
@endpush