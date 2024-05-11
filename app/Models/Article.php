<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'user_id',
    ];

    public function stocks()
    {
        return $this->belongsTo(Stock::class);
    }

    public function prets()
    {
        return $this->hasMany(Pret::class);
    }

    public function cmdfournisseurs()
    {
        return $this->hasMany(Cmdfournisseur::class);
    }

}
