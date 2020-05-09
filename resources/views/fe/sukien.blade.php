@extends('layouts.fe')
@section('content')
<div class="container text-center mt_40 mb_40">
		<h1 class="title_block font36">sự kiện</h1>
	</div>
	<div class="qoutes wpx1470 mt_100">
		<p class="qoutes_content">
			Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
		</p>
	</div>
<div class="container">
		@foreach ($data as $item)
		<p class="mt_40"><a href="#"><img src="{{ url('/').$item->image}}"></a></p>
        @endforeach
        <p><a class="mb_150 mt_130" >{!! $data->links()!!}</a></p>
    </div>
    
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
@endsection
