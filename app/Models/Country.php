<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, int>
     */
    protected $fillable = [
        'iso_code',
        'name',
        'continent_id',
    ];

    /**
     * Get the operators of the country.
     */
    public function operators()
    {
        return $this->hasMany(Operator::class);
    }

    /**
     * Get the continent that belongs the country.
     */
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
}
