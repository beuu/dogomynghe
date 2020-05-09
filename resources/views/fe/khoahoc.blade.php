@extends('layouts.fe')
@section('content')
    <!--Banner-->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('fe/image/bg_pageSmall.png')}}">
        </div>
    </div><!--Banner_END-->

    <div class="container text-center mt_40 mb_40">
        <img src="{{asset('fe/image/iconinfo_03.png')}}">
    </div>

    <!--qoutes-->
    <div class="qoutes wpx1470">
        <p class="qoutes_content">
            Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
        </p>
    </div><!--/qoutes_END-->

    <!--Mục đích-->
    <div class="wpx1470 wdthIMG">
        <div class="row search_relative">
            <div class="col-md-7 col-sm-7 col-xs-12 oject_img">
                <img src="{{asset('fe/image/toanhoc_01.jpg')}}">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust">
                <h2 class="title_h2">Tất cả khởi nguồn từ một triết lý...</h2>
                <p class="font18">
                    Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
                </p>
            </div>
        </div>
    </div>

    <!--Đặc điểm khóa học-->
    <div class="wpx1470 wdthIMG dacdiemKH">
        <h1 class="title_block font36 mt_80 mb_80">Điều gì làm nên sự khác biệt tại IEG</h1>
        <div class="row search_relative">
            <div class="col-md-7 col-sm-7 col-xs-12 oject_img pull-right">
                <img src="{{asset('fe/image/toanhoc_02.jpg')}}">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust absoluteLeft_0">
                <h2 class="title_h2"><img src="{{asset('fe/image/ico_01.png')}}" />Đề cập <br/> có hệ thống</h2>
                <p class="font18">
                    Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
                </p>
            </div>
        </div>
        <div class="row search_relative mt_160">
            <div class="col-md-7 col-sm-7 col-xs-12 oject_img">
                <img src="{{asset('fe/image/toanhoc_03.jpg')}}">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust">
                <h2 class="title_h2"><img src="{{asset('fe/image/ico_02.png')}}" />kích thích <br/> tính sáng tạo</h2>
                <p class="font18">
                    Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
                </p>
            </div>
        </div>
        <div class="row search_relative mt_160 mb_100">
            <div class="col-md-7 col-sm-7 col-xs-12 oject_img pull-right">
                <img src="{{asset('fe/image/toanhoc_04.jpg')}}">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust absoluteLeft_0">
                <h2 class="title_h2"><img src="{{asset('fe/image/ico_03.png')}}" />phát triển <br/> tư duy</h2>
                <p class="font18">
                    Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
                </p>
            </div>
        </div>
    </div><!--/Đặc điểm khóa học_END-->

    <!--Lộ trình học-->
    <div class="wpx1470 lotrinhhoc">
        <h1 class="title_block font36 mt_80 mb_80">IEG đồng hành cùng con như thế nào</h1>
        <div class="flex-box">
            <div class="col-3-cust font24">
                Từ 4 đến 5 tuổi
            </div>
            <div class="col-3-cust font24">
                Từ 6 đến 9 tuổi
            </div>
            <div class="col-3-cust font24">
                Từ 9 đến 12 tuổi
            </div>
            <div class="col-3-cust font24">
                Từ 13 đến 15 tuổi
            </div>
        </div>
    </div><!--/Lộ trình học_END-->
    <h1 class="title_block">Cảm nghĩ</h1>
    <div class="container">
        <div class="wpx1470 block_03">
            <div class="owl-carousel owl-theme sliderInfo cust_btn_nextPrev">
                <div class="item">
                    <a href="">
                        <img src="{{ asset('fe/image/img_01.jpg') }}">
                        <div class="sliderInfo--text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </div>
                    </a>
                    <h5 class="h5--sliderInfo--text">Nguyễn Văn A</h5>
                    <p class="p--sliderInfo--text">Lớp Toán Học - Giải thưởng Olypic Toán 2019</p>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{ asset('fe/image/img_02.jpg') }}">
                        <div class="sliderInfo--text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </div>
                    </a>
                    <h5 class="h5--sliderInfo--text">Nguyễn Văn A</h5>
                    <p class="p--sliderInfo--text">Lớp Toán Học - Giải thưởng Olypic Toán 2019</p>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{ asset('fe/image/img_03.jpg') }}">
                        <div class="sliderInfo--text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </div>
                    </a>
                    <h5 class="h5--sliderInfo--text">Nguyễn Văn A</h5>
                    <p class="p--sliderInfo--text">Lớp Toán Học - Giải thưởng Olypic Toán 2019</p>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{ asset('fe/image/img_02.jpg') }}">
                        <div class="sliderInfo--text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </div>
                    </a>
                    <h5 class="h5--sliderInfo--text">Nguyễn Văn A</h5>
                    <p class="p--sliderInfo--text">Lớp Toán Học - Giải thưởng Olypic Toán 2019</p>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{ asset('fe/image/img_01.jpg') }}">
                        <div class="sliderInfo--text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </div>
                    </a>
                    <h5 class="h5--sliderInfo--text">Nguyễn Văn A</h5>
                    <p class="p--sliderInfo--text">Lớp Toán Học - Giải thưởng Olypic Toán 2019</p>
                </div>
            </div>
            <p><a class="btn_boxMore" href="#">Xem thêm...</a></p>
        </div>
    </div>
    <!--block_04-->
    <div class="container wpx920_width100vh">
        <div class="row">
            <div class="wpx1470 block_04 bg_vang">
                <h4 class="text-center font24 colorBleck">Đăng ký tham gia kiểm tra năng lực</h4>
                <form class="row" action="{{ route('nangluc')}}" method="POST" id="nangluc">
                    <div class="col-md-12 flex-box form-flex mb_30">
                        @csrf
                        <div class="col-4-cust">
                            <input type="text" name="name" required placeholder="Họ và tên phụ huynh...">
                        </div>
                        <div class="col-4-cust">
                            <input type="text" name="phone" required placeholder="Số điện thoại">
                        </div>
                        <div class="col-4-cust">
                            <input type="text" name="email" required placeholder="Email...">
                        </div>
                    </div>
                    <div class="col-md-12 flex-box form-flex mb_30">
                        <div class="col-4-cust">
                            <input type="text" name="namec" required placeholder="Họ và tên học sinh...">
                        </div>
                        <div class="col-4-cust">
                            <input type="text" name="nam" required placeholder="Năm sinh học sinh">
                        </div>
                        <div class="col-4-cust">
                            <input type="text" name="trungtam" required placeholder="Trung tâm...">
                        </div>
                    </div>
                    <div class="col-md-12 flex-box form-flex">
                        <div class="col-8-cust">
                            <textarea placeholder="Nội dung" required name="text"></textarea>
                        </div>
                        <div class="col-4-cust flex-box flext-wrapRev">
                            <a class="btn_block04 bg_xanhnuocbien" style="margin-bottom: 4px;"  href="#">Nhập lại</a>
                            <a class="btn_block04 bg_xanhnuocbien" style="margin-bottom: 4px;"  href="#" onclick="document.getElementById('nangluc').submit();">Gửi đi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/block_04_END-->

    <!--Khóa học-->
    <div class="container wpx920_width100vh">
        <h1 class="title_block font36">CÁC KHOÁ HỌC TẠI IEG</h1>
        <div class="row flex-box block_01">
            <div class="col-2-cust text-center">
                <img src="{{asset('fe/image/iconinfo_01.png')}}">
                <p class="info_KH">Tiếng Anh</p>
            </div>
            <div class="col-2-cust text-center">
                <img src="{{asset('fe/image/iconinfo_02.png')}}">
                <p class="info_KH">Khoa Học</p>
            </div>
            <div class="col-2-cust text-center">
                <img src="{{asset('fe/image/iconinfo_04.png')}}">
                <p class="info_KH">Socrates</p>
            </div>
            <div class="col-2-cust text-center">
                <img src="{{asset('fe/image/iconinfo_05.png')}}">
                <p class="info_KH">IELTS</p>
            </div>
        </div>
    </div><!--/Khóa học_END-->

    <!--block_05-->
    <div class="container-fluid">
        <h1 class="title_block">ĐỐi tác</h1>
        <div class="row block_05 mb_0">
            <div class="wpx1470">
                <div class="wpx1200">
                    <div class="owl-carousel owl-theme slider_doitac cust_btn_nextPrev">
                        <div class="item"><img src="{{asset('fe/image/logo_dt_01.png')}}"></div>
                        <div class="item"><img src="{{asset('fe/image/logo_dt_02.png')}}"></div>
                        <div class="item"><img src="{{asset('fe/image/logo_dt_01.png')}}"></div>
                        <div class="item"><img src="{{asset('fe/image/logo_dt_02.png')}}"></div>
                        <div class="item"><img src="{{asset('fe/image/logo_dt_01.png')}}"></div>
                        <div class="item"><img src="{{asset('fe/image/logo_dt_02.png')}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/block_05_END-->
@endsection
