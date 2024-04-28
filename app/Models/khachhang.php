<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class khachhang extends Model
{
    use HasFactory;
    protected $table="khachhang";
    
    protected $fillable=[
        'id',
        'lkh_id',
        'ten',
        'sdt',
        'email',
        'diachi',
        'gioitinh',
        'namsinh',
        'masothue',
        'create_at',
        'update_at'

    ];
}
