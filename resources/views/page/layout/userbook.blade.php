<?php
use App\Models\ImghotelModel;
use App\Models\CategoryModel;
use App\Models\RoomModel;
$category = CategoryModel::all();
$room = RoomModel::all();
?>
@extends('page.index')
@section('content')
<section class="sample-text-area">
    
    <div class="container">
        @foreach ($id as $bo)
        @foreach ($room as $ro)
        @if ($ro->id == $bo->id_room)
        <h3 class="text-heading title_color">Phòng Đã Đặt: {{$ro->code}} -- Thời gian đặt: {{$bo->created_at}}</h3>
        <p class="sample-text">
            Số Tiền:<b> {{$ro->price}} vnĐ</b><br>
        </p>
        @endif
        @endforeach
    <p class="sample-text">
        Ngày đến:<b> {{$bo->date_start}}</b><br>
    </p>
    <p class="sample-text">
        Ngày đi:<b> {{$bo->date_end}}</b><br>
    </p>
    <p class="sample-text">
        Số lượng người ở:<b> {{$bo->amountPeople}}</b><br>
    </p><br><br>
    @endforeach
</div>
</section>
@endsection