<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_initial',
        'article_id',
        'index_avant',
        'index_apres',
        'prix_unitaire',
        'pompiste_id',
        'user_id'
    ];

    public function pompistes()
    {
        return $this->belongTo(Pompiste::class);
    }

    public function users()
    {
        return $this->belongTo(User::class);
    }

}
