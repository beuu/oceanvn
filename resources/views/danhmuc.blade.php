@extends('layout.layout')
@section('meta')

<title>hihih &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
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
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            {!! $cate->content !!}
            {{-- <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Our Blog</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
            </div> --}}
        </div>
    </div>
    <div class="container" style="padding:30px 0px">
        <p style="text-align:center; font-size:20pt">Liên hệ</p>
    <form action="{{ route('lienhep')}}" method="POST">
        @if (session('success'))
                    	<div class="flash-message">
                        <div class="alert alert-success">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            {{session('success')}}
                        </div>
                        </div>
                    @endif
        {{ csrf_field()}}
                    <div class="row animate-box">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Hãy để lại lời nhắn với chúng tôi"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Gửi" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
                {{-- //{{  var_dump($data)}} --}}
            @if(!empty($data) && $data != null)
            @foreach( $data as $item)
            <div class="col-lg-4 col-md-4 col-sm-6" style="height:500px">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{ asset("/storage/")}}/{{$item->image}}" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                        <h3><a href="#">{{ $item->name}}</a></h3>
                            <span class="posted_by">{{ $item->created_at}}</span>
                            {{-- <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span> --}}
                            <p>{{$item->excerpt}}</p>
                        <p><a href="{{ route('baiviet',[$item->category->slug, $item->slug ])}}">Xem thêm...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            @endforeach
            @endif
            <div class="clearfix visible-sm-block"></div>
            <div class="clearfix visible-md-block"></div>
            
        </div>
        <div class="row">
            {!! $data->links() !!}
        </div>

    </div>
    
</div>
@endsection