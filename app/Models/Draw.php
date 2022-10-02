<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'draws';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, int>
     */
    protected $fillable = [
        'drawn_at',
        'lottery_id',
    ];

    /**
     * Get the draws of the lottery.
     */
    public function drawNumbers()
    {
        return $this->hasMany(DrawNumber::class);
    }

    /**
     * Get the lottery that belongs the draw.
     */
    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }
}
