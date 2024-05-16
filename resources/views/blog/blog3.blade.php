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
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="{{asset('img/blog/details/details-hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Lemon: Buah Segar yang Penuh Kesehatan</h2>
                        <ul>
                            <li>By exa</li>
                            <li>April 4,2023</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-4 col-md-5 order-md-1 order-2">
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
                </div>-->
                <div class="col-lg-12 col-md-12 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="{{asset('img/blog/blog-3.jpg')}}" alt="">
                        <p>Lemon adalah buah yang segar dan asam yang sering digunakan sebagai bahan dalam minuman, hidangan, atau bumbu. Selain memberikan rasa yang segar, lemon juga memiliki sejumlah manfaat kesehatan yang luar biasa. Dalam artikel ini, kami akan menjelajahi manfaat kesehatan yang terkait dengan mengonsumsi lemon secara teratur. Dengan menambahkan lemon ke dalam pola makan sehari-hari, Anda dapat meningkatkan kesehatan secara keseluruhan dan mendapatkan kelezatan yang menyegarkan.
                            <br>
                            <br>
                            <b>Sumber Vitamin C yang Tinggi:</b>
                            Lemon mengandung kandungan vitamin C yang tinggi, yang merupakan nutrisi penting untuk menjaga sistem kekebalan tubuh yang sehat. Vitamin C membantu meningkatkan produksi sel-sel kekebalan tubuh, melawan infeksi, dan membantu penyembuhan luka. Dengan mengonsumsi lemon, Anda dapat meningkatkan pertahanan tubuh Anda terhadap penyakit dan menjaga kesehatan secara keseluruhan.
                            <br>
                            <br>
                            <b>Meningkatkan Pencernaan:</b>
                            Salah satu manfaat terkenal lemon adalah kemampuannya untuk meningkatkan pencernaan. Lemon memiliki sifat antiseptik dan bersifat asam dalam tubuh. Minum segelas air lemon hangat di pagi hari dapat membantu merangsang produksi enzim pencernaan, mengurangi masalah pencernaan seperti sembelit, kembung, dan mulas. Ini juga dapat membantu membersihkan sistem pencernaan dan menghilangkan racun dari tubuh.
                            <br>
                            <br>
                            <b>Menyegarkan Nafas:</b>
                            Aroma segar dari lemon dapat membantu mengatasi masalah nafas yang tidak segar. Lemon memiliki sifat antibakteri yang membantu membunuh bakteri penyebab bau di mulut. Mengunyah irisan lemon atau berkumur dengan air lemon dapat memberikan nafas yang segar dan menghilangkan bau tidak sedap.
                            <br>
                            <br>
                            <b>Meningkatkan Hidrasi:</b>
                            Air lemon adalah minuman yang menyegarkan dan dapat membantu meningkatkan hidrasi tubuh. Lemon menambahkan rasa dan aroma yang menyenangkan pada air, sehingga Anda lebih terdorong untuk minum lebih banyak. Ini sangat berguna bagi mereka yang kesulitan minum cukup air setiap hari.
                            <br>
                            <br>
                            <b>Membantu Detoksifikasi Tubuh:</b>
                            Lemon memiliki sifat detoksifikasi yang baik untuk membersihkan tubuh dari racun. Lemon membantu merangsang produksi enzim hati dan membantu proses eliminasi racun. Minum air lemon secara teratur dapat membantu memperkuat fungsi detoksifikasi alami tubuh dan meningkatkan kesehatan secara keseluruhan.
                            <br>
                            <br>
                            <b>Mendukung Kesehatan Jantung:</b>
                            Lemon mengandung senyawa flavonoid seperti hesperidin, yang memiliki efek menguntungkan bagi kesehatan jantung. Flavonoid dapat membantu mengurangi risiko penyakit jantung, meningkatkan kesehatan pembuluh darah, dan mengurangi peradangan. Konsumsi lemon secara teratur dapat membantu menjaga kesehatan jantung dan meng
                            </p>
                        <h3>Kesimpulan</h3>
                        <p>Dalam program diet, penting untuk memilih makanan yang kaya akan nutrisi dan rendah kalori. Sayuran adalah pilihan yang tepat untuk mencapai tujuan tersebut. Brokoli, bayam, timun, paprika, wortel, dan labu adalah beberapa sayuran yang sangat baik untuk dimasukkan ke dalam menu diet Anda. Mereka tidak hanya rendah kalori, tetapi juga memberikan serat, vitamin, dan mineral penting bagi tubuh Anda.
                            <br>
                            Dengan mengonsumsi sayuran ini secara teratur dan kreatif dalam menu diet Anda, Anda akan mendapatkan manfaat kesehatan yang signifikan. Jangan ragu untuk eksperimen dengan resep baru dan menemukan cara favorit Anda dalam menikmati sayuran tersebut.
                        </p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{{asset('img/icon/user.png')}}" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Exa</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Food</li>
                                        <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Post You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-6.jpg')}}" alt="">
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
                            <img src="{{asset('img/blog/blog-2.jpg')}}" alt="">
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
                            <img src="{{asset('img/blog/blog-3.jpg')}}" alt="">
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
    <!-- Related Blog Section End -->

@endsection