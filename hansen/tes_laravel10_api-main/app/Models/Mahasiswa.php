<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'image'
    ];

    protected function image(): Attribute
    {   
        return Attribute::make(
            get: fn ($image) => asset('/storage/mahasiswas/', $image),
        );
    }
}

