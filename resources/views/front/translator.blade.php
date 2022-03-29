@extends('layout.front.app')
@section('content')
<section id="hero" style="background: url('../img/background-translator/1.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row  ">
            <div class="col-lg-7 mb-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade">
                <div>
                    <h1 class="mb-4" style="">Ingin terjemahkan dokumenmu
ke dalam bahasa Korea?</h1>
                    <h4 class="mb-4" style="line-height: 30px">Rumah Korea menyediakan layanan jasa 
penerjemahan dokumen formal dan informal
untuk memenuhi kesulitan kamu, nih!
</h4>


                    <a target="_blank" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin menerjemahkan kedalam bahasa korea " class="primary-btn2">Terjemahkan Sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 translator-header-img hero-img " >
                <lottie-player class="mb-5"src="https://assets7.lottiefiles.com/packages/lf20_aeo5ikeu.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<div class="popular_courses section_gap" style="background: url('../img/background-translator/2.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row ">
            
            <div class="col-lg-12">
                <div style="text-align:justify;"data-aos="fade-in" data-aos-duration="2000" class="main_title ">
                   
                    
                    <h3 style="line-height: 40px; color:#004157 ">Rumah Korea siap melayani penerjemahan dokumen dari INA – KOR, dan KOR –
INA untuk kepentingan institusi, perusahaan, badan usaha, dan perorangan.
Dokumen yang diterjemahkan ada dua jenis: dokumen formal/resmi dan informal
</h3>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6  shadow">
                <h3> Dokumen Formal</h3>
                <h4 class="mb-sm-2" style="line-height:30px">  Dokumen formal : KTP, KK, Akta Kelahiran, file PPT, skripsi, tugas akhir, dsb.</h4>
            </div>
            <div class="col-lg-6 shadow">
                <h3>Dokumen Non formal </h3>
                <h4 style="line-height: 30px">Dokumen informal: artikel, karya tulis, surat untuk idola Korea, dsb.</h4>
            </div>
        </div>
    </div>
</div>
<section class="section_gap" style="background: url('../img/background-translator/3.png') no-repeat; background-size:cover;background-position:center;" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Apa saja ketentuannya?</h2>
                <p>Penerjemahan dokumen di Rumah Korea sudah memiliki ketentuan khusus.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="">
                <a data-fancybox="jadwal-topik" href="/img/ketentuan-translator.png">
                    <img src="{{asset('img/ketentuan-translator.png')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="">
                <a data-fancybox="jadwal-topik" href="/img/biaya-translator.png">
                    <img src="{{asset('img/biaya-translator.png')}}" class="img-fluid" alt="">
                </a>
            </div>

        </div>
    </div>
</section>
<section class="section_gap_bottom " style="background: url('../img/background-translator/4.png') no-repeat; background-size:cover;background-position:center;padding:50px 0px 50px 0px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 shadow-lg mt-lg-5 pt-3 bg-transparent  rounded">
                <h2 class="text-center">Cek poin berikut sebelum kirimkan dokumenmu</h2>
                <ol style="line-height: 40px" class="h5">
                    <li> Dokumen dengan halaman banyak, dapat potongan harga (nego)</li>
                    <li>Pengerjaan dokumen sesuai dengan jam operasional penerjemahan (09.00-21.00 WIB)</li>
                    <li> Permintaan pengerjaan dokumen yang bersifat mendesak dengan pengerjaan di luar jam operasional 
akan dikenakan biaya tambahan</li>
<li> Lama hari pengerjaan disesuaikan dengan tingkat kesulitan isian dari dokumen
</li>
<li>Penerjemahan setelah melakukan pembayaran DP 50% dari total harga keseluruhan</li>
                </ol>
            </div>
            <div class="col-lg-12 text-center">
                <a target="_blank"href="https://wa.me/+6287812464174?text=Halo minko! saya ingin menerjemahkan kedalam bahasa korea" class="primary-btn2 mt-5">Terjemahkan sekarang</a>
            </div>
        </div>
    </div>
</section>
@endsection