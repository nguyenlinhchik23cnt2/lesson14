<?php

namespace App\Http\Controllers;
use App\Models\nlcloai_sanpham; 
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class nlc_loaisanphamController extends Controller
{
    //
    public function nlclist()
    {
        $nlcloaisanphams=nlcloai_sanpham::all();
        return view('nlcadmins.nlcloaisanpham.nlc-list',['nlcloaisanphams'=>$nlcloaisanphams]);
    }
    //them moi
    public function nlccreate()
    {
        return view('nlcadmins.nlcloaisanpham.nlc-create');
    }
    //create submit
    public function nlccreatesubmit( Request $request)
    {
        // ghi du lieu xuong db
        $nlcloaisanpham =new nlcloai_sanpham;
        $nlcloaisanpham->nlcmaloai =$nlcmaloai;
        $nlcloaisanpham->nlctenloai =$nltenloai;
        $nlcloaisanpham->nlctrangthai =$nltrangthai;

        $nlcloaisanpham ->save();
        return redirect()->route('nlcadmin.nlcloaisanpham');
    }
    //edit
    public function nlcedit($id)
    {
        $nlcloaisanpham =nlcloai_sanpham::find($id);
        return view('nlcadmins.nlcloaisanpham.nlc-edit',['nlcloaisanpham'=>$nlcloaisanpham]);
    }
    public function nlceditsubmit(Request $request)
    {
        $nlcloaisanpham =nlcloai_sanpham::find($request->id);
        $nlcloaisanpham->nlcmaloai =$nlcmaloai;
        $nlcloaisanpham->nlctenloai =$nltenloai;
        $nlcloaisanpham->nlctrangthai =$nltrangthai;

        $nlcloaisanpham ->save();
        return redirect()->route('nlcadmin.nlcloaisanpham');
    }
    //delete
    public function nlcdelete($id)
    {
        $nlcloaisanpham =nlcloai_sanpham::find($id);
        $nlcloaisanpham->delete();
        return redirect()->route('nlcadmin.nlcloaisanpham');
    }
}
