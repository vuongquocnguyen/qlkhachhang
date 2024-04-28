<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham_l extends Model
{
    use HasFactory;
    protected $table="sanpham_loai";
    protected $fillable
    = [
        'lsp_id',
        'lsp_ten',
        
    ];
    
}