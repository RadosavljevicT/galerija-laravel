<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Delo;
class Umetnik extends Model
{
    use HasFactory;

    public function umetnickaDela(){

        return $this->hasMany(Delo::class);
    }
}
