<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DangerDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'danger',
        'danger_description',
    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
