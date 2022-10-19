@extends('page.index')
@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>TRÁNH XA CUỘC SỐNG ĐƠN ĐIỆU</h6>
                    <h2>Thư giãn tâm trí của bạn</h2>
                    <p>Nếu bạn đang xem các cuộn băng trắng trên web, bạn có thể sẽ rất bối rối trước sự
                        khác biệt về giá cả. Bạn có thể thấy một số với giá thấp tới 150.000 vnđ mỗi chiếc.</p>
                    <a href="#" class="btn theme_btn button_hover">Bắt đầu</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Tìm<br> Đặt phòng</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <form class="row" action="{{ route('search') }}" method="get">
                                @csrf
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div >
                                                <label for="">Ngày đến</label>
                                                <input type="date"  class="form-control" name="date_start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div >
                                                <label for="">Ngày đi</label>
                                                <input type="date"  class="form-control" name="date_end" value="2018-07-22" min="2018-01-01" max="2018-12-31">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div >
                                                <label for="">Số người</label>
                                                <input type="number" name="amount" value="1"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div >
                                                <label for="">Số giường</label>
                                                <input type="number" value="1" name="amountBed"  class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="margin-top: 10px" class="col-md-6">
                                    <div class="book_tabel_item">
                                        <button class="book_now_btn button_hover" type="submit">Tìm Phòng</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->
    
    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Chỗ ở khách sạn</h2>
                <p>Tất cả chúng ta đang sống trong một thời đại thuộc về tuổi trẻ trong tâm hồn. Cuộc sống đang trở nên cực kỳ nhanh chóng, </p>
            </div>
            <div class="row mb_30">
                @foreach ($room as $ro)
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            @foreach ($img as $im)
                                @if ($im->id_room == $ro->id)
                                <img src="imgUploads/{{$im->img}}" alt="">
                                @break
                                @endif
                            @endforeach
                            <a href="{{ route('viewroom', ['id'=>$ro->id]) }}" class="btn theme_btn button_hover">Xem ngay</a>
                        </div>
                        @foreach ($category as $ca)
                            @if ($ca->id == $ro->id_category)
                                <a href="#"><h4 class="sec_h4"> {{$ro->code}} - {{$ca->name  }}</h4></a>
                            @endif
                        @endforeach
                        <h5>{{$ro->price}} vnĐ<small></small></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    
    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Cơ sở vật chất Hoàng gia</h2>
                <p>Những người cực kỳ yêu thích hệ thống thân thiện với môi trường.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Nhà hàng</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Câu lạc bộ thể thao</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Hồ bơi</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Thuê một chiếc xe</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Thể dục</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>QUán Bar</h4>
                        <p>Việc sử dụng Internet đang trở nên phổ biến hơn do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->
    
    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Về chúng tôi <br>Sứ mệnh và tầm nhìn<br>lịch sử của chúng tôi</h2>
                        <p>hành vi không phù hợp thường bị chế nhạo là “con trai sẽ là con trai”, phụ nữ phải đối mặt với các tiêu chuẩn ứng xử cao hơn, đặc biệt là ở nơi làm việc. Đó là lý do tại sao điều quan trọng là, với tư cách là phụ nữ, hành vi của chúng ta trong công việc là không thể chê trách. hành vi không phù hợp thường bị cười.</p>
                        <a href="#" class="button_hover theme_btn_two">Liên hệ để có giá tùy chỉnh</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="homepage/image/about_bg.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->
    
    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Lời chứng thực từ khách hàng của chúng tôi</h2>
                <p>Cách mạng Pháp đã tạo nên lương tâm của tầng lớp quý tộc thống trị sa sút từ </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="homepage/image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Du lịch ở đay thạt tuyệt vời</p>
                        <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>    
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="homepage/image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Du lịch ở đay thạt tuyệt vời </p>
                        <a href="#"><h4 class="sec_h4">Mr Lâm</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="homepage/image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Du lịch ở đay thạt tuyệt vời </p>
                        <a href="#"><h4 class="sec_h4">Michal Hà</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>    
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="homepage/image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>Du lịch ở đay thạt tuyệt vời</p>
                        <a href="#"><h4 class="sec_h4">man black</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->
    
    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">bài viết mới nhất từ ​​blog</h2>
                <p>Cách mạng Pháp đã tạo nên lương tâm của tầng lớp quý tộc thống trị sa sút từ </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="homepage/image/blog/blog-1.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">du lịch</a>
                                <a href="#" class="button_hover tag_btn">phong cách sống</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Quảng cáo chi phí thấp</h4></a>
                            <p>Acres of Diamonds… bạn đã đọc câu chuyện nổi tiếng, hoặc ít nhất nó có liên quan đến bạn. Một người nông dân.</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>	
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="homepage/image/blog/blog-2.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Du lịch</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Quảng cáo ngoài trời sáng tạo</h4></a>
                            <p>Sự nghi ngờ bản thân và nỗi sợ hãi cản trở khả năng đạt được hoặc đặt mục tiêu của chúng ta. Tự tin và sợ hãi là</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>	
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="homepage/image/blog/blog-3.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">du lịch</a>
                                <a href="#" class="button_hover tag_btn"> Cách sống</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Nó được phân loại như thế nào để sử dụng miễn phí</h4></a>
                            <p>Tại sao bạn muốn tạo động lực cho bản thân? Trên thực tế, chỉ cần trả lời câu hỏi đó đầy đủ là có thể </p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->
@endsection