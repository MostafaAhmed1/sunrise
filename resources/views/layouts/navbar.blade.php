<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('home') }}#top" class="active">الرئيسية</a></li>
                        <li class="scroll-to-section"><a href="#posts">من نحن</a></li>
                        <li class="scroll-to-section"><a href="#works">خدماتنا</a></li>
                        <li class="scroll-to-section"><a href="#contact">تواصل معنا </a></li>
                        {{-- <li class="scroll-to-section"><a href="{{route("dashboard")}}">الأدارة </a></li> --}}
                        <li class="scroll-to-section">
                            <div class="main-red-button-hover"><a href="tel:0539524278">اتصل بنا </a></div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('images/logo.jpeg') }}" style="width:70px;">
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
