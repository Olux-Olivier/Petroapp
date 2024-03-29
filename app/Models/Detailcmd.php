<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailcmd extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function cmdfournisseurs()
    {
        return $this->belongTo(Cmdfournisseur::class);
    }

    public function articles()
    {
        return $this->belongTo(Article::class);
    }
}
