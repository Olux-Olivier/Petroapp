<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pompiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'contact',

    ];

    public function gerants()
    {
        return $this->belongTo(Gerant::class);
    }

    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
    
}
