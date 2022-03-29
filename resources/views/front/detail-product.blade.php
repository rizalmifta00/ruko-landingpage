@extends('layout.front.app')
@section('content')


<section class="section_gap">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-5 ">
                <div class="detail_kelas ">
                    <img style="height: 440px;" src="{{asset('img/book/A1.jpg')}}" class="img-fluid">
                </div>
            </div>
            <div style="padding:0px 0px" class="col-sm-6   ">
                <div class="detail_kelas_text">
                    <h1 style="font-family: 'Noto Sans KR'" class="mb-4">A1급 (BIPA 1)</h1>
                    <h3 style="font-family: 'Noto Sans KR'" class="mb-3">이번 등급의 자료 내용 :</h3>
                    <ul class=" mb-3">
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">자기 소개, 개인 정보, 개인 외모, 가족</h4>
                        </li>
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">일상생활, 취미, 의사소통, 대중 교통, 등. </h4>
                        </li>
                    </ul>
                    <h4
                        style="font-family: 'Noto Sans KR'; line-height: 30px;text-align:justify;font-size:16px;margin-bottom:20px">
                        수업은 인도네시아 교육 문화부가 출판하는 이 모듈로 사용해서 시작할 겁니다. 이 모듈은
                        제일 간단한 문장으로 쓰여서 본인이 쉽게 이해할 수 있습니다. 본인이 1 급에서 공부를 잘
                        하면 다음 등급의 자료를 공부도 잘 할 수 밖에 없습니다. 그러면 인니어 수업을 지금
                        시작할까요?
                    </h4>
                    <ul class="list">
                        <li style='list-style-type: none'>
                            <h4><span>개인 수업</span> : 700 USD</h4>
                        </li>
                        <li style='list-style-type: none'>
                            <h4><span>그룹 수업</span> : 350 USD </h4>
                        </li>
                    </ul>
                    <div class="btn-detail">
                        <a class="primary-btn2 mt-3" href="">인니어 수업에 등록하기 </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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
                        style="font-family: 'Noto Sans KR'; line-height: 30px;text-align:justify;font-size:15px;margin-bottom:20px">
                        2 급 수업 단원은 1 급 수업 단원보다 더 많습니다. 2 급에서은 인도네시아 사람들과 실습
                        가능한 대화 자료를 공부하기가 시작할 겁니다. 그럼 인도네시아어 대화 연습
                        바로시작할까요?

                    </h4>
                    <ul class="list">
                        <li style='list-style-type: none'>
                            <h4><span>개인 수업</span> : 900 USD</h4>
                        </li>
                        <li style='list-style-type: none'>
                            <h4><span>그룹 수업</span> : 500 USD </h4>
                        </li>
                    </ul>
                    <div class="btn-detail">
                        <a class="primary-btn2 mt-3" href="">인니어 수업에 등록하기 </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row no-gutters">
            <div class="col-sm-5 ">
                <div class="detail_kelas ">
                    <img style="height: 440px;" src="{{asset('img/book/B1.jpg')}}" class="img-fluid">
                </div>
            </div>
            <div style="padding:0px 0px" class="col-sm-6   ">
                <div class="detail_kelas_text">
                    <h1 style="font-family: 'Noto Sans KR'" class="mb-4">3 급 (B-1)</h1>
                    <h3 style="font-family: 'Noto Sans KR'" class="mb-3">3 급의 자료 내용은:</h3>
                    <ul class=" mb-3">
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">취미 2, 여행 2, 여행지,</h4>
                        </li>
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">직업, 교육 2, 학교 생활에 대한 것입니다. </h4>
                        </li>
                    </ul>
                    <h4
                        style="font-family: 'Noto Sans KR'; line-height: 30px;text-align:justify;font-size:15px;margin-bottom:20px">
                        3 급 단원수는 2 급 단원수와 똑 같지만 이제는 인니어 선생님이 단어 뜻을 그대로 알려주는
                        게 아니라 본인도 직접 알아봐야 더 알맞은 뜻을 알 수 있을 겁니다.

                    </h4>
                    <ul class="list">
                        <li style='list-style-type: none'>
                            <h4><span>개인 수업</span> : 900 USD</h4>
                        </li>
                        <li style='list-style-type: none'>
                            <h4><span>그룹 수업</span> : 500 USD </h4>
                        </li>
                    </ul>
                    <div class="btn-detail">
                        <a class="primary-btn2 mt-3" href="">인니어 수업에 등록하기 </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row no-gutters">
            <div class="col-sm-5 ">
                <div class="detail_kelas ">
                    <img style="height: 440px;" src="{{asset('img/book/B2.jpg')}}" class="img-fluid">
                </div>
            </div>
            <div style="padding:0px 0px" class="col-sm-6   ">
                <div class="detail_kelas_text">
                    <h1 style="font-family: 'Noto Sans KR'" class="mb-4">4 급 (B-2)</h1>
                    <h3 style="font-family: 'Noto Sans KR'" class="mb-3">3 급의 자료 내용은:</h3>
                    <ul class=" mb-3">
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">프로필, 사회적 상호 작용, 우리 환경, 주변 사회, </h4>
                        </li>
                        <li>
                            <h4 style="font-family: 'Noto Sans KR'">교육 문화, 민속학, 생활 양식, 과학기술 </h4>
                        </li>
                    </ul>
                    <h4
                        style="font-family: 'Noto Sans KR'; line-height: 30px;text-align:justify;font-size:15px;margin-bottom:20px">
                        4 급에서는 주변과 관련 있는 단어들이 많아졌습니다. 인도네시아 사람들과의 대화가 더 잘
                        할 수 밖에없고 훨씬 더 재미있을 겁니다. 이제공부하기가 책뿐만 아니라 인도네시아어 영화,
                        기사, 팟캐스트까지 도 공부 가능합니다.


                    </h4>
                    <ul class="list">
                        <li style='list-style-type: none'>
                            <h4><span>개인 수업</span> : 900 USD</h4>
                        </li>
                        <li style='list-style-type: none'>
                            <h4><span>그룹 수업</span> : 500 USD </h4>
                        </li>
                    </ul>
                    <div class="btn-detail">
                        <a class="primary-btn2 mt-3" href="">인니어 수업에 등록하기 </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

    </div>

</section>



@endsection
