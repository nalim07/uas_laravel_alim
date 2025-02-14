<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }
}
