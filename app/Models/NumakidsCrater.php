<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumakidsCrater extends Model
{
   
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bot_numakids_craters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'identification',
        'url', 'image'
    ];
}
