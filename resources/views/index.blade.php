@extends('layout.layout')
@section('meta')

<title>Trang chu &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
@endsection

@section('content')
<div class="fh5co-hero">
    <!-- <div class="fh5co-overlay"></div> -->
    <div class="fh5co-cover" style="    background-image: url(images/AdobeStock_87590744.jpeg);
    background-repeat: no-repeat;
    background-position: 51% 71%;
    background-size: cover;">
        <div class="desc">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="tabulation1 animate-box">

                            <div class="wrap-contact100">
                            <form class="contact100-form validate-form" method="POST" action="{{ route('lienhep')}}">
                                        @if (session('success'))
                                        <div class="flash-message">
                                        <div class="alert alert-success">
                                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            {{session('success')}}
                                        </div>
                                        </div>
                                    @endif
                        {{ csrf_field()}}
                                    <span class="contact100-form-title">
                                        Liên hệ với chúng tôi
                                    </span>
                    
                                    <div class="wrap-input100 validate-input">
                                        <input class="input100" type="text" name="name" placeholder="Họ và tên">
                                        <span class="focus-input100"></span>
                                    </div>
                    
                                    <div class="wrap-input100 validate-input" >
                                        <input class="input100" type="text" name="email" placeholder="E-mail">
                                        <span class="focus-input100"></span>
                                    </div>
                    
                                    <div class="wrap-input100 validate-input">
                                        <input class="input100" type="text" name="phone" placeholder="Số điện thoại">
                                        <span class="focus-input100"></span>
                                    </div>
                    
                                    <div class="wrap-input100 validate-input">
                                        <textarea class="input100" name="message" placeholder="Câu hỏi cho chuyên gia?"></textarea>
                                        <span class="focus-input100"></span>
                                    </div>
                    
                                    <div class="container-contact100-form-btn">
                                        <button class="contact100-form-btn">
                                            <span>
                                                <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                                                Gửi
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="desc2 animate-box">
                        <div class="col-sm-7 col-md-7 " style="margin-top:30%;">
                            <center>
                                <h2>MIẾN PHÍ DU LỊCH ĐẢO CYPRUS!</h2>
                            
                                <span class="price">Duy nhất tại Ocean Dragon</span>
                            </center>
                            
                            <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<section id="features" class="features bg-white">
    <div class="container">
        <div class="row">
            <div class="main_features fix roomy-70">

                <div class="col-md-5">
                    <div class="features_item">
                        <div class="head_title">
                            <h2 class="text-uppercase">Về <strong>Ocean Dragon</strong></h2>
                        </div>
                        <div class="featured_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit donec fringilla iaculis facilisis 
                                morbi nulla lectus, luctus interdum eu ultricies ac tortor maecenas nec massa sit 
                                amet erat condimentum porttitor ac quis turpis.</p>

                            <a href="" class="btn btn-default m-top-40">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                    <div class="features_item2_area">
                        <div class="features_item2 text-center">
                            <div class="divider_horizontal"></div>
                            <div class="divider_vertical"></div>
                            <div class="col-xs-6">
                                <div class="features_item_text">
                                    <img src="images/cyprus.jpg" alt="" class="" height="100px">
                                    <p class="m-top-20">Công ty duy nhất tại Việt Nam có trụ sở đặt tại Cyprus</p>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="features_item_text">
                                    <img src="images/number1.png" alt="" class="" height="100px">
                                    <p class="m-top-20">Nhân sự là chuyên gia bất động sản được bình chọn số 1 Cyprus</p>
                                </div>
                            </div>
                            <div class="col-xs-6  m-top-50">
                                <div class="features_item_text">
                                    <img src="images/guarantee.png" alt="" class="" height="100px">
                                    <p class="m-top-20">Tỉ lệ thành công 99,99%</p>
                                </div>
                            </div>
                            <div class="col-xs-6 m-top-50">
                                <div class="features_item_text">
                                    <img src="images/customer-care.png" alt="" class="" height="100px">
                                    <p class="m-top-20">Chăm sóc khách hàng ngay cả sau khi định cư</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section>

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading-section animate-box">
                <h3>KHÁCH HÀNG ĐÃ ĐỊNH CƯ THÀNH CÔNG</h3>
                <p>Dưới đây là bài phỏng vấn 1 số khách hàng đã định cư thành công tại Cyprus và có cuộc sống đầy đủ và hạnh phúc</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <div class="desc">
                        <span></span>
                        <h3>Gia đình anh <BR>Nguyễn Mạnh Chiến</h3>
                        <span>Limassol, Cyprus.</span>
                    
                        <a class="btn btn-primary btn-outline" href="#">XEM ngay <i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="images/place-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <div class="desc">
                        <span></span>
                        <h3>Gia đình chị <br>Helen Phạm</h3>
                        <span>Limassol, Cyprus.</span>
                        
                        <a class="btn btn-primary btn-outline" href="#">Xem ngay <i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="images/place-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <div class="desc">
                        <span></span>
                        <h3>Gia đình anh <br>Vũ Văn Tiến</h3>
                        <span>Nicosia, Cyprus.</span>
                        
                        <a class="btn btn-primary btn-outline" href="#">Xem ngay <i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-outline btn-lg" href="#">Xem các khách hàng khác <i class="icon-arrow-right22"></i></a></p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-destination">
    <div class="tour-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul id="fh5co-destination-list" class="animate-box">
                    <li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
                        
                    </li>
                    <li class="one-half text-center">
                        <div class="title-bg">
                            <div class="case-studies-summary">
                                <h2>KINH NGHIỆM ĐỊNH CƯ</h2>
                                <span><a href="#">Xem ngay tất cả bài viết</a></span>
                            </div>
                        </div>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
                    
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
                        
                    </li>
                    <li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
                        
                    </li>
                </ul>		
            </div>
        </div>
    </div>
</div>

<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>NGƯỜI DÙNG THƯỜNG ĐỌC</h3>
                <p>Những thông tin được người dùng quan tâm nhiều nhất.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="images/place-1.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">30% Discount to Travel All Around the World</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="images/place-2.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">Planning for Vacation</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="images/place-3.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="#">Visit Tokyo Japan</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="clearfix visible-md-block"></div>
        </div>

        <div class="col-md-12 text-center animate-box">
            <p><a class="btn btn-primary btn-outline btn-lg" href="#">Xem tất cả các bài tư vấn <i class="icon-arrow-right22"></i></a></p>
        </div>

    </div>
</div>
<!-- fh5co-blog-section -->
<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">

</div>
@endsection