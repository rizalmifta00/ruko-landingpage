@extends('layout.front.app')
@section('content')

<section id="hero"
    style=" background: url('../img/background-kursus-korea/1.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div class="kursuskorea-header-text">
                    <h1>Belajar bahasa Korea sampai lancar bareng RUMAH KOREA!</h1>
                    <h5 style="word-spacing:1px" class="mb-3">Belum pernah belajar bahasa Korea sebelumnya?</h5>
                    <h5 class="mb-5 ">Daftarkan dirimu ke LEVEL DASAR di sini!</h5>

                    <a target="_blank"
                        href="https://wa.me/+6287812464174?text=Halo minko! saya ingin belajar bahasa korea "
                        class="primary-btn2">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 kursuskorea-header-img hero-img " data-aos="fade">
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_pcxwaqk2.json"
                    background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section class="section_gap"
    style="background: url('../img/background-kursus-korea/2.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="sub-title col-12 mb-5 mb-md-7">
                <h2 class="text-center">Kenapa harus belajar bahasa Korea di RUMAH KOREA?</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class=" col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player class="text-center" src="https://assets3.lottiefiles.com/temp/lf20_UguT0F.json"
                        background="transparent" speed="1"
                        style="width: 200px;height:200px;padding:0px 0px;margin-left:70px" loop autoplay>
                    </lottie-player>
                    <p class="text-justify">Tutor/Pengajar Bahasa Korea dari <b style="color: black">lulusan universitas
                            ternama di Indonesia dan Korea Selatan.</b></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_aQG2he.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay>
                    </lottie-player>
                    <p class="text-justify">Kesempatan belajar dengan metode belajar <b style="color:black ">New Adaptif
                            Learning Indonesian Style</b> dan komprehensif yang tujuan
                        capaiannya, yaitu: Growth Mindset, Evaluasi, dan Peningkatan
                        Kemampuan Bahasa Korea.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_xwgclkyh.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-justify"><b style="color:black">GRATIS</b> Biaya Pendaftaran, e-book Modul dan
                        Latihan, e-sertifikat, serta audio Listening.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_18N5Dm.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-justify">Berkesempatan mengikuti Ujian TOPIK I dan TOPIK II dan
                        mendapatkan <b style="color: black">sertifikat resmi Bahasa Korea.</b></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_kb3snp9c.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-justify"><b style="color:black">Bimbingan GRATIS seumur hidup</b> Beasiswa Korea
                        (Program
                        Sarjana, Master, Doktor), International Student Exchange
                        Program selama satu (1) sampai dua (2) semester di Korea.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<div style="background: url('../img/background-kursus-korea/3.png') no-repeat;background-size:cover;background-position:center;padding:10px 0px 30px 0px"
    class="site-section justify-content-center" id="what-we-do-section">
    <div class="container">
        <div class="row mt-lg-5 text-center justify-content-center">
            <div class="sub-title mt-lg-5 col-lg-8 section-title">
                <h2 style="color: #004157" class="title">Tingkatkan kemampuan bahasa Koreamu
                    di level yang sesuai dengan kamu</h2>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-10 ">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2>Level Dasar</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-korea.dasar')}}" class="readmore">Detil Level</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> Level 1</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-korea.1')}}" class="readmore">Detil Level</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> Level 2</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-korea.2')}}" class="readmore">Detil Level</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> Level 3</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-korea.3')}}" class="readmore">Detil Level</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> Level 4</h2>
                            <p></p>
                            <p><a style="" href="{{route('front.detail-kelas-korea.4')}}" class="readmore">Detil
                                    Level</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> Level 5</h2>
                            <p></p>
                            <p><a style="" href="{{route('front.detail-kelas-korea.5')}}" class="readmore">Detil
                                    Level</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> Level 6</h2>
                            <p></p>
                            <p><a style="" href="{{route('front.detail-kelas-korea.6')}}" class="readmore">Detil
                                    Level</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5">
            <div class="col-lg-12 text-center">
                <a target="_blank" class="primary-btn2"
                    href="https://wa.me/+6287812464174?text=Halo minko! saya ingin belajar bahasa korea">
                    Daftar Sekarang
                </a>
            </div>

        </div>

    </div>
</div>



<section class="section_gap_bottom"
    style="background: url('../img/background-kursus-korea/4.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row  shadow p-3 mb-5 bg-transparent rounded">
            <div class="col-lg-12 " data-aos="fade">
                <lottie-player src="https://assets7.lottiefiles.com/temp/lf20_gNBoNM.json" background="transparent"
                    speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
            </div>
            <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <h3>Bundle Online Masterclass, istimewa, seru, dan TERJANGKAU!</h3>
                    <p>Berbeda dari Kelas Reguler, di kelas ini, kamu dan teman-teman satu gengmu dapat kesempatan
                        belajar bahasa Korea
                        secara intensif dari Level Dasar sampai Level 3 <b>HANYA DALAM 4 BULAN.</b>
                        <img class="img-fluid w-100 " src="{{asset('img/pricetag.png')}}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    style="background: url('../img/background-kursus-korea/5.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row justify-content-center section_gap_top">
            <div class="col-12 mb-5 mb-md-7">
                <h3 class="text-center">Benefit yang kamu dapat dari Bundle Class</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_u8o7BL.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="lh-lg text-center" > <b style="color: #004157">GRATIS</b> Biaya Pendaftaran </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_18N5Dm.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-center"> <b style="color: #004157">GRATIS</b> E-Sertifikat </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_6npzscwg.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-center"> <b style="color: #004157">GRATIS</b> Soal-soal EPS-TOPIK CBT Terbaru
                        (10 Paket Soal)</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_gqirhcr7.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-center"><b style="color: #004157">GRATIS</b> E-Book Materi Pelajaran & Materi Latihan
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3">
                    <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_qhogfdkr.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;margin-left:70px" loop
                        autoplay></lottie-player>

                    <p class="text-center"><b style="color: #004157">GRATIS</b> E-Book Bahasa Gaul Korea (E-Book, Video,
                        dan Audio Listening</p>
                </div>
            </div>
        </div>

    </div>
</section>
<section style="background: url('../img/background-kursus-korea/6.png') no-repeat;background-size:cover;background-position:center;">
    <div class="col-lg-12 section_gap ">
        <div class="container">
            <div class="row no-gutters justify-content-center ml-lg-5 ">
                <div class="col-lg-6 mt-lg-2">
                    <div  class="text-left ml-lg-5">
                        <h3>Daftar bareng grupmu sekarang!</h3>
                        <p style="font-size:20px">Belajar bahasa Korea secara online interaktif<span><br>
                                ramai-ramai dengan teman satu grupku. </span></p>
                    </div>

                </div>
                <div class="col-lg-6 ">
                    <a target="_blank" class="primary-btn2 mt-lg-2"
                        href="https://wa.me/+6287812464174?text=Halo minko! saya ingin belajar bahasa korea">
                        <i>Ne, johayo.</i> Aku mau daftar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end of .container-->









@endsection
