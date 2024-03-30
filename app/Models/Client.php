<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'typeclient',
        'email',
        'adresse',
    ];

    public function gerants()
    {
        return $this->belongTo(Gerant::class);
    }

    public function prets()
    {
        return $this->hasMany(Pret::class);
    }

    
}
