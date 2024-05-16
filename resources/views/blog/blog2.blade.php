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
                        <h2>Sayuran Sehat untuk Menu Diet</h2>
                        <ul>
                            <li>By exa</li>
                            <li>May 16,2023</li>
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
                        <img src="{{asset('img/blog/blog-2.jpg')}}" alt="">
                        <p>Apakah Anda sedang menjalani program diet atau ingin hidup lebih sehat? Sayuran adalah makanan yang sangat penting untuk mencapai tujuan tersebut. Kaya akan serat, vitamin, dan mineral, sayuran membantu menjaga kesehatan tubuh dan mendukung penurunan berat badan. Dalam artikel ini, kami akan memandu Anda melalui beberapa sayuran yang cocok untuk menu diet dan memberikan informasi tentang manfaat kesehatan mereka. Dengan memasukkan sayuran ini ke dalam pola makan Anda, Anda akan mengalami perubahan positif dalam perjalanan menuju gaya hidup sehat.
                            <br>
                            <br>
                            <b>Brokoli:</b>
                            Brokoli adalah salah satu sayuran yang paling serbaguna dan bergizi. Kaya akan serat, vitamin C, vitamin K, dan antioksidan, brokoli dapat membantu meningkatkan sistem kekebalan tubuh dan mengurangi risiko penyakit. Selain itu, brokoli rendah kalori sehingga cocok untuk diet. Anda dapat memasak brokoli dengan cara direbus, ditumis, atau bahkan dimasukkan ke dalam salad segar.
                            <br>
                            <br>
                            <b>Bayam:</b>
                            Bayam merupakan sumber yang kaya akan nutrisi penting seperti zat besi, vitamin A, vitamin C, dan vitamin K. Bayam rendah kalori namun tinggi serat, sehingga dapat memberikan rasa kenyang lebih lama. Anda bisa mengonsumsi bayam dalam salad, tumis, atau sebagai tambahan dalam smoothie sehat Anda.
                            <br>
                            <br>
                            <b>Timun:</b>
                            Timun adalah sayuran yang mengandung banyak air dan rendah kalori, sehingga sangat baik untuk diet. Selain itu, timun juga mengandung serat, vitamin K, dan mineral penting seperti magnesium dan kalium. Anda dapat menambahkan timun dalam salad, membuat jus segar, atau menjadikannya sebagai camilan sehat di antara waktu makan.
                            <br>
                            <br>
                            <b>Paprika:</b>
                            Paprika menghadirkan keceriaan warna dan kelezatan dalam menu diet Anda. Kaya akan vitamin C, vitamin A, dan serat, paprika dapat membantu meningkatkan pencernaan dan menjaga kesehatan kulit. Anda dapat memasukkan paprika dalam sajian panggang, tumis, atau sebagai tambahan dalam salad.
                            <br>
                            <br>
                            <b>Wortel:</b>
                            Wortel adalah sayuran rendah kalori yang tinggi serat, vitamin A, dan beta-karoten. Sayuran ini sangat baik untuk kesehatan mata dan menjaga kulit tetap sehat. Anda dapat menikmati wortel mentah sebagai camilan sehat, direbus, atau dimasak sebagai bagian dari sajian tumis atau sup sayuran.
                            <br>
                            <br>
                            <b>Labu:</b>
                            Labu merupakan sayuran rendah kalori yang tinggi serat dan kaya akan vitamin A, vitamin C, dan potassium. Labu juga mengandung beta-karoten, yang baik untuk kesehatan mata. Anda dapat menggunakan labu untuk membuat sup, tumis, atau bahkan dalam hidangan penutup seperti pai atau kue.
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