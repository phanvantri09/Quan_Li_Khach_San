@extends('page.index')
@section('content')
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Hotel Accomodation</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
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
                            <a href="" class="btn theme_btn button_hover">Đặt ngay</a>
                        </div>
                        @foreach ($category as $ca)
                            @if ($ca->id == $ro->id_category)
                                <a href="#"><h4 class="sec_h4">{{$ca->name}}</h4></a>
                            @endif
                        @endforeach
                        <h5>{{$ro->price}}<small></small></h5>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</section>
@endsection