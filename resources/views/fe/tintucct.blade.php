@extends('layouts.fe')
@section('content')

	<!--Banner-->
	<div class="container-fluid">
		<div class="row">
			<img src="{{ asset('fe/image/bg_pageSmall_1.png')}}" style="width:100%">
		</div>
	</div><!--Banner_END-->

	<div class="container text-center mt_40 mb_40">
		<h1 class="title_block font36">{{$data->title}}</h1>
	</div>

	<div class="content_baiviet wpx1470">
		<div class="content_left wpx400">
				<ul class="content_left--list">
						<li class="active"><a href="#">Học viên</a></li>
						<li><a href="#">Giáo viên</a></li>
						<li><a href="#">Phụ huynh</a></li>
						<li><a href="#">Người IEG</a></li>
					</ul>
			<ul class="content_left--list mt_130_cust ">
				<li class="active"><a>Bài viết tương tự</a></li>
				@foreach ($datas as $item)
				<li>
						<ul class="list-inline">
							<li>
								<a href="{{ route('tintucct', $item->slugs->slug)}}">
									<img src="{{ url('/').$item->image}}">
								</a>
							</li>
							<li>
								<a class="font18" href="{{ route('tintucct', $item->slugs->slug)}}">{{$item->title}}</a>
							</li>
						</ul>
					</li>
				@endforeach
				
			</ul>
		</div>
		<div class="content_right">
			<div class="toivaIEG_baivietchitiet mb_100">
				<span class="wimg100"><img src="{{ url('/').$data->image}}"></span>
				<p class="mt_40"><span class="time_news">{{$data->created_at}}</span></p>
						{!! $data->content!!}
				<div class="col-md-12 mt_40">
					<div class="row">
						<ul class="flex-box">
							<li>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<ul>
									<li>
										<a href="#">Creat</a>
									</li>
									<li>
										{{ $data->users->name}}
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
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
