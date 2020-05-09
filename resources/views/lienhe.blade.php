@extends('layout.layout')
@section('meta')

<title>Lien he &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
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
<div id="fh5co-contact" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Contact Information</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
                <div class="row animate-box">
                    <div class="col-md-6">
                        <h3 class="section-title">Our Address</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                            <li><i class="icon-phone2"></i>+ 1235 2355 98</li>
                            <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                            <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                                @if (session('success'))
                                <div class="flash-message">
                                <div class="alert alert-success">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    {{session('success')}}
                                </div>
                                </div>
                            @endif
                        <form action="{{ route('lienhep')}}" method="POST">
                                    
                    {{ csrf_field()}}
                            
                    <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Liên hệ" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            <div class="col-md-12" style="padding-top:50px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.929860149257!2d105.81443271347257!3d21.035492292927625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1299b2b1dd%3A0x7b788f37ea7bbc4b!2zTmdvzIMgMjYwIMSQw7TMo2kgQ8OizIFuLCBMaeG7hXUgR2lhaSwgQmEgxJDDrG5oLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1537263395900" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                    <!-- END map -->
        </div>


        
    </div>
    

@endsection
