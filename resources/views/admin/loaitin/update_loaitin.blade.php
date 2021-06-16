@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">LOẠI TIN</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active">Loại tin</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3></h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('ltin.update',['id'=>$edit_value->maloaitin]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="userName">Tên loại<span class="text-danger">*</span></label>
                                <input type="text" name="tenloaitin" value="{{$edit_value->tenloaitin}}" data-parsley-trigger="change" required
                                    placeholder="Enter user name" class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Mô tả<span class="text-danger">*</span></label>
                                <input type="text" name="mota" value="{{$edit_value->mota}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>

                            {{-- <div class="form-group text-right m-b-0"> --}}
                            <button class="btn btn-primary" type="submit" name="cmd">Submit</button>
                            <button type="reset" class="btn btn-secondary m-l-5">
                                Cancel
                            </button>
                            {{-- </div> --}}

                        </form>

                    </div>
                </div><!-- end card-->
            </div>
        </div>
    </div>
@endsection
