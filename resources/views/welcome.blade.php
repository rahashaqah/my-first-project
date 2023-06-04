<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Our Books</title>
</head>

<body>

    <div class="contener-fluid"></div>
    <div class="row bg-img">
        <div>
            <nav class="navbar navbar-expand-lg " dir="ltr" style="color: rgb(86, 141, 224) font-size:30px">
                <div class="container-fluid">
                    <a style="font-size:20px" class="navbar-brand " href="#"> <img src="{{ asset('img/p.png') }}"
                            class="me-2" height="100px" loading="lazy" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" style="color: wheat" aria-current="page"
                                    href="#">الرئيسيه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: wheat">الفئات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: wheat">اتصل بنا</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" style="color: wheat" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    قائمه الكتب
                                </a>
                                <ul class="dropdown-menu" style="background-color: rgb(202, 174, 137)">
                                    <li><a class="dropdown-item" href="#">كتب دينيه</a></li>
                                    <li><a class="dropdown-item" href="#">كتب تحفيزيه</a></li>
                                    <li><a class="dropdown-item" href="#">كتب تعليميه</a></li>
                                    <li><a class="dropdown-item" href="#">كتب اطفال</a></li>
                                    <li><a class="dropdown-item" href="#">كتب الكترونيه</a></li>
                                    <li><a class="dropdown-item" href="#">قصص نبوية
                                        </a></li>

                                </ul>
                            </li>

                            @if (Route::has('login'))
                                @auth
                                    <a hreh="{{ url('/home') }}" class="nav">تسجيل خروج</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav" style="margin-left: 630px"> تسجيل </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav">تسجيل دخول </a>
                                    @endif
                                @endauth
                            @else
                            @endif

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row"></div>
            <!-- Background image -->
            <div class="p-5 text-center bg-image"
                style="background-image: url('image.png');
            height: 225px; padding:20px">

                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3"> حينَ تُحبَط إقرأ بِشَغَف </h1>
                            <h4 class="mb-3"></h4>
                            <a class="btn btn-outline-light btn-lg" href="" role="button">تسوق الان</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->
            </header>
        </div>
        <center>
            <div class="input-group" style="width: 500px;height:50px">
                <input type="search" class="form-control rounded" placeholder="ابحث عن كتابك" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary"
                    style="margin-right: 5px;border-radius:5px">search</button>
            </div>
        </center>

        <div class="row justify-content-between p-2 my-2">
            <div class="card mx-3  p-2" style="width: 12rem;">
                <img src="{{ asset('img/1.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> عَلى مِنهْاجِ النُّبوَه</h5>
                    <p class="card-text">
                        <small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                الطَبْعة: الثانية<br>
                                سَنَةُ الطَبَع: 2021<br>
                                نَوعُ الْكِتَابِ: ديني<br>
                                عَدَد صَفَحَاتِ الْكِتَابِ: 364
                            </b></small>
                    </p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 p-2" style="width: 12rem;">
                <img src="{{ asset('img/2.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> نبأ يقين</h5>
                    <p class="card-text"> <small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2018<br>
                                نَوعُ الْكِتَابِ: مقالات<br>
                                عَدَد صَفَحَاتِ الْكِتَابِ: 382
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 p-2" style="width: 12rem;">
                <img src="{{ asset('img/3.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">وتِلْكَ الأيام</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2020<br>
                                نَوعُ الْكِتَابِ: قصص مصوره<br>
                                عَدَد صَفَحَاتِ : 405
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 p-2" style="width: 12rem;">
                <img src="{{ asset('img/4.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">نُطفَه</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2016<br>
                                نَوعُ الْكِتَابِ: روايات عربيه<br>
                                عَدَد صَفَحَاتِ الْكِتَابِ: 326
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 p-2" style="width: 12rem;">
                <img src="{{ asset('img/5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">لِيَطمَئِنُ قَلبْي</h5>
                    <p class="card-text"><b><small> المؤلف:أدهم الشرقاوي
                                لغة الكتاب:العربية<br>
                                سَنَةُ الطَبَع: 2019
                                عدد صفحات الكتاب :38 صفحة<br>
                                تصنيف الكتاب:رواية</small></b></p><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 p-2" style="width: 12rem;">
                <img src="{{ asset('img/6.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">أنتِ أيضاً صحابية</h5>
                    <p class="card-text"><b><small> المؤلف:أدهم الشرقاوي
                                <br>
                                سَنَةُ الطَبَع: 2022
                                عدد صفحات الكتاب :229 صفحة<br>
                                تصنيف الكتاب:الديانه الاسلامية</small></b></p><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 my-4 p-2 " style="width: 12rem;">
                <img src="{{ asset('img/7.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">وإذا الصُحفُ نُشِرَت</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2018<br>
                                نَوعُ الْكِتَابِ: الادب العربي <br>
                                عَدَد صَفَحَاتِ : 478
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 my-4 p-2" style="width: 12rem;">
                <img src="{{ asset('img/8.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">رَسائِل مِنَ القُرآن</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2021<br>
                                نَوعُ الْكِتَابِ:ديني
                                <br>
                                عَدَد صَفَحَاتِ : 271
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 my-4 p-2" style="width: 12rem;">
                <img src="{{ asset('img/9.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">السّلامُ عَليكَ يا صاحِبي</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2021<br>
                                نَوعُ الْكِتَابِ: كتب دينيه<br>
                                عَدَد صَفَحَاتِ : 339
                            </b></small></p><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 my-4 p-2" style="width: 12rem;">
                <img src="{{ asset('img/12.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">نَبض</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2015<br>
                                نَوعُ الْكِتَابِ:روائي <br>
                                عَدَد صَفَحَاتِ : 264
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 my-4 p-2" style="width: 12rem;">
                <img src="{{ asset('img/10.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">مَع النَّبي</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2017<br>
                                نَوعُ الْكِتَابِ: كتب دينيه<br>
                                عَدَد صَفَحَاتِ : 288
                            </b></small></p><br><br>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <div class="card mx-3 my-4 p-2" style="width: 12rem;">
                <img src="{{ asset('img/13.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">إلىَ المُنكَسِرَةِ قُلوبُهم</h5>
                    <p class="card-text"><small><b>
                                المُؤَلِفُ: أدهم شرقاوي
                                سَنَةُ الطَبَع: 2022<br>
                                نَوعُ الْكِتَابِ: قصص مصوره<br>
                                عَدَد صَفَحَاتِ : 304
                            </b></small></p>
                    <a href="#" class="btn btn-success">Buy Now</a>
                </div>
            </div>
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light  text-muted" dir="ltr">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3"></i>BrandBook
                                </h6>
                                <p>
                                    <small> If the customer receives a book that does not comply with the specifications
                                        mentioned in the invoice,
                                        it can be returned provided that it is in its original condition.
                                        In case of receiving a lower shipment or receiving books in poor condition that
                                        the customer
                                        would like to replace, please send the complaint with a copy of the invoice
                                        received to the
                                        following email support@bookstore.com it will be sent to the relevant department
                                        as soon as it arrives.</small>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Angular</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">React</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Vue</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Laravel</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Orders</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Help</a>
                                </p>
                            </div>


                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    info@example.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> + 01 298 037 08</p>
                                <p><i class="fas fa-print me-3"></i> + 01 984 567 89</p>
                            </div>

                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2021 Copyright:
                    <a class="text-reset fw-bold" href="https://bookstore.com/">MDBookstore.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
