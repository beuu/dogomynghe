@extends('layouts.fe')
@section('content')

<!--Banner-->
<div class="container-fluid">
    <div class="row">
        <img src="{{ asset('fe/image/bg_pageSmall_1.png')}}">
    </div>
</div><!--Banner_END-->

<div class="container text-center mt_40 mb_40">
    <h1 class="title_block font36">tôi và IEG</h1>
</div>

<div class="content_baiviet wpx1470">
    <div class="content_left wpx400">
        <ul class="content_left--list">
            <li class="active"><a href="#">Học viên</a></li>
            <li><a href="#">Giáo viên</a></li>
            <li><a href="#">Phụ huynh</a></li>
            <li><a href="#">Người IEG</a></li>
        </ul>
    </div>
    <div class="content_right">
        <div class="col-6-cust">
            <a class="block_display" href="#">
                <img src="image/img_03.jpg">
                <p class="mt_20"><span>10/12/2019</span></p>
                <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                <p class="font18"><span>Trần Hoài</span></p>
            </a>
        </div>
        <div class="col-6-cust">
            <a class="block_display" href="#">
                <img src="image/img_03.jpg">
                <p class="mt_20"><span>10/12/2019</span></p>
                <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                <p class="font18"><span>Trần Hoài</span></p>
            </a>
        </div>
        <div class="col-6-cust">
            <a class="block_display" href="#">
                <img src="image/img_03.jpg">
                <p class="mt_20"><span>10/12/2019</span></p>
                <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                <p class="font18"><span>Trần Hoài</span></p>
            </a>
        </div>
        <div class="col-6-cust">
            <a class="block_display" href="#">
                <img src="image/img_03.jpg">
                <p class="mt_20"><span>10/12/2019</span></p>
                <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                <p class="font18"><span>Trần Hoài</span></p>
            </a>
        </div>
    </div>
</div>

<p><a class="btn_boxMore mb_150 mt_130" href="#">Xem thêm...</a></p>

<!--Khóa học-->
<div class="container wpx920_width100vh">
    <h1 class="title_block font36">CÁC KHOÁ HỌC TẠI IEG</h1>
    <div class="row flex-box block_01">
        <div class="col-2-cust text-center">
            <img src="{{ asset('fe/image/iconinfo_01.png')}}">
            <p class="info_KH">Tiếng Anh</p>
        </div>
        <div class="col-2-cust text-center">
            <img src="{{ asset('fe/image/iconinfo_02.png')}}">
            <p class="info_KH">Khoa Học</p>
        </div>
        <div class="col-2-cust text-center">
            <img src="{{ asset('fe/image/iconinfo_03.png')}}">
            <p class="info_KH">Toán Học</p>
        </div>
        <div class="col-2-cust text-center">
            <img src="{{ asset('fe/image/iconinfo_04.png')}}">
            <p class="info_KH">Socrates</p>
        </div>
        <div class="col-2-cust text-center">
            <img src="{{ asset('fe/image/iconinfo_05.png')}}">
            <p class="info_KH">IELTS</p>
        </div>
    </div>
</div><!--/Khóa học_END-->

@endsection
