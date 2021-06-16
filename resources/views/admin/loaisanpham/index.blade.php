@extends('admin.layout')
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">Loại sản phẩm</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active">Loại sản phẩm</li>
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
                            <table  class="table" style="width:100%;text-align:center" id="example" >
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên loại</th>
                                        <th>Mô tả</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loaisanpham as $lsp => $value)
                                        <tr>
                                            <td>{{ $value->maloai }}</td>
                                            <td>{{ $value->tenloai }}</td>
                                            <td>{{ $value->mota }}</td>
                                            <td><a href="{{route('lsp.edit',['id'=>$value->maloai])}}"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('lsp.delete',['id'=>$value->maloai])}}"><i class="far fa-trash-alt"></i></a></td>
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
