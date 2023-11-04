<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galerija;
use App\Models\Delo;

class Delo extends Model
{
    use HasFactory;

    public function galerija(){
        return $this->belongsTo(Galerija::class);

    }
    
    public function umetnik(){
        return $this->belongsTo(Umetnik::class);
    }

}
