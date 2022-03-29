@extends('layout.front.app')
@section('content')
<!--================ Start Home Banner Area =================-->
<div class="banner_inner ">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner ">
        @foreach (\App\Banner::where('isView','1')->get() as $key => $value)
            <div  class="carousel-item  {{$key == 0 ? 'active' : ''}} figure ">
              <a target="_blank" href="{{$value->link}}">
              <img style="border-radius:10px;" class="img-fluid  "
                  src="/images/banner/{{$value->picture}}"
                  alt="carrousel">
                  </a>
            </div>
        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
</div>
<div class="banner-ruko mt-3">
        <div  class="gambar-banner">         
            <img src="{{asset('img/header.png')}}" class="img-fluid " alt="...">    
        </div>
</div>
<!--================ End Home Banner Area =================-->

<!--================ Start Paket =================-->
<div class="halaman-awal" style="background: url('../img/element/1.png') no-repeat ;padding:0px 0px;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div  class="col-lg-7 ">
                <div style="" data-aos="fade-in" data-aos-duration="2000"class="main_title ">
                    <h2 style="font-family: 'Caveat', cursive;  margin-top: 100px" class="quote mb-5">"Aku bisa gak ya lancar Bahasa Korea dengan belajar dimana aja dan kapan aja?"</h2>
                    <h2>
                        Bisa banget. Sebelumnya, kamu sudah punya kemampuan dasar bahasa Korea?
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-in" data-aos-duration="2000" class=" text-center">
                    <div>
                        <button id="btn-sudah" class="primary-btn2 mb-3 mb-sm-0">Sudah !</button>
                        <button id="btn-belum" class="primary-btn2 ml-sm-3 ml-0">Belum...</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="section1" class="row justify-content-center mt-5">
            <div class="col-lg-12 mt-5">
                <div data-aos="fade-in" data-aos-duration="2000" class="main_title ">
                    <h2 class="mb-3">Kamu berpeluang untuk ikut tes kemampuan Bahasa Korea lebih dulu, nih.</h2>
                    <h2 class="mb-3">ATAU</h2>
                    <h2>
                        Kalau kamu sudah tahu sejauh mana kemampuan bahasa Koreamu,<span><br>kamu bisa langsung pilih kelas yang
                        kamu mau.</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-in" data-aos-duration="2000" class=" text-center">
                    <div>
                        <a target="_blank" href="https://forms.gle/ED5GBzfUj1NYcXjTA" class="primary-btn2 mb-3 mb-sm-0">Tes Kemampuanku!</a>
                        <a target="_blank" href="https://wa.me/+6287812464174?text=Halo! Saya ingin mendapatkan informasi mengenai kelas di rumah korea" class="primary-btn2 ml-sm-3 ml-0">Langsung daftar kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <section id="section1" class="popular_courses " style="background: url('../img/element/2.png') no-repeat ;padding:0px 0px;background-size:cover;background-position:center ">
    <div class="opacity"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-5">
                <div data-aos="fade-in" data-aos-duration="2000" class="main_title ">
                    <h2 class="mb-3">"Kamu berpeluang untuk ikut tes kemampuan Bahasa Korea lebih dulu, nih."</h2>
                    <h2 class="mb-3">ATAU</h2>
                    <h2>
                        Kalau kamu sudah tahu sejauh mana kemampuan bahasa Koreamu,<span><br>kamu bisa langsung pilih kelas yang
                        kamu mau.</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-in" data-aos-duration="2000" class=" text-center">
                    <div>
                        <a href="#" class="primary-btn2 mb-3 mb-sm-0">Tes Kemampuanku!</a>
                        <a href="#" class="primary-btn2 ml-sm-3 ml-0">Langsung daftar kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--================ END paket =================-->

<!--================ Start Produk Korea Gaul =================-->
<div class="produk-gaul" style="background: url('../img/element/3.png') no-repeat; background-size:cover;background-position:center;">
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
                        <p class="text-white">
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


<!--================ End Produk Korea Gaul =================-->
<!--================ Start Produk Lainnya =================-->
<section class="trainer_area"  style="background: url('../img/element/4.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div data-aos="fade" data-aos-duration="2000" class="main_title">
                    <h2 class="mt-5" style="color: #004157">Layanan</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach (\App\Product::where('jenis','lainnya')->get() as $key => $value)
            <div data-aos="fade-up" data-aos-delay="200" class="col-lg-4 col-md-6 col-sm-12 single-trainer">
                <div  class="thumb  justify-content-sm-center">
                    <a data-fancybox="layanan"  href="/images/product/{{$value->picture}}">
                    <img class="img-fluid" src="/images/product/{{$value->picture}}" alt="" />
                    </a>
                </div>
                <div  class="meta-text text-sm-center">
                    <a target="_blank" href="{{$value->description}}">
                    <h4 class="text-center">{{$value->name}}</h4>
                   </a>
                    {{-- <p class="designation text-center">{{$value->description}}</p> --}}
                    
                    <!-- <div class="mb-4">
            <p>
                If you are looking at blank cassettes on the web, you may be
                very confused at the.
            </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
            <a href="#"><i class="ti-pinterest"></i></a>
            </div> -->
                </div>
            </div>
            @endforeach
            

        </div>
       
        
    </div>

</section>
<!--================ End Produk Lainnya =================-->
<!--================ Start  =================-->

<section id="section2" class="about_area " style="background: url('../img/element/5.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div data-aos="fade" data-aos-duration="2000" class="main_title">
                    <h2 class="mb-3">Tenang, kamu bisa langsung daftar program Level dasar kok, <span><br>mau langsung jago bahasa
                        korea dalam 4 bulan?</span> </h2>
                    
                </div>
            </div>
        </div>
        <div class="row h_blog_item ">
            <div class="col-lg-6 ">
                <div data-aos="fade-up" data-aos-delay="500"  data-aos-duration="500"class="h_blog_img">
                    <img class="img-fluid " src="{{asset('img/poster-kursus-korea.jpeg')}}" alt="" />
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-lg-6 ">
                <div class="h_blog_text ">
                    <div style="border:none" class="h_blog_text_inner left right">
                        <div class="mb-5">
                            <a target="_blank" href="https://wa.me/+6287812464174?text=Hai Minko! Saya ingin mendaftar kelas regular bahasa korea dari Rumah Korea." class="primary-btn2 mb-3 ">Daftar Kelas Regular</a>
                            <p>
                                Di kelas ini, kamu akan belajar bahasa Korea mulai dari Level Dasar. Kamu bisa
                                banget melanjutkan kelas ke level selanjutnya juga, loh.
                            </p>
                        </div>
                        <a target="_blank" href="https://wa.me/+6287812464174?text=Hai Minko! Saya ingin mendaftar kelas Intensif bahasa korea dari Rumah Korea." class="primary-btn2 mb-3 ">Daftar Kelas Intensif. NEW!</a>
                        <p>
                            Kelas intensif ini khusus buat kamu yang pengen bisa cepet jago bahasa Korea
                            setingkat penerjemah bahasa Korea hanya dalam waktu 4 bulan dengan harga
                            kelas lebih terjangkau.
                        </p>
                        {{-- <a class="primary-btn" href="#">
                            Learn More <i class="ti-arrow-right ml-1"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ End  =================-->
<!--================ Start  =================-->
<section id="features" class="features">
    <div class="container">
        <div class="row ">
            <div data-aos="fade-up" data-aos-delay="500"  data-aos-duration="500" class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                <div class="text">
                    <h3>Sudah pasang aplikasi Rumah Korea di gawaimu?</h3>
                    <p>
                        Apps Rumah Korea kini hadir dengan tampilan baru
                        yang lebih fresh dari yang sebelumnya, nih. Kini, belajar
                        bahas Korea gak perlu lagi repot. Kamu sudah bisa
                        mengaksesnya hanya dengan satu sentuhan!
                    </p>

                    <a href="#" class="primary-btn2 mb-3 ">Pasang Sekarang</a>
                </div>
            </div>
            <div  class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="500"  data-aos-duration="500">
                <div class="tab-content">
                    <div class="h_blog_img">
                        <img class="img-fluid " src="{{asset('img/app.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!--================ End  =================-->

<!--================ Start Tutor =================-->
<section class="trainer_area" style="background: url('../img/element/6.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div  class="main_title">
                    <h2 data-aos="fade" data-aos-duration="3000" class="mb-3" style="color: #004157;font-weight:normal">Belajar dengan <i>Korean
                            Seonsaengnim</i>&nbspter-<i>daebak</i></h2>
                </div>
            </div>
        </div>
        <div class="row-fluid justify-content-center col-lg-12" >
            <div class="owl-carousel  testi_slider">
                @foreach (\App\Tutor::all() as $key => $value)
                <div data-aos="fade-up" data-aos-delay="500" class="single-trainer">
                    <div class="thumb justify-content-sm-center mb-0">
                        <img style="height:auto" class="img-fluid" src="/images/tutor/{{$value->picture}}" alt="tutor" />
                    </div>
                    <div style="height: 350px;font-size: 15px;" class="meta-text  ">
                        <h4 class="text-center">{{$value->name}}</h4>
                        <p style="text-align:left"class="designation text-center">{!!$value->description!!}</p>
                        <!-- <div class="mb-4">
            <p>
                If you are looking at blank cassettes on the web, you may be
                very confused at the.
            </p>
            </div>
            <div class="align-items-center justify-content-center d-flex">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
            <a href="#"><i class="ti-pinterest"></i></a>
            </div> -->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--================ End Tutor =================-->

<!--================ Start Event =================-->
<div  class="trainer_area mt-0 " style="background: url('../img/element/7.png') no-repeat ;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 ">
                <div data-aos="fade-in" data-aos-duration="2000" class="main_title">
                    <h2 class="mb-2 mt-2">Event</h2>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        <div class="row  ">
            <!-- single course -->
            <div class="col-lg-12 justify-content-center ">
                <div class="owl-carousel testi_slider ">

                    @foreach (\App\Event::get()->sortBy('date') as $key => $value)
                    <div data-aos="fade-up" data-aos-delay="500" class="event single_course" style="background:white">
                        <div  class="course_head">
                            <img class="img-fluid" src="/images/event/{{$value->picture}}" alt="" />
                            @if(\Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($value->date)))
                            <span style="background:#e00909" class="harga">Yang Lalu</span>
                            @elseif(\Carbon\Carbon::now()->format('Y-m-d')->eq(\Carbon\Carbon::parse($value->date)))
                            <span style="background:#2d7bf1" class="harga">Hari Ini</span>
                            @else
                            <span style="background:#57e021" class="harga">Segera</span>
                            @endif
                        </div>
                        <div class="course_content">

                            <h4 class="">
                                <a target="_blank" href="https://www.instagram.com/rumahkoreaedu/">{{$value->name}}</a>
                            </h4>
                            <h4
                                class="jadwal">{{\Carbon\Carbon::parse($value->date)->isoformat('dddd, D MMMM Y')}}</h4>
                                @if(\Carbon\Carbon::now()->lt(\Carbon\Carbon::parse($value->date)))
                            <a style="color:#004157" target="_blank"
                                href="https://{{\Str::limit($value->description,150)}}">
                                <u style="color:#004157">Daftar Sekarang</u>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Event =================-->

<!--================ Start Video =================-->
<div class="events_area" style="background: url('../img/element/8.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div data-aos="fade-in" data-aos-duration="2000" class="main_title">
                    <h2 class="mb-3 ">Video</h2>
                    <p>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            @foreach (\App\Video::limit(2)->get()->sortByDesc('created_at') as $key => $value)
            <div class="col-lg-6 col-md- ">
                <div data-aos="fade-up" data-aos-delay="500" class="single_event position-relative">
                    <div class="event_thumb 6 mt-4">
                        <?php
                $value->url_embed = $value->link;          
                $value->url_embed = str_replace('youtu.be/','www.youtube.com/embed/', $value->url_embed);
                $value->url_embed = str_replace('watch?v=','embed/', $value->url_embed);
                ?>
                        <iframe class="video" src="{{$value->url_embed}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <h4 style="color:#004157">{{$value->name}}</h4>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12">
                <div class="text-center pt-lg-5 pt-3">
                    <a href="https://www.youtube.com/channel/UChIBJIAOf8wo_zM2hE7LdFw" class="event-link" style="color: #004157">
                        View All Video <img src="img/next.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Video =================-->

<!--================ Start Kerja Sama =================-->
{{-- <section class="feature_area section_gap_top title-bg" style="background: white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3 ">Kerja Sama</h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div style="text-align:center" class="row justify-content-center">
            @foreach (\App\Partner::all() as $key => $value)
            <div class="col-lg-4 ">
                <div class="single_course">
                    <div class="partner">

                        <img style="width: 75%" class="img-fluid" src="/images/partner/{{$value->picture}}" alt="" />
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>
<!--================ End Kerja Sama =================--> --}}

<!--================ Start Testimoni =================-->

<section class="trainer_area " style="background: url('../img/element/9.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div data-aos="fade-in" data-aos-duration="2000"class="main_title">
                    <h2 class="mb-3" style="color: #004157">Kata mereka yang sudah belajar di Rumah Korea
                    </h2>
                </div>
            </div>
        </div>
        <div class="row col-lg-12 justify-content-center ">
            <div class="owl-carousel testi_slider">
                @foreach (\App\Testimoni::all() as $key => $value)
                <div data-aos="fade-up" data-aos-delay="500" class="single-trainer">
                    <div class="thumb ustify-content-sm-center">
                        <img style="height:300px" class=" img-fluid" src="/images/testimoni/{{$value->picture}}"
                            alt="" />
                    </div>
                    <div style="height: 300px" class="meta-text text-sm-center">
                        <h4 class="text-center ">{{$value->name}}</h4>
                        <hr>
                        <p class="designation text-justify mt-2">{{$value->testimoni}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!--================ End Testimoni =================-->
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $("#btn-belum").click(function () {
            var targetDistance = 100;
            $('html, body').animate({
                scrollTop: $("#section2").offset().top - targetDistance
            }, 2000);
        });
        $("#btn-sudah").click(function () {
            var targetDistance = 80;
            $('html, body').animate({
                scrollTop: $("#section1").offset().top - targetDistance
            }, 2000);
        });
     
    });

</script>
@endpush
