<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'sex',
        'birth',
        'parent',
        'occupation',
        'permanent_address',
        'mobile',
        'email',
        'level',
        'stream',
        'gpa',
        'year',
        'yes',
        'listening',
        'reasing',
        'writing',
        'speaking',
        'overall',
        'nat',
        'jlpt',
        'top',
        'friends',
        'relatives',
        'website',
        'facebook',
        'seminars',
        'walk_in',
        'others',
        'comments',

    ];
    
}
