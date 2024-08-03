<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable=[
        'qte',
        'artilce_id',
        'nalerte',
    ];

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
