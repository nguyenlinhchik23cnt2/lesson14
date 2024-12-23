<?php

namespace App\Http\Controllers;
use App\Models\nlc_sanpham; 
use Illuminate\Http\Request;

class nlc_sanphamController extends Controller
{
    //list
    public function nlcSPhamlist()
    {
        $nlcsanphams=nlc_sanpham::all();
        return view('nlcadmins.nlcsanpham.nlc-SPhamlist',['nlcsanphams'=>$nlcsanphams]);
    }
    //them moi
    public function nlcSPcreate()
    {
        return view('nlcadmins.nlcsanpham.nlc-SPcreate');

    }
    public function nlcSPcreatesubmit( Request $request)
    {
        $request->validate([
            'nlcsanpham'=>'required',
            'nlctensanpham'=>'required',
            'nlchinhanh'=>'nullable',
            'nlcsoluong'=>'required',
            'nlcdongia'=>'required',
            'nlcmaloai'=>'required',
            'nlctrangthai'=>'required|in:0, 1',
        ]);
        // ghi du lieu xuong db
         $data = $request -> all();
        
         nlc_sanpham::create($data);
        return redirect()->route('nlcadmins.nlc-sanpham');
    }
}
