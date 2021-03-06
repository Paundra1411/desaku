@extends('landing-page.master')

@section('content')

<section class="banner-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card-banner">
                    <div class="container-fluid">
                        <div class="row">
                            {{-- image gallery --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="image-gallery">

                                    <main class="primary"
                                        style="background-image: url('{{asset('assets/images/komponen/buah-cermai.jpg')}}') ;"></main>

                                    <div class="thumbnails">
                                        <a href="#" class="selected thumbnail"
                                            data-big="{{asset('assets/images/komponen/buah-cermai.jpg')}}">
                                            <div class="thumbnail-image"
                                                style="background-image: url('{{asset('assets/images/komponen/buah-cermai.jpg')}}')"></div>
                                        </a>
                                        <a href="#" class="thumbnail" data-big="{{asset('assets/images/komponen/buah-cermai.jpg')}}">
                                            <div class="thumbnail-image"
                                                style="background-image: url('{{asset('assets/images/komponen/buah-cermai.jpg')}}')"></div>
                                        </a>
                                        <a href="#" class="thumbnail" data-big="{{asset('assets/images/komponen/buah-cermai2.jpg')}}">
                                            <div class="thumbnail-image"
                                                style="background-image: url('{{asset('assets/images/komponen/buah-cermai2.jpg')}}')"></div>
                                        </a>
                                        <a href="#" class="thumbnail" data-big="{{asset('assets/images/komponen/buah-cermai1.jpg')}}">
                                            <div class="thumbnail-image"
                                                style="background-image: url('{{asset('assets/images/komponen/buah-cermai1.jpg')}}')"></div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            {{-- End --}}
                            {{-- Section  --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="caption-section">
                                    <p>Buah Cermai</p>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg height="20" width="23">
                                                    <polygon
                                                        points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"
                                                        fill="currentColor" />
                                                </svg>
                                            </li>

                                            <span class="ulasan">
                                                <label for="">
                                                    &nbsp;1000 Ulasan
                                                </label>
                                            </span>
                                        </ul>
                                    </div>

                                    <div class="price">
                                        <p>Rp. 50.000/kg - Rp. 100.000/kg</p>
                                    </div>
                                    <div class="location">
                                        <p>Desa Gayo di Papua Barat</p>
                                    </div>

                                    <div class="group-button" id="phone">

                                        <button type="submit" class="btn btn-submit" onclick="change()">
                                            <h4 id="phone-detail">Hubungi Penjual</h4>
                                        </button>

                                    </div>

                                    <div class="group-button">
                                    <a href="/favorite">
                                        <button type="submit" class="btn btn-chart">
                                            <h4>Tambahkan ke Favorite</h4>
                                        </button>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            {{-- End section --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="description">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="tab-menu">

                    <div class="tab-wrapper">

                        <ul class="tab-menu">
                            <li class="active">Deskripsi</li>
                            <li>Review</li>

                        </ul>

                        <div class="tab-content">
                            <div>
                                Buah Cermai atau yang memiliki Nama Latin Phyllanthus acidus  Cerme berkerabat dekat 
                                dengan pohon malaka (Phyllanthus emblica) dan meniran (P. niruri); keduanya adalah tumbuhan
                                yang berkhasiat obat, buah ini merupakan Buah yang memiliki rasa yang asam. Coba kalian bayangkan 
                                semua kalau menggigit buah ini dengan rasa yang pertama kita rasakan gigi terasa Nyilu,kwkwk…, 
                                kembali ke pembahasan  Buah Cermai,Daun dari Buah cermai ini mempunyai bentuk yang Kecil-kecil dan tidak 
                                memiliki banyak ranting. Jika di Desa biasanya buah ini lebih sering di Buat untuk Manisan atau Atau 
                                manisan Kering yang kadang di Sebut Alua, nah jika di buat manisan buah ini akan terasa enak sekali, Namun 
                                siapa sangka ternyata buah Cermai ini memiliki Banyak sekali Kandungan atau Khasiat yang bisa untuk pengobatan,
                                Nah mau tau apa saja Manfaat dari Buah Cermai ini untuk kesehatan, maka silahkan saja lihat di bawah ini.
                                Cerme, cereme atau ceremai adalah nama sejenis pohon dengan buahnya sekali. Buah yang masam ini dikenal pula dengan
                                nama-nama lain seperti ceremoi (Aceh), chermai (Mal.), karmay (Ilokano, Fil.), mayom (Thai.) dan lain-lain. Dalam 
                                bahasa Inggris dinamai Otaheite gooseberry, Malay gooseberry dan beberapa sebutan yang lain. Nama ilmiahnya adalah
                                Phyllanthus acidus.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto porro culpa
                                corrupti quos! Consequatur obcaecati laboriosam provident mollitia, ut culpa repellendus
                                eos quia illum possimus ea quis dolorem nemo, deserunt repudiandae voluptas rerum quae
                                architecto ducimus illo quasi magni eveniet facere accusamus? Molestiae soluta deleniti
                                quia eveniet ratione voluptas exercitationem asperiores provident quos quisquam magni
                                quas maiores, dicta suscipit. Vitae mollitia dolore sit necessitatibus, provident
                                consequuntur aperiam animi sunt ullam. Porro quisquam dignissimos, voluptate dolores
                                nemo repellat vitae perspiciatis sapiente praesentium maiores odit iste quaerat nulla
                                deserunt ratione et deleniti aliquid quibusdam libero facilis voluptates ab? Adipisci
                                fuga ea debitis, id molestias voluptates. Quae, enim doloremque! Eveniet necessitatibus
                                assumenda est ad esse consectetur provident error voluptatem, iusto cumque eos quasi
                                facere hic corrupti maiores veritatis soluta. Soluta fugit magnam, aut animi maiores eum
                                eveniet sint repudiandae voluptatum vero asperiores. Facilis amet aliquam dolorum
                                voluptatem deserunt, neque minus earum delectus aperiam, reprehenderit eum possimus
                                itaque maxime. Similique quisquam molestias delectus accusamus, repellat modi, tempore
                                provident alias numquam, nemo quas impedit voluptas architecto. At ex architecto harum
                                vel beatae animi provident. Maxime porro numquam voluptatibus maiores natus nulla ipsa,
                                et adipisci repellendus mollitia quis quibusdam optio sapiente aut quas quos aliquam
                                fuga accusamus eum repudiandae tempore suscipit est provident. Quas debitis dignissimos
                                sequi tenetur? Odit quas mollitia, perferendis excepturi ab ullam perspiciatis vero
                                incidunt ea sequi quis nam doloremque dolore error non laborum nihil sapiente aliquid
                                impedit totam officiis consequatur? Praesentium ipsa saepe ducimus alias pariatur rem,
                                necessitatibus quibusdam quidem unde veniam distinctio repudiandae quos iusto est qui in
                                perspiciatis. Ipsum corporis eius ad aperiam, sunt assumenda quasi quisquam omnis nisi
                                quidem amet architecto eos similique debitis, quibusdam velit optio unde nihil esse!
                                Consectetur laborum repellat ab odio modi obcaecati iusto numquam fuga velit maxime,
                                ipsam rerum nihil, delectus ea soluta! Laudantium, alias? Quaerat, ipsum esse aperiam
                                enim, vel facilis iusto laboriosam odio laudantium corrupti vitae eius itaque ratione
                                eaque odit! Voluptatum nihil et, expedita nemo, corrupti quia dolor maxime tenetur
                            </div>


                            {{-- Review --}}
                            <div>
                                <div class="section-review">
                                    <div class="rating-review">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="all-rating">
                                                    <div class="container">

                                                        <div class="inner">
                                                            <div class="rating">
                                                                <span class="rating-num">4.0</span>
                                                                <div class="rating-stars">
                                                                    <span><i class="active icon-star"></i></span>
                                                                    <span><i class="active icon-star"></i></span>
                                                                    <span><i class="active icon-star"></i></span>
                                                                    <span><i class="active icon-star"></i></span>
                                                                    <span><i class="icon-star"></i></span>
                                                                </div>

                                                                <div class="rating-users">
                                                                    <i class="icon-user"></i> 1,014,004 total
                                                                </div>
                                                            </div>

                                                            <div class="histo">
                                                                <div class="five histo-rate">
                                                                    <span class="histo-star">
                                                                        <i class="active icon-star"></i> 5 </span>
                                                                    <span class="bar-block">
                                                                        <span id="bar-five" class="bar">
                                                                            <span>566,784</span>&nbsp;
                                                                        </span>
                                                                    </span>
                                                                </div>

                                                                <div class="four histo-rate">
                                                                    <span class="histo-star">
                                                                        <i class="active icon-star"></i> 4 </span>
                                                                    <span class="bar-block">
                                                                        <span id="bar-four" class="bar">
                                                                            <span>171,298</span>&nbsp;
                                                                        </span>
                                                                    </span>
                                                                </div>

                                                                <div class="three histo-rate">
                                                                    <span class="histo-star">
                                                                        <i class="active icon-star"></i> 3 </span>
                                                                    <span class="bar-block">
                                                                        <span id="bar-three" class="bar">
                                                                            <span>100,940</span>&nbsp;
                                                                        </span>
                                                                    </span>
                                                                </div>

                                                                <div class="two histo-rate">
                                                                    <span class="histo-star">
                                                                        <i class="active icon-star"></i> 2 </span>
                                                                    <span class="bar-block">
                                                                        <span id="bar-two" class="bar">
                                                                            <span>44,525</span>&nbsp;
                                                                        </span>
                                                                    </span>
                                                                </div>

                                                                <div class="one histo-rate">
                                                                    <span class="histo-star">
                                                                        <i class="active icon-star"></i> 1 </span>
                                                                    <span class="bar-block">
                                                                        <span id="bar-one" class="bar">
                                                                            <span>136,457</span>&nbsp;
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Comment --}}

                                    <br>
                                    <div class="comment">
                                        <h5>Comments (3)</h5>
                                        	<!-- Comment -->
						<div class="media comment">
							<img src="{{ asset('assets/images/speakers/speaker-thumb-four.jpg') }}" alt="image">
							<div class="media-body">
								<h6>Jessica Brown</h6>
								<ul class="list-inline">
									<li class="list-inline-item"><span class="fa fa-calendar"></span>Mar 20, 2016</li>
									<li class="list-inline-item"><a href="#">Reply</a></li>
								</ul>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat. 
								</p>
								<!-- Nested Comment -->
								<div class="media comment">
									<img src="{{ asset('assets/images/speakers/speaker-thumb-four.jpg') }}" alt="image">
									<div class="media-body">
										<h6>Jonathan Doe</h6>
										<ul class="list-inline">
											<li class="list-inline-item"><span class="fa fa-calendar"></span>Mar 20, 2016</li>
										</ul>
										<p>
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi 
										</p>
									</div>
								</div>
							</div>
                        </div>
                        
                        	<!-- Comment -->
						<div class="media comment">
							<img src="{{ asset('assets/images/speakers/speaker-thumb-four.jpg') }}" alt="image">
							<div class="media-body">
								<h6>Adam Smith</h6>
								<ul class="list-inline">
									<li class="list-inline-item"><span class="fa fa-calendar"></span>Mar 20, 2016</li>
									<li class="list-inline-item"><a href="#">Reply</a></li>
								</ul>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant tota rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat. 
								</p>
							</div>
						</div>
                                    </div>
                                    <br>
                                    <div class="comment-form">
                                        <h5>Leave A Comment</h5>
                                        <form action="#" class="row">
                                            <div class="col-12">
                                                <textarea class="form-control main" name="comment" id="comment" rows="10" placeholder="Your Review"></textarea>
                                            </div>
                                           
                                            <div class="col-12">
                                                <button class="btn btn-main-md" type="submit">Submit Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                            {{-- End Review --}}
                        </div><!-- //tab-content -->

                    </div><!-- //tab-wrapper -->


                </div>
            </div>
            {{--  --}}
            <div class="col-md-4 col-sm-4">
                <div class="aside">
                    <div class="sidebar">
                        <!-- Category Widget -->
                        <div class="widget category">
                            <!-- Widget Header -->
                            <h5 class="widget-header">Kategori</h5>
                            <ul class="category-list m-0 p-0">
                                <li><a href="">Buah - buahan <span class="float-right">(6)</span></a></li>
                                <li><a href="">Kacang - kacangan <span class="float-right">(9)</span></a></li>
                                <li><a href="">Sayur - sayuran<span class="float-right">(3)</span></a></li>
                                <li><a href="">Hewan ternak<span class="float-right">(5)</span></a></li>
                                <li><a href="">Biji - bijian<span class="float-right">(7)</span></a></li>
                            </ul>
                        </div>
                        <!-- Latest post -->
                        <div class="widget latest-post">
                            <h5 class="widget-header">Posting Terbaru</h5>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/3-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Apel Manalagi</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/2-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Strawberry</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/3-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Apel Manalagi</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                            <i class="fa fa-heart-o"></i>
                                            <a href="#">350</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-comments-o"></i>
                                            <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                            <!-- Post -->
                            <div class="media">
                                <img src="{{ asset('assets/images/desaku/4-sm.jpeg')}}" class="img-fluid" alt="post-thumb">
                                <div class="media-body">
                                    <h6><a href="">Jeruk</a></h6>
                                    <p href="#"><span class="fa fa-home"></span>Desa Wonogiri</p>
                                    <li class="list-inline-item">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">350</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa fa-comments-o"></i>
                                        <a href="#">30</a>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <!-- Popular Tag Widget -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- CSS --}}

@push('header-scripts')
<style>
    .banner-page {
        width: 100%;
        height: auto;
        padding: 2%;
        a
    }

    .banner-page .card-banner {
        width: 100%;
        height: auto;
        -webkit-box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        -moz-box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        border: none;
        padding: 2%;
        border-radius: 16px;
    }

    .image-gallery {
        width: 100%;
        height: 350px;
    }

    .caption-section {
        width: 100%;
        height: auto;
    }

    .caption-section p {
        font-size: 1.5vw;
        margin-top: 6%;
    }

    .rating {
        width: 100%;
        margin-top: 1%;
        height: auto;
        border-bottom: 2px solid #ecf0f1;
    }

    .rating ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .rating li {
        color: yellow;
    }

    .rating li:hover~li {
        color: grey;
    }

    .ulasan label {
        font-size: 1vw;
    }

    .price {
        margin-top: 8%;
        width: 100%;
        height: auto;
    }

    .price p {
        font-size: 1.5vw;
        font-weight: bold;
        color: #e67e22;
    }

    .location p {
        font-size: 1vw;
        margin-top: 2%;
    }

    .group-button {
        margin-top: 4%;
    }

    .group-button .btn-submit {
        width: 100%;
        background: #e67e22;
        color: white;
        box-shadow: 0px 10px 40px -10px rgba(143, 141, 143, 1);

    }

    .group-button .btn-submit h4 {
        font-size: 25px;
        margin-top: 1%;
        font-weight: bold;
        color: #ffffff;
        text-transform: capitalize;
    }

    .group-button .btn-chart {
        width: 100%;
        background: #ffffff;
        color: white;
        box-shadow: 0px 10px 40px -10px rgba(143, 141, 143, 1);

    }

    .group-button .btn-chart h4 {
        font-size: 25px;
        margin-top: 1%;
        font-weight: bold;
        color: #e67e22;
        text-transform: capitalize;
    }

    .image-gallery {
        margin: 0 auto;
        display: table;
    }

    .primary,
    .thumbnails {
        display: inline-flex;
    }

    .thumbnails {
        width: 100px;

    }

    .primary {
        width: 100%;
        height: 450px;
        border: 1px solid #000000;
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .thumbnail:hover .thumbnail-image,
    .selected .thumbnail-image {
        border: 4px solid red;
    }

    .thumbnail-image {
        width: 100px;
        height: 100%;
        margin: 20px auto;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        border: 1px solid transparent;
    }


    /* Section description */

    .description {
        width: 100%;
        height: auto;
        padding: 2%;
    }

    .tab-menu {
        width: 100%;
        height: auto;

    }

    .tab-wrapper {
        width: 100%;

    }

    .tab-menu li {
        position: relative;
        background-color: #fff;
        color: #bcbcbc;
        display: inline-block;
        padding: 20px 40px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 0;
    }

    .tab-menu li:hover {
        color: #464646;
    }

    .tab-menu li.active {
        color: #464646;
        opacity: 1;
    }

    .tab-menu li.active:hover {
        color: #464646;
    }

    .tab-content>div {
        background-color: #fff;
        box-sizing: border-box;
        width: 100%;
        padding: 50px;
        min-height: 200px;
    }

    .line {
        width: 0;
        position: absolute;
        height: 7px;
        background-color: #e67e22;
        top: 0;
        left: 0;
    }

    .btn-detail {
        width: 50%;
        height: auto;
        background: #e67e22;
        color: #ffffff;
    }



    .aside {
        width: 100%;
        height: auto;
    }

    .section-review {
        width: 100%;
        height: auto;
        padding: 2%;
    }

    .section-review .rating-review {
        width: 100%;
        height: auto;
    }

    .rating-review .all-rating {
        width: 100%;
        height: auto;
        border-bottom: 3px solid #ececec;
    }

    .inner {
        padding: 1em;
        background-color: white;
        overflow: hidden;
        position: relative;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .rating {
        float: left;
        width: 45%;
        margin-right: 5%;
        text-align: center;
    }

    .rating-num {
        color: #333333;
        font-size: 72px;
        font-weight: 100;
        line-height: 1em;
    }

    .rating-stars {
        font-size: 20px;
        color: #E3E3E3;
        margin-bottom: .5em;
    }

    .rating-stars .active {
        color: #737373;
    }

    .rating-users {
        font-size: 14px;
    }

    .histo {
        float: left;
        width: 50%;
        font-size: 13px;
    }

    .histo-star {
        float: left;
        padding: 3px;

    }

    .histo-rate {
        width: 100%;
        display: block;
        clear: both;
    }

    .bar-block {
        margin-left: 5px;
        color: black;
        display: block;
        float: left;
        width: 75%;
        position: relative;
    }

    .bar {
        padding: 4px;
        display: block;
    }

    #bar-five {
        width: 0;
        background-color: #9FC05A;
    }

    #bar-four {
        width: 0;
        background-color: #ADD633;
    }

    #bar-three {
        width: 0;
        background-color: #FFD834;
    }

    #bar-two {
        width: 0;
        background-color: #FFB234;
    }

    #bar-one {
        width: 0;
        background-color: #FF8B5A;
    }

    @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

</style>

@endpush


@push('footer-scripts')
<script>

    function change(){

        let phone = document.getElementById('phone-detail');
        let phone_detail= phone.value;
        // document.getElementById('phone-detail').innerHTML = '081336532601'
        if (phone_detail === "081336532601") {
			phone.innerHTML = "https://api.whatsapp.com/send?phone=081336532601";
		} 
		else {
			phone.innerHTML = "081336532601";
            
		}
    }
</script>
@endpush