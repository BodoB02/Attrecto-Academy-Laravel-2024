<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'url'
    ];
<<<<<<< HEAD
    public function author(){
        return $this->hasOne(User::class, "id", "author_id");
    }
}
=======

    protected function author():Attribute {
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => $value
        );
    }
}
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
