@extends('layout.front.app')
@section('content')

<section id="hero" style="background: url('../img/background-ingin-korea/1.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row   ">
            <div class="col-lg-8 pt-5 pt-lg-0  order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div class="ingin-korea-header-text">
                    <h1 style="margin-bottom: 15px">Pengen lanjut studi atau jalan-jalan
                        ke Korea Selatan tapi terkendala biaya?</h1>
                    <h4 style="line-height:28px;margin-bottom:30px">Sekarang, pergi ke Korea Selatan
                        bukan sekadar mimpi <span><br>Capai mimpimu ke Korea Selatan bersama Hanwha Bucket List
                            Plan</span>
                        !</h4>

                    <a href="https://bucketlistplan.co.id/" class="primary-btn2">Apa itu Hanwha Bucket List Plan?</a>
                </div>
            </div>
            <div  class="col-lg-4 order-1  order-lg-2 ingin-korea-hero-img" >
                <lottie-player class="img" src="https://assets4.lottiefiles.com/packages/lf20_WAMQ5G.json" background="transparent"
                    speed="1" loop autoplay></lottie-player>
            </div>
        </div>

    </div>
</section><!-- End Hero -->
<section>
    <img class="img-fluid w-100"
    src="{{asset('img/road-map.png')}}" alt="">
</section>

<div class="wisata section_gap " style="background: url('../img/background-ingin-korea/3.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row-fluid ">
            <div class="sub-title col-lg-10 mb-3 ">
                <h2>Selain wisata dalam kota Seoul, kamu juga bisa berwisata ke luar kota Seoul, seperti
                        mengunjungi:</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-6 shadow-lg rounded-lg ">
                <div class="row ">
                    <div class="col-lg-6 col-sm-6">
                        <img class="mt-4 img-fluid" src="{{asset('img/wisata/petite-france.jpg')}}">
                    </div>
                    <div class="col-lg-6 col-sm-6 text-justify">
                        <h4 class="mb-4 mt-4">Petite France (페팃 프랑스) </h4>
                        <p>Pengen ke Perancis? Nggak usah jauh-jauh, di
                            Korea Selatan juga ada tempat wisata tiruan yang
                            nggak kalah memberi suasana ala Perancis.
                            Tempat wisata ini dulunya adalah lokasi syuting
                            drama My Love from The Star, loh.

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 shadow-lg rounded-lg">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 order-2 order-lg-1 d-flex flex-column ">
                        <img class="mt-4 img-fluid" src="{{asset('img/wisata/everland-themepark.jpg')}}">
                    </div>
                    <div class="col-lg-6 col-sm-6 order-1 text-justify">
                        <h4 class="mb-4 mt-4">Everland Theme Park (에버랜드 놀이공원) </h4>
                        <p> Tempat paling seru untuk melepas penat dengan
                            cara berteriak, salah satunya adalah Everland
                            Theme Park. Coba deh satu kali Naik T-Express,
                            dijamin, nggak akan berhenti teriak!

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 shadow-lg  mt-3 rounded-lg">
                <div class="row ">
                    <div class="col-lg-6 col-sm-6">
                        <img class="mt-4 img-fluid" src="{{asset('img/wisata/haundae.jpg')}}">
                    </div>
                    <div class="col-lg-6 col-sm-6 text-justify">
                        <h4 class="mb-4 mt-4">Pantai Hae-undae (해운대해수욕장) </h4>
                        <p>Kalau bosan dengan wisata kota, sangat
                            direkomendasikan untuk kamu mampir ke Pantai
                            Hae-undae yang berlokasi di Busan.
                            Pantai ini menawarkan pemandangan yang tidak
                            akan kamu temukan di kota seperti Seouuul!

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 shadow-lg mt-3 rounded-lg">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <img class=" mt-4 img-fluid" src="{{asset('img/wisata/pulau-jeju.jpg')}}">
                    </div>
                    <div class="col-lg-6 col-sm-6 text-justify">
                        <h4 class="mb-4 mt-4">Pulau Jeju (제주도) </h4>
                        <p> Ingin yang lebih menantang dan lebih jauh dari
                            Busan? Yep, dari Seoul kamu bisa terbang dan
                            mendarat di Pulau Jejudo, pulau Balinya Korea
                            Selatan. Pulau Jejudo istimewa. Pulang dari Pulau
                            Jejudo, kamu akan pulih dari kepenatanmu 100%!
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="info-univ" style="background: url('../img/background-ingin-korea/4.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div data-aos="fade" data-aos-duration="2000" style="margin-top:100px" class="main_title ">
                    <h2 class="mb-3" style="color: #004157">Ada pikiran untuk melanjutkan studi di Korea Selatan?</h2>
                    <h4 style="color: #004157" class="">
                        Cari tahu lebih dulu kampus yang cocok dengan kamu    
                    </h4>
                    <h4> Kunjungi langsung kampus-kampus terbaik di Korea Selatan dan sudah diakui dunia</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-6">
                <div class="row text-center">
                     @foreach (\App\Universitas::where('sub_menu','Ingin Korea')->where('negara','korea')->get() as $key
                    => $value)
                    <div class="col-md-3 course bg-transparent h-100 align-self-stretch text">
                        <figure data-aos="fade-in" data-aos-duration="2000" class="m-0">
                            <a data-fancybox="gallery" href="/images/universitas/{{$value->picture}}">
                                <img style="height: 200px;object-fit:cover;object-position:center" src="/images/universitas/{{$value->picture}}" alt="Image" class="img-fluid " /></a>
                        </figure>
                        <div data-aos="fade-up" data-aos-delay="200" class="product-title text-center ">
                            <h4 class=" mt-lg-4">
                                <a style="color:#002347" target="_blank"
                                    href="https://wa.me/+6287812464174?text=Halo! Saya ingin membeli produk dari Rumah Korea.">{{$value->name}}
                                </a>
                            </h4>
                            <p class="text-white">
                                {{$value->description}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<section class="trainer_area" style="background: url('../img/background-ingin-korea/5.png') no-repeat; background-size:cover;background-position:center;" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div data-aos="fade" data-aos-duration="2000" class="main_title">
                    <h2 class="mt-5" style="color: #004157">Kamu juga pasti bisa lanjut studi di Korea seperti tutor-tutor Rumah Korea</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach (\App\Promotion::all() as $key => $value)
            <div data-aos="fade-up" data-aos-delay="200" class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="border border-primary">
                <div  class="thumb    justify-content-sm-center">
                    <a data-fancybox="layanan"  href="/images/promotion/{{$value->picture}}">
                    <img  class="img-fluid" src="/images/promotion/{{$value->picture}}" alt="" />
                    </a>
                </div>
                <div  class="meta-text text-sm-center">
                    
                    <p style="font-size:16px " class="designation text-center">{{$value->description}}</p>
                    
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
            </div>
            @endforeach
            

        </div>
       
        
    </div>

</section>

<div class="popular_courses section_gap"style="background: url('../img/background-ingin-korea/6.png') no-repeat; background-size:cover;background-position:center;">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-10  shadow p-4  bg-transparent rounded ">
                <div style="" data-aos="fade-in" data-aos-duration="2000" class="main_title mb-3">
                    <h2 style="" class="mb-3">Wujudkan mimpimu mulai tahun ini
                    </h2>
                    <h6 class="mb-2" style="font-size: 20px;line-height:25px">Mau ke Korea, nggak perlu lagi khawatir
                        tentang,<span><br>
                            “Tapi aku nggak bisa bahasa Korea. Takut tersesat, takut nggak bisa pulang.”</span>
                    </h6>
                    <h6 class="mb-2" style="font-size: 20px">
                        ATAU
                    </h6>
                    <h6 class="mb-2" style="font-size: 20px;line-height:25px">
                        “Aku belum lancar bahasa Inggris, apalagi bahasa Korea. Gimana, dong?”<span><br>
                            dan sebagainya,</span>
                    </h6>
                    <h6 style="font-size: 20px;line-height:25px">
                        Karena sekarang, RUMAH KOREA & HANWHA LIFE BUCKET LIST PLAN<span><br>
                            akan bantu persiapanmu ke Korea Selatan jadi jauh lebih matang~</span>

                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" section_gap" style="background: url('../img/background-ingin-korea/7.png') no-repeat; background-size:cover;background-position:center;">
        <div class="text-center">
            <h2 style="">Persiapan itu di antaranya...</h2>
        </div>
        <div class="text-center">
            <img class="img-fluid w-75"src="{{asset('img/ingin-korea-chart.png')}}" alt="">
            
        </div>
     </section>   
<section style="background: url('../img/background-ingin-korea/8.png') no-repeat; background-size:cover;background-position:center;padding:20px 0px 0px 0px" >
<div  class=" row  justify-content-center ml-0 mr-0" >
    <h2>Ayo, tunggu apa lagi? Kamu satu langkah lebih dekat menuju mimpimu</h2>
<img  class="pt-lg-10 mt-lg-5 img-fluid w-75  "src="{{asset('img/poster-blp.png')}}" alt="">

</div>
<div class="row justify-content-center ml-0  mr-0 pb-5">
    <a target="_blank" href="https://bucketlistplan.co.id/" class="primary-btn2 mt-lg-5">Daftar Sekarang</a>
</div>
</section>
<!--================ End Produk Korea Gaul =================-->
<!--================ Start Produk Lainnya =================-->



@endsection
