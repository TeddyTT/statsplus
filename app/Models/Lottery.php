<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lotteries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, int>
     */
    protected $fillable = [
        'name',
        'operator_id'
    ];

    /**
     * Get the draws of the lottery.
     */
    public function draws()
    {
        return $this->hasMany(Draw::class);
    }

    /**
     * Get the operator that belongs the lottery.
     */
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
}
