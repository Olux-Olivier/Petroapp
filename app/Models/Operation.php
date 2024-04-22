<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_initial',
        'type_article',
        'index_avant',
        'index_apres',
        'prix_unitaire'
    ];

    public function pompistes()
    {
        return $this->belongTo(Pompiste::class);
    }
}
