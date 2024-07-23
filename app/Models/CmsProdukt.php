<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsProdukt extends Model
{
    use HasFactory;

    protected $table = "cms_produkty";
    protected $fillable = [
        'nazwa',
        'slug',
        'status',
        'opis',
        'specyfikacja',
        'tabela_rozmiarow',
        'kategorie',
        'cena',
        'img'
    ];
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
