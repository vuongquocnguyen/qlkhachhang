<?php

namespace App\Http\Controllers;
use App\Models\sanpham_l;
use App\Models\sanpham;
use App\Models\khachhang;
use Illuminate\Http\Request;
class homeController extends Controller
{
    public function tc(){
        return view('page.dashboard');
    }
   
    public function tb(Request $request){
        $sp = sanpham::all();
        return view('page.sanpham.tables', compact('sp'));
        // return redirect()->route('trangchu.tb');
    }

    public function kh(Request $request){
        $kh = khachhang::all();
        return view('page.khachhang.kh', compact('kh'));
        // return redirect()->route('trangchu.tb');
    }

    public function them(Request $request){
        return view('page.sanpham.themhanghoa');
    }
    public function themhangpost(Request $request){
        // dd($request->all());
        sanpham::create([
            'sp_id'=>$request->sp_id,     
            'lsp_id'=>$request->lsp_id,
            'sp_ten'=>$request->sp_ten,
            'sp_gia'=>$request->sp_gia,
            'sp_sl'=>$request->sp_sl,
            'sp_mota'=>$request->sp_mota,
        ]);
        return redirect()->route('page.sanpham.tables');
    }

    
}
