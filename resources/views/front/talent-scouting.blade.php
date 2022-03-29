@extends('layout.front.app')
@section('content')
<section id="hero" style="background: url('../img/background-talent-scouting/1.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7  pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <h1 class="mb-4" style="">
                        Kamu dan teman-teman satu sekolahmu
                        pengen belajar bahasa Korea bareng
                        di Rumah Korea?
                    </h1>
                    <h4 class="mb-4" style="line-height: 30px">Daftarkan dirimu dan teman-temanmu ke program Talent
                        Scouting
                        to Korea di RuKo aja!

                    </h4>


                    <a target="_blank" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin mendaftar talent scouting " class="primary-btn2">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 kelastalent-header-img hero-img " >
                <lottie-player  src="https://assets2.lottiefiles.com/private_files/lf30_j59Vq2.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<div class="popular_coursses section_gap" style="background: url('../img/background-talent-scouting/2.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 ">
                <div style="" data-aos="fade-in" data-aos-duration="2000" class="main_title ">
                    <h2 style="" class="">Apa itu Talent Scouting to Korea?
                    </h2>
                    <h5 class="talent-content" style="line-height:30px;text-align:justify">
                        Program khusus untuk lembaga atau satu instansi pendidikan formal yang sama dan ingin bekerja
                        sama
                        dengan Rumah Korea untuk memberikan kelas bahasa Korea intensif bagi para siswa/mahasiswa yang
                        berencana
                        melanjutkan studi ke Korea Selatan.
                    </h5>
                    <h5 class="talent-content"style="line-height:30px;text-align:justify">Institusi yang pernah mengikuti
                        program ini, yaitu D4 Bahasa Asing Terapan Universitas Diponegoro. </h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-talent " style="padding:100px 0px 150px 0px;background: url('../img/background-talent-scouting/3.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row text-center">
            <div class="sub-title col-lg-12 mb-3">
                <h2>Mengapa ikut Talent Scouting to Korea?</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-5 shadow-lg rounded-lg mr-3">
                <div class="row ">
                    <div class="col-lg-6 col-sm-6 text-left">
                        <h4 class="mb-4 mt-4">Pengajar profesional yang berpengalaman. </h4>
                        <p>Tutor merupakan lulusan yang pernah bersekolah di
                            Korea Selatan dan berpangalaman magang di organisasi Korea dan bekerja di perusahaan Korea
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-lg-3">
                        <img class=" img-fluid" src="{{asset('img/talent-scouting.png')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-5 shadow-lg rounded-lg">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-left">
                        <h4 class="mb-4 mt-4">Kelas intensif khusus Level Dasar s.d. Level 3 </h4>
                        <p> Dengan kelas intensif, kamu akan dibantu untuk
                            siap secara kebahasaan Korea sehingga hasil belajar sesuai dengan tujuan belajar dalam waktu
                            4 bulan
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-lg-4">
                        <img class="img-fluid" src="{{asset('img/kelas-intensif.png')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-5 shadow-lg mr-3 mt-3 rounded-lg">
                <div class="row ">
                    <div class="col-lg-6 col-sm-6 text-left">
                        <h4 class="mb-4 mt-4">Metode belajar: online interaktif </h4>
                        <p>Belajar bahasa Korea kini bisa di mana saja dan kapan saja
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <img class="img-fluid" src="{{asset('img/online-interaktif.png')}}">
                    </div>
                </div>
            </div>
            <div class="col-sm-5 shadow-lg mt-3 rounded-lg">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-left">
                        <h4 class="mb-4 mt-4">Konsultasi dengan Korean language and culture Expert. </h4>
                        <p> Instansi tempat asal murid dapat
                            berkonsultasi mengenai cara untuk menjalin kerja sama internasional dengan kampus di Korea
                            Selatan.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <img class="img-fluid" src="{{asset('img/konsultasi-korean.png')}}">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<section class="section_gap" style="background: url('../img/background-talent-scouting/4.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="sub-title col-12 mb-5 mb-md-7">
                <h2 class="text-center">Benefit yang kamu dan grupmu bakal dapatkan</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/free.png')}}" width="100"
                        alt="..." />

                    <p class="lh-lg text-center">E-Modul Materi dan Latihan versi premium</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/reading-book.png')}}"
                        width="100" alt="..." />

                    <p class="text-center">E-book Percakapan
                        bahasa Korea sehari-hari</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/online-lesson.png')}}"
                        width="100" alt="..." />

                    <p class="text-center">Paket CBT 10 macam TryOut
                        EPS-Topik (Speaking,
                        Listening Audio)*</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/feedback.png')}}" width="100"
                        alt="..." />

                    <p class="text-center">Paket CBT 10 macam TryOut
                        EPS-Topik (Speaking,
                        Listening Audio)*</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<section class="talent-beasiswa" style="background: url('../img/background-talent-scouting/5.png') no-repeat;background-size:cover;background-position:center;padding:100px 0px 50px 0px">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <h1 class="mb-4" style="">Bimbingan dan konsultasi program beasiswa studi lanjut
                        gratis.
                    </h1>
                    <h4 class="mb-4" style="line-height: 30px"> Kamu bisa
                        berkonsultasi mengenai jurusan, kampus, dan program beasiswa yang diinginkan.
                    </h4>

                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img  " >
                <img style="border-radius: 20px 20px;width:75%" class="img-fluid" src="{{asset('img/meeting.jpg')}}">
            </div>
        </div>
    </div>
</section>
<section class="section_gap_top" style="background: url('../img/background-talent-scouting/6.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" sub-title col-12 mb-5 mb-md-7 mt-lg-5">
                <h2 class="text-center">Daftarkan kamu dan grupmu ke program Talent Scouting to Korea</h2>
                <h5 class="text-left ml-lg-5">jika kamu dan grupmu :</h5>
            </div>
        </div>
       
        <div class="row">
            <div class="col-sm-6 col-lg-3  mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid " src="{{asset('img/pelajar-sma.png')}}" 
                        alt="..." />

                    <p class="lh-lg text-center">Pelajar SMA-SMK-MA/
                        Mahasiswa aktif</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3  mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid " src="{{asset('img/satu-sekolah.png')}}"
                         alt="..." />

                    <p class="text-center">Berasal dari satu
                        sekolah yang sama
                        dan memiliki
                        kartu/bukti terbaru
                        sebagai pelajar aktif</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3  mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid " src="{{asset('img/ikut-kursus.png')}}"
                         alt="..." />

                    <p class="text-center">Mau mengikuti kursus
                        bahasa Korea sampai
                        selesai</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3  mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid " src="{{asset('img/tertarik-belajar.png')}}" 
                        alt="..." />

                    <p class="text-center">Tertarik belajar bahasa
                        Korea demi tujuan masa
                        depan, diri sendiri, dan
                        kebahagiaan orang tua.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<section id="" class="section_gap_bottom" style="background: url('../img/background-talent-scouting/7.png') no-repeat;background-size:cover;background-position:center;">
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class=" mt-lg-5 sub-title col-lg-10">
                <h2 style="margin-top: 100px">Paket belajar spesial dengan potongan harga menarik
                    untuk kamu dan grupmu!
                </h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div>
                    <p class="mb-4 text-justify" style="font-size: 20px">Peluang besar dapatkan beasiswa penuh dan
                        beasiswa parsial (sebagian) di kampus Korea Selatan
                        dengan belajar bahasa Korea secara intensif bersama
                        dengan teman satu sekolahmu!
                    </p>
                    <p class="mb-4" style="line-height: 30px;font-size: 20px"> Daftar Talent Scouting sekarang juga.
                    </p>
                    <a target="_blank" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin mendaftar talent scouting" class="primary-btn2">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img">
                <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_P9kQz3.json"  background="transparent"  speed="1"    loop  autoplay></lottie-player>
            </div>
        </div>
    </div>
</section>



@endsection
