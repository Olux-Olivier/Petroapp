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

    public function users()
    {
        return $this->belongTo(User::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
    
}
