@extends('layouts.fornt-end.master')
@section('content')
    <div class="collection clearfix">
        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="coll-item clearfix">

                        <div class="coll-box">
                            <a href="#"><img src="{{ asset('fornt-end/upload/folder1/22.jpg') }}" width="220"
                                    height="250" alt=""></a>
                            <div class="coll-text">
                                <p>For Women</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="coll-item clearfix">

                        <div class="coll-box">
                            <a href="#"><img src="{{ asset('fornt-end/upload/folder1/35.jpg') }}" width="220"
                                    height="250" alt=""></a>
                            <div class="coll-text">
                                <p>Accessories</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="coll-item clearfix">

                        <div class="coll-box">
                            <a href="#"><img src="{{ asset('fornt-end/upload/folder1/43.jpg') }}" width="220"
                                    height="250" alt=""></a>
                            <div class="coll-text">
                                <p>Men Collection</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Collection -->

    <!-- our work portfolio -->
    <div class="arrivals">
        <div class="container">


            <div class="filters">
                <div class="filter clearfix">
                    <div class="holder">
                        <ul>
                            <li><a href="flowering-plant.php" data-filter="*"><i class=""></i> ทั้งหมด<i
                                        class="active"></i></a></li>
                            <li><a href="flowering-plant.php" data-filter=".class1" class="">ไม้ดอก</a>
                            </li>
                            <li><a href="foliage-plant.php" data-filter=".class2"><i class=""></i>
                                    ไม้ใบ</a></li>
                            <li><a href="purify-the-air.php" data-filter=".class3"><i class=""></i>
                                    ไม้ฟอกอากาศ</a></li>
                            <li><a href="cactus.php" data-filter=".class4"><i class=""></i> แคคตัส<i
                                        class=""></i></a></li>
                        </ul>
                        <div class="holder-border"></div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="demo1 clearfix">
                    <ul class="filter-container clearfix">
                        <li class="class1">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/หญ้าฟรุ้งฟริ้ง.jpg')}}"width="270" height="320" alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>

                            </div>
                        </li>
                        <li class="class2">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/กล้วยไม้.jpg') }}" width="270" height="320"
                                    alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                        <li class="class3">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/เสน่ห์จันทร์แดง.jpg') }}" width="270" height="320"
                                    alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                        <li class="class4">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/คล้านกยูงรํา-แพน.jpg') }}" width="270"
                                    height="320" alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                        <li class="class1">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/ไทรใบสัก.jfif') }}"width="270" height="320"
                                    alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                        <li class="class2">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/ลิ้นมังกร.jpg') }}" width="270" height="320"
                                    alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                        <li class="class3">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/กุหลาบหิน.jfif') }}"width="270" height="320"
                                    alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                        <li class="class4">
                            <div class="arrival-overlay">
                                <img src="{{ asset('fornt-end/upload/ยิมโน.png') }}"width="270" height="320"
                                    alt="">
                                <img src="{{ asset('fornt-end/upload/new.png') }}" alt="" class="new">
                                <div class="arrival-mask">
                                    <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                                </div>
                            </div>
                            <div class="arr-content">
                                <a href="#">
                                    <p>Brown Coat</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- End Filters -->

        </div>

    </div>
    <!-- end our work portfolio -->

    <div class="middle-content">
        <div class="container">
            <h1>FREE SHIPPING <span>ALL ORDERS OVER $150</span></h1>
            <div class="middle-shipp">
                <p>We will ship your item within 3 days</p>
                <div class="mid-border"></div>
            </div>
        </div>
    </div>

    <!-- blog -->
    <div class="blog">
        <div class="container">


            <div class="row">
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#"><img src="{{ asset('fornt-end/upload/เฟรนฮาวาย.jpg') }}"
                                    alt=""></a>
                            <div class="calendar">
                                <p>02</p>
                                <span>dec</span>
                            </div>
                            <a href="#">
                                <h3>This is blog post title. You can edit.</h3>
                            </a>
                            <div class="blog-border"></div>
                            <p>We possess within us two minds. So far I have written only of the conscious mind.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#"><img src="{{ asset('fornt-end/upload/เฟรินบอสตัน.jpg') }}"
                                    alt=""></a>
                            <div class="calendar">
                                <p>12</p>
                                <span>jan</span>
                            </div>
                            <a href="#">
                                <h3>This is blog post with a gallery.</h3>
                            </a>
                            <div class="blog-border"></div>
                            <p>We possess within us two minds. So far I have written only of the conscious mind.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#"><img src="{{ asset('fornt-end/upload/เฟรินใบมะขาม.jpg') }}"
                                    alt=""></a>
                            <div class="calendar">
                                <p>18</p>
                                <span>MAr</span>
                            </div>
                            <a href="#">
                                <h3>5 reasons to buy this Gorgeous theme.</h3>
                            </a>
                            <div class="blog-border"></div>
                            <p>We possess within us two minds. So far I have written only of the conscious mind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->

    <!---->

    <div class="container">
        <div class="title">
            <h1><i class="fa fa-star"></i> FROM BLOG <i class="fa fa-star"></i></h1>
            <div class="title-border"></div>
        </div>

        <div class="demo1 clearfix">
            <ul class="filter-container clearfix">
                <li class="class1">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/ชา.jpg') }}"width="270" height="320" alt="">

                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class2">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/ชานม.jpg') }}" width="270" height="320"
                            alt="">

                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="high-price">$1.199.00</span></li>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class3">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/เค้ก.jpg') }}" width="270" height="320"
                            alt="">
                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class4">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/ทุ.jpg') }}" width="270" height="320" alt="">

                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="high-price">$1.199.00</span></li>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class1">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/กุย.jpg') }}"width="270" height="320" alt="">

                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class2">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/กุ้ง.jpg') }}" width="270" height="320"
                            alt="">
                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class3">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/ยำ.jpg') }}"width="270" height="320" alt="">
                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="high-price">$1.199.00</span></li>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
                <li class="class4">
                    <div class="arrival-overlay">
                        <img src="{{ asset('fornt-end/upload/ยำ2.jpg') }}"width="270" height="320" alt="">
                        <div class="arrival-mask">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a>
                        </div>
                    </div>
                    <div class="arr-content">
                        <a href="#">
                            <p>Brown Coat</p>
                        </a>
                        <ul>
                            <li><span class="high-price">$1.199.00</span></li>
                            <li><span class="low-price">$899.00</span></li>
                        </ul>


                </li>
            </ul>
        </div>
    </div>
@endsection
