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

        .table td,
        .table th {
            padding: 0rem;
            vertical-align: middle;
            border-top: 0px solid #eee;
        }

    </style>
    <div class="row">
        <div class="col-lg-9 col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-1 mt-3 mb-3">
                        <div class="row">
                            <h3 class="mb-4 m-auto"><i class="mdi mdi-car-side mr-2"></i> السيارات </h3>
                        </div>
                        <form method="POST" action="{{ route('vendor.cars.search') }}">
                            @csrf
                            @method('put')
                            @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
                            <div class="row m-1">
                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">جميع الشركات</label>-->
                                        <div class="col-12 m-0 p-0">
                                            <select name="company" class="form-control">
                                                @foreach($car_data->company as $company)
                                                    <option value="{{$company}}">{{$company}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">الموديل</label>-->
                                        <div class="col-12 m-0 p-0">
                                        <select name="model" class="form-control">
                                                @foreach($car_data->model as $model)
                                                    <option value="{{$model}}">{{$model}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">المحافظة</label>-->
                                        <div class="col-12 m-0 p-0">
                                        <select name="city" class="form-control">
                                                @foreach($car_data->city as $city)
                                                    <option value="{{$city}}">{{$city}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">من سنة</label>-->
                                        <div class="col-12 m-0 p-0">
                                            <select name="company" class="form-control">
                                                @foreach($car_data->company as $company)
                                                    <option value="{{$company}}">{{$company}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">الي سنة</label>-->
                                        <div class="col-12 m-0 p-0">
                                            <select class="form-control">
                                                <option>الي سنة</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">نوع الجير</label>-->
                                        <div class="col-12 m-0 p-0">
                                        <select name="lime_type" class="form-control">
                                                @foreach($car_data->lime_type as $lime_type)
                                                    <option value="{{$lime_type}}">{{$lime_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">نوع الوقود</label>-->
                                        <div class="col-12 m-0 p-0">
                                        <select name="fuel_type" class="form-control">
                                                @foreach($car_data->fuel_type as $fuel_type)
                                                    <option value="{{$fuel_type}}">{{$fuel_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">رخصة السيارة</label>-->
                                        <div class="col-12 m-0 p-0">
                                            <select name="driving_license" class="form-control">
                                                @foreach($car_data->driving_license as $driving_license)
                                                    <option value="{{$driving_license}}">{{$driving_license}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">السعر من</label>-->
                                        <div class="col-12 m-0 p-0">
                                            <select name="price" class="form-control">
                                                @foreach($car_data->price as $price_max)
                                                    <option value="{{$price_max}}">{{$price_max}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group row">
                                        <!--<label class="col-sm-4 col-form-label">السعر الي</label>-->
                                        <div class="col-12 m-0 p-0">
                                            <select name="driving_license" class="form-control">
                                                @foreach($car_data->price as $price_max)
                                                    @if($price_max < $price_max[0])
                                                        <option value="{{$price_max }}">{{$price_max}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">بحث
                                        الان</button>
                                </div>
                                {{-- <div class="col-6 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أسعار السيارات</button>
                        </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-3">
                        <div class="row">
                            <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i
                                    class="mdi mdi-car-side mr-2"></i>800 سيارة</h3>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary w-md waves-effect waves-light w-100"
                                    href="{{ route('car.add') }}">أضافة
                                    أعلان هنا</a>
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">

                            @for ($i = 0; $i < 12; $i++)
                                <div class="col-6 col-xl-2  p-0 bordertoty">

                                    <div class="cardtoty m-sm-1 m-0 p-1">
                                        <a href="{{ asset('assets/admin/images/car.jpeg') }}" class="gallery-popup"
                                            style="height: 130px; width:100%">
                                            <div class="project-item">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="img"
                                                        class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                                    <div class="project-item-overlay text-right">
                                                        <h4>عقارات</h4>
                                                        <p>
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="user" class="avatar-xs rounded-circle">
                                                            <span class="ml-2">مارتينا جرجس</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-2 mb-2">
                                            <h4 class="" style="color:#820120">شقق</h4>
                                            <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                                                وسط الخليل على بعد 570 متري</p>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
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
        <div class="col-00 col-lg-3">
            <div class="row m-1">
                <div class="card w-100">
                    <div class="body-card m-3">
                        <div class="row">
                            <h3 class="mb-4 col-6 ">اعلانات</h3>
                        </div>
                        <div class="row m-2 mb-2">

                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-12 p-0 bordertoty">
                                    <div class="cardtoty m-sm-1 m-0 p-1">
                                        <a href="{{ asset('assets/admin/images/car.jpeg') }}" class="gallery-popup"
                                            style="height: 130px; width:100%">
                                            <div class="project-item">
                                                <div class="overlay-container">
                                                    <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="img"
                                                        class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                                    <div class="project-item-overlay text-right">
                                                        <h4>عقارات</h4>
                                                        <p>
                                                            <img src="{{ asset('assets/admin/images/car.jpeg') }}"
                                                                alt="user" class="avatar-xs rounded-circle">
                                                            <span class="ml-2">مارتينا جرجس</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-2 mb-2">
                                            <h4 class="" style="color:#820120">شقق</h4>
                                            <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                                                وسط الخليل على بعد 570 متري</p>
                                        </div>
                                    </div>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
