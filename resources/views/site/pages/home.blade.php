@extends('site.layout.layout')
@section('content')
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                @include('site.layout.menu')
                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    @include('site.layout.slidebar')
                    <!-- ============================================== INFO BOXES : END ============================================== -->
                    <!-- ============================================== SCROLL TABS ============================================== -->
                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                        <div class="more-info-tab clearfix ">
                            <h3 class="new-product-title pull-left">Sản phẩm mới</h3>
                            {{-- <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a>
                                </li>
                                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
                            </ul><!-- /.nav-tabs --> --}}
                        </div>
                        <div class="tab-content outer-top-xs">
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @foreach ($sanpham->slice(0, 10) as $item)
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"><a
                                                                    href="{{ route('chitiet', ['masanpham' => $item->masanpham]) }}"><img
                                                                        src="{{ URL::asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}  "
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="tag new"><span>new</span></div>
                                                        </div>
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                    href="{{ route('chitiet', ['masanpham' => $item->masanpham]) }}">{{ $item->tensanpham }}</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"><span class="price">
                                                                    {{ number_format($item->gia, 0) }}đ</span><span
                                                                    class="price-before-discount">
                                                                    </span></div>
                                                        </div>
                                                        <div class="cart clearfix animate-effect">
                                                            <form action="">
                                                                @csrf
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <input type="hidden" value="{{$item->masanpham}}" class="giohang_masanpham_{{$item->masanpham}}">
                                                                            <input type="hidden" value="{{$item->tensanpham}}" class="giohang_tensanpham_{{$item->masanpham}}">
                                                                            <input type="hidden" value="{{$item->hinhanh}}" class="giohang_hinhanh_{{$item->masanpham}}">
                                                                            <input type="hidden" value="{{$item->gia}}" class="giohang_gia_{{$item->masanpham}}">
                                                                            <input type="hidden" value="1" class="giohang_soluong_{{$item->masanpham}}">
                                                                            <button
                                                                                data-toggle="tooltip"
                                                                                data-id_product="{{ $item->masanpham }}"
                                                                                class="btn btn-primary icon them_gio" type="button"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></button>

                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add
                                                                                to cart</button>
                                                                        </li>
                                                                        <li class="lnk wishlist"><a data-toggle="tooltip"
                                                                                class="add-to-cart" href="detail.html"
                                                                                title="Wishlist"><i
                                                                                    class="icon fa fa-heart"></i></a></li>
                                                                        <li class="lnk"><a data-toggle="tooltip"
                                                                                class="add-to-cart" href="detail.html"
                                                                                title="Compare"><i class="fa fa-signal"
                                                                                    aria-hidden="true"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </form>
                                                        </div><!-- /.cart -->
                                                    </div><!-- /.product -->
                                                </div><!-- /.products -->
                                            </div>
                                        @endforeach
                                    </div><!-- /.home-owl-carousel -->
                                </div><!-- /.product-slider -->
                            </div><!-- /.tab-pane -->
                            {{-- <div class="tab-pane" id="smartphone">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p5.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">{{$item->tensanpham}}</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div>
                                    </div><!-- /.home-owl-carousel -->
                                </div><!-- /.product-slider -->
                            </div> --}}
                            {{-- <div class="tab-pane" id="laptop">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p11.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p12.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p13.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p14.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p15.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p16.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                    </div><!-- /.home-owl-carousel -->
                                </div><!-- /.product-slider -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="apple">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p18.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p18.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p17.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p16.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p13.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"><a href="detail.html"><img
                                                                    src="images/products/p14.jpg" alt=""></a>
                                                        </div><!-- /.image -->
                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a>
                                                        </h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"><span class="price">
                                                                $450.99</span><span class="price-before-discount">$
                                                                800</span></div><!-- /.product-price -->
                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group"><button
                                                                        class="btn btn-primary icon" data-toggle="dropdown"
                                                                        type="button"><i
                                                                            class="fa fa-shopping-cart"></i></button><button
                                                                        class="btn btn-primary cart-btn" type="button">Add
                                                                        to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"><a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"><i
                                                                            class="icon fa fa-heart"></i></a></li>
                                                                <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                        title="Compare"><i class="fa fa-signal"
                                                                            aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                    </div><!-- /.home-owl-carousel -->
                                </div><!-- /.product-slider -->
                            </div><!-- /.tab-pane --> --}}
                        </div><!-- /.tab-content -->
                    </div><!-- /.scroll-tabs -->
                    <!-- ============================================== SCROLL TABS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners wow fadeInUp outer-bottom-xs">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"><img class="img-responsive" src="images/banners/home-banner1.jpg"
                                            alt=""></div>
                                </div><!-- /.wide-banner -->
                            </div><!-- /.col -->
                            <div class="col-md-5 col-sm-5">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"><img class="img-responsive" src="images/banners/home-banner2.jpg"
                                            alt=""></div>
                                </div><!-- /.wide-banner -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.wide-banners -->
                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">SẢN PHẨM NỔI BẬT</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($sanpham->slice(11, 19) as $item)
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"><a href="detail.html"><img
                                                            src="{{ asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}"
                                                            alt=""></a></div>
                                                <!-- /.image -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div><!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">{{ $item->tensanpham }}</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price"><span class="price">
                                                        {{ number_format($item->gia, 0) }}đ</span><span
                                                        class="price-before-discount"></span></div>
                                                <!-- /.product-price -->
                                            </div><!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group"><button
                                                                class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i
                                                                    class="fa fa-shopping-cart"></i></button><button
                                                                class="btn btn-primary cart-btn" type="button">Add to
                                                                cart</button></li>
                                                        <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                title="Wishlist"><i class="icon fa fa-heart"></i></a></li>
                                                        <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                title="Compare"><i class="fa fa-signal"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div><!-- /.product -->
                                    </div><!-- /.products -->
                                </div><!-- /.item -->
                            @endforeach
                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners wow fadeInUp outer-bottom-xs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"><img class="img-responsive" src="images/banners/home-banner.jpg"
                                            alt=""></div>
                                    <div class="strip strip-text">
                                        <div class="strip-inner">
                                            <h2 class="text-right">New Mens Fashion<br><span class="shopping-needs">Save
                                                    up to 40% off</span></h2>
                                        </div>
                                    </div>
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                    </div><!-- /.new-label -->
                                </div><!-- /.wide-banner -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.wide-banners -->
                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== BEST SELLER ============================================== -->
                    <div class="best-deal wow fadeInUp outer-bottom-xs">
                        <h3 class="section-title">SẢN PHẨM BÁN CHẠY</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                                @foreach ($sanpham->slice(1, 5) as $item)
                                    <div class="item">
                                        <div class="products best-product">
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"><a href="#"><img
                                                                            src="{{ asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}"
                                                                            alt=""></a>
                                                                </div><!-- /.image -->
                                                            </div><!-- /.product-image -->
                                                        </div><!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="#">{{ $item->tensanpham }}</a>
                                                                </h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"><span class="price">
                                                                        {{ number_format($item->gia, 0) }}đ</span></div>
                                                                <!-- /.product-price -->
                                                            </div>
                                                        </div><!-- /.col -->
                                                    </div><!-- /.product-micro-row -->
                                                </div><!-- /.product-micro -->
                                            </div>
                                            <div class="product">
                                                <div class="product-micro">
                                                    <div class="row product-micro-row">
                                                        <div class="col col-xs-5">
                                                            <div class="product-image">
                                                                <div class="image"><a href="#"><img
                                                                            src="{{ asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}"
                                                                            alt=""></a>
                                                                </div><!-- /.image -->
                                                            </div><!-- /.product-image -->
                                                        </div><!-- /.col -->
                                                        <div class="col2 col-xs-7">
                                                            <div class="product-info">
                                                                <h3 class="name"><a href="#">{{ $item->tensanpham }}</a>
                                                                </h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"><span class="price">
                                                                        {{ number_format($item->gia, 0) }}đ</span></div>
                                                                <!-- /.product-price -->
                                                            </div>
                                                        </div><!-- /.col -->
                                                    </div><!-- /.product-micro-row -->
                                                </div><!-- /.product-micro -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- /.sidebar-widget-body -->
                    </div><!-- /.sidebar-widget -->
                    <!-- ============================================== BEST SELLER : END ============================================== -->
                    <!-- ============================================== BLOG SLIDER ============================================== -->
                    {{-- <section class="section latest-blog outer-bottom-vs wow fadeInUp">
                        <h3 class="section-title">latest form blog</h3>
                        <div class="blog-slider-container outer-top-xs">
                            <div class="owl-carousel blog-slider custom-carousel">
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img src="images/blog-post/post1.jpg"
                                                        alt=""></a></div>
                                        </div><!-- /.blog-post-image -->
                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Voluptatem accusantium doloremque
                                                    laudantium</a></h3><span class="info">By Jone Doe &nbsp;|&nbsp; 21
                                                March 2016</span>
                                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et
                                                dolore magnam aliquam quaerat voluptatem.</p><a href="#"
                                                class="lnk btn btn-primary">Read
                                                more</a>
                                        </div><!-- /.blog-post-info -->
                                    </div><!-- /.blog-post -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img src="images/blog-post/post2.jpg"
                                                        alt=""></a></div>
                                        </div><!-- /.blog-post-image -->
                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3><span class="info">By Saraha Smith &nbsp;|&nbsp; 21
                                                March 2016</span>
                                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et
                                                dolore magnam aliquam quaerat voluptatem.</p><a href="#"
                                                class="lnk btn btn-primary">Read
                                                more</a>
                                        </div><!-- /.blog-post-info -->
                                    </div><!-- /.blog-post -->
                                </div><!-- /.item -->
                                <!-- /.item -->
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img src="images/blog-post/post1.jpg"
                                                        alt=""></a></div>
                                        </div><!-- /.blog-post-image -->
                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3><span class="info">By Saraha Smith &nbsp;|&nbsp; 21
                                                March 2016</span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium</p><a href="#" class="lnk btn btn-primary">Read
                                                more</a>
                                        </div><!-- /.blog-post-info -->
                                    </div><!-- /.blog-post -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img src="images/blog-post/post2.jpg"
                                                        alt=""></a></div>
                                        </div><!-- /.blog-post-image -->
                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3><span class="info">By Saraha Smith &nbsp;|&nbsp; 21
                                                March 2016</span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium</p><a href="#" class="lnk btn btn-primary">Read
                                                more</a>
                                        </div><!-- /.blog-post-info -->
                                    </div><!-- /.blog-post -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image"><a href="blog.html"><img src="images/blog-post/post1.jpg"
                                                        alt=""></a></div>
                                        </div><!-- /.blog-post-image -->
                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla
                                                    pariatur</a></h3><span class="info">By Saraha Smith &nbsp;|&nbsp; 21
                                                March 2016</span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium</p><a href="#" class="lnk btn btn-primary">Read
                                                more</a>
                                        </div><!-- /.blog-post-info -->
                                    </div><!-- /.blog-post -->
                                </div><!-- /.item -->
                            </div><!-- /.owl-carousel -->
                        </div><!-- /.blog-slider-container -->
                    </section><!-- /.section --> --}}
                    <!-- ============================================== BLOG SLIDER : END ============================================== -->
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <section class="section wow fadeInUp new-arriavls">
                        <h3 class="section-title">Có thể bạn thích</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @foreach ($sanpham->slice(5.1) as $item)
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image"><a href="detail.html"><img
                                                            src="{{ asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}"
                                                            alt=""></a></div>
                                                <!-- /.image -->
                                                <div class="tag new"><span>new</span></div>
                                            </div><!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">{{ $item->tensanpham }}</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price"><span
                                                        class="price">{{ number_format($item->gia, 0) }}đ</span><span
                                                        class="price-before-discount"></span></div>
                                                <!-- /.product-price -->
                                            </div><!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group"><button
                                                                class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button"><i
                                                                    class="fa fa-shopping-cart"></i></button><button
                                                                class="btn btn-primary cart-btn" type="button">Add to
                                                                cart</button></li>
                                                        <li class="lnk wishlist"><a class="add-to-cart" href="detail.html"
                                                                title="Wishlist"><i class="icon fa fa-heart"></i></a></li>
                                                        <li class="lnk"><a class="add-to-cart" href="detail.html"
                                                                title="Compare"><i class="fa fa-signal"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div><!-- /.product -->
                                    </div><!-- /.products -->
                                </div><!-- /.item -->
                            @endforeach
                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                </div><!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div><!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15"><a href="#" class="image"><img data-echo="images/brands/brand1.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item m-t-10"><a href="#" class="image"><img data-echo="images/brands/brand2.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand3.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand4.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand5.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand6.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand2.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand4.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand1.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="images/brands/brand5.png"
                                    src="images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->
            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->
@endsection
