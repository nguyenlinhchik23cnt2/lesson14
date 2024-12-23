@extends('_layouts.admins._master')
@section('title','them moi san pham')
@section('content-body')
   <div class="container border">
    <div class="row">

        <div class="col">
            
            <form action="{{ route('nlcadmins.nlc-sanpham.nlcSPcreatesubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2>them moi san pham</h2>
                    </div>

                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="nlcmaloai" class="col-sm-2 col-form-label">san pham</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcsanpham" name="nlcsanpham">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">ten san pham</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcsanpham" name="nlctensanpham">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">hinh anh</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlchinhanh" name="nlchinhanh">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">so luong</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcsoluong" name="nlcsoluong">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">don gia</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcdongia" name="nlcdongia">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">ma loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlcmaloai" name="nlcmaloai">
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="nlctrangthai" class="col-sm-2 col-form-label">trang thai</label>
                            <div class="col-sm-10">
                              <input type="radio"  id="nlctrangthai1" name="nlctrangthai" value='0'>
                              <label for="nlctrangthai">hien thi</label>
                                &nbsp;
                              <input type="radio"  id="nlctrangthai0" name="nlctrangthai" value='1'>
                              <label for="nlctrangthai0">khoa</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >ghi lai</button>
                        <a href="{{route('nlcadmins.nlc-sanpham')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection