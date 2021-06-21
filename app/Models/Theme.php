<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Joke;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['theme'];


    public function joke()
    {
        return $this->hasMany(Joke::class);
    }
}
