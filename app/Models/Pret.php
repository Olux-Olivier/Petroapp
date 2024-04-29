<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    use HasFactory;

    protected $fillable = [
        'article',
        'qte',
        'datepret',
        'datepaiement',

    ];

    public function users()
    {
        return $this->belongTo(Users::class);
    }

    public function clients()
    {
        return $this->belongTo(Client::class);
    }

    public function articles()
    {
        return $this->belongTo(Article::class);
    }
}
