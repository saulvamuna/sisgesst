<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'process_id',
    ];

    public function process()
    {
        return $this->belongsTo(Process::class, 'process_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
