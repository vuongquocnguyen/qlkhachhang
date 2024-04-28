<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class sanpham extends Model
{
    use HasFactory;
    protected $table="sanpham";
    protected $fillable=[
        'sp_id',
        'lsp_id',
        'sp_ten',
        'sp_gia',
        'sp_sl',
        'sp_mota'
    ];

    public function name_sanpham_l(){
        return $this->hasOne(sanpham_l::class,'sp_id','lsp_id');
    }
}
