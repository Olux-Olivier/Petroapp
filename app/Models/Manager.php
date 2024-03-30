<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'postnom',
        'prenom',
        'email',
        'mdp'
    ];

    public function gerants()
    {
        return $this->hasMany(Gerant::class);
    }
}

