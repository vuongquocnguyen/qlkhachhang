<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use Illuminate\Http\Request;

class sanphamController extends Controller
{
    //
    public function tb(Request $request){
        $sp = sanpham::all();
        return view('page.sanpham.tables', compact(sp));
        // return redirect()->route('trangchu.tb');
        
    }

}
