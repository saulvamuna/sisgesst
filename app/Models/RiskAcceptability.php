<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskAcceptability extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'meaning',
        'color'
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
