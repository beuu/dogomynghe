@extends('layouts.fe')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('fe/video.js/dist/video-js.min.css')}}">
@endsection
@section('content')

	<!--Banner-->
	<div class="container-fluid">
            <div class="row">
                <img src="image/bg_pageSmall_2.png">
            </div>
        </div><!--Banner_END-->
    
        <div class="container text-center mt_40 mb_40">
            <h1 class="title_block font36">ieg tv</h1>
        </div>
        <div class="qoutes wpx1470 mt_100">
            <p class="qoutes_content">
                Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
            </p>
        </div>
        <!--Tôi và IEG-->
        <div class="tinnoibat wpx1470">
            <h2 class="title_tintuc font24">Nổi bật</h2>
            <div class="toivaieg flex-box">
                @foreach ($data as $item)
                <div class="col-4-cust">
                        <div class="block_display">
                                <video
                                id="{{mt_srand(10)}}"
                                class="video-js vjs-default-skin vjs-big-play-centered"
                                width="" height="264"
                                controls
                                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $item->link }}"}] }'
                              >
                              </video>
                              
                            <p class="title_news font18">{{ $item->title}}</p>
                            <p class="mt_20"><span>{{ $item->created_at}}</span></p>
                            </div>
                    </div>
                @endforeach
                
            </div><!--/Tôi và IEG_END-->
        </div>
        <div class="tinnoibat wpx1470">
            <h2 class="title_tintuc font24 mt_100">Phổ biến</h2>
            <div class="toivaieg flex-box">
                    @foreach ($datan as $item)
                    <div class="col-4-cust">
                            <div class="block_display">
                                    <video
                                    id="{{mt_srand(10)}}"
                                    class="video-js vjs-default-skin vjs-big-play-centered"
                                    width="" height="264"
                                    controls
                                    data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $item->link }}"}] }'
                                  >
                                  </video>
                                  
                                <p class="title_news font18">{{ $item->title}}</p>
                                <p class="mt_20"><span>{{ $item->created_at}}</span></p>
                                </div>
                        </div>
                    @endforeach
            </div><!--/Tôi và IEG_END-->
        </div>
    
        <!--Khóa học-->
        <div class="container wpx920_width100vh">
            <h1 class="title_block font36">CÁC KHOÁ HỌC TẠI IEG</h1>
            <div class="row flex-box block_01">
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_01.png">
                    <p class="info_KH">Tiếng Anh</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_02.png">
                    <p class="info_KH">Khoa Học</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_03.png">
                    <p class="info_KH">Toán Học</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_04.png">
                    <p class="info_KH">Socrates</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_05.png">
                    <p class="info_KH">IELTS</p>
                </div>
            </div>
        </div><!--/Khóa học_END-->
        <script src="{{asset('fe/video.js/dist/video.js')}}"></script>
<script src="{{asset('fe/js/Youtube.js')}}"></script>
@endsection
@section('script')

@endsection
