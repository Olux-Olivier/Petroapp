<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function cmdfournisseurs()
    {
        return $this->hasMany(Cmdfournisseurs::class);
    }

    
}
