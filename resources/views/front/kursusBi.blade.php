@extends('layout.front.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('../img/background-kursus-indo/1.png') no-repeat;background-size:cover;background-position:center;padding:50px 0px 150px 0px">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                data-aos="fade-up">
                <div class="headline-kursus-bi">
                    <h1 
                        style="font-family: 'Nanum Pen Script', cursive;margin-bottom:25px">
                        인도네시아 현지 사람들과 소통을 적응하기 위해 스스로 인니어를 배웠는데 많은 어려움을 만났다면..?</h1>
                    <h4 style="color:#004157; font-family: 'Noto Sans KR', sans-serif;">본인한테는 인니어 <b class="text-white">교사가</b> 필요!</h4>
                    <h4 style="color:#004157 ;font-family: 'Noto Sans KR';line-height:30px">본인의 여유 시간에 인니어 교사와 같이 인니어를 배우면서
                        <span><br>일상생활</span> 속에서도 할 수 있습니다!

                        </h1>
                        <a target="_blank" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin belajar bahasa indonesia " class="primary-btn2">지금 바로 등록하기</a>
                </div>
            </div>
            <div class="kursusbi-header-img col-lg-5 order-1 order-lg-2  hero-img ">
                <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_omixcbvz.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
        </div>
    </div>
</section><!-- End Hero -->



<section class="section_gap_top" style="background: url('../img/background-kursus-indo/2.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="sub-title col-12 mb-5 mb-md-7">
                <h2 style="font-family: 'Noto Sans KR', sans-serif;" class="text-center">등록 후 본인이 받을 이익은…?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/free.png')}}" width="100"
                        alt="..." />
                    <h3 style="color: #004157;font-family: 'Noto Sans KR', sans-serif;" class="h5 mb-4 font-base">무료 등록비
                    </h3>
                    <p class="lh-lg"> </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/reading-book.png')}}"
                        width="100" alt="..." />
                    <h3 style="color: #004157;font-family: 'Noto Sans KR', sans-serif;" class="h5 mb-4 font-base">무료
                        e-모듈 자료 및 연습과 성적증면서 </h3>
                    <p class="text-left"> </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/online-lesson.png')}}"
                        width="100" alt="..." />
                    <h3 style="color: #004157;font-family: 'Noto Sans KR', sans-serif;" class="h5 mb-4 font-base"> 한국말을
                        잘 하는 교사</h3>
                    <p class="text-life"></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/feedback.png')}}" width="100"
                        alt="..." />
                    <h3 style="color: #004157;font-family: 'Noto Sans KR', sans-serif;" class="h5 mb-4 font-base">새로운 한국
                        식 적응 학습과 종헙적인 자료와 연습이 <span><br> 사용되는 학습 방법</h3>
                    <p class="text-left"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
<section class="" style="padding:100px 0px 100px 0px;background: url('../img/background-kursus-indo/3.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">

        <div class="row justify-content-center no-gutters ">
            <div style="" class="col-lg-4 order-1 order-lg-2 no-gutters" data-aos="">
                <a data-fancybox="jadwal-korean" href="/img/korean-a.png">
                    <img src="{{asset('img/korean-a.png')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div style="" class="col-lg-4 order-1 order-lg-2 " data-aos="">
                <a data-fancybox="jadwal-korean" href="/img/korean-b.png">
                    <img src="{{asset('img/korean-b.png')}}" class="img-fluid" alt="">
                </a>
            </div>
            <div  class="col-lg-4 order-1 order-lg-2 " data-aos="">
                <a data-fancybox="jadwal-korean" href="/img/korean-request.png">
                    <img src="{{asset('img/korean-request.png')}}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>

</section>

<div  class="site-section justify-content-center section_gap_top" id="what-we-do-section" style="background: url('../img/background-kursus-indo/4.png') no-repeat;background-size:cover;background-position:center;padding-bottom:20px">
    <div class="container">
        <div class="row  text-center justify-content-center">
            <div class="sub-title col-lg-12 section-title">
                <h2 style="color: #004157" class=" ">루마 코리아에서 인니어를 배우게 되면 이것들을 배울 겁니다</h2>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-10 ">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2>A1급 (BIPA 1)</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-indonesia.a1')}}" class="readmore">더 알아보기</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> A2급 (BIPA 2)</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-indonesia.a2')}}" class="readmore">더 알아보기</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> B1급 (BIPA 3)</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-indonesia.b1')}}" class="readmore">더 알아보기</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> B2급 (BIPA 4)</h2>
                            <p></p>
                            <p><a href="{{route('front.detail-kelas-indonesia.b2')}}" class="readmore">더 알아보기</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> C1급 (BIPA 5)</h2>
                            <p></p>
                            <p><a style="color:gray" href="#" class="readmore">준비 중</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="service h-100">
                            <h2> C2급 (BIPA 6)</h2>
                            <p></p>
                            <p><a style="color:gray" href="#" class="readmore">준비 중</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        



    </div>
</div> <!-- END .site-section -->

<section class="section_gap" style="background: url('../img/background-kursus-indo/5.png') no-repeat;background-size:cover;background-position:center">
    <div class="container">
<div class="col-lg-12 ml-lg-5 ">
        <div class="row ml-lg-5 no-gutters justify-content-center ">
            <div class="col-lg-4 ">
                <h2>등록은 여기!</h2>
                <p style="font-size: 18px">인도네시아어를 배울 기회가 지금입니다. <span><br>지금 바로 등록합니다.</span></p>
            </div>
            <div class="col-lg-5  ml-lg-5">
                <a style="font-size: 20px" class="primary-btn2 ml-lg-5" target="_blank" href="https://wa.me/+6287812464174?text=Halo minko! saya ingin belajar bahasa korea">
                    지금 등록하기
                </a>
            </div>
        </div>
</div>
    </div>
</section>

@endsection



