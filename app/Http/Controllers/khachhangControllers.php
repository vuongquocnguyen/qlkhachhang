<?php

namespace App\Http\Controllers;
use App\Models\khachhang;
use Illuminate\Http\Request;

class khachhangController extends Controller
{
    //
    public function kh(Request $request){
        $kh = khachhang::all();
        return view('page.khachhang.kh', compact('cus'));
        // return redirect()->route('trangchu.tb');
    }

}
