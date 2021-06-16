<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Flipmart premium HTML5 & CSS3 Template</title><!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/bootstrap.min.css"><!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/main.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/blue.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/owl.transitions.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/animate.min.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/rateit.css">
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/bootstrap-select.min.css"><!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/font-awesome.css"><!-- Fonts -->

    <link rel="stylesheet" href="{{ URL::asset('/') }}frontend/css/sweetalert.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('site.layout.header')
    <!-- ============================================== HEADER : END ============================================== -->

    @yield('content')
    @include('site.layout.footer')
    <!-- For demo purposes – can be removed on production -->
    <!-- For demo purposes – can be removed on production : End -->
    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('/') }}frontend/js/jquery-1.11.1.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/owl.carousel.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/echo.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/jquery.easing-1.3.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/bootstrap-slider.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}frontend/js/lightbox.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/bootstrap-select.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/wow.min.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/scripts.js"></script>
    <script src="{{ URL::asset('/') }}frontend/js/sweetalert.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.them_gio').click(function() {
                var id = $(this).data('id_product');
                var giohang_masanpham = $('.giohang_masanpham_' + id).val();
                var giohang_tensanpham = $('.giohang_tensanpham_' + id).val();
                var giohang_hinhanh = $('.giohang_hinhanh_' + id).val();
                var giohang_gia = $('.giohang_gia_' + id).val();
                var giohang_soluong = $('.giohang_soluong_' + id).val();
                var _token = $('input[name="_token"]').val();

                // console.log(giohang_masanpham);
                // console.log(giohang_tensanpham);
                // console.log(giohang_hinhanh);
                // console.log(giohang_gia);
                // console.log(giohang_soluong);
                $.ajax({
                    url: '{{ url('/save-cart') }}',
                    method: 'POST',
                    data: {
                        gh_masanpham: giohang_masanpham,
                        gh_tensanpham: giohang_tensanpham,
                        gh_hinhanh: giohang_hinhanh,
                        gh_gia: giohang_gia,
                        gh_soluong: giohang_soluong,
                        _token: _token
                    },
                    success: function() {
                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{ url('/cart') }}";
                            });

                    }

                });
            });
        });

    </script>
</body>

</html>
