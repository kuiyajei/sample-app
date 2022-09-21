<?php

namespace App\Models;

use App\Http\Controllers\PatronController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    // Relationships to other entities
    public function patron(){
        return $this->hasOne(Patron::class);
    }

    public function book(){
        return $this->hasMany(Book::class);
    }
}
