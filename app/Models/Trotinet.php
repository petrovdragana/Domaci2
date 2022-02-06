<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trotinet extends Model
{
    protected $fillable = [
        'model', 'boja', 'materijal','stanje','cena','brzina','snaga'
    ];
    use HasFactory;
    public function rezervacijas(){
        return $this->hasMany(Rezervacija::class);
    }
}
