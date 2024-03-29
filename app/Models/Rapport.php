<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function articles()
    {
        return $this->belongTo(Articles::class);
    }

    public function pompistes()
    {
        return $this->belongTo(Pompiste::class);
    }

    public function gerants()
    {
        return $this->belongTo(Gerant::class);
    }

    //// depenses reste
}
