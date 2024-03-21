<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'url'
    ];
    public function author(){
        return $this->hasOne(User::class, "id", "author_id");
    }
}
