@extends('_layouts.admins._master')
@section('title','danh sach  san pham')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col -12 ">
            
                <h1>danh sach san pham</h1>
                <a href="{{route('nlcadmins.nlc-sanpham.nlcSPcreate')}}"class="btn btn-success">them moi </a>
            
            
        </div>
    </div>
    </div> 
    <div class="row">
<div class="col">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>san pham</th>
                        <th>ten san pham</th>
                        <th>hinh anh</th>
                        <th>so luong</th>
                        <th>don gia</th>
                        <th>ma loai</th>
                        <th>trang thai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nlcsanphams as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->nlcsanpham}}</td>
                            <td>{{$item->nlctensanpham}}</td>
            
                            <td>{{$item->nlchinhanh}}</td>
                            <td>{{$item->nlcsoluong}}</td>
                            <td>{{$item->nlcdongia}}</td>
                            <td>{{$item->nlcmaloai}}</td>
                            <td>{{$item->nlctrangthai}}</td>
                            
                            <td>
                                view/edit/delete
                              
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">chua co thong tin loai san pham</th>
                    
                        </tr>

                    @endforelse
                </tbody>
        </table>
</div>


@endsection
