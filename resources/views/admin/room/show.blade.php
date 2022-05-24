@extends('admin.layout.index')
@section('content')
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-comment-more"></i>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                        </div>
                                        <div class="content">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class="time">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                        </div>
                                        <div class="content">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="mess__footer">
                                        <a href="#">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-email"></i>
                                <span class="quantity">1</span>
                                <div class="email-dropdown js-dropdown">
                                    <div class="email__title">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="quantity">3</span>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Thông tin phòng</h2>
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <a href="admin/teacher/add"><i class="zmdi zmdi-plus"></i>Thêm phòng</a></button>
                        </div>
                    </div>
                </div>
                @if(session('thongbao'))
                <div class="alert alert-success">
                    <span style="color: red; font-size: 20px;">{{session('thongbao')}}</span>
                </div>
                @endif
                <div class="row m-t-25">
                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-30">
                            <div>
                                <label style="margin: 10px" for="">Id:</label>
                                <span style="font-weight: bold">{{$id->id}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">Id:</label>
                                <span style="font-weight: bold">
                                    @foreach ($category as $ca)
                                        @if ($id->id_category == $ca->id)
                                            {{ $ca->name }}
                                        @endif
                                    @endforeach
                                </span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">mã phòng:</label>
                                <span style="font-weight: bold">{{$id->code}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">Trạng thái:</label>
                                <span style="font-weight: bold" >{{$id->status}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">Số lượng người:</label>
                                <span style="font-weight: bold">{{$id->maxPeople}} -> {{$id->minPeople}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">Số tiền:</label>
                                <span style="font-weight: bold">{{number_format($id->price, 0, ',', '.')}} VNĐ</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for=""> Số giường ngủ:</label>
                                <span style="font-weight: bold">{{$id->amountBed}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for=""> Số phòng tắm:</label>
                                <span style="font-weight: bold">{{$id->amountBathroom}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">Giới thiệu:</label>
                                <span style="font-weight: bold">{{$id->decription}}</span>
                            </div>
                            <div>
                                <label style="margin: 10px" for="">Hình Ảnh:</label>
                                <br>
                                @foreach ($img as $item)
                                    @if ($id->id == $item->id_room)
                                        <img src="imgUploads/{{$item->img}}" alt="">
                                    @endif
                                @endforeach
                            </div>
                            <div >
                                <a style="margin: 20px; padding: 5px; border-radius: 2px; text-align: center" href="admin/img/add/{{$id->id}}" class=" bg-success text-light"><i class="fa fa-camera" aria-hidden="true"></i> <label for="">Thêm ảnh</label></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection