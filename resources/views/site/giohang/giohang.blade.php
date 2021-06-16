@extends('site.layout.layout')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
                    <li class='active'>Giỏ Hàng</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                @if (Session()->get('giohang') == null)
                    {{-- @if (Session()->get('giohang' == null)) --}}
                    <h3>Khong co san pham nao</h3>
                @else
                    <div class="shopping-cart">
                        <div class="shopping-cart-table ">
                            <div class="table-responsive">
                                <form action="{{ route('giohang.update') }}" method="POST">
                                    @csrf
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-description item">Hình ảnh</th>
                                                <th class="cart-product-name item">Tên sản phẩm</th>
                                                {{-- <th class="cart-edit item">Edit</th> --}}
                                                <th class="cart-qty item">Số ượng</th>
                                                <th class="cart-sub-total item">Giá</th>
                                                <th class="cart-sub-total item">Thành tiền</th>
                                                <th class="cart-romove item">Chức Năng</th>
                                            </tr>
                                        </thead><!-- /thead -->
                                        @foreach (Session()->get('giohang') as $value)
                                            <tbody>
                                                <tr>
                                                    <td class="cart-image"><a class="entry-thumbnail"
                                                            href="detail.html"><img
                                                                src="{{ asset('public/frontend/imgs/product/' . $value['giohang_hinhanh']) }}"
                                                                alt=""></a></td>
                                                    <td class="cart-product-name-info">
                                                        <h4 class='cart-product-description'><a
                                                                href="detail.html">{{ $value['giohang_tensanpham'] }}</a>
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="rating rateit-small"></div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="reviews">(06 Reviews)</div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                        <div class="cart-product-info"><span
                                                                class="product-color">COLOR:<span>Blue</span></span></div>
                                                    </td>
                                                    {{-- <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td> --}}
                                                    <td class="cart-product-quantity">
                                                        <div class="quant-input">
                                                            <div class="arrows">
                                                                <div class="arrow plus gradient"><span class="ir"><i
                                                                            class="icon fa fa-sort-asc"></i></span></div>
                                                                <div class="arrow minus gradient"><span class="ir"><i
                                                                            class="icon fa fa-sort-desc"></i></span></div>
                                                            </div><input type="text"
                                                                value="{{ $value['giohang_soluong'] }}"
                                                                name="giohang_qty[{{ $value['giohang_session_id'] }}]">
                                                        </div>
                                                    </td>
                                                    <td class="cart-product-sub-total"><span
                                                            class="cart-sub-total-price">{{ number_format($value['giohang_gia'], 0, ',', '.') }}đ</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="cart-sub-total-price">{{ number_format($value['giohang_gia'] * $value['giohang_soluong'], 0, ',', '.') }}đ</span>
                                                    </td>
                                                    <td class="romove-item"><a href="{{route('giohang.delete',['masanpham'=>$value['giohang_masanpham']])}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody><!-- /tbody -->
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="shopping-cart-btn"><span class="">
                                                        <a
                                                                href="{{ route('trangchu') }}"
                                                                class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua
                                                                sắm</a>
                                                                <input type="submit"
                                                                class="btn btn-upper btn-primary pull-right outer-right-xs" value="Cập
                                                                Nhật"></span></div><!-- /.shopping-cart-btn -->
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table><!-- /table -->
                                </form>
                            </div>
                        </div><!-- /.shopping-cart-table -->
                        <form action="{{route('thanhtoan')}}" method="POST">
                            @csrf
                        <div class="col-md-8 col-sm-12 estimate-ship-tax">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><span class="estimate-title">Vui lòng nhập trường (*) bắt buộc</span>
                                            {{-- <p>Enter your destination to get shipping and tax.</p> --}}
                                        </th>
                                    </tr>
                                </thead><!-- /thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group"><label class="info-title control-label">Tên khách
                                                    hàng</label><input type="text"
                                                    class="form-control unicase-form-control text-input"
                                                    placeholder="Nhập tên *" name="tenkhachhang">
                                            </div>
                                            <div class="form-group"><label class="info-title control-label">Số điện
                                                    thoại</label><input type="text"
                                                    class="form-control unicase-form-control text-input"
                                                    placeholder="Nhập số điện thoại *" name="sdt">
                                            </div>
                                            <div class="form-group"><label class="info-title control-label">Tỉnh / Thành
                                                    phố</label><input type="text"
                                                    class="form-control unicase-form-control text-input"
                                                    placeholder="Nhập tỉnh / thành phố *" name="diachi">
                                            </div>
                                            <div class="form-group"><label class="info-title control-label">Ghi chú</label><textarea type="text"
                                                class="form-control unicase-form-control text-input"
                                                placeholder="Ghi chú" name="ghichu"></textarea>
                                        </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 col-sm-12 cart-shopping-total">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="cart-grand-total"> Tổng tiền<span class="inner-left-md">
                                                    <strong>
                                                        @php
                                                            $total = 0;
                                                            foreach (Session()->get('giohang') as $key => $gh) {
                                                                $total += $gh['giohang_soluong'] * $gh['giohang_gia'];
                                                            }
                                                        @endphp
                                                        {{ number_format($total, 0, ',', '.') }}đ</strong>
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead><!-- /thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-checkout-btn pull-right"><button type="submit"
                                                    class="btn btn-primary checkout-btn">Thanh toán</button><span
                                                    class=""></span></div>
                                        </td>
                                    </tr>
                                </tbody><!-- /tbody -->
                            </table><!-- /table -->
                        </div>
                    </form><!-- /.cart-shopping-total -->
                    </div><!-- /.shopping-cart -->
                @endif

            </div><!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15"><a href="#" class="image"><img data-echo="assets/images/brands/brand1.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item m-t-10"><a href="#" class="image"><img data-echo="assets/images/brands/brand2.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand3.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand4.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand5.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand6.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand2.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand4.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand1.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                        <div class="item"><a href="#" class="image"><img data-echo="assets/images/brands/brand5.png"
                                    src="assets/images/blank.gif" alt=""></a></div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->
            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
