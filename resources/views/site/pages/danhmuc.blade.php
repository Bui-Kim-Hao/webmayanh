@extends('site.layout.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'></li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-md-3 sidebar'>

                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <h3 class="section-title">DANH MỤC</h3>
                                <div class="widget-header">
                                    <h4 class="widget-title">SẢN PHẨM</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <div class="accordion">
                                        @foreach ($danhmuc as $item)
                                        <div class="accordion-group">
                                             <div class="accordion-heading"><a href="{{route('loaisanpham',['maloai'=>$item->maloai])}}" {{--data-toggle="collapse"
                                                    class="accordion-toggle collapsed" --}}>
                                                    {{$item->tenloai}}</a>
                                                    <!-- /.menu-item -->
                                                    </a></div>
                                            <!-- /.accordion-heading -->
                                           <!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->
                                        @endforeach
                                        {{-- <div class="accordion-group">
                                            <div class="accordion-heading"><a href="#collapseTwo" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">Desktops</a></div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->
                                        <div class="accordion-group">
                                            <div class="accordion-heading"><a href="#collapseThree" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">Pants</a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->
                                        <div class="accordion-group">
                                            <div class="accordion-heading"><a href="#collapseFour" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">Bags</a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->
                                        <div class="accordion-group">
                                            <div class="accordion-heading"><a href="#collapseFive" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">Hats</a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->
                                        <div class="accordion-group">
                                            <div class="accordion-heading"><a href="#collapseSix" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">Accessories</a></div>
                                            <!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group --> --}}
                                    </div><!-- /.accordion -->
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->
                            <!-- ============================================== PRICE SILDER============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Price Slider</h4>
                                </div>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="price-range-holder"><span class="min-max"><span
                                                class="pull-left">$200.00</span><span
                                                class="pull-right">$800.00</span></span><input type="text" id="amount"
                                            style="border:0; color:#666666; font-weight:bold;text-align:center;"><input
                                            type="text" class="price-slider" value=""></div>
                                    <!-- /.price-range-holder --><a href="#" class="lnk btn btn-primary">Show Now</a>
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== PRICE SILDER : END ============================================== -->
                            <!-- ============================================== MANUFACTURES============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Manufactures</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul class="list">
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                    <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== MANUFACTURES: END ============================================== -->
                            <!-- ============================================== COLOR============================================== -->
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Colors</h4>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul class="list">
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== COLOR: END ============================================== -->
                            <!-- ============================================== COMPARE============================================== -->
                            <div class="sidebar-widget wow fadeInUp outer-top-vs">
                                <h3 class="section-title">So sánh sản phẩm</h3>
                                <div class="sidebar-widget-body">
                                    <div class="compare-report">
                                        <p>You have no <span>item(s)</span>to compare</p>
                                    </div><!-- /.compare-report -->
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== COMPARE: END ============================================== -->
                            <!-- ============================================== PRODUCT TAGS ============================================== -->
                            {{-- <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
                                <h3 class="section-title">Product tags</h3>
                                <div class="sidebar-widget-body outer-top-xs">
                                    <div class="tag-list"><a class="item" title="Phone" href="category.html">Phone</a><a
                                            class="item active" title="Vest" href="category.html">Vest</a><a class="item"
                                            title="Smartphone" href="category.html">Smartphone</a><a class="item"
                                            title="Furniture" href="category.html">Furniture</a><a class="item"
                                            title="T-shirt" href="category.html">T-shirt</a><a class="item"
                                            title="Sweatpants" href="category.html">Sweatpants</a><a class="item"
                                            title="Sneaker" href="category.html">Sneaker</a><a class="item" title="Toys"
                                            href="category.html">Toys</a><a class="item" title="Rose"
                                            href="category.html">Rose</a></div><!-- /.tag-list -->
                                </div><!-- /.sidebar-widget-body -->
                            </div> --}}
                            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                                <div id="advertisement" class="advertisement">
                                    <div class="item">
                                        <div class="avatar"><img style="width: 100%" src="{{ asset('public/frontend/imgs/slides/slide6.jpg') }}" alt="Image">
                                        </div>
                                        <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus
                                            port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em>
                                        </div>
                                        <div class="clients_author">John Doe<span>Abc Company</span></div>
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->

                                </div><!-- /.owl-carousel -->
                            </div>
                            <!-- ============================================== Testimonials: END ============================================== -->
                            <div class="home-banner"><img src="assets/images/banners/LHS-banner.jpg" alt="Image"></div>
                        </div><!-- /.sidebar-filter -->
                    </div><!-- /.sidebar-module-container -->
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <!-- ========================================== SECTION – HERO ========================================= -->
                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image"><img style="width: 100%" src="{{ asset('public/frontend/imgs/slides/slide4.jpg') }}" alt=""
                                    class="img-responsive"></div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text"> </div>
                                    <div class="excerpt hidden-sm hidden-md"></div>
                                    <div class="excerpt-normal hidden-sm hidden-md"></div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>
                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"><a data-toggle="tab" href="#grid-container"><i
                                                    class="icon fa fa-th-large"></i>Grid</a></li>
                                        <li><a data-toggle="tab" href="#list-container"><i
                                                    class="icon fa fa-th-list"></i>List</a></li>
                                    </ul>
                                </div><!-- /.filter-tabs -->
                            </div><!-- /.col -->
                            <div class="col col-sm-12 col-md-6">
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt"><span class="lbl">Sort by</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button"
                                                    class="btn dropdown-toggle">Position <span
                                                        class="caret"></span></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">position</a></li>
                                                    <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                                    <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                                    <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.fld -->
                                    </div><!-- /.lbl-cnt -->
                                </div><!-- /.col -->
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt"><span class="lbl">Show</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">1
                                                    <span class="caret"></span></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">1</a></li>
                                                    <li role="presentation"><a href="#">2</a></li>
                                                    <li role="presentation"><a href="#">3</a></li>
                                                    <li role="presentation"><a href="#">4</a></li>
                                                    <li role="presentation"><a href="#">5</a></li>
                                                    <li role="presentation"><a href="#">6</a></li>
                                                    <li role="presentation"><a href="#">7</a></li>
                                                    <li role="presentation"><a href="#">8</a></li>
                                                    <li role="presentation"><a href="#">9</a></li>
                                                    <li role="presentation"><a href="#">10</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.fld -->
                                    </div><!-- /.lbl-cnt -->
                                </div><!-- /.col -->
                            </div><!-- /.col -->
                            <div class="col col-sm-6 col-md-4 text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul><!-- /.list-inline -->
                                </div><!-- /.pagination-container -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        @foreach ($sanpham as $item)


                                            <div class="col-sm-6 col-md-4 wow fadeInUp" style="height:388px">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"><a href="{{ route('chitiet', ['masanpham' => $item->masanpham]) }}"><img
                                                                        src="{{ asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}"
                                                                        alt=""></a>
                                                            </div><!-- /.image -->
                                                            {{-- <div class="tag new"><span>new</span></div> --}}
                                                        </div><!-- /.product-image -->
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                    href="detail.html">{{ $item->tensanpham }}</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"><span class="price">
                                                                    {{ number_format($item->gia, 0, '', '.') }}</div>
                                                            <!-- /.product-price -->
                                                        </div><!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group"><button
                                                                            class="btn btn-primary icon"
                                                                            data-toggle="dropdown" type="button"><i
                                                                                class="fa fa-shopping-cart"></i></button><button
                                                                            class="btn btn-primary cart-btn"
                                                                            type="button">Add to cart</button></li>
                                                                    <li class="lnk wishlist"><a class="add-to-cart"
                                                                            href="detail.html" title="Wishlist"><i
                                                                                class="icon fa fa-heart"></i></a></li>
                                                                    <li class="lnk"><a class="add-to-cart"
                                                                            href="detail.html" title="Compare"><i
                                                                                class="fa fa-signal"></i></a></li>
                                                                </ul>
                                                            </div><!-- /.action -->
                                                        </div><!-- /.cart -->
                                                    </div><!-- /.product -->
                                                </div><!-- /.products -->
                                            </div><!-- /.item -->
                                        @endforeach
                                    </div><!-- /.row -->
                                </div><!-- /.category-product -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane " id="list-container">
                                <div class="category-product">
                                    @foreach ($sanpham as $item)

                                        <div class="category-product-inner wow fadeInUp">
                                            <div class="products">
                                                <div class="product-list product">
                                                    <div class="row product-list-row">
                                                        <div class="col col-sm-4 col-lg-4">
                                                            <div class="product-image">
                                                                <div class="image"><img
                                                                        src="{{ asset('public/uploads/product') }}/{{ $item->hinhanh }}"
                                                                        alt=""></div>
                                                            </div><!-- /.product-image -->
                                                        </div><!-- /.col -->
                                                        <div class="col col-sm-8 col-lg-8">
                                                            <div class="product-info">
                                                                <h3 class="name"><a
                                                                        href="detail.html">{{ $item->tensanpham }}</a>
                                                                </h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="product-price"><span class="price">
                                                                        {{ number_format($item->gia, 0, '', '.') }}</span>
                                                                </div><!-- /.product-price -->
                                                                <div class="description m-t-10">{{ $item->mota }}
                                                                </div>
                                                                <div class="cart clearfix animate-effect">
                                                                    <div class="action">
                                                                        <ul class="list-unstyled">
                                                                            <li class="add-cart-button btn-group"><button
                                                                                    class="btn btn-primary icon"
                                                                                    data-toggle="dropdown" type="button"><i
                                                                                        class="fa fa-shopping-cart"></i></button><button
                                                                                    class="btn btn-primary cart-btn"
                                                                                    type="button">Add to cart</button></li>
                                                                            <li class="lnk wishlist"><a class="add-to-cart"
                                                                                    href="detail.html" title="Wishlist"><i
                                                                                        class="icon fa fa-heart"></i></a>
                                                                            </li>
                                                                            <li class="lnk"><a class="add-to-cart"
                                                                                    href="detail.html" title="Compare"><i
                                                                                        class="fa fa-signal"></i></a></li>
                                                                        </ul>
                                                                    </div><!-- /.action -->
                                                                </div><!-- /.cart -->
                                                            </div><!-- /.product-info -->
                                                        </div><!-- /.col -->
                                                    </div><!-- /.product-list-row -->

                                                </div><!-- /.product-list -->
                                            </div><!-- /.products -->
                                        </div><!-- /.category-product-inner -->

                                    @endforeach
                                </div><!-- /.category-product -->
                            </div><!-- /.tab-pane #list-container -->
                        </div><!-- /.tab-content -->
                        <div class="clearfix filters-container">
                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul><!-- /.list-inline -->
                                </div><!-- /.pagination-container -->
                            </div><!-- /.text-right -->
                        </div><!-- /.filters-container -->
                    </div><!-- /.search-result-container -->
                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /.body-content -->
@stop
