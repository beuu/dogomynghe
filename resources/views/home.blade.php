@extends('layouts.fe')

@section('content')
    <!--Banner-->
    <div class="slider container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme banner_home">
                <div class="item">
                    <a href=""><img src="{{asset('fe/image/slide.jpg')}}"></a>
                </div>
                <div class="item">
                    <a href=""><img src="{{asset('fe/image/slide.jpg')}}"></a>
                </div>
                <div class="item">
                    <a href=""><img src="{{asset('fe/image/slide.jpg')}}"></a>
                </div>
            </div>
        </div>
    </div><!--Banner_END-->

    <!--Khóa học-->
    <div class="container wpx920_width100vh" data-aos="fade-down" data-aos-duration="500">
        <h1 class="title_block">Khóa học</h1>
        <div class="row flex-box block_01">
            <div class="col-2-cust text-center">
                <a href="{{ route('toanhoc')}}">
                <img src="{{ asset('fe/image/iconinfo_01.png') }}">
                <p class="info_KH">Tiếng Anh</p>
                </a>
            </div>
            <div class="col-2-cust text-center">
            <a href="{{ route('toanhoc')}}">
            <img src="{{ asset('fe/image/iconinfo_02.png') }}">
                <p class="info_KH">Khoa Học</p>
                </a>

            </div>
            <div class="col-2-cust text-center">
                <a href="{{ route('toanhoc')}}">
                <img src="{{ asset('fe/image/iconinfo_03.png') }}">
                <p class="info_KH">Toán Học</p>
                </a>
            </div>
            <div class="col-2-cust text-center">
            <a href="{{ route('toanhoc')}}">
            <img src="{{ asset('fe/image/iconinfo_04.png') }}">
                <p class="info_KH">Socrates</p>
                </a>

            </div>
            <div class="col-2-cust text-center">
            <a href="{{ route('toanhoc')}}">
            <img src="{{ asset('fe/image/iconinfo_05.png') }}">
                <p class="info_KH">IELTS</p>
                </a>

            </div>
        </div>
    </div><!--/Khóa học_END-->

    <!--block_02-->
    <div class="container-fluid" data-aos="fade-up">
        <h1 class="title_block">Tại IEG</h1>
        <div class="row flex-box block_02">
            <div class="col-6-cust bgInfo_1 text-right flex-box bgInfo_1_home">
                <div>
                    <div class="wpx720 pull-right">
                        <h3 class="title_bgInfo title_block mb_20">Triết lý giáo dục</h3>
                        <div class="content_bgInfo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </div>
                    </div>
                </div>
                <p><a class="btn_cust--bl2 pull-right" href="#">Tìm hiểu thêm</a></p>
            </div>
            <div class="col-6-cust bgInfo_2 flex-box bgInfo_2_home">
                <div class="numbers">
                    <div class="wpx720 pull-left flex-box">
                        <div class="col-4-cust">
                            <span class="count">7000</span>
                            <p class="font24">Học viên</p>
                        </div>
                        <div class="col-4-cust">
                            <span class="count">70000</span>
                            <p class="font24">Thí sinh</p>
                        </div>
                        <div class="col-4-cust">
                            <span class="count">70.000</span>
                            <p class="font24">Thí sinh</p>
                        </div>
                        <div class="col-4-cust">
                            <span class="count">3</span>
                            <p class="font24">Học viên</p>
                        </div>
                        <div class="col-4-cust">
                            <span class="count">50</span>
                            <p class="font24">Giải thưởng Olympic</p>
                        </div>
                        <div class="col-4-cust">
                            <span class="count">50</span>
                            <p class="font24">Giải thưởng Olympic</p>
                        </div>
                    </div>
                </div>
                <p><a class="btn_cust--bl2" href="#">Tìm hiểu thêm</a></p>
            </div>
        </div>
    </div><!--/block_02_END-->

    <!--block_03-->
    <div class="container wpx920_width100vh" data-aos="fade-up-right">
        <h1 class="title_block">IEG và tôi</h1>
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

    <!--block_04-->
    <div class="container wpx920_width100vh" data-aos="zoom-in">
        <div class="row">
            <div class="wpx1470 block_04">
                <h4 class="text-center font24">Đăng ký nhận tư vấn từ IGE</h4>
                <form class="row" action="{{ route('tuvan')}}" method="POST" id="tuvan">
                    @csrf
                    <div class="col-md-12 flex-box form-flex mb_30">
                        <div class="col-4-cust">
                            <input type="text" name="name" required placeholder="Họ và tên...">
                        </div>
                        <div class="col-4-cust">
                            <input type="text" name="phone" required placeholder="Số điện thoại">
                        </div>
                        <div class="col-4-cust">
                            <input type="text" name="email" required placeholder="Email...">
                        </div>
                    </div>
                    <div class="col-md-12 flex-box form-flex">
                        <div class="col-8-cust">
                            <textarea placeholder="Nội dung" required name="text"></textarea>
                        </div>
                        <div class="col-4-cust flex-box flext-wrapRev">
                            <a class="btn_block04" style="margin-bottom: 4px;" href="#"  >Nhập lại</a>
                            <a class="btn_block04" style="margin-bottom: 4px;" href="#" onclick="document.getElementById('tuvan').submit();">Gửi đi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/block_04_END-->

    <!--block_05-->
    <div class="container-fluid" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <h1 class="title_block">Đối tác & Đồng hành</h1>
        <div class="row block_05">
            <div class="wpx1470">
                <div class="wpx1200">
                    <div class="owl-carousel owl-theme slider_doitac cust_btn_nextPrev">
                        <div class="item"><img src="{{ asset('fe/image/logo_dt_01.png') }}"></div>
                        <div class="item"><img src="{{ asset('fe/image/logo_dt_02.png') }}"></div>
                        <div class="item"><img src="{{ asset('fe/image/logo_dt_01.png') }}"></div>
                        <div class="item"><img src="{{ asset('fe/image/logo_dt_02.png') }}"></div>
                        <div class="item"><img src="{{ asset('fe/image/logo_dt_01.png') }}"></div>
                        <div class="item"><img src="{{ asset('fe/image/logo_dt_02.png') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/block_05_END-->

    <!--block_06-->
    <div class="container-fluid" data-aos="zoom-in" data-aos-duration="1500">
        <h1 class="title_block">Chỉ đường</h1>
        <div class="row block_06">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a class="text-center iconMap" href="#iegHanoi" aria-controls="iegHanoi" role="tab" data-toggle="tab">
                        <img src="{{asset('fe/image/icoMap.png')}}">
                        <br />IEG Hà Nội
                    </a>
                </li>
                <li role="presentation">
                    <a  class="text-center iconMap"href="#iegHochiminh" aria-controls="iegHochiminh" role="tab" data-toggle="tab">
                        <img src="{{asset('fe/image/icoMap.png')}}">
                        <br />IEG Hồ Chí Minh
                    </a>
                </li>
                <li role="presentation">
                    <a class="text-center iconMap" href="#iegDanang" aria-controls="iegDanang" role="tab" data-toggle="tab">
                        <img src="{{asset('fe/image/icoMap.png')}}">
                        <br />Đà Nẵng
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="iegHanoi">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0189040072605!2d105.82900181540234!3d21.031929593044925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9f8560efe5%3A0x47879973073eb0fc!2zMTI4IFBo4buRIE5ndXnhu4VuIFRow6FpIEjhu41jLCDEkGnhu4duIELDoG4sIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1563852145886!5m2!1svi!2s"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div role="tabpanel" class="tab-pane" id="iegHochiminh">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0189040072605!2d105.82900181540234!3d21.031929593044925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9f8560efe5%3A0x47879973073eb0fc!2zMTI4IFBo4buRIE5ndXnhu4VuIFRow6FpIEjhu41jLCDEkGnhu4duIELDoG4sIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1563852145886!5m2!1svi!2s"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div role="tabpanel" class="tab-pane" id="iegDanang">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0189040072605!2d105.82900181540234!3d21.031929593044925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9f8560efe5%3A0x47879973073eb0fc!2zMTI4IFBo4buRIE5ndXnhu4VuIFRow6FpIEjhu41jLCDEkGnhu4duIELDoG4sIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1563852145886!5m2!1svi!2s"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div><!--/block_06_END-->
@endsection
