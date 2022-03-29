@extends('layout.front.app')
@section('content')
<div class="banner-ruko ">
    <div class="gambar-banner">
        <img src="{{asset('img/profil/10.png')}}" class="img-fluid " alt="...">
    </div>
</div>
<section id="hero" style="background: url('../img/profil/11.png') ;background-size:cover;background-position:center">
    <div class="container">
        <div style="" class="row shadow p-3 mb-5 bg-white rounded section_gap_top">
            <div class="col-lg-5  hero-img ">
                <img style="margin-top: 80px" src="{{asset('img/logo.png')}}">
            </div>
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <h4 style="font-size: 28px;font-weight:500;color: #004157;margin-bottom:20px">Tentang Rumah Korea</h4>
                    <p style="line-height:24px;text-align:justify">
                        <b style="color:black">Rumah Korea Indonesia</b> merupakan edutech platform khusus untuk
                        pembelajaran bahasa
                        Korea di Indonesia. Didirikan di Yogyakarta, Indonesia pada 23 Oktober 2019 dengan penuh
                        sukacita.</p>
                    <p style="font-size: 25px;text-align:justify">
                        <b style="color: #004157;font-family: 'Caveat', cursive;">Learn Korean in your finger
                            tips<span><br>Belajar bahasa Korea di ujung
                                jari Anda</span></b>
                    </p>
                    <p style="line-height: 24px;text-align:justify">
                        Merupakan slogan sekaligus mimpi kami untuk membantu siapa saja di Indonesia yang
                        berkeinginan kuat untuk mempelajari bahasa Korea kapan saja dan di mana saja dengan metode
                        pembelajaran yang lebih komprehensif, adaptif, dan mudah dipahami.
                    </p>
                    <p style="line-height: 24px;text-align:justify">
                        Rumah Korea memiliki misi untuk menyajikan media pembelajaran bahasa Korea melalui
                        teknologi dengan materi yang berkualitas dan dapat dijangkau dengan mudah. Bantu teman dan
                        kerabatmu untuk mengenal bahasa Korea melalui aplikasi Rumah Korea dengan mengunduhnya di Play
                        Store sekarang juga.

                    </p>
                    <a href="" class="primary-btn2">Pasang Sekarang</a>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div data-aos="fade" data-aos-duration="2000" style="margin-top:100px" class="main_title ">
                    <h2 class="mb-3" style="color: #004157">Partner Rumah Korea </h2>

                </div>
            </div>
        </div>
        <div class="row text-center section_gap_bottom">
            
                
                    @foreach (\App\Partner::all() as $key => $value)
                    <div class="col-lg-3 col-6  bg-transparent  ">
                        <div data-aos="fade-in" data-aos-duration="2000" >
                            <a  >
                                <img src="/images/partner/{{$value->picture}}" alt="Image" class="img-fluid" /></a>
                        </div>
                    </div>
                    @endforeach
                
            
        </div>
        <div class="row ">
            <div style="text-align:center;" class="col-lg-12">
                <h2 style="color: #004157"> Mengenal Penghuni Rumah Korea</h2>
            </div>
            <div class="col-lg-12">
                <p style="line-height: 24px;text-align:justify">Selayaknya sebuah tempat tinggal, Rumah Korea juga
                    dihuni oleh beberapa orang. Kalau kamu sudah
                    mampir ke Instagram Rumah Korea di @rumahkoreaedu, tuan Rumah Korea yang sering diketahui adalah
                    Minko. Ia berperan sebagai penyaring siapa saja tamu yang bisa keluar-masuk Rumah Korea.</p>
                <p>Sementara itu, tuan rumah utamanya ialah:</p>
                <ol>
                    <li>Adi Saem (Founder and CEO of Rumah Korea Indonesia)</li>
                    <li>Rifki Saem (Co-founder and CTO of Rumah Korea Indonesia)</li>
                    <li>Lathifa Saem (Korean Language Tutor and Content Developer)</li>
                    <li>Deyo Saem (Korean Language Tutor and Content Support)</li>
                    <li>Yumna Saem (Korean Language Tutor Social Media Specialist)</li>
                    <li>Dilla Saem (Korean Language Tutor)</li>
                    <li>Andri Saem (Korean Language Tutor located in Seoul, South Korea)</li>
                </ol>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<div>

    <div class="banner-ruko ">
        <div class="gambar-banner">
            <img class="img-fluid " src="{{asset('img/profil/2.png')}}" alt="">


            <img class="img-fluid" src="{{asset('img/profil/3.png')}}" alt="">

            <img class="img-fluid" src="{{asset('img/profil/4.png')}}" alt="">


            <img class="img-fluid" src="{{asset('img/profil/5.png')}}" alt="">
        </div>
    </div>



</div>
@endsection
