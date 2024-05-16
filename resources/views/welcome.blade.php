@extends('layouts.front')
@section('class')
<ul>
    <li class="active"><a href="{{url("/")}}">Home</a></li>
    <li><a href="{{route("produk")}}">Produk</a></li>
    <li ><a href="{{route("blog")}}">Blog</a></li>
    <li><a href="{{route("kontak")}}">Kontak</a></li>
</ul>
@endsection
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Produk Kami</span>
                        </div>
                        <ul>
                            <li><a href="#">Sayuran Segar</a></li>
                            <li><a href="#">Cabai & Bawang</a></li>
                            <li><a href="#">Kacang Kacangan</a></li>
                            <li><a href="#">Umbi Umbian</a></li>
                            <li><a href="#">Buah Segar</a></li>
                            <li><a href="#">Bumbu Dapur</a></li>
                            <li><a href="#">Olahan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                 
                    <div class="hero__item set-bg" data-setbg="img/banner/banner-3.jpg">
                        <div class="hero__text text-white">
                            <span></span>
                            <h2>SAYURAN SEGAR</h2><h2 style="background: rgb(98, 234, 25)">100% Pilihan</h2>
                            <p style="border-bottom: solid rgb(98, 234, 25)"><b>Diambil Langsung Dari Petani Pilihan</b></p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cats-1.jpg">
                            <h5><a href="#">Buah Segar</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cats-2.jpg">
                            <h5><a href="#">Olahan Pangan</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cats-3.jpg">
                            <h5><a href="#">Bumbu Dapur</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cats-4.jpg">
                            <h5><a href="#">Sayur Segar</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    
    <!-- Why Choose Us -->
    <section class="featured spadi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Kenapa Memilih kami?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="choose text-center">
                        <h4><b>Produk</b></h4>
                        <span>Segar, Kualitas Terjamin</span> <br>
                        <img src="{{asset('img/icon/fresh.png')}}" style="height: 80px; padding-top:5px" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose text-center">
                        <h4><b>Harga</b></h4>
                        <span>Murah, Terjangkau untuk Semua</span> <br>
                        <img src="{{asset('img/icon/money.png')}}" style="height: 80px; padding-top:5px" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose text-center">
                        <h4><b>Service</b></h4>
                        <span>Juara, Pesanan Pasti Sampai</span> <br>
                        <img src="{{asset('img/icon/trophy.png')}}" style="height: 80px; padding-top:5px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produk Pilihan</h2>
                    </div>
                  <!--  <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/Brokoli-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Brokoli</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/Lemon-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Lemon</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/Buncis-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Buncis</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/tahu-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Tahu</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/tempe-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Tempe</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/ph-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Paprika Hijau</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/pete-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Pete</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('foto-produk/ungu-removebg-preview.png')}}">
                            <!--<ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Kol Ungu</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    
    <!-- Banner Begin -->
   <!-- Why Choose Us -->
    <section class="featured spadis">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="text-center">
                        <h2><b>50K+</b></h2>
                        <span>Konsumen Puas</span> <br>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <h2><b>11K+</b></h2>
                        <span>Pesanan Selesai</span> <br>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <h2><b>2K+</b></h2>
                        <span>Produk Tersedia</span> <br>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <h2><b>100+</b></h2>
                        <span>Agen Berdedikasi</span> <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    
    
    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Artikel Vegie.Aja</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{('img/blog/blog-6.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2023</li>
                            </ul>
                            <h5><a href="{{route('blog1')}}">Menciptakan Kelezatan dari Produk Sayur dalam Sekejap</a></h5>
                            <p>Dalam kehidupan yang sibuk, seringkali kita tidak memiliki banyak waktu untuk menghabiskan berjam-jam di dapur. Namun, memasak makanan sehat dan lezat tidak harus rumit. Dengan menggunakan produk sayur segar, kita dapat menciptakan hidangan yang sederhana, sehat, dan menggugah selera.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 16,2023</li>
                            </ul>
                            <h5><a href="{{route('blog2')}}">Sayuran Sehat untuk Menu Diet</a></h5>
                            <p>Apakah Anda sedang menjalani program diet atau ingin hidup lebih sehat? Sayuran adalah makanan yang sangat penting untuk mencapai tujuan tersebut. Kaya akan serat, vitamin, dan mineral, sayuran membantu menjaga kesehatan tubuh dan mendukung penurunan berat badan </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> April 4,2023</li>
                            </ul>
                            <h5><a href="{{route('blog3')}}">Lemon: Buah Segar yang Penuh Kesehatan</a></h5>
                            <p>Lemon adalah buah yang segar dan asam yang sering digunakan sebagai bahan dalam minuman, hidangan, atau bumbu. Selain memberikan rasa yang segar, lemon juga memiliki sejumlah manfaat kesehatan yang luar biasa.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    

    @endsection