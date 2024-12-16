@extends('layouts.main_layout')

@section('cnt')

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <h1 class="text-center" style="padding:40px">مرحبا بكم في موقعنا</h1>
                            <p style="    font-family: system-ui;">
                                مرحبًا بكم في شركة صن رايز وجهتكم الأولى لخدمات توصيل عفش المنزل بأمان ومهنية بالدمام

                                نعدكم بتجربة فريدة تجمع بين السرعة والجودة والراحة

                                . اعتمادًا على سنوات من الخبرة في هذا المجال،

                                نحن نضمن أن عفشك وأثاثك سيصلون إلى وجهتهم بأمان وفي الوقت المحدد.

                                اختر شركة صن رايز لنقل العفش والأثاث و استمتع براحة البال

                                خلال عملية النقل</p>
                        </div>

                        <div class="col-md-6">
                            <img src="upload/posts/1714784977.jpg" style="border-radius:25px;height:400px">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--
    <div class="row m-3" style="background:#fff;padding:100px">
        <div class="col-md-12 m-auto  d-flex text-center">
            <div class="col">
                <img src="assets/images/service-icon-03.png" alt="" style="width:60px">
                <h4>جودة ممتازة</h4>
                <p>توصيل مجاني للطلبات أكثر من 20 دك</p>
            </div>
            <div class="col">
                <img src="assets/images/service-icon-02.png" alt="" style="width:60px">
                <h4> أرخض الأسعار</h4>
                <p>توصيل مجاني للطلبات أكثر من 20 دك</p>

            </div>
            <div class="col">
                <img src="assets/images/service-icon-02.png" alt="" style="width:60px">

                <h4> توصيل سريع</h4>
                <p>توصيل مجاني للطلبات أكثر من 20 دك</p>

            </div>
        </div>
    </div>
--}}
    <div id="pricing" class="pricing-tables">
        <div class="tables-left-dec">
            <img src="assets/images/tables-left-dec.png" alt="">
        </div>
        <div class="tables-right-dec">
            <img src="assets/images/tables-right-dec.png" alt="">
        </div>
        <div id="posts" class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2> <span>أحدث المقالات</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                @foreach ($posts as $post)
                        
                    <div class="col-lg-4 mt-3">
                        <div class="item first-item p-3 m-0">
                            <img src="{{ $post->img }}" alt="" style="height:200px; padding:0; margin:0; " >
                            <h5 class="text-accent" style="margin-top:5px; color: #ff695f">
                                {{ $post->title }}
                            </h5>
                            <p>
                                {{ $post->subtitle }}
                            </p>

                            <div class="main-blue-button-hover">
                                <a href="{{ route('posts.show', $post->id) }}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

    <section id="works" class="bg-light best_product m-5">
        <div class="container py-5">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            @foreach ($works as $work)
                                    
                                <div class="col-sm-12 col-lg-4 mb-4">
                                    <div class="card h-100">
                                        <a href="#">
                                            <img src="{{ asset($work->img) }}"
                                                class="card-img-top img-product" alt="...">
                                        </a>
                                    
                                    </div>
                                </div>

                            @endforeach
                  
                        </div>
                    </div>
                
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>

    <div class="footer-dec">
        <img src="assets/images/footer-dec.png" alt="">
    </div>

    
    <footer id="contact" style=" background: #d2af75; padding: 60px; margin-bottom: 0px; margin-top: 50px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about footer-item">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('images/logo.jpeg') }}"
                                    alt="Onix Digital TemplateMo"></a>
                        </div>
                        <a style="color:#fff">info@company.com</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="community footer-item">
                        <h4>لينكات مغيدة</h4>
                        <ul>
                            <li><a href="#">من نحن </a></li>
                            <li><a href="#">المدونة </a></li>
                            <li><a href="#">اتصل بنا </a></li>
                            <li><a href="#">خدماتنا</a></li>
                            <li><a href="{{ route('dashboard') }}">الأدارة</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="subscribe-newsletters footer-item">
                        <h4>شركة نقل العفش بالدمام</h4>
                        <p style="color:#fff">بالمنطقة الشرقية اثاثك أمانة في أيدينا شركة صن رايز لنقل الاثاث في (
                            الدمام – الخبر – الظهران – القطيف – الأحساء – الجبيل – راس تنورة – صفوي – بقيق – سيهات ) .

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
