<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Rezension extends Model
{
    use HasFactory;

    protected $fillable = ['rezension', 'bewertung'];

    public function buch()
    {
        return $this->belongsTo(Buch::class);
    }
}
