<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsGaleria extends Model
{
    use HasFactory;

    protected $table = "cms_galerie";
    protected $fillable = [
        'produkt_id',
        'nazwa',
        'title',
        'alt',
        'path'
    ];
    protected $hidden = ['id', 'created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
}
