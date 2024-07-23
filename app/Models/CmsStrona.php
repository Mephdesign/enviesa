<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsStrona extends Model
{
    use HasFactory;

    protected $table = "cms_strony";
    protected $fillable = [
        'nazwa',
        'slug',
        'status',
        'zajawka',
        'content',
    ];
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
