<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <base href="{{asset('')}}">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="homepage/css/bootstrap.css">
        <link rel="stylesheet" href="homepage/vendors/linericon/style.css">
        <link rel="stylesheet" href="homepage/css/font-awesome.min.css">
        <link rel="stylesheet" href="homepage/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="homepage/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="homepage/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="homepage/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="homepage/css/style.css">
        <link rel="stylesheet" href="homepage/css/responsive.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>
    <?php
    use App\Models\CategoryModel;
    $category =  CategoryModel::all();
    ?>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="homepage/image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('homepage') }}">Trang ch???</a></li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lo???i Ph??ng</a>
                                <ul class="dropdown-menu">
                                    @foreach ($category as $item)
                                    <li class="nav-item"><a class="nav-link" href="{{ route('type', ['id'=>$item->id]) }}">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li> 
                            @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('userbook', ['id'=>Auth::user()->id]) }}">???? ?????t</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">????ng xu???t</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">????ng nh???p</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">????ng K??</a></li>
                            @endauth
                            
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        @yield('content')
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">V??? ch??ng t??i</h6>
                            <p>H??y s??? d???ng d???ch v??? c???a ch??ng t??i b???n s??? c?? nh???ng ph??t gi??y th???t l?? tho???i m??i b??n gia ????nh v?? ng?????i b???n th????ng. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Li??n k???t</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Trang ch???</a></li>
                                        <li><a href="#">T?????ng lai</a></li>
                                        <li><a href="#">D???ch v???</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">?????i ng??</a></li>
                                        <li><a href="#">Thanh to??n</a></li>
                                        <li><a href="#">V??? ch??ng t??i</a></li>
                                        <li><a href="#">Li??n l???c</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">B???N TIN</h6>
                            <p>?????i v???i c??c chuy??n gia kinh doanh b??? m???c k???t gi???a gi?? OEM cao v?? s???n l?????ng ????? h???a v?? b???n in t???m th?????ng, </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="?????a ch??? eamil" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">H??nh ???nh</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="homepage/image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="homepage/image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
            @if(Session::has('thongbao'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('thongbao') }}");
            @endif
            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif
        </script>
        <script src="homepage/js/jquery-3.2.1.min.js"></script>
        <script src="homepage/js/popper.js"></script>
        <script src="homepage/js/bootstrap.min.js"></script>
        <script src="homepage/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="homepage/js/jquery.ajaxchimp.min.js"></script>
        <script src="homepage/js/mail-script.js"></script>
        <script src="homepage/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="homepage/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="homepage/js/mail-script.js"></script>
        <script src="homepage/js/stellar.js"></script>
        <script src="homepage/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="homepage/js/custom.js"></script>
    </body>
</html>