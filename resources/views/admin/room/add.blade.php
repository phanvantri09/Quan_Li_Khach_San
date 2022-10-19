<?php
use App\Models\CategoryModel;
$category = CategoryModel::all();
?>
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
                        <h3>Thêm Phòng</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="" method="post" style="color: black"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Loại phòng</label>
                                <select class="form-control" name="id_category">
                                    @foreach ($category as $ca)
                                    <option  value="{{$ca->id}}">{{$ca->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">mã phòng</label>
                                <input type="text" class="form-control" id="text"  placeholder="Nhập "  name="code">
                            </div>
                            <div class="form-group">
                                <label for="name">Số người tối đa:</label>
                                <input type="number" class="form-control" id="text"  placeholder="Nhập"  name="maxPeople">
                            </div>
                            <div class="form-group">
                                <label for="name">Số người tối thiêu:</label>
                                <input type="number" class="form-control" id="text"  placeholder="Nhập"  name="minPeople">
                            </div>
                            <div class="form-group">
                                <label for="name">Số tiền</label>
                                <input type="number" class="form-control" id="text"  placeholder="Nhập"  name="price">
                            </div>
                            <div class="form-group">
                                <label for="name">số lượng phòng Tắm:</label>
                                <input type="number" class="form-control" id="text"  placeholder="Nhập"  name="amountBathroom">
                            </div>
                            <div class="form-group"> 
                                <label for="name">Số giường ngủ:</label>
                                <input type="number" class="form-control" id="text"  placeholder="Nhập"  name="amountBed">
                            </div>
                            <div class="form-group">
                                <label for="name">Mô tả:</label>
                                <textarea type="text" class="form-control" id="text" name="decription"  placeholder="Nhập"   cols="30" rows="10"></textarea>
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