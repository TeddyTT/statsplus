<?php

namespace App\Models;

use Database\Factories\ContinentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'continents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'iso_code',
        'name',
    ];

    /**
     * Get the countries of the continent.
     */
    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
