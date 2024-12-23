@extends('_layouts.admins._master')
@section('title','sua thong loai san pham')
@section('content-body')
   <div class="container border">
    <div class="row">

        <div class="col">
            
            <form action="" method="POST">
                @csrf
                <input type="hidden" name="id"id="id" value="{{$nlcloaisanpham->id}}">
                <div class="card">
                    <div class="card-header">
                        <h2>sua thong  loai san pham</h2>
                    </div>

                    <div class="card-body  container-fluid">
                        <div class="mb-3 row">
                            <label for="nlcmaloai" class="col-sm-2 col-form-label">ma loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{$nlcloaisanpham->nlcmaloai}}"
                              id="nlcmaloai" name="nlcmaloai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlcmaten" class="col-sm-2 col-form-label">ten loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nlctenloai" 
                              value="{{$nlcloaisanpham->nlctenloai}}"
                              name="nlctenloai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nlctrangthai" class="col-sm-2 col-form-label">trang thai</label>
                            <div class="col-sm-10">
                                @if($nlcloaisanpham->nlctrangthai ===1){
                                    
                                
                              <input type="radio"  id="nlctrangthai1" name="nlctrangthai" value="1" checked/>
                              <label for="nlctrangthai">hien thi</label>
                                &nbsp;
                              <input type="radio"  id="nlctrangthai0" name="nlctrangthai" value="0">
                              <label for="nlctrangthai0">khoa</label>
                              
                                @else
                                <input type="radio"  id="nlctrangthai1" name="nlctrangthai" value="1" checked/>
                              <label for="nlctrangthai">hien thi</label>
                              &nbsp;
                              <input type="radio"  id="nlctrangthai0" name="nlctrangthai" value="0">
                              <label for="nlctrangthai0">khoa</label>
                                @endif
                                }
                                
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class=" btn btn-success" >ghi lai</button>
                        <a href="{{route('nlcadmin.nlcloaisanpham')}}" class="btn btn-secondary">quay lai</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
   </div>
        


@endsection