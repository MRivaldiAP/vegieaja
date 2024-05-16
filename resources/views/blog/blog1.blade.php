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
                        <h2>Menciptakan Kelezatan dari Produk Sayur dalam Sekejap</h2>
                        <ul>
                            <li>By exa</li>
                            <li>May 4,2023</li>
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
                        <img src="{{asset('img/blog/blog-6.jpg')}}" alt="">
                        <p>Dalam kehidupan yang sibuk, seringkali kita tidak memiliki banyak waktu untuk menghabiskan berjam-jam di dapur. Namun, memasak makanan sehat dan lezat tidak harus rumit. Dengan menggunakan produk sayur segar, kita dapat menciptakan hidangan yang sederhana, sehat, dan menggugah selera. Artikel ini akan memberikan beberapa resep simpel menggunakan produk sayur yang dapat memanjakan lidah Anda tanpa mengorbankan waktu berharga Anda.
                            <br>
                            <br>
                            <b>Sup Sayur Sehat dalam Seketika:</b>
                            Sup sayur adalah hidangan yang penuh dengan nutrisi dan sangat mudah dan cepat untuk disiapkan. Tambahkan beberapa produk sayur pilihan Anda, seperti wortel, kentang, kacang polong, brokoli, atau bayam ke dalam panci dengan kaldu sayuran. Tambahkan beberapa rempah pilihan Anda, seperti merica, jahe, atau daun ketumbar untuk memberikan cita rasa ekstra. Masak hingga sayur-sayur tersebut lunak dan lezat, dan hidangan sehat siap disajikan.
                            <br>
                            <br>
                            <b>Panggang Sayuran dengan Rempah-Rempah:</b>
                            Panggang sayuran adalah cara yang sempurna untuk menghadirkan rasa dan tekstur yang menarik pada produk sayur Anda. Potong sayuran seperti paprika, zucchini, terong, dan bawang bombay menjadi potongan-potongan yang serupa. Taburkan sedikit minyak zaitun, rempah pilihan Anda, seperti thyme atau rosemary, garam, dan lada. Panggang dalam oven pada suhu tinggi hingga sayuran matang dan sedikit karamelisasi. Hidangan panggang sayuran yang simpel ini akan menjadi favorit di meja makan Anda.
                            <br>
                            <br>
                            <b>Salad Segar dan Cepat:</b>
                            Salad adalah pilihan terbaik saat ingin memasukkan banyak sayuran dalam makanan Anda dalam waktu singkat. Iris beberapa sayuran hijau seperti selada, bayam, atau rucola. Tambahkan sayuran lain yang diinginkan seperti tomat ceri, mentimun, paprika, atau wortel. Taburkan dengan dressing yang ringan, seperti dressing lemon dan minyak zaitun, atau dressing yogurt dan mentimun. Anda juga bisa menambahkan topping seperti kacang panggang, keju parut, atau potongan daging panggang untuk hidangan yang lebih mengenyangkan.
                            <br>
                            <br>
                            <b>Stir-Fry Sederhana:</b>
                            Stir-fry adalah cara cepat dan mudah untuk mengolah sayuran dengan kelezatan yang terjaga. Potong sayuran seperti brokoli, wortel, buncis, atau kembang kol menjadi potongan kecil. Panaskan sedikit minyak di wajan, tambahkan sayuran, dan tumis dengan cepat hingga matang tetapi tetap renyah. Tambahkan saus pilihan Anda, seperti saus teriyaki, saus kacang, atau saus cabai untuk memberikan rasa yang menggugah selera. Sajikan dengan nasi atau mi untuk hidangan utama yang lezat.  
                            <br>
                            <br>
                            <b>Smoothie Sayur yang Menyegarkan:</b>
                            Smoothie bukan hanya untuk buah-buahan, tetapi juga dapat menjadi cara yang fantastis untuk mengonsumsi produk sayur secara menyenangkan. Campurkan sayuran segar seperti bayam, kale, mentimun, atau seledri dengan buah-buahan favorit Anda, seperti pisang, mangga, atau blueberry. Tambahkan sedikit cairan seperti air kelapa, susu almond, atau yogurt tanpa lemak untuk mencapai tekstur yang halus. Jika Anda menginginkan tambahan nutrisi, Anda juga bisa memasukkan beberapa bahan tambahan seperti biji chia, protein serbuk, atau madu. Proses semua bahan dalam blender hingga halus dan nikmati smoothie sayur yang menyegarkan sebagai camilan sehat atau sarapan yang lezat.
                            </p>
                        <h3>Kesimpulan</h3>
                        <p>Dalam mengolah produk sayur, tidak perlu rumit dan memakan waktu. Dengan resep-resep simpel yang dijelaskan di atas, Anda dapat menciptakan hidangan yang sehat, lezat, dan memanjakan dalam sekejap. Mulailah menjadikan sayuran sebagai bahan utama dalam menu sehari-hari Anda dan eksplorasi kreativitas dalam mengolahnya. Dengan memasak simpel dengan produk sayur, Anda tidak hanya memberikan asupan gizi yang baik untuk tubuh, tetapi juga menghadirkan hidangan yang menyenangkan bagi seluruh keluarga. Mari nikmati kelezatan dari produk sayur dalam setiap sajian yang Anda buat!</p>
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