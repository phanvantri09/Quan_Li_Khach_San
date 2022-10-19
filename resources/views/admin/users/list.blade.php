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
                            <h2 class="title-1">Category</h2>
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <a href="admin/room/add"><i class="zmdi zmdi-plus"></i>Thêm phòng</a></button>
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
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $us)
                                    <tr>
                                        <td>{{$us->id}}</td>
                                        <td>{{$us->name}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>
                                            @if($us->level == 1)
                                                {{"Admin"}}
                                            @else
                                                {{"Khách hàng"}}

                                            @endif
                                        </td>
                                        <td><a href="admin/users/edit/{{$us->id}}" class="text-success" style="margin-right: 30px;"><i class='far fa-edit'></i></a>
                                        <a href="admin/users/delete/{{$us->id}}" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection