<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function stocks()
    {
        return $this->belongTo(Stock::class);
    }

    public function prets()
    {
        return $this->hasMany(Pret::class);
    }

    public function detailcmds()
    {
        return $this->hasMany(Detailcmds::class);
    }

    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }
}
