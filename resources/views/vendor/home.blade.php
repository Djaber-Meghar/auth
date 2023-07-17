@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ asset('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    {{-- <div class="row">
        <div class="w-100">
            <div class="body-card m-5">

                <h3 class="mb-4"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card">
                            <a href="{{ asset('assets/admin/images/martina.jpg') }}" class="gallery-popup" style="height: 230px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="img" class="" style="height: 230px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/martina.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">شقق</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mdi mdi-view-module mr-2"></i> الإعلانات العامة </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="card annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;"">
                            <a href="{{ asset('assets/admin/images/general.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/general.jpg') }}" alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>الإعلانات العامة</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/general.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">الإعلانات العامة</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mdi mdi-car-side mr-2"></i> سيارات </h3>
                
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1 ">
                        <div class="annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{  asset('assets/admin/images/car.jpeg')  }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="img" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h2>سيارات</h2>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/car.jpeg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">سيارات</h4>
                                <p class="card-text"> 
                                    تويوتا لاند كروزر موديل سنة 2019 فل الفل سبورت (قصير) بابين
                                </p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mdi mdi-home mr-2"></i> شقق </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/admin/images/home.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/home.jpg') }}" alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/home.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">شقق</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class=" mdi mdi-shopping-search mr-2"></i> محلات و مكاتب  </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/admin/images/shop.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/shop.jpg') }}" alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/shop.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">محل</h4>
                                <p class="card-text">محل عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mdi mdi-view-dashboard mr-2"></i> اراضي </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="card annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/admin/images/land.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/land.jpg') }}" alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>عقارات</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/land.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">شقق</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class=" fas fa-user-friends mr-2"></i> توظيف </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="card annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/admin/images/job.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/job.jpg') }}" alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>توظيف</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/job.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">توظيف</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="w-100">
            <div class="body-card m-5">

                <h3 class="mb-4"><i class="fas fa-address-book mr-2"></i> إعلانات الوظائف الشاغرة </h3>
                <div class="row">

                    @for ($i=0; $i < 8; $i++)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/admin/images/job2.jpg') }}" class="gallery-popup" style="height: 230px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/job2.jpg') }}" alt="img" class="" style="height: 230px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>إعلانات الوظائف الشاغرة</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/job2.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">إعلانات الوظائف الشاغرة</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row main-section">
        <div class="w-100">
            <div class="body-card m-3">

                <h3 class="mb-4"><i class="mbri-mobile2 mr-2"></i> الاجهزة الذكية </h3>
                <div class="row">

                    @for ($i=0; $i < 6; $i++)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="annonce-item"style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                            <a href="{{ asset('assets/admin/images/mobile.jpg') }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ asset('assets/admin/images/mobile.jpg') }}" alt="img" class="" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>الاجهزة الذكية</h4>
                                            <p>
                                                <img src="{{ asset('assets/admin/images/mobile.jpg') }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">مارتينا جرجس</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">الاجهزة الذكية</h4>
                                <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                    وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                            </div>
                        </div> 
                    </div>
                    @endfor
                
                </div>
            </div>
        </div>
    </div>

    

    <style>
        h1 , h2 , h3 , h4 , h5 ,h6 {
            font-family:'Tajawal';
        }
        h3 {
            font-size:xx-large !important;
            font-weight:bolder;
        }
        h4 {
            font-family:'Tajawal';
            color:#000 !important;
            font-size:large !important;
            font-weight:bold;
        }

        .annonce-item:hover {
            box-shadow: 1px 3px 8px 0px;
        }

        .main-section {
            margin:10px 5px 10px 5px;
            box-shadow:0px 0px 1px 0px;
            background:#fff;
        }


    </style>
@endsection
