<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'nit',
        'name',
        'email',
        'number_direct_workers',
        'number_indirect_workers',
        'made_by',
        'position',
        'city_id',
        'economic_sector',
    ];

    /**
     * Obtain the city of the company.
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function processes()
    {
        return $this->hasMany(Process::class);
    }
}
