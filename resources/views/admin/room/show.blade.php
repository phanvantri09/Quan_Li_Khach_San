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
                        
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                
                                <div class="content">
                                    <a class="js-acc-btn" href="{{ route('logout') }}">Logout</a>
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