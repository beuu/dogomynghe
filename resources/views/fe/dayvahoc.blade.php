@extends('layouts.fe')
@section('content')
<!--Banner-->
<div class="container-fluid">
    <div class="row">
        <img src="{{ asset('fe/image/bg_pageSmall.png')}}" style="width:100%">
    </div>
</div><!--Banner_END-->

<div class="qoutes wpx1470 mt_100">
    <p class="qoutes_content">
        Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
    </p>
</div>

<!--Khóa học-->
<div class="container wpx920_width100vh" data-aos="fade-down" data-aos-duration="500">
        <h1 class="title_block">Khóa học</h1>
        <div class="row flex-box block_01">
            <div class="col-2-cust text-center">
                <a href="{{ route('tienganh')}}">
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
<div class="container-fluid">
    <h1 class="title_block">Tại IEG</h1>
    <div class="row flex-box block_02">
        <div class="col-6-cust bgInfo_1 text-right flex-box bg_khohoc_1">
            <div>
                <div class="wpx720 pull-right">
                    <h3 class="title_bgInfo title_block mb_20">Trại hè IKMC</h3>
                    <p><a class="btn_cust--bl2 pull-right" href="#">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
        <div class="col-6-cust bgInfo_2 flex-box bg_khohoc_2">
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
        </div>
        <div class="col-6-cust bgInfo_2 flex-box bg_khohoc_3">
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
        </div>
        <div class="col-6-cust bgInfo_1 flex-box bg_khohoc_4">
            <div>
                <div class="wpx720">
                    <h3 class="title_bgInfo title_block mb_20">IMAS</h3>
                    <p><a class="btn_cust--bl2" href="#">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
    </div>
</div><!--/block_02_END-->

@endsection
