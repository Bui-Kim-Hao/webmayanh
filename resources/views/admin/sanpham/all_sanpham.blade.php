@extends('admin.layout')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Sản phẩm</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card mb-3">
                    {{-- <div class="card-header">
                        <h3><i class="fas fa-table"></i> Basic data table</h3>
                        Loại sản phẩm is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based
                        upon the foundations of progressive enhancement, and will add advanced interaction controls to any
                        HTML table: pagination, instant search and multi-column ordering.
                        <a target="_blank" href="https://Loại sản phẩm.net/">(more details)</a>
                    </div> --}}

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table" style="width:100%;text-align:center" >
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Độ phân giải</th>
                                        <th>Bộ xử lí</th>
                                        <th>cảm biến</th>
                                        {{-- <th>Zoom quang học</th>
                                        <th>Chế độ lấy nét</th>
                                        <th>Kích thước màn hình</th> --}}
                                        <th>Pin</th>
                                        <th>Kích thước</th>
                                        <th>Giá</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_sanpham as $sp => $value)
                                        <tr>
                                            <td>{{ $value->masanpham }}</td>
                                            <td>{{ $value->tensanpham }}</td>
                                            <td class="center">
                                                <img src="{{asset('public/uploads/product')}}/{{ $value->hinhanh }}" alt="" style="width:100px;height:80px">
                                            </td>
                                            <td>{{ $value->dophangiai }}</td>
                                            <td>{{ $value->boxuli }}</td>
                                            <td>{{ $value->cambien }}</td>
                                            {{-- <td>{{ $value->zoomquanghoc }}</td>
                                            <td>{{ $value->chedolaynet }}</td>
                                            <td>{{ $value->kichthuocmanhinh }}</td> --}}
                                            <td>{{ $value->pin }}</td>
                                            <td>{{ $value->kichthuoc }}</td>
                                            <td>{{ $value->gia }}</td>
                                            <td><a href="{{route('sp.edit',['id'=>$value->masanpham])}}"><i class="fas fa-edit"></i></a>
                                           <a href="{{route('sp.delete',['id'=>$value->masanpham])}}"><i class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive-->

                    </div>
                    <!-- end card-body-->

                </div>
                <!-- end card-->

            </div>

        </div>
        <!-- end row-->

    </div>
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
@endsection
