<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrawNumber extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'draw_numbers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, int>
     */
    protected $fillable = [
        'number',
        'draw_id',
        'number_type_id',
    ];

    /**
     * Get the draw that belongs the number.
     */
    public function draw()
    {
        return $this->belongsTo(Draw::class);
    }

    /**
     * Get the draw that belongs the number.
     */
    public function numberType()
    {
        return $this->belongsTo(NumberType::class);
    }
}
