<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmdfournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'qte',
        'prix',
        'email',
        'fournisseur_id',
        'user_id',
    ];

    public function fournisseurs()
    {
        return $this->belongTo(Fournisseur::class);
    }

    public function articles()
    {
        return $this->belongTo(Article::class);
    }

}
