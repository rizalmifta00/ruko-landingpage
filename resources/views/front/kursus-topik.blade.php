@extends('layout.front.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" style="height:600px;background: url('../img/background-kursus-topik/1.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <h1>Latihan soal-soal ujian Tes TOPIK sendirian bikin kamu mumet?</h1>
                    <h4 class="mb-4">Jawabannya cuma satu.</h4>
                    <h4 class="mb-4">Kamu butuh TUTOR</h4>
                    <a target="_blank" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin belajar bahasa topik " class="primary-btn2">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_op2x6olh.json"
                    background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section class="feature_area section_gap" style="background: url('../img/background-kursus-topik/2.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="main_title">
                    <h2 class="mb-3">Mengapa butuh TUTOR dalam belajar soal ujian TOPIK?</h2>
                    <p>
                        Soal pembahasan TOPIK yang berstandar nasional Korea Selatan dan selalu terbarukan
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_feature">
                    <div class="icon"><span class="flaticon-book"></span></div>
                    <div class="desc">
                        <h4 class="mt-3 mb-2">Soal pembahasan
                            selalu diperbarui</h4>
                        <p>
                            Contoh pembahasan soal TOPIK
                            yang terbarukan dan berstandar
                            nasional Korea Selatan dengan trik
                            penyelesaian soal yang terbaru

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_feature">
                    <div class="icon"><span class="flaticon-student"></span></div>
                    <div class="desc">
                        <h4 class="mt-3 mb-2">Tutor profesional
                            dan berpengalaman</h4>
                        <p>
                            Lulusan terbaik yang terpercaya
                            dalam mengajar bahasa Korea dan
                            soal-soal TOPIK dengan tingkat
                            kesulitan yang tinggi


                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_feature">
                    <div class="icon"><span class="flaticon-earth"></span></div>
                    <div class="desc">
                        <h4 class="mt-3 mb-2">Kelas TOPIK
                            interaktif online</h4>
                        <p>
                            Belajar bahasa Korea dengan
                            nyaman dari rumah atau bisa di
                            mana saja dan kapan saja

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:0px 0px 200px 0px ;background: url('../img/background-kursus-topik/3.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="sub-title col-lg-8 mt-lg-5 mb-5 mb-md-7">
                <h2 class="text-center">Benefit yang Kamu Dapatkan Setelah Mendaftar Kelas TOPIK</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center mt-lg-4">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/free.png')}}" width="100"
                        alt="..." />
                    <h3 style="color: #004157" class="h5 mb-4 font-base">Gratis</h3>
                    <p class="text-center">GRATIS biaya pendaftaran</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/reading-book.png')}}"
                        width="100" alt="..." />
                    <h3 style="color: #004157" class="h5 mb-4 font-base">Materi</h3>
                    <p class="text-center">GRATIS modul materi dan latihan, serta dapat sertifikat hasil belajar</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/online-lesson.png')}}"
                        width="100" alt="..." />
                    <h3 style="color: #004157" class="h5 mb-4 font-base">Akses dimana saja</h3>
                    <p class="text-center">Kelas Daring di mana dan kapan saja</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/feedback.png')}}" width="100"
                        alt="..." />
                    <h3 style="color: #004157" class="h5 mb-4 font-base">Bimbingan</h3>
                    <p class="text-center">Bimbingan GRATIS beasiswa program sarjana, master, hingga doctoral di Korea</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<section class="section_gap_top" style="background: url('../img/background-kursus-topik/4.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Pilihan Waktu</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="">
                <a data-fancybox="jadwal-topik" href="/img/kelas-a.png">
                    <img src="{{asset('img/kelas-a.png')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="">
                <a data-fancybox="jadwal-topik" href="/img/kelas-b.png">
                    <img src="{{asset('img/kelas-b.png')}}" class="img-fluid" alt="">
                </a>
            </div>

        </div>
    </div>
</section>
<section class="section_gap " style="background: url('../img/background-kursus-topik/5.png') no-repeat;background-size:cover;background-position:center;" >
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Pilihan Harga</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="">
                    <a data-fancybox="harga-topik" href="/img/topik-1.png">
                        <img src="{{asset('img/topik-1.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="">
                    <a data-fancybox="harga-topik" href="/img/topik-2.png">
                        <img src="{{asset('img/topik-2.png')}}" class="img-fluid" alt="">
                    </a>
                </div>

            </div>
            
        </div>

</section>
<section class="section_gap" style="background: url('../img/background-kursus-topik/6.png') no-repeat;background-size:cover;background-position:center;">
    <div class="row ml-0 mr-0 ">
                <div class="col-lg-12 text-center">
                    <a target="_blank" class="primary-btn2" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin mendaftar kursus topik">
                        Daftar Kelas TOPIK sekarang
                    </a>
                </div>
            </div>
</section>


@endsection



