@extends('layouts.fe')
@section('content')
<!--Banner-->
<div class="container-fluid">
		<div class="row">
			<img src="image/bgcc.png"style="width:100%">
		</div>
	</div><!--Banner_END-->

	<div class="wpx1470 text-center mt_40 mb_40">
		<img src="image/lichsu.png">
		<h1 class="title_block font36 mt_80 mb_80">lịch sử</h1>
	</div>

	<!--qoutes-->
	<div class="qoutes wpx1470">
		<p class="qoutes_content">
			Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
		</p>
	</div><!--/qoutes_END-->

	<!--Mục đích-->

	<!--Đặc điểm khóa học-->
	<div class="wpx1470 wdthIMG dacdiemKH">
		<div class="row search_relative mt_160 no-margin">
			<div class="col-md-7 col-sm-7 col-xs-12 oject_img">
				<img src="image/imgsumenh.png">
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust">
				<h2 class="title_h2"><img src="image/sumenh.png" />Vì sao chúng tôi ở đây</h2>
				<p class="font18">
					Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
				</p>
			</div>
		</div>
		<div class="row search_relative mt_160 mb_100 no-margin">
			<div class="col-md-7 col-sm-7 col-xs-12 oject_img pull-right">
				<img src="image/imgtamnhin.png">
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust absoluteLeft_0">
				<h2 class="title_h2"><img src="image/tamnhin.png" />Chúng tôi đang muốn vẽ gì</h2>
				<p class="font18">
					Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
				</p>
			</div>
		</div>
		<div class="row search_relative mt_160 no-margin">
			<div class="col-md-7 col-sm-7 col-xs-12 oject_img">
				<img src="image/imggiatri.png">
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12 col-md-5--cust">
				<h2 class="title_h2"><img src="image/giatri.png" />Điều gì neo đậu chúng tôi</h2>
				<p class="font18">
					Tùy nội dung của mỗi buổi học và tùy trình độ, học sinh sẽ được thử sức với các dạng trò chơi và độ khó khác nhau. Đây là cách vừa kích thích trí thông minh của các em, vừa kích thích niềm đam mê Toán học và đặc biệt để việc học không còn là gánh nặng mà là niềm vui cho mỗi ngày đến lớp
				</p>
			</div>
		</div>
	</div><!--/Đặc điểm khóa học_END-->

	<!--block_03-->
    <div class="container wpx920_width100vh" data-aos="fade-up-right">
        <h1 class="title_block" style="margin-top:90px">Cách chúng tôi lan
			tỏa</h1>
        <div class="row">
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
    </div><!--/block_03_END-->

	<!--block_05-->
	<div class="container-fluid">
		<h1 class="title_block" style="margin-top:90px">Đối tác & Đồng hành</h1>
		<div class="row block_05 mb_0">
			<div class="wpx1470">
				<div class="wpx1200">
					<div class="owl-carousel owl-theme slider_doitac cust_btn_nextPrev">
					    <div class="item"><img src="image/logo_dt_01.png"></div>
					    <div class="item"><img src="image/logo_dt_02.png"></div>
					    <div class="item"><img src="image/logo_dt_01.png"></div>
					    <div class="item"><img src="image/logo_dt_02.png"></div>
					    <div class="item"><img src="image/logo_dt_01.png"></div>
					    <div class="item"><img src="image/logo_dt_02.png"></div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/block_05_END-->
@endsection
