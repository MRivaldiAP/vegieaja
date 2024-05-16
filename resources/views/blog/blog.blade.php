@extends('layouts.front')
@section('class')
<ul>
    <li><a href="{{url("/")}}">Home</a></li>
    <li><a href="{{route("produk")}}">Produk</a></li>
    <li class="active"><a href="{{route("blog")}}">Blog</a></li>
    <li><a href="{{route("kontak")}}">Kontak</a></li>
</ul>
@endsection
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
               
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
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url("/")}}">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Beauty (20)</a></li>
                                <li><a href="#">Food (5)</a></li>
                                <li><a href="#">Life Style (9)</a></li>
                                <li><a href="#">Travel (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-11">
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
                                <a href="{{route('blog1')}}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
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
                                <a href="{{route('blog2')}}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
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
                                <a href="{{route('blog3')}}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    @endsection