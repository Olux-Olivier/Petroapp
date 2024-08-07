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
        'depense',
        'pompiste_id',
        'user_id'
    ];

    public function pompistes()
    {
        return $this->belongsTo(Pompiste::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
