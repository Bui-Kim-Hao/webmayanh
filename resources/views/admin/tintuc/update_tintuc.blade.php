@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">TIN TỨC</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active">Tin tức</li>
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

                        <form action="{{ route('tt.update',['id'=>$edit_value->matin]) }}" method="POST">
                            @csrf
                            {{-- <select name="maloaitin">
                                @foreach ($loaitin as $key => $value)
                                    <option value="{{ $value->maloaitin }}">{{ $value->tenloaitin }}</option>
                                @endforeach
                            </select> --}}
                            <div class="form-group">
                                <label for="userName">Loại tin<span class="text-danger">*</span></label>
                                {{-- <input type="text" name="maloaitin" value="{{$edit_value->maloaitin}}" data-parsley-trigger="change" required
                                    placeholder="Enter user name" class="form-control" id="userName"> --}}
                                    <select name="maloaitin" id="">
                                        @foreach ($loaitin as $lt=>$value)
                                            <option value="{{$value->maloaitin}}">{{$value->tenloaitin}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="userName">Tên tin<span class="text-danger">*</span></label>
                                <input type="text" name="tentin" value="{{$edit_value->tentin}}" data-parsley-trigger="change" required
                                    placeholder="Enter user name" class="form-control" id="userName">
                            </div>
                            <!--note -->
                            <div class="form-group">
                                <img id="blah" src="" alt="image product"
                                    style="padding:10px;background:#2d2d2d;max-width:180px;" />
                                <input type="file" name="hinhanh" onchange="readURL(this);" data-parsley-trigger="change"
                                    required placeholder=" " class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Nội dung<span class="text-danger">*</span></label>
                                <input type="text" name="noidung" value="{{$edit_value->noidung}}" data-parsley-trigger="change" required
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
