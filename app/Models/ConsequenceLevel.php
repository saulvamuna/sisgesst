<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsequenceLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefix',
        'name',
        'value',
        'meaning',
        'color'
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
