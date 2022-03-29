@extends('layout.front.app')
@section('content')
<section id="hero" class="headline" style="height:600px;background: url('../img/background-uji-kemampuan/1.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div class="">
                    <h1 class="headline-title"style="margin-bottom:25px">
                        Mau mulai kursus bahasa Korea di Rumah Korea?</h1>
                    <h5 style="color:#004157">Eits, kamu udah tahu sejauh mana kemampuan
                        bahasa Koreamu?
                        <h5 style="color:#004157">Uji kemampuan bahasa Koreamu lebih dulu di sini, yuk!
                        </h5>
                        <a target="_blank"href="https://forms.gle/ED5GBzfUj1NYcXjTA" class="mt-4 primary-btn2">Coba Tes GRATIS</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 ujikemampuan-header-img hero-img ">
                <lottie-player class="img" src="https://assets2.lottiefiles.com/packages/lf20_ZmsQVB.json" background="transparent"
                    speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<div class="popular_courses section_gap_top" style="background: url('../img/background-uji-kemampuan/2.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="poin col-lg-12">
                <h4>
                    Tes ini menjadi penentu kamu akan masuk ke level mana
                </h4>
                <p>Jadi, berapa poin yang kamu peroleh?</p>
            </div>
            <div class="col-lg-6 mt-3 ">
                <img class="img-fluid  " src="{{asset('img/poin.png')}}" alt="">
            </div>
        </div>
         
    </div>
   
</div>
<section class="section_gap" style="background: url('../img/background-uji-kemampuan/3.png') no-repeat;background-size:cover;background-position:center">
<div class="container">
    <div class="row text-center ">
        <div class="text-akhir col-lg-12">
            <h3>Jadi, gimana? Kamu udah siap?</h3>
            <h4>Selamat mengerjakan! Semangat belajar #dirumahaja</h4>
            <a target="_blank" href="https://forms.gle/ED5GBzfUj1NYcXjTA " class="primary-btn2 mt-4">Coba Tes GRATIS</a>
        </div>
    </div>
</div>
</section>
@endsection
