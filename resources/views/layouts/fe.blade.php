<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>IEG</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('fe/image/logo.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fe/css/bootstrap.css') }}">

    <script type="text/javascript" src="{{asset('fe/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('fe/js/bootstrap.min.js')}}"></script>	<!--owl-slider-->
    <!-- Stylesheets -->
{{--    <link rel="stylesheet" href="{{asset('fe/js/owl_slider/docs.theme.min.css')}}">--}}

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{asset('fe/js/owl_slider/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/js/owl_slider/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <!-- Yeah i know js should not be in header. Its required for demos.-->

    <!-- javascript -->
    <script src="{{asset('fe/js/owl_slider/owl.carousel.js')}}"></script>

    <!--MenuMobile-->
    <link rel="stylesheet" type="text/css" href="{{asset('fe/css/menuMobile/component.css')}}" />
    <script src="{{asset('fe/css/menuMobile/modernizr.custom.js')}}"></script>
    <!--Animate-->
    <link href="{{asset('fe/css/aos.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('fe/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fe/css/responsive_page.css')}}">
    @yield('css')
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container posiRelative">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="{{ route('homeieg')}}"><img src="{{asset('fe/image/logo.png')}}"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav_custContent">
                    <li class="{{ request()->is('cau-chuyen-ieg*') ? 'active' : '' }}"><a href="{{route('cauchuyenieg')}}">Câu chuyện IEG <span class="sr-only">(current)</span></a></li>
                    <li class="{{ request()->is('nguoi-giu-lua*') ? 'active' : '' }}"><a href="{{route('nguoigiulua')}}">Những người giữ lửa</a></li>
                    <!-- <li class="{{ request()->is('day-va-hoc*') ? 'active' : '' }}"><a href="{{route('dayvahoc')}}">Dạy và Học</a></li> -->
                    <li class="dropdown  {{ request()->is('day-va-hoc*') ? 'active' : '' }}">
                        <a href="{{ route('dayvahoc')}}" class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Dạy và Học<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('toanhoc')}}">TOÁN HỌC</a></li>
                            <li><a href="{{ route('tienganh')}}">TIẾNG ANH</a></li>
                            <li><a href="{{ route('toanhoc')}}">KHOA HỌC</a></li>
                            <li><a href="{{ route('socrates')}}">SOCRATES</a></li>
                            <li><a href="{{ route('ielts')}}">IELTS</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('toi-va-ieg*') ? 'active' : '' }}"><a href="{{ route('toivaieg')}}">Tôi và IEG</a></li>
                    <!-- <li><a href="{{ route('gocnhingd')}}">Góc nhìn Giáo dục</a></li> -->
                    <li class="{{ request()->is('tin-tuc*') ? 'active' : '' }}"><a href="{{ route('tintuc')}}">Tin tức</a></li>
                    <!-- <li class="dropdown">
                        <a href="{{ route('tintuc')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin tức <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li> -->
                    <!--
                    <li><a href="#">Nghề nghiệp</a></li>
                    <li><a href="#">Liên hệ</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="search_relative">
                        <a href="#" id="button_show"><span class="glyphicon glyphicon-search font16"></span></a>
                        <form id="item_hidden" class="search_main">
                            <input type="text" name="" placeholder="Tìm kiếm...">
                        </form>
                    </li>
                <li><a class="btn_block045" href="{{route('login')}}"  >Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header><!--/END-Header-->

@yield('content')

<footer>
    <div class="container flex-box footerCust">
        <div class="item_flex item_01">
            <img src="{{asset('fe/image/footer_logo.png')}}">
        </div>
        <div class="item_flex item_02">
            <div class="item_flex--item">
                <ul class="list-unstyled">
                    <h2 class="titleList_footer">Về IEG</h2>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Báo chí</a></li>
                </ul>
            </div>
            <div class="item_flex--item">
                <ul class="list-unstyled">
                    <h2 class="titleList_footer">Các khóa học</h2>
                    <li><a href="#">Toán học</a></li>
                    <li><a href="#">Tiếng Anh</a></li>
                    <li><a href="#">Thuyết trình</a></li>
                    <li><a href="#">Khoa học</a></li>
                    <li><a href="#">Lịch khai giảng</a></li>
                    <li><a href="#">Học phí</a></li>
                    <li><a href="#">Học bổng</a></li>
                </ul>
            </div>
            <div class="item_flex--item">
                <ul class="list-unstyled">
                    <h2 class="titleList_footer">sự kiện</h2>
                    <li><a href="#">Kỳ thi KGR</a></li>
                    <li><a href="#">Kỳ thi IMas</a></li>
                    <li><a href="#">Trại hè</a></li>
                    <li><a href="#">Ngoại khóa</a></li>
                    <li><a href="#">Thi Olympic</a></li>
                </ul>
            </div>
            <div class="item_flex--item">
                <ul class="list-unstyled">
                    <h2 class="titleList_footer">liên hệ</h2>
                    <li>
                        <p>
                            Hà Nội
                            <br/>128 Nguyễn Thái Học, Ba Đình
                            <br/>Hotline 0916688208
                            <br/>ĐT: (04) 71091099
                            <br/>TP Hồ Chí Minh
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="item_flex item_03">
            <ul class="list-unstyled item_03--list text-right">
                <li>
                    <span>0916 688 028</span>
                    <img src="{{asset('fe/image/iconTell.png')}}">
                    <div class="clearfix"></div>
                </li>
                <li class="colorMain">Follow Us</li>
                <li>
                    <a class="colorMain" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="colorMain" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="colorMain" href="#"><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <aside class="side-tool">
            <ul class="plugin_ico list-unstyled">
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="far fa-envelope"></i></a></li>
                <li><a href="#"><i class="fas fa-phone-volume"></i></a></li>
            </ul>
            <div class="side-tool__sign-up">
            <form action="{{ route('mailreg')}}" method="post">
                    <div class="side-tool__sign-up__expand-btn"> <i class="far fa-edit"></i>
                        <p>Đăng<br> ký
                            <br>ngay</p>
                    </div>
                    @csrf
                    <div class="side-tool__sign-up__form">
                        <input type="text" name="name" required placeholder="Họ tên">
                        <input type="tel" name="phone" required placeholder="Số điện thoại">
                        <input type="email" name="email" required placeholder="Emal">
                    </div>
                    <div class="side-tool__sign-up__submit">
                        <button type="submit" class="btn-form-register"> <i class="far fa-paper-plane"></i>
                            <br>Gửi </button>
                    </div>
                </form>
            </div>
        </aside>
    </div>
    <div class="container footerCust_bot">
        <span class="colorMain">© 2019 IEG</span>
        <span class="colorMain pull-right">Học viện phát triển Tư duy và Kỹ năng IEG</span>
    </div>
</footer>

<script src="{{asset('fe/js/main.js')}}"></script>
<script src="{{asset('fe/js/aos.js')}}"></script>
<script>
    AOS.init();
</script>

@if( Session::has('mailreg'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#popupmodal').modal('show');
        });
    </script>
    <div class="modal" tabindex="-1" role="dialog" id="popupmodal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Thông Báo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                {{ Session::get('mailreg') }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endif
</html>
