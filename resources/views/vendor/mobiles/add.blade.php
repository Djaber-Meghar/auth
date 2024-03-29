@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row m-5">
                    <h3 class="m-5 m-auto"><i class="mdi mdi-car-side mr-2"></i> إعلان جهاز ذكي جديد </h3>
                </div>
                <form method="POST" action="{{route('vendor.mobiles.store')}}" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif
                        <div class="row m-3">
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">حالة الجهاز</label>
                                    <div class="col-sm-8">
                                        <select name="device_status" class="form-control">
                                            <option>جديد</option>
                                            <option>الكل</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('device_status')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">الشركة </label>
                                    <div class="col-sm-8">
                                        <select name="company" class="form-control">
                                            <option>جديد</option>
                                            <option>الكل</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('company')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">موديل</label>
                                    <div class="col-sm-8">
                                        <select name="model" class="form-control">
                                            <option>موديل</option>
                                            <option>الكل</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('model')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                    <p style="color: red" class="ml-4 mt-2">
                                        *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">باقي الموديل</label>
                                    <div class="col-sm-8">
                                        <input name="reset_model" type="text" class="form-control">
                                        @error('reset_model')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">موديل سنة</label>
                                    <div class="col-sm-8">
                                        <select name="model_year" class="form-control">
                                            <option>2020</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('model_year')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">عدد الشرائح</label>
                                    <div class="col-sm-8">
                                        <select name="slides_number" class="form-control">
                                            <option>اسود</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('slides_number')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">حجم الشاشة</label>
                                    <div class="col-sm-8">
                                        <input name="screen_size" type="text" class="form-control" placeholder="مثال 5 بوصة">
                                        @error('screen_size')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> الكاميرات</label>
                                    <div class="col-sm-8">
                                        <input name="cameras" type="text" class="form-control" placeholder="مثال 18 ميجا خلفية">
                                        @error('cameras')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> الذاكرة</label>
                                    <div class="col-sm-8">
                                        <input name="memory" value="" type="text" class="form-control" placeholder="مثال 8">
                                        @error('memory')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> سعة التخزين</label>
                                    <div class="col-sm-8">
                                        <input name="storage" value="" type="text" class="form-control" placeholder="مثال 16">
                                        @error('storage')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">السعر</label>
                                    <div class="col-sm-8">
                                        <input name="price" value="" type="text" class="form-control" placeholder="75000">
                                        @error('price')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">مدة الاعلان باليوم</label>
                                    <div class="col-sm-8">
                                        <select name="ad_duration_per_day" class="form-control">
                                            <option>30</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                        @error('ad_duration_per_day')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">معلومات إضافية</label>
                                    <div class="col-sm-10">
                                        <textarea rows="8" name="description" type="text" class="form-control" placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">الصور</label>
                                    <div class="col-sm-10">
                                        <input name="img[]" type="file" class="form-control" multiple>
                                        @error('img')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h3 class="m-5">بيانات المُعلن</h3>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">الاسم</label>
                                    <div class="col-sm-8">
                                        <input name="advertiser_name" type="text" class="form-control" placeholder="الاسم الحقيقي">
                                        @error('advertiser_name')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">رقم الهاتف</label>
                                    <div class="col-sm-8">
                                        <input name="phone_number" type="text" class="form-control" placeholder="رقم الهاتف مع المقدمة">
                                        @error('phone_number')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">البريد الالكتروني</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control" placeholder="البريد الالكتروني">
                                        @error('email')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">المدينة</label>
                                    <div class="col-sm-8">
                                        <select name="advertiser_city" class="form-control">
                                            <option>خصوصي</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">العنوان</label>
                                    <div class="col-sm-8">
                                        <input name="advertiser_address" type="text" class="form-control" placeholder="اسم الشارع او المنطقة">
                                        @error('advertiser_address')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضف الأعلان</button>
                                </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <a href="{{ route('choseAdd') }}"  class="btn btn-primary w-md waves-effect waves-light" >أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">
                @foreach($mobiles as $mobile)
                <div class="col-12 p-0 bordertoty">
                    <div class="cardtoty m-sm-1 m-0 p-1">
                        <a href="{{asset('assets/site/images/mobiles/'.$mobile->img)}}" class="gallery-popup" style="height: 130px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{asset('assets/site/images/mobiles/'.$mobile->img)}}" alt="img" class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h4>السيارات</h4>
                                        <p>
                                            <img src="{{asset('assets/site/images/mobiles/'.$mobile->img)}}" alt="user" class="avatar-xs rounded-circle">
                                            <span class="ml-2">{{$mobile->advertiser_name}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="mt-2 mb-2">
                            <h4 class="" style="color:#820120">منازل</h4>
                            <p class="card-text">{{$mobile->city}} {{$mobile->address}} للبيع في {{$mobile->model}} سيارة</p>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>

    
@endsection
