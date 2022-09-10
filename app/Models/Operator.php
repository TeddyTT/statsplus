<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'operators'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, int>
     */
    protected $fillable = [
        'short_name',
        'name',
        'country_id',
    ];
}
