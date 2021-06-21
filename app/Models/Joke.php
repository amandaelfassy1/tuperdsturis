<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Theme;

class Joke extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'theme', 'audio'];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
