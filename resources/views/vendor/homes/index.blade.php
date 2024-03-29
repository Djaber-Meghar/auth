@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<style>
    .form-group {
     margin-bottom: 0rem; 
}
</style>
<div class="row">
<div class="col-lg-9 col-12"> 
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-1 mt-3 mb-3">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="mdi mdi-home mr-2"></i> اعلانات الشقق و المنازل </h3>
                </div>
                <form method="POST" action="{{ route("vendor.homes.search") }}">
                    @method('put')
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="row m-1">
                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">جميع الشركات</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="city" class="form-control">
                                            <option value="الكل">الكل</option>
                                            @foreach($homes->unique('city') as $home)
                                                    <option value="{{$home->city}}">{{$home->city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الموديل</label>
                                        <div class="col-12 m-0 p-0">
                                        <select name="address" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($homes->unique('address') as $home)
                                                    <option value="{{$home->address}}">{{$home->address}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">المحافظة</label>
                                        <div class="col-12 m-0 p-0">
                                        <select name="street" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($homes->unique('street') as $home)
                                                    <option value="{{$home->street}}">{{$home->street}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">المحافظة</label>
                                        <div class="col-12 m-0 p-0">
                                        <select name="home_type" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($homes->unique('home_type') as $home)
                                                    <option value="{{$home->home_type}}">{{$home->home_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">من سنة</label>
                                        <div class="col-12 m-0 p-0">
                                            <select name="rooms_number" class="form-control">
                                            <option value="الكل">الكل</option>
                                            @foreach($homes->unique('rooms_number') as $home)
                                                    <option value="{{$home->rooms_number}}">{{$home->rooms_number}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                       <label class="col-sm-4 col-form-label">نوع الجير</label>
                                        <div class="col-12 m-0 p-0">
                                        <select name="status" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($homes->unique('status') as $home)
                                                    <option value="{{$home->status}}">{{$home->status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العرض</label>
                                        <div class="col-12 m-0 p-0">
                                        <select name="show" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($homes->unique('show') as $home)
                                                    <option value="{{$home->show}}">{{$home->show}}</option>
                                        @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">بحث الان</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="mdi mdi-home mr-2"></i>800 شقة</h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light w-100" href="{{ route("homes.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row mt-2 mb-2">

                @foreach(isset($homes_show) ? $homes_show : $homes  as $home)
                        <div class="col-6 col-xl-4  p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{ asset('assets/site/images/homes/'.$home->img) }}" class="gallery-popup"
                                    style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ asset('assets/site/images/homes/'.$home->img) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ asset('assets/site/images/homes/'.$home->img) }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$home->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">شقق</h4>
                                    <p class="card-text">
                                    {{$home->city}} {{$home->address}} للبيع في  {{$home->model}} شقة
                                       
                                </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <nav aria-label="..." class="">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="col-00 col-lg-3">
    <div class="row m-1">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 ">اعلانات</h3>
                </div>
                <div class="row m-2 mb-2">

                @foreach($homes as $home)
                        <div class="col-12 p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{asset('assets/site/images/homes/'.$home->img)}}" class="gallery-popup"
                                    style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{asset('assets/site/images/homes/'.$home->img)}}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>السيارات</h4>
                                                <p>
                                                    <img src="{{asset('assets/site/images/homes/'.$home->img)}}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$home->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">منازل</h4>
                                    <p class="card-text">{{$home->city}} {{$home->address}} للبيع في  {{$home->model}} سيارة</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div> 
            </div>
        </div>
    </div>
</div>
</div>
    

@endsection
