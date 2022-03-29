@extends('layout.front.app')
@section('content')


<section class="section_gap_top">
    <div class="container">
       <div class="row no-gutters">
            <div class="col-sm-5 ">
                <div class="detail_kelas ">
                    <img style="height: 440px;" src="{{asset('img/book/A2.jpg')}}" class="img-fluid">
                </div>
            </div>
            <div style="padding:0px 0px" class="col-sm-6   ">
                <div class="detail_kelas_text">
                    <h1 style="font-family: 'Noto Sans KR'" class="mb-4">A2급 (BIPA 2)</h1>
                    <h3 style="font-family: 'Noto Sans KR'" class="mb-3">더 재미있을 겁니다. 이번 등급의 자료 내용은:</h3>
                    <ul class=" mb-3">
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">계절, 직업, 공공시설, 사고 파는 활동 (시장) 2, 휴일, 여행,</h4>
                        </li>
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">전화기, 교육, 문화, 과학기술에 대한 자료입니다. </h4>
                        </li>
                    </ul>
                    <h4
                        style="font-family: 'Noto Sans KR'; line-height: 30px;text-align:justify;font-size:16px;margin-bottom:20px">
                        2 급 수업 단원은 1 급 수업 단원보다 더 많습니다. 2 급에서은 인도네시아 사람들과 <span><br>실습</span>
                        가능한 대화 자료를 공부하기가 시작할 겁니다. 그럼 인도네시아어 대화 연습
                        <span><br>바로시작할까요?</span>

                    </h4>
                   
                    <div class="btn-detail">
                        <a class="primary-btn2 mt-5" href="https://wa.me/+6287812464174">인니어 수업에 등록하기 </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

    </div>

</section>

<section class="mt-5">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="sub-title col-12 mb-5 mb-md-7">
                <h2 class="text-center">등록 후 본인이 받을 이익은…?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/free.png')}}" width="100"
                        alt="..." />
                    <h3 style="color: #004157" class="h5 mb-4 font-base">무료 등록비</h3>
                    <p class="lh-lg">  </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/reading-book.png')}}"
                        width="100" alt="..." />
                    <h3  style="color: #004157" class="h5 mb-4 font-base">무료 e-모듈 자료 및 연습과 성적증면서 </h3>
                    <p class="text-left"> </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/online-lesson.png')}}"
                        width="100" alt="..." />
                    <h3   style="color: #004157" class="h5 mb-4 font-base"> 한국말을 잘 하는 교사</h3>
                    <p class="text-life"></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('img/feedback.png')}}" width="100"
                        alt="..." />
                    <h3  style="color: #004157" class="h5 mb-4 font-base">새로운 한국 식 적응 학습과 종헙적인 자료와 연습이 사용되는 학습 방법</h3>
                    <p class="text-left"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
  <div style="margin-bottom:100px"class="site-section justify-content-center" id="what-we-do-section">
      <div class="container">
        <div class="row  text-center justify-content-center">
          <div class="sub-title col-lg-12 section-title">
            <h2 style="color: #004157" class="title ">루마 코리아에서 인니어를 배우게 되면 이것들을 배울 겁니다</h2>
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
        <div class="row">
            <div class="sub-title col-lg-12 text-center">
                <h2>등급, 수업 시간, 학습 과정, 총 수업, 및 비용은 다음 버튼을 누르시면 됩니다.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center" >
                <a class="primary-btn2"href="https://wa.me/+6287812464174" >
            지금 등록하기
                </a>
            </div>

        </div>
        
      </div>
    </div> 
    



@endsection
