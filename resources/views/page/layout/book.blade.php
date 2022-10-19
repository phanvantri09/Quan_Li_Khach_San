@extends('page.index')
@section('content')
<div class="whole-wrap" style="margin-top: 100px">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30 title_color">Điền thông tin để đặt</h3>
                    <form action="{{ route('bookpost') }}" method="post"> 
                        @csrf
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Tên của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Email của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email của bạn'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="hidden" name="id_room" value="{{$id}}" placeholder="Số điện thoại của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                            
                            <input type="text" name="numberPhone" placeholder="Số điện thoại của bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số ddienj thoại'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="amountPeople" placeholder="Số lượng người đặt phòng" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số lượng người đặt phòng'" required="" class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <label for="date_start">Ngày đến</label>
                            <input type="date" name="date_start" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" max="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required="" class="single-input-accent">
                        </div>
                        <div class="mt-10">
                            <label for="date_end">Ngày đi</label>
                            <input type="date" name="date_end" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" max=""  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required="" class="single-input-secondary">
                        </div>
                        <div class="mt-10">
                            <input class="genric-btn primary" type="submit" >
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection