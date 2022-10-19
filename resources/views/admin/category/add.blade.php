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
                    <div class="col-lg-8">
                        <h3>Thêm</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="" method="post" style="color: black">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="text"  placeholder="Nhập name"  name="name">
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-4">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>
                                <div class="col-sm-2 col-6">
                                    <button type="reset" class="btn btn-secondary">Làm mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection