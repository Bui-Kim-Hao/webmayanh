<!-- ============================================== SIDEBAR ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>THƯƠNG HIỆU</div>
        <nav class="yamm megamenu-horizontal" role="navigation">
            <ul class="nav">
                @foreach ($danhmuc as $item)


                <li class=" menu-item"><a href="{{route('loaisanpham',['maloai'=>$item->maloai])}}">{{$item->tenloai}}</a>

                </li><!-- /.menu-item -->
                @endforeach
            </ul><!-- /.nav -->
        </nav><!-- /.megamenu-horizontal -->
    </div><!-- /.side-menu -->
    <!-- ================================== TOP NAVIGATION : END ================================== -->
    <!-- ============================================== HOT DEALS ============================================== -->
    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
        <h3 class="section-title">Khuyến mãi</h3>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image"><img src="{{ asset('public/frontend/imgs/slides/slide6.jpg') }}" alt=""></div>
                        <div class="sale-offer-tag"><span>49%<br>off</span></div>
                        <div class="timing-wrapper">
                            <div class="box-wrapper">
                                {{-- <div class="date box"><span class="key"></span><span
                                        class="value"></span></div> --}}
                            </div>
                        </div>
                    </div><!-- /.hot-deal-wrapper -->
                </div>
            </div>
        </div><!-- /.sidebar-widget -->
    </div>
    <!-- ============================================== HOT DEALS: END ============================================== -->
    <!-- ============================================== SPECIAL OFFER ============================================== -->
    <div class="sidebar-widget outer-bottom-small wow fadeInUp">
        <h3 class="section-title">Khuyến mãi đặc biệt</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div
                class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                    <div class="products special-product">
                        @foreach ($sanpham->slice(22,25 ) as $item)
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image"><a href=" route('chitiet', ['masanpham' => $item->masanpham]) }}"><img
                                                        src="{{ URL::asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}" alt=""></a>
                                            </div><!-- /.image -->
                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">{{ $item->tensanpham }}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price">
                                                {{ number_format($item->gia, 0) }}đ</span></div><!-- /.product-price -->
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.product-micro-row -->
                            </div><!-- /.product-micro -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== SPECIAL OFFER : END ============================================== -->
    <!-- ============================================== PRODUCT TAGS ============================================== -->
    {{-- <div class="sidebar-widget product-tag wow fadeInUp">
        <h3 class="section-title">Product tags</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                <a class="item" title="Phone"
                   href="category.html">Phone</a>
                <a class="item active" title="Vest"
                    href="category.html">Vest</a>
                <a class="item"title="Smartphone"
                    href="category.html">Smartphone</a>
                <a class="item"title="Furniture"
                    href="category.html">Furniture</a>
                <a class="item" title="T-shirt"
                    href="category.html">T-shirt</a>
                <a class="item" title="Sweatpants"
                    href="category.html">Sweatpants</a>
                <a class="item" title="Sneaker"
                    href="category.html">Sneaker</a>
                <a class="item" title="Toys"
                    href="category.html">Toys</a>
                <a class="item" title="Rose"
                    href="category.html">Rose</a>
            </div><!-- /.tag-list -->
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget --> --}}
    <!-- ============================================== PRODUCT TAGS : END ============================================== -->
    <!-- ============================================== SPECIAL DEALS ============================================== -->
    <div class="sidebar-widget outer-bottom-small wow fadeInUp">
        <h3 class="section-title">Sản phẩm được quan tâm</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div
                class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                <div class="item">
                    <div class="products special-product">
                        @foreach ($sanpham->slice(23,25 ) as $item)
                        <div class="product">
                            <div class="product-micro">
                                <div class="row product-micro-row">
                                    <div class="col col-xs-5">
                                        <div class="product-image">
                                            <div class="image"><a href=" route('chitiet', ['masanpham' => $item->masanpham]) }}"><img
                                                src="{{ URL::asset('public/frontend/imgs/product') }}/{{ $item->hinhanh }}" alt=""></a>
                                            </div><!-- /.image -->
                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-xs-7">
                                        <div class="product-info">
                                            <h3 class="name"><a href="#">{{ $item->tensanpham }}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price"><span class="price">
                                                {{ number_format($item->gia, 0) }}đ</span></div><!-- /.product-price -->
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.product-micro-row -->
                            </div><!-- /.product-micro -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget -->
    <!-- ============================================== SPECIAL DEALS : END ============================================== -->
    <!-- ============================================== NEWSLETTER ============================================== -->
    {{-- <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
        <h3 class="section-title">Newsletters</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
            <form role="form">
                <div class="form-group"><label class="sr-only" for="exampleInputEmail1">Email
                        address</label><input type="email" class="form-control" id="exampleInputEmail1"
                        placeholder="Subscribe to our newsletter"></div><button
                    class="btn btn-primary">Subscribe</button>
            </form>
        </div><!-- /.sidebar-widget-body -->
    </div><!-- /.sidebar-widget --> --}}
    <!-- ============================================== NEWSLETTER: END ============================================== -->
    <!-- ============================================== Testimonials============================================== -->
    <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
        <div id="advertisement" class="advertisement">
            <div class="item">
                <div class="avatar"><img style="width: 100%" src="{{ asset('public/frontend/imgs/slides/slide4.jpg') }}" alt="Image"></div>
                <div class="testimonials"><em>"</em>Nâng cấp máy ngon. Nâng tầm nhiếp ảnh<em>"</em></div>
                <div class="clients_author"><span></span></div>
                <!-- /.container-fluid -->
            </div><!-- /.item -->
            <div class="item">
                <div class="avatar"><img style="width: 100%" src="{{ asset('public/frontend/imgs/slides/slide4.jpg') }}" alt="Image"></div>
                <div class="testimonials"><em>"</em>.<em>"</em></div>
                <div class="clients_author"><span></span></div>
            </div><!-- /.item -->
            <div class="item">
                <div class="avatar"><img style="width: 100%" src="{{ asset('public/frontend/imgs/slides/slide8.jpg') }}" alt="Image"></div>
                <div class="testimonials"><em>"</em>.<em>"</em></div>
                <div class="clients_author"><span> &amp; </span></div>
                <!-- /.container-fluid -->
            </div><!-- /.item -->
        </div><!-- /.owl-carousel -->
    </div>
    <!-- ============================================== Testimonials: END ============================================== -->
    <div class="home-banner"><img src="{{ asset('public/frontend/imgs/slides/slide11.jpg') }}" alt="Image"></div>
</div><!-- /.sidemenu-holder -->
