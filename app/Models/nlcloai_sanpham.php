<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nlcloai_sanpham extends Model
{
    use HasFactory;
    protected $table="nlc_loaisanpham";
    protected $fillable = ['nlcmaloai', 'nlctenloai', 'nlctrangthai'];
    
}
