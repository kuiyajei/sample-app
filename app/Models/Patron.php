<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    use HasFactory;
    protected $fillable = [
        'patron_name'
    ];

    // public function books(){
    //     return $this->hasMany(Book::class);
    // }
}
