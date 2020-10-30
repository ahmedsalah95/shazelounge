<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--font awesome cdn--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <title>Talk to Your therapist</title>
</head>
<body>


{{-- Sidenav--}}
<div id="mySidenav" class="sidenav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="thumbnail">
                    <div class="avatar"><img src="{{asset('images/avatar.png')}}" alt=""
                                             class="text-center img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center" style="color: #3DA8C0;">د محمد</h2>
                <div class="caption text-center">

                    <p>دكتوراه الصحة النفسية والعلاج النفسي</p>

                    <div class="rate">
                        <span>٤.٨٢ تقييم (٣٢٠)</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                    <p>متخصص في الاكتئاب،اضطرابات القلق</p>

                    <div class="container prices">
                        <div class="row">
                            <div class="col-6">
                                <span>١٠٠+ جلسة</span>
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="col-6">
                                <span>٢٠٠ جنية</span>
                                <i class="fa fa-money"></i>
                            </div>
                        </div>
                    </div>


                    <div class="container choose">
                        <div class="row">
                            <div class="col-6 non-active-area">
                                <button class="btn"><p class="not-active">Calender</p>
                                </button>

                            </div>
                            <div class="col-6 active-area">
                                <button class="btn " ><p class="active">
                                      This Week  </p></button>

                            </div>
                        </div>
                    </div>


                    <div>

                    </div>


                </div>
            </div>

        </div>
    </div>

</div>



{{--End of Sidenav--}}

{{--navbar section--}}
<nav class="navbar navbar-expand-lg  static-top">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="container">
                        <div class="col-md-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.2" height="15.2" viewBox="0 0 15.2 15.2"
                                 class="ml5 world-icon">
                                <defs>
                                    <style>.a {
                                            fill: #4d4d4f;
                                            stroke: #4d4d4f;
                                            stroke-width: 0.2px;
                                        }</style>
                                </defs>
                                <path class="a"
                                      d="M13.109,12.471a7.48,7.48,0,0,0-.145-10.1h0l0,0A7.479,7.479,0,0,0,7.76.007h0L7.614,0,7.5,0,7.386,0l-.146,0h0a7.479,7.479,0,0,0-5.2,2.36l0,0h0a7.479,7.479,0,0,0-.145,10.1s0,0,0,.007.011.01.016.016a7.483,7.483,0,0,0,5.33,2.5h0l.146,0L7.5,15l.114,0,.146,0h0a7.483,7.483,0,0,0,5.334-2.5s.009-.006.012-.01S13.107,12.474,13.109,12.471ZM.524,7.759h3.1a9.558,9.558,0,0,0,.625,3.16,9.536,9.536,0,0,0-2.1,1.068A6.951,6.951,0,0,1,.524,7.759ZM2.3,2.851a9.513,9.513,0,0,0,2.043,1,9.55,9.55,0,0,0-.711,3.387H.524A6.952,6.952,0,0,1,2.3,2.851Zm12.18,4.391h-3.1a9.55,9.55,0,0,0-.711-3.387,9.513,9.513,0,0,0,2.043-1A6.952,6.952,0,0,1,14.476,7.241ZM7.241,3.87a9.041,9.041,0,0,1-2.191-.332A9.049,9.049,0,0,1,7.241.684Zm0,.517V7.241h-3.1a9.033,9.033,0,0,1,.689-3.226A9.556,9.556,0,0,0,7.241,4.387Zm.517,0a9.548,9.548,0,0,0,2.407-.372,9.033,9.033,0,0,1,.689,3.226h-3.1Zm0-.517V.684A9.049,9.049,0,0,1,9.949,3.538,9.041,9.041,0,0,1,7.759,3.87Zm2.692-.489a9.551,9.551,0,0,0-2.04-2.8,6.963,6.963,0,0,1,3.927,1.893A9,9,0,0,1,10.451,3.381Zm-5.9,0a8.987,8.987,0,0,1-1.886-.91A6.962,6.962,0,0,1,6.59.579,9.547,9.547,0,0,0,4.549,3.381Zm-.4,4.378h3.1v2.6a9.539,9.539,0,0,0-2.5.4A9.032,9.032,0,0,1,4.145,7.759Zm3.1,3.113v3.444a9.044,9.044,0,0,1-2.3-3.082A9.017,9.017,0,0,1,7.241,10.872Zm.517,3.444V10.872a9.017,9.017,0,0,1,2.3.362A9.043,9.043,0,0,1,7.759,14.316Zm0-3.962v-2.6h3.1a9.029,9.029,0,0,1-.6,2.995A9.525,9.525,0,0,0,7.759,10.355Zm3.613-2.6h3.1a6.949,6.949,0,0,1-1.631,4.228,9.536,9.536,0,0,0-2.1-1.068A9.551,9.551,0,0,0,11.372,7.759ZM2.506,12.374A9.013,9.013,0,0,1,4.45,11.4a9.543,9.543,0,0,0,2.139,3.025A6.968,6.968,0,0,1,2.506,12.374Zm5.9,2.047A9.537,9.537,0,0,0,10.55,11.4a9.019,9.019,0,0,1,1.944.978A6.968,6.968,0,0,1,8.411,14.421Z"
                                      transform="translate(0.1 0.1)"></path>
                            </svg>
                            English
                        </div>
                        <li href="#" class="col-md-4">أنضم لينا كطبيب</li>
                        <li class="col-md-3">تسجيل الدخول</li>
                        <li class="col-md-2"></li>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <div class="container">
                        <li class="col-md-2">المقالات</li>
                        <li class="col-md-4">الاختبارات النفسية</li>
                        <li class="col-md-4">ازاي تحجز جلستك؟</li>
                        <li class="col-md-2"> المعالجين</li>
                    </div>

                </div>
            </div>
        </div>

        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/shazlong.png') }}" width="150" height="50" alt="">
        </a>

    </div>


</nav>
{{-- End of navbar section--}}


{{-- booking steps--}}


<section class="booking-steps">

    <div class="container">
        <div class="row">
            <div class="h1 col-md-12 text-center text-white"> ٣ خطوات نحو حياة افضل</div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-2 offset-md-2 step">

                أكمل عملية الدفع
            </div>
            <div class="col-md-1 separator">

            </div>
            <div class="col-md-2 step">
                حدد التاريخ والوقت
            </div>
            <div class="col-md-1 separator">

            </div>
            <div class="col-md-2 step active-step">
                اختار المعالج
            </div>
        </div>

    </div>


</section>

{{-- End of booking steps--}}

{{--Filter section--}}
<br>

<section>

    <div class="container">
        <div class="row ">

            <div class="col-md-3 col-4 col-sm-12 col-xs-12">

                <div class="dropdown rtl main-dropdown">

                    <button class="btn btn-default dropdown-toggle dropdown-style w-100" type="button"
                            id="dropdownMenu1"
                            data-toggle="dropdown">
                        <i class="fa fa-caret-down float-left"></i>

                        <h5 class="float-right"> رتب حسب<span></span> <i class="fa fa-sort"></i></h5>


                    </button>


                    <ul class="dropdown-menu dropdown-menu-right " role="menu" aria-labelledby="dLabel">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" dir="rtl">الاعلي تقييم</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" dir="rtl">السعر : من الاقل
                                للأعلي </a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" dir="rtl">السعر : من الاقل
                                للأعلي</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-4 col-sm-12 col-xs-12">
                <div class="dropdown rtl main-dropdown">

                    <button class="btn btn-default dropdown-toggle dropdown-style w-100" type="button"
                            id="dropdownMenu1"
                            data-toggle="dropdown">
                        <i class="fa fa-caret-down float-left"></i>

                        <h5 class="float-right">جميع التخصصات</h5>

                    </button>


                    <ul class="dropdown-menu dropdown-menu-right " role="menu" aria-labelledby="dLabel">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">مشاكل أطفال</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">مشاكل مراهقة </a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">جميع التخصصات</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">القلق والوسواس </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-4 col-sm-12 col-xs-12  ">
                <div class="search-bar-container">
                    <input type="text" name="search" id="searchTherapist" placeholder="بحث بأسم المعالج"
                           class="search-bar" dir="rtl">
                    <i class="fa fa-search fa-x"></i>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

{{-- End of  Filter section--}}



{{--therapist section--}}

<section>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9 col-sm-12">

                <div class="row ">

                    @foreach($data as $d)
                        <div class="col-lg-4 col-md-6 initialData">
                            <div class="card ">
                                <div class="thumbnail">
                                    <div class="avatar"><img src="{{asset('images/avatar.png')}}" alt=""
                                                             class="text-center img-fluid"></div>
                                </div>
                                <div class="caption">
                                    <h6 style="color: #3DA8C0;">{{$d['name']}}</h6>
                                    <p>دكتوراه الصحة النفسية والعلاج النفسي</p>

                                    <div class="rate">
                                        <span>٤.٨٢ تقييم (٣٢٠)</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>

                                    </div>

                                    <p>متخصص في الاكتئاب،اضطرابات القلق</p>

                                    <div class="container prices">
                                        <div class="row">
                                            <div class="col-6">
                                                <span>١٠٠+ جلسة</span>
                                                <i class="fa fa-play"></i>
                                            </div>
                                            <div class="col-6">
                                                <span>٢٠٠ جنية</span>
                                                <i class="fa fa-money"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container choose">
                                        <div class="row">
                                            <div class="col-6 non-active-area">
                                                <button class="btn"><p class="not-active">عرض الصفحة الشخصية</p>
                                                </button>

                                            </div>
                                            <div class="col-6 active-area ">
                                                <button class="btn " onclick="openNav()"><p class="active">الحجز
                                                        الان</p></button>

                                            </div>
                                        </div>
                                    </div>


                                    <div>

                                    </div>


                                </div>
                            </div>

                            <br>
                        </div>
                    @endforeach

                    <div class="col-lg-4 col-md-6 resultData">
                        <div class="card ">
                            <div class="thumbnail">
                                <div class="avatar"><img src="{{asset('images/avatar.png')}}" alt=""
                                                         class="text-center img-fluid"></div>
                            </div>
                            <div class="caption">
                                <h6 style="color: #3DA8C0;" class="searchResultClass"></h6>
                                <p>دكتوراه الصحة النفسية والعلاج النفسي</p>

                                <div class="rate">
                                    <span>٤.٨٢ تقييم (٣٢٠)</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>

                                <p>متخصص في الاكتئاب،اضطرابات القلق</p>

                                <div class="container prices">
                                    <div class="row">
                                        <div class="col-6">
                                            <span>١٠٠+ جلسة</span>
                                            <i class="fa fa-play"></i>
                                        </div>
                                        <div class="col-6">
                                            <span>٢٠٠ جنية</span>
                                            <i class="fa fa-money"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="container choose">
                                    <div class="row">
                                        <div class="col-6 non-active-area">
                                            <button class="btn"><p class="not-active">عرض الصفحة الشخصية</p></button>

                                        </div>
                                        <div class="col-6 active-area">
                                            <button class="btn " onclick="openNav()"><p class="active">الحجز الان</p>
                                            </button>

                                        </div>
                                    </div>
                                </div>


                                <div>

                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 category-area">
                <div class="row category">
                    <div class="col-lg-6 col-md-6">
                        <h5 class="mt-1">مسح التصنيف</h5>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3 class="float-right mt-1">التصنيف</h3>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-10">
                        <h5 style="color: #3da8c0;" class="float-right">المواعيد المتاحة والمدة</h5>
                    </div>
                    <div class="col-2">
                        <i style="color: #3da8c0;" class="fa fa-user fa-2x float-right"></i>

                    </div>
                </div>
                <br>

                <div class="row">

                    <div class="col-6">
                        <div>
                            <input id="input_id" type="checkbox" name="radio_button" class="check ml-2 mt-1"/>
                            <label for="input_id" class="float-right">هذا الاسبوع </label>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div>
                            <input id="input_id" type="checkbox" name="radio_button" class="check ml-2 mt-1"/>
                            <label for="input_id" class="float-right">اليوم </label>
                        </div>


                    </div>


                </div>

                <div class="row">
                    <div class="col-12">
                        <p class="float-right">متاح من :اختر ميعاد</p>
                        <div class="search-bar-container float-right">
                            <input type="text" name="search" placeholder="اختر التاريخ" class="search-bar" dir="rtl">
                            <i class="fa fa-search fa-x"></i>
                        </div>
                    </div>

                </div>


                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="float-right">متاح الي :اختر ميعاد</p>
                        <div class="search-bar-container float-right">
                            <input type="text" name="search" disabled placeholder="اختر التاريخ" class="search-bar"
                                   dir="rtl">
                            <i class="fa fa-search fa-x"></i>
                        </div>
                    </div>

                </div>

                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="float-right">:المده</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-6">
                        <div>
                            <input id="input_id" type="checkbox" name="radio_button" class="check ml-2 mt-1"/>
                            <label for="input_id" class="float-right">٣٠ دقيقة </label>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div>
                            <input id="input_id" type="checkbox" name="radio_button" class="check ml-2 mt-1"/>
                            <label for="input_id" class="float-right">٦٠ دقيقة </label>
                        </div>


                    </div>


                </div>


                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="float-right"><i class="fa fa-gender"></i> :الجنس</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-6">
                        <div>
                            <input id="input_id" type="checkbox" name="radio_button" class="check ml-2 mt-1"/>
                            <label for="input_id" class="float-right">ذكر </label>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div>
                            <input id="input_id" type="checkbox" name="radio_button" class="check ml-2 mt-1"/>
                            <label for="input_id" class="float-right"> أنثي </label>
                        </div>


                    </div>


                </div>


                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="float-right"><i class="fa fa-globe-europe"></i> :اللغه </p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="dropdown rtl main-dropdown">

                            <button class="btn btn-default dropdown-toggle dropdown-style w-100" type="button"
                                    id="dropdownMenu2"
                                    data-toggle="dropdown">
                                <i class="fa fa-caret-down float-left"></i>

                                <h5 class="float-right">اختار اللغة</h5>

                            </button>


                            <ul class="dropdown-menu dropdown-menu-right " role="menu" aria-labelledby="dLabel">
                                <li>
                                    <div style="width: 100%">
                                        <input id="input_id" type="checkbox" name="radio_button"
                                               class="check ml-2 mt-1"/>
                                        <label for="input_id" class="float-right"> العربية </label>
                                    </div>
                                </li>

                            </ul>
                        </div>


                    </div>


                </div>


                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="float-right"><i class="fa fa-globe-europe"></i> :تكلفة الجلسة (جنية) </p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-5 price-choices">from 150 to 200</div>
                            <div class="col-5 price-choices">from 200 to 250</div>
                        </div>
                        <div class="row">
                            <div class="col-5 price-choices">from 250 to 300</div>
                            <div class="col-5 price-choices">from 300 to 400</div>
                        </div>
                        <div class="row">
                            <div class="col-5 price-choices"> above 500</div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</section>


{{--End of therapist section--}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


<style>

    /* webkit solution */
    ::-webkit-input-placeholder {
        text-align: right;
    }

    /* mozilla solution */
    input:-moz-placeholder {
        text-align: right;
    }

    /*
    sidenav css

    */


    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #F4F6F9;
        overflow-x: hidden;
        padding-top: 60px;
        transition: 0.5s;
        color: #1b1e21;
    }

    /* The navigation menu links */
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
        color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    /*
    end of sidenav
    */

    nav {
        background-color: white;
    }

    body {
        background-color: #F4F6F9;
    }

    textarea:focus, input:focus {
        outline: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='8' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .navbar-toggler {
        border-color: white;
    }

    li {
        list-style: none;
    }

    .booking-steps {

        min-height: 160px;
        background: #3da8c0;
        display: flex;
        align-items: center;
        color: white;

    }

    .step {
        border: 1.5px solid #fff;
        border-radius: 15px;
        text-align: center;
        font-size: 16px;
        color: #fff;
        padding: 2px 10px;
    }

    .separator {
        padding: 0;
        height: 2px;
        background-color: white;
        width: 100%;
        margin-top: 15px;
    }

    .active-step {
        background-color: white;
        color: #3da8c0;
    }

    .search-bar {
        width: 90%;
        font-size: 19px;
        border-width: 0px;
        border: none;
    }

    .search-bar:focus {
        width: 90%;
        font-size: 19px;
        border-width: 0px;
        border: none;
    }

    .search-bar-container i {

        color: #CCCCCC;
    }

    .search-bar-container {
        background-color: white;
        padding: 10px;
        border: 1px solid #CCCCCC;
    }

    .dropdown-toggle::after {
        content: none;
    }

    .dropdown-menu {
        margin: 5px;
        padding: 5px;
        text-align: right;
        font-size: 16px;
        list-style: none;
        width: 150px;
    }

    .dropdown-menu a {
        color: black;
        text-decoration: none;
        cursor: pointer;

    }

    .main-dropdown span {
        margin-left: 10px;
    }

    .dropdown-menu li {
        font-size: 20px;
    }

    .dropdown-style {
        border: 1px solid #CCCCCC;
    }

    /*

     therapists grid

     */

    .card {
        border: 1px solid #CCCCCC;
        align-content: center;
        text-align: center;
    }

    .avatar {
        align-content: center;
        width: 120px;
        height: 120px;

        border-radius: 50%;
        margin: auto;
        margin-top: 10px;

    }

    .avatar img {
        width: 100%;
        border-radius: 50%;
    }

    .rate i {
        color: #FFC112;
    }

    .prices i {
        color: #3da8c0;
    }

    .choose {
        height: 10%;
        margin-top: 20px;
        text-align: center;
        padding-top: 20px;
    }

    .non-active-area {

        margin: 0px;
        padding: 0px;
        background-color: #CCCCCC;
    }

    .choose .not-active {
        font-size: 12px;
        font-weight: bolder;
    }

    .choose .active-area, .active {
        background-color: #3da8c0;
        color: white;
        font-size: 16px !important;
    }

    /*
    category
     */

    .category-area {
        background-color: white;
    }

    .category {
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        color: white;
        background-color: #3da8c0;

    }

    .check {

        float: right;
    }

    .price-choices {
        float: right;
        color: black;
        background-color:lightgray;
        margin: 5px;
        font-size: 13px;
        white-space: nowrap;
        padding: 5px;
    }


</style>

<script>


    $(window).on('resize',function(){
        if (window.matchMedia('(max-width: 768px)').matches)
        {
            $('.booking-steps').hide();
            $('.category-area').hide();
            $('.navbar-brand').hide();
            $('.nav').css('direction','rtl');
            // do functionality on screens smaller than 768px
        }else{
            $('.booking-steps').show();
            $('.category-area').show();
            $('.navbar-brand').show();
            $('.nav').css('direction','ltr');
        }
    });

    {{--sidenav script--}}

    function openNav() {
        document.getElementById("mySidenav").style.width = "42%";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    {{--end of sidenav script--}}

    $(document).ready(function () {

        var data = [];
        var searchResult = [];
        $('.resultData').hide();
        $(document).ready(function () {
            $.getJSON("data.json", function (result) {
                data = result;
            }).fail(function () {
                console.log("An error has occurred.");
            });

            $("#searchTherapist").change(function () {
                if ($.trim($('#searchTherapist').val()) == '') {
                    $('.initialData').show();
                    $('.resultData').hide();
                }
                data.forEach(function (d) {
                    if ($('#searchTherapist').val() == d.name) {
                        searchResult.push(d.name);
                    }
                });

                if (searchResult.length > 0) {
                    $('.initialData').hide();
                    $('.resultData').show();
                    $('.searchResultClass').html(searchResult[0]);
                    searchResult = [];
                }
            });


        });


        $(document).click(function (e) {

            // Check if click was triggered on or within #menu_content
            if ($(e.target).closest("#mySidenav").length > 0) {
                return false;
            }

            if ($(e.target).closest(".active").length > 0) {
                return false;
            }
            else {
                closeNav();
            }


        });




    });
</script>


</html>