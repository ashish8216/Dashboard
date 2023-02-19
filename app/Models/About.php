<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'image2',
        'image3',
        'youtube',
        'title',
        'title2',
        'title3',
        'title4',
        'title5',
        'title6',
    ];

}
