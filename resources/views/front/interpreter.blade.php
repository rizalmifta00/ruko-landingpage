@extends('layout.front.app')
@section('content')
<section id="hero"  style="background: url('../img/background-interpreter/1.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row ">
            <div class="interpreter-header-text col-lg-7 pt-5  pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <h1 class="mb-4" style="font-size: 30px">Butuh jasa interpreter (동시통역)
                        bahasa Korea dalam waktu dekat?

                    </h1>
                    <h4 class="mb-4" style="line-height: 30px">Rumah Korea sediakan jasa penerjemahan lisan
                        baik online maupun offline, nih!
                    </h4>
                    <a href="https://wa.me/+6287812464174?text=Halo minko! saya ingin mendapatkan interpreter " class="primary-btn2">Dapatkan Interpreter sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 interpreter-header-img hero-img  " data-aos="fade-left">
                <img class="mb-lg-5"src="{{asset('img/interpreter.png')}}">
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<div class="site-section"  style="background: url('../img/background-interpreter/2.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5">
                <img src="{{asset('img/jasa-interpreter.png')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 ml-auto section-title">
                <h3 class="title  mb-3">Untuk siapa
                    jasa interpreter
                    di Rumah Korea?
                </h3>



                <div class="d-flex" style="font-size: 20px">
                    <ul class="list-unstyled  mr-5">
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Institusi Pendidikan
                        </li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Institusi pemerintah
                        </li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Perusahaan</li>

                    </ul>
                    <ul class="list-unstyled  ">

                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Organisasi</li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Badan Usaha</li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Individu</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div> <!-- .END site-section -->

<div class="section_gap" id="" style="background: url('../img/background-interpreter/3.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{asset('img/kepentingan-interpreter.png')}}" alt="Image" class="img-fluid w-75">
            </div>
            <div class="col-lg-5 ml-auto section-title">
                <h3 class="title mb-3">Interpreter Rumah Korea
melayani kepentingan:
                </h3>



                <div class="d-flex" style="font-size: 20px">
                    <ul class="list-unstyled  mr-3">
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Presentasi
                        </li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Pameran dagang

                        </li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Meeting  klien
                        </li>

                    </ul>
                    <ul class="list-unstyled  ">

                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Penerimaan tamu
                            asing</li>
                        <li><span class="mr-2"><i class="fas fa-check text-success"></i></span>Tour guiding</li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div> <!-- .END site-section -->

<div class="section_gap "style="background: url('../img/background-interpreter/4.png') no-repeat; background-size:cover;background-position:center;" >
    <div class="container"> 
        <div class="col-lg-12 text-center ">              
        <div class="row justify-content-center ml-lg-5">
            <div class="col-lg-6 ">
                <div class="text-left ml-lg-5">
                <h2>Diskusikan langsung di sini!</h2>
                <p style="font-size: 20px">Dapatkan penawaran harga yang cocok <span><br>dengan detil jobdesk yang Anda berikan.</span></p>
                
                </div>
            </div>
            <div class="col-lg-6 ">
                <a  class="primary-btn2 mt-lg-4" target="_blank"
                                href="https://wa.me/+6287812464174?text=Halo Minko! saya ingin mendapatkan interpreter ">
                                Dapatkan Sekarang
                            </a>
            </div>
        </div>
        </div>
        
    </div>
</div>


@endsection
