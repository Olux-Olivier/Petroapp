<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'postnom',
        'prenom',
        'email',
        'mdp'
    ];

    public function managers()
    {
        return $this->belongTo(Manager::class);
    }

    public function pompistes()
    {
        return $this->hasMany(Pompiste::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function prets()
    {
        return $this->hasMany(Pret::class);
    }

    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }


}
