@extends('layouts.front')
@section('class')
<ul>
    <li><a href="{{url("/")}}">Home</a></li>
    <li class="active"><a href="{{route("produk")}}">Produk</a></li>
    <li ><a href="{{route("blog")}}">Blog</a></li>
    <li><a href="{{route("kontak")}}">Kontak</a></li>
</ul>
@endsection
@section('content')

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Produk Kami</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".sayuran">Sayur Segar</li>
                        <li data-filter=".buah">Buah & Produk Jamur</li>
                        <li data-filter=".kacang">Kacang Kacangan</li>
                        <li data-filter=".umbi">Umbi Umbian</li>
                        <li data-filter=".cabai">Cabai & Bawang</li>
                        <li data-filter=".bumbu">Bumbu Dapur</li>
                        <li data-filter=".olahan">Olahan Pangan</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($kacang as $it)
            <div class="col-lg-3 col-md-4 col-6 mix kacang" >
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text" style="padding-bottom:0px">
						<div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Kacang - Kacangan</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($sayur as $it)
            <div class="col-lg-3 col-md-4 col-6 mix sayuran">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text">
                       <div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Sayur Segar</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($cabai as $it)
            <div class="col-lg-3 col-md-4 col-6 mix cabai">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text">
                       <div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Cabai & Bawang</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($olahan as $it)
            <div class="col-lg-3 col-md-4 col-6 mix olahan">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Olahan Pangan</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($buah as $it)
            <div class="col-lg-3 col-md-4 col-6 mix buah">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Buah & Jamur</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($bumbu as $it)
            <div class="col-lg-3 col-md-4 col-6 mix bumbu">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Bumbu Dapur</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($umbi as $it)
            <div class="col-lg-3 col-md-4 col-6 mix umbi">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/'.$it->url_foto)}}">
                        <ul class="featured__item__pic__hover">
                            
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <div style="padding-left:6px; ">
							<p style="background:#E9FECC; font-size:12px; text-align:left; padding:0px">Umbi-Umbian</p>
						</div>
                        <h6 style="text-align:left; padding-left:6px; padding-bottom:20px">{{$it->nama}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
    <!-- Product Section End -->
    
    @endsection
    