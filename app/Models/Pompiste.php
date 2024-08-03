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
        'user_id',

    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
    
}
