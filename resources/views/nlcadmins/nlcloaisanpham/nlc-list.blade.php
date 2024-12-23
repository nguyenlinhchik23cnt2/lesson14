@extends('_layouts.admins._master')
@section('title','danh sach loai san pham')
@section('content-body')
   <div class="container border">
    <div class="row">
        <div class="col -12 ">
            
                <h1>danh sach loai san pham</h1>
            <a href="{{route('nlcadmins.nlc-loaisanpham.nlccreate')}}"class="btn btn-success">them moi </a>
            
        </div>
    </div>
    </div> 
    <div class="row">
<div class="col">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ma loai</th>
                        <th>ten loai</th>
                        <th>trang thai</th>
                        <th>chyc nang</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nlcloaisanphams as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->nlcmaloai}}</td>
                            <td>{{$item->nlctenloai}}</td>
                            <td>{{$item->nlctrangthai}}</td>
                            <td>
                                view/
                                
                               <a href="/nlc-admins/nlc-loaisanpham/nlc-edit/{{$item->id}}">edit</a> 
                                
                                /delete
                                <a href="/nlc-admins/nlc-loaisanpham/nlcdelete/{{$item->id}}"
                                     onclick="return confirm ('ban co chac muon xoa khong')"
                                    >delete</a>
                               
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