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
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function prets()
    {
        return $this->hasMany(Pret::class);
    }

    
}
