@extends('layouts.waves')

@section('content')

    <div class="container">

    <div class="">
        <div class="swim_image col-md-6" style="background-image: url('{{url("images/wecoach/picture.png")}}')"></div>
        <div class="birds col-md-6"  style="background-image: url('{{ url("images/wecoach/Wbirds.png")}} ');" ></div>
        <div class="academy">
            أكاديمية
        </div>
        <div class="academy1">
            We Coach
        </div>
        <div class="academy2">
            اكاديمية خاصه بالسيدات فقط <br>
            متخصصه في الرياضه المائيه <br>
            لكل الاعمار
        </div>
        <div>
            <button type="button" class="btn sign">سجلى الان</button>
        </div>
        <div>
            <button type="button" class="btn sign1">فروعنا </button>
        </div>
        <div>
            <i class="fa-brands fa-instagram fa-2x sign2 "style="" id="i1">
            </i>
        </div>
        <div class="sign2">
            @we_coach
        </div>
        <div>
            <i class="fa-brands fa-facebook-f fa-2x sign3"style="" id="i2"></i>
        </div>
        <div class="sign3">
            @we_coach
        </div>

    </div>
    <div class="col main-column">
        <div class="row">
            <p class="service">خدماتنا
            </p>
            <hr class="dashed-line">
            </div>
        <div class="row">
            <p class="academy3">وعلشان نسهلها عليكي وفرنالك خدمات كتير عشان تناسبك <br>
                تتدربي على كل اللي تحتاجيه على إيد مدربات معتمدات فى <br>
                مجالهم
            </p>
        </div>
        <div class="row reverse-content" style="overflow-x: hidden;">
            <div class="col-md-6 col-lg-6 row-item" data-aos="slide-right" data-aos-duration="1000" >
                <p class="service">
                    التخسيس المائى
                </p>
                <p class="academy3" >
                    فصل الاكوا ايروبكس بيكون عبارة عن مجموعة من <br>
                    المتدربات بيمارسوا تمارين اللياقة البدنية لمدة ساعة تقريبًا ،<br>
                    مع التركيز على مقاومة الماية وخلق جو ممتع مع الموسيقى
                </p>
                <button class="toggle BTN2 rounded-pill mx-auto d-block">سجلى الان</button>
            </div>
            <div class="col-md-6 col-lg-6 center" data-aos="slide-left" data-aos-duration="1000">
                <img src="{{url("images/wecoach/Switch.png")}}" alt="" class="photo1">
            </div>
        </div>
        <div class="row " style="overflow-x: hidden;">
            <div class="col-md-6 col-lg-6 center" data-aos="slide-right" data-aos-duration="1000">
                <img src="{{url("images/wecoach/s1.png")}}" alt="" class="photo1">
            </div>
            <div class="col-md-6 col-lg-6 row-item "data-aos="slide-left" data-aos-duration="1000">
                <p class="service">
                    العلاج المائى
                </p>
                <p class="academy3">
                    فصل الاكوا ايروبكس بيكون عبارة عن مجموعة من <br>
                    المتدربات بيمارسوا تمارين اللياقة البدنية لمدة ساعة تقريبًا ،<br>
                    مع التركيز على مقاومة الماية وخلق جو ممتع مع الموسيقى
                </p>
                <button class="toggle BTN2 rounded-pill mx-auto d-block">سجلى الان</button>
            </div>

        </div>
        <div class="row reverse-content" style="overflow-x: hidden;">
            <div class="col-md-6 col-lg-6 row-item" data-aos="slide-right" data-aos-duration="1000" >
                <p class="service">
                    تعليم الاطفال
                </p>
                <p class="academy3">
                    فصل الاكوا ايروبكس بيكون عبارة عن مجموعة من <br>
                    المتدربات بيمارسوا تمارين اللياقة البدنية لمدة ساعة تقريبًا ،<br>
                    مع التركيز على مقاومة الماية وخلق جو ممتع مع الموسيقى
                </p>
                <button class="toggle BTN2 rounded-pill mx-auto d-block">سجلى الان</button>
            </div>
            <div class="col-md-6 col-lg-6 center" data-aos="slide-left" data-aos-duration="1000">
                <img src="{{url("images/wecoach/kid.png")}}" alt="" class="photo1">
            </div>
        </div>
        <div class="row " style="overflow-x: hidden;">
            <div class="col-md-6 col-lg-6 center"  data-aos="slide-right" data-aos-duration="1000">
                <img src="{{url("images/wecoach/Ladies.png")}}" alt="" class="photo1">
            </div>
            <div class="col-md-6 col-lg-6 row-item" data-aos="slide-left" data-aos-duration="1000">
                <p class="service">
                    تعليم السيدات
                </p>
                <p class="academy3">
                    فصل الاكوا ايروبكس بيكون عبارة عن مجموعة من <br>
                    المتدربات بيمارسوا تمارين اللياقة البدنية لمدة ساعة تقريبًا ،<br>
                    مع التركيز على مقاومة الماية وخلق جو ممتع مع الموسيقى
                </p>
                <button class="toggle BTN2 rounded-pill mx-auto d-block">سجلى الان</button>
            </div>
        </div>
        <div class="row">
            <p class="coaches1">مدرباتنا
            </p>
            <hr class="dashed-line">
        </div>
        <div class="row">
            <p class="coaches2">وعلشان نسهلها عليكي وفرنالك خدمات كتير عشان تناسبك <br>
                تتدربي على كل اللي تحتاجيه على إيد مدربات معتمدات فى <br>
                مجالهم
            </p>
        </div>
        <div class="row">
            <div class="slider-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="img-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url("images/wecoach/Ellipse 36.png")}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">ندى محمد</h2>
                                <p class="description">مدربة علاج مائي <br>
                                    معتمده
                                </p>
                                <div class="iconF">
                                    <i class="fa-brands fa-facebook fa-2x" style="font-size: 25px;"></i>
                                    <i class="fa-brands fa-instagram fa-1x insta"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBar"></div>
                <div class="swiper-button-prev swiper-navBar"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="row">
            <p class="coaches1">احدث العروض
            </p>
            <hr class="dashed-line">
        </div>
        <div class="row">
            <p class="coaches2">وعلشان نسهلها عليكي وفرنالك خدمات كتير عشان تناسبك <br>
                تتدربي على كل اللي تحتاجيه على إيد مدربات معتمدات فى <br>
                مجالهم
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 center" >
                <div class="card cardone" >
                    <img src="{{url("images/wecoach/ladies2.jpeg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">عرض الصحاب</h5>
                        <p class="card-text">من ٣ ل ٥ افراد خصم ٥٠ جنيه لكل
                            <br>
                            متدربه
                            <br>
                            من ٥ الى ٧ افراد خصم ٧٥ جنيه لكل
                            <br>
                            اكتر من ٧ افراد خصم ١٠٠ جنيه لكل
                            <br>
                            اشتراك
                        </p>
                        <a href="#" class="btn btn-primary now-btn">سجلى الان</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 card2 center" style=" " >
                <div class="card cardone" >
                    <img src="{{url("images/wecoach/WhatsApp Image 2023-01-31 at 10.51.03 AM.jpeg")}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">عرض العيله</h5>
                        <p class="card-text">اشتراكين من نفس العائلة خصم
                            <br>٥٠ جنيه على اشتراك واحد
                            <br>
                            ٣ اشتراكات عائليه او اكتر خصم ٥٠
                            <br>
                            جنيه لكل اشتراك
                        </p>
                        <a href="#" class="btn btn-primary now-btn">سجلى الان</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="coaches1">فروعنا
            </p>
            <hr class="dashed-line">
        </div>
        <div class="row">
            <p class="coaches2">وعلشان نسهلها عليكي وفرنالك خدمات كتير عشان تناسبك <br>
                تتدربي على كل اللي تحتاجيه على إيد مدربات معتمدات فى <br>
                مجالهم
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12  center">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center ok">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center ok">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center ok">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center ok">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center ok">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  center ok">
                <div class="card1 img_wrap" style="width: 18rem;">
                    <img src="{{url("images/wecoach/br.jpeg")}}" class="card-img-top IMG" alt="...">
                    <div class="img_description">
                        <p >
                            فرع قوات الجويه
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button class="toggle BTN rounded-pill mx-auto d-block">شاهد المزيد</button>
        </div>
    </div>
    </div>
@endsection
