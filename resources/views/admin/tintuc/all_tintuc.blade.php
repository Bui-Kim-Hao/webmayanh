@extends('admin.layout')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Tin Tức</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active">Tin Tức</li>
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
                                        <th>Tên tin</th>
                                        <th>Hình ảnh</th>
                                        <th>Nội dung</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_tintuc as $tt => $value)
                                        <tr>
                                            <td>{{ $value->matin }}</td>
                                            <td>{{ $value->tentin }}</td>
                                            <td class="center">
                                                <img src="{{asset('public/frontend/news')}}/{{ $value->hinhanh }}" alt="" style="width:100px;height:80px">
                                            </td>
                                            <td>{{ $value->noidung }}</td>
                                            <td><a href="{{route('tt.edit',['id'=>$value->matin])}}"><i class="fas fa-edit"></i></a>
                                           <a href="{{route('tt.delete',['id'=>$value->matin])}}"><i class="far fa-trash-alt"></i></a></td>
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
