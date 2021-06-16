@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left">SẢN PHÂM</h1>
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
                    <div class="card-header">
                        <h3></h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('sp.update',['id'=>$edit_value->masanpham]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="userName">Tên sản phẩm<span class="text-danger">*</span></label>
                                <input type="text" name="tensanpham" value="{{$edit_value->tensanpham}}" data-parsley-trigger="change" required
                                    placeholder="Enter user name" class="form-control" id="userName">
                            </div>

                        <div class="form-group">
                            <label for="userName">Loại sản phẩm<span class="text-danger">*</span></label>
                            {{-- <input type="text" name="maloaitin" value="{{$edit_value->maloaitin}}" data-parsley-trigger="change" required
                                placeholder="Enter user name" class="form-control" id="userName"> --}}
                                <select name="maloai" id="">
                                    @foreach ($loaisanpham as $lsp=>$value)
                                        <option value="{{$value->maloai}}">{{$value->tenloai}}</option>
                                    @endforeach
                                </select>
                        </div>
                            <!--note -->

                            <div class="form-group">
                                <img id="blah" src="" alt="image product"
                                    style="padding:10px;background:#2d2d2d;max-width:180px;" />
                                <input type="file" name="hinhanh" onchange="readURL(this);" data-parsley-trigger="change"
                                    required placeholder=" " class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Độ phân giải<span class="text-danger">*</span></label>
                                <input type="text" name="dophangiai" value="{{$edit_value->dophangiai}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Bộ xử lí<span class="text-danger">*</span></label>
                                <input type="text" name="boxuli" value="{{$edit_value->boxuli}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Cảm biến<span class="text-danger">*</span></label>
                                <input type="text" name="cambien" value="{{$edit_value->cambien}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Zoom quang học<span class="text-danger">*</span></label>
                                <input type="text" name="zoomquanghoc" value="{{$edit_value->zoomquanghoc}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Chế độ lấy nét<span class="text-danger">*</span></label>
                                <input type="text" name="chedolaynet" value="{{$edit_value->chedolaynet}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Kích thước màn hình<span class="text-danger">*</span></label>
                                <input type="text" name="kichthuocmanhinh" value="{{$edit_value->kichthuocmanhinh}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Pin<span class="text-danger">*</span></label>
                                <input type="text" name="pin" value="{{$edit_value->pin}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Kích thước<span class="text-danger">*</span></label>
                                <input type="text" name="kichthuoc" value="{{$edit_value->kichthuoc}}" data-parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Giá<span class="text-danger">*</span></label>
                                <input type="text" name="gia" value="{{$edit_value->gia}}" data-parsley-trigger="change" required
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
