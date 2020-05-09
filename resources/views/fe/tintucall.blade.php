@extends('layouts.fe')
@section('content')

	<!--Banner-->
	<div class="container-fluid">
		<div class="row">
			<img src="image/bg_pageSmall_1.png" style="width:100%">
		</div>
	</div><!--Banner_END-->

	<div class="container text-center mt_40 mb_40">
		<h1 class="title_block font36">tin tức</h1>
	</div>
	<div class="qoutes wpx1470 mt_100">
		<p class="qoutes_content">
			Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
		</p>
	</div>
	<div class="tinnoibat wpx1470">
			<h2 class="title_tintuc font24">Tin nổi bật</h2>
			<div class="toivaieg flex-box">
					@foreach ($dataf as $item)
					<div class="col-4-cust">
					<a class="block_display" href="{{ route('tintucct', $item->slugs->slug)}}">
							<img src="{{ url('/').$item->image}}">
							<p class="title_news font18">{{$item->title}}</p>
							<p class="mt_20">{{date('d/m/Y', strtotime($item->created_at))}}</p>
						</a></div>
					@endforeach
			</div><!--/Tôi và IEG_END-->
		</div>


	<div class="tinnoibat wpx1470">
		<h2 class="title_tintuc font24 mt_100">Tin tức</h2>
		<div class="toivaieg flex-box">

			@foreach ($data as $item)
			<div class="col-4-cust">
			<a class="block_display" href="{{ route('tintucct', $item->slugs->slug)}}">
					<img src="{{ url('/').$item->image}}">
					<p class="title_news font18">{{$item->title}}</p>
					<p class="mt_20">{{date('d/m/Y', strtotime($item->created_at))}}</p>
				</a></div>
			@endforeach
		</div><!--/Tôi và IEG_END-->
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
