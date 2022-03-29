@extends('layout.front.app')
@section('content')
<section id="hero" style="background: url('../img/background-konsultasi/1.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 mb-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div class="konsultasi-header-text">
                    <h1 class="mb-4" style="">Masih ragu untuk studi lanjut
                        ke Korea Selatan? Konsultasikan disini.</h1>
                    <h4 class="mb-4" style="line-height: 30px">Rumah Korea siap dengarkan ceritamu dan
                        <span><br>berikan solusi terbaik untuk karir pendidikanmu di Korea Selatan!
                        </span></h4>


                    <a href="https://wa.me/+6287812464174?text=Halo minko! saya ingin berkonsultasi dengan rumah korea " class="primary-btn2">Konsultasi Sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1  order-lg-2 konsultasi-header-img  hero-img " data-aos="fade-left">
                <img src="{{asset('img/konsultasi.png')}}">
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<div class="popular_courses section_gap_top shadow " style="background: url('../img/background-konsultasi/2.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 justify-content-center">
                <h2 class=" font-weight-bold">Apa aja yang bisa dikonsultasikan?</h2>
                <img class="img-fluid mt-3 " id="tanya-konsultasi"src="{{asset('img/tanya-konsultasi.png')}}" alt="">
            </div>
            <div class="sub-title col-lg-8 ">
                <div style="text-align:left;" data-aos="fade-in" data-aos-duration="2000" class="main_title ">
                    <h2  class="mb-3 ">Kamu bisa konsultasikan perihal kegelisahanmu
                        terkait meneruskan pendidikan ke Korea, seperti:</h2>
                    <ul style="font-size:20px; line-height:30px;color:#004157">
                        <li>
                            Kenapa harus belajar bahasa Korea?
                        </li>
                        <li>
                            Jurusan bahasa Korea cocok buat aku atau nggak, ya?
                        </li>
                        <li> Program beasiswa di Korea yang cocok buat aku apa, ya?</li>
                        <li> Gimana caranya supaya hasil Tes TOPIK-ku bisa maksimal?</li>
                        <li>Gimana caranya bisa lulus program beasiswa di Korea?</li>
                        <li>Kalau mau ke Korea, harus persiapkan apa aja?</li>
                        <li> Gimana caranya yakinkan orang tua untuk bisa lanjut studi di Korea?</li>
                        <li>Gimana caranya bisa survive selama hidup di Korea nanti?</li>
                        <li> Gimana persiapannya agar bisa kuliah sambil part time di Korea?</li>
                        <li> Aku ingin ikut program internship sambil kuliah di Korea, persiapannya apa aja?</li>
                        <li> Apa aja syarat agar bisa bekerja di Korea sebagai PMI?</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<section class="py-5 " style="background: url('../img/background-konsultasi/3.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-3">
                <h2>Paket Konsultasi RuKo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div  style="background:#b5651d;" class="card bg-brown mb-5 mb-lg-0 rounded-lg shadow">
                    <div class="card-header">
                        <h5 class="card-title text-white text-uppercase text-center">Paket Ruko 1</h5>
                        <h6 class="h2 text-center text-white-50 "><s>Rp 100K</s><span class="h1 text-white "><br>Rp
                                50k</span>
                        </h6>
                    </div>
                    <div class="card-body bg-light rounded-bottom">
                        <ul class="list-unstyled mb-4">
                            <li style="font-size:15px" class="mb-3"><span class="mr-3"><i style="color: #b5651d"
                                        class="fas fa-check text-success"></i></span> Konsultasi dengan mentor
                                <br>selama 30 menit
                            </li>
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>
                                Tambahan informasi
                                mengenai beasiswa
                                pendidikan Korea yang
                                cocok dengan kamu
                            </li>
                            <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times text-danger"></i></span>Unlimited
                                File daftar beasiswa-beasiswa yang ada di Korea Selatan
                            </li>
                            <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times text-danger"></i></span>E-book
                                bahasa gaul Korea</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background: #C0C0C0" class="card  mb-5 mb-lg-0 rounded-lg shadow">
                    <div class="card-header">
                        <h5 class="card-title text-white text-uppercase text-center">Paket ruko 2</h5>
                        <h6 class="h2 text-white-50 text-center"><s>Rp 200K</s><span class="h1 text-white"><br>Rp
                                100K</span></h6>
                    </div>
                    <div class="card-body bg-light rounded-bottom">
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>
                                Konsultasi dengan mentor <br>selama 45 menit</li>
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>
                                Tambahan informasi
                                mengenai beasiswa
                                pendidikan Korea yang
                                cocok dengan kamu
                            </li>
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span> File
                                daftar beasiswa-beasiswa yang ada di Korea
                                Selatan</li>
                            <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times text-danger"></i></span>E-book bahasa gaul Korea</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background:#d4af37" class="card  mb-5 mb-lg-0 rounded-lg shadow">
                    <div  class="card-header">
                        <h5  class="card-title text-white text-uppercase text-center">Paket ruko 3</h5>
                        <h6 class="h2 text-white-50 text-center"><s>Rp 400K</s><span class="h1 text-white"><br>Rp 150K</span></h6>
                    </div>
                    <div class="card-body bg-light rounded-bottom">
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>Konsultasi dengan mentor <br>selama 60 menit</li>
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>Tambahan informasi mengenai beasiswa pendidikan Korea yang cocok dengan kamu</li>
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>File daftar beasiswa-beasiswa yang ada di Korea Selatan</li>
                            <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span>E-book bahasa gaul Korea</li>
                           
                        
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="produk-gaul section_gap_bottom" style="background: url('../img/background-konsultasi/4.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div data-aos="fade" data-aos-duration="2000" style="margin-top:100px" class="main_title ">
                    <h2 class="mb-3" style="color: #004157">Lengkapi Kosakata Bahasa Koreamu dengan e-book bahasa gaul
                        Korea </h2>
                    <h3 style="color: #004157" class="">
                        Terdiri dari e-book, audio, dan video
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-6">
            <div class="row ">
                @foreach (\App\Product::where('jenis','gaul')->get() as $key => $value)
                <div class="col-md-3 course bg-transparent h-100 align-self-stretch text" >
                    <figure data-aos="fade-in" data-aos-duration="2000" class="m-0">
                        <a data-fancybox="gallery"
                            href="/images/product/{{$value->picture}}">
                            <img src="/images/product/{{$value->picture}}" alt="Image" class="img-fluid" /></a>
                    </figure>
                    <div data-aos="fade-up" data-aos-delay="200" class="product-title text-center mt-lg-3">
                        <h3 class="text-center">
                            <a  style="color:#002347" target="_blank"
                                href="https://wa.me/+6287812464174?text=Halo! Saya ingin membeli produk dari Rumah Korea.">{{$value->name}}
                            </a>
                        </h3>
                        <p style="color:#002347">
                            {{$value->description}}
                        </p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" class="produk justify-content-center btn-product d-flex border-top stats">
                        <div class="py-3 px-4 text-center">
                            <a class="primary-btn2" target="_blank"
                                href="https://wa.me/+6287812464174?text=Halo! Saya ingin membeli produk dari Rumah Korea.">
                                Dapatkan Sekarang
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</div>



@endsection
@push('script')
<script>
    $(document).ready(function () {

        if ($(window).width() < 767) {
            $("#tanya-konsultasi").remove();
        }


    });

</script>
@endpush