<?php

namespace App\Http\Controllers;
use App\Models\nlcloai_sanpham; 
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Validation;
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
        $request->validate([
            'nlcmaloai'=>'required',
            'nlctenloai'=>'required',
            'nlctrangthai'=>'required|in:0, 1',
        ]);
        // ghi du lieu xuong db
        $data = $request -> only('nlcmaloai', 'nlctenloai', 'nlctrangthai');

        nlcloai_sanpham::create($data);
        return redirect()->route('nlcadmin.nlcloaisanpham');
    }
    //edit
    public function nlcedit($id)
    {
        $nlcloaisanpham =nlcloai_sanpham::find($id);
        return view('nlcadmins.nlcloaisanpham.nlc-edit',['nlcloaisanpham'=>$nlcloaisanpham]);
    }
    public function nlceditsubmit(Request $request, $id)
    {
        $request->validate([
            'nlcmaloai'=>'required',
            'nlctenloai'=>'required',
            'nlctrangthai'=>'required|in:0, 1',
        ]);
        $data = $request -> except('_token');
        nlcloai_sanpham::where('id', $id)->update($data);
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
