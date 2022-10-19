<?php
use App\Models\ImghotelModel;
$img = ImghotelModel::where('id_room','=',$id->id)->get();
?>
@extends('page.index')
@section('content')
<section class="sample-text-area">
    <div class="container">
        <h3 class="text-heading title_color">Phòng: {{$id->code}}</h3>
        <p class="sample-text">
            Số lượng người tối đa:<b> {{$id->maxPeople}} người</b><br>
            Số lượng người tối Thiểu:<b> {{$id->minPeople}} người</b><br>
            Số Tiền:<b> {{$id->price}} vnĐ</b><br>
            Số lượng phòng tắm:<b> {{$id->amountBathroom}} phòng</b><br>
            Số lượng giường ngủ:<b> {{$id->amountBed}} </b><br>
           {{$id->decription}} <br><br>
           @auth
                            <a href="{{ route('book', ['id'=>$id->id]) }}" class="genric-btn primary">Đặt ngay</a>

                            @else
                            <a href="{{ route('login') }}" class="genric-btn primary">Đặt ngay</a>
                            @endauth
        </p>
    </div>
</section>
<div class="whole-wrap">
    <div class="container">
        
        <div class="section-top-border">
            <h3 class="title_color">Ảnh Của căn phòng:</h3>
            <div class="row gallery-item">
                @foreach ($img as $i)
                <div class="col-md-4">
                    <a href="imgUploads/{{$i->img}}" class="img-gal"><div class="single-gallery-image" style="background: url(imgUploads/{{$i->img}})"></div></a>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection