<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'logo',
        'mobile_number',
        'woking_hour',
        'page_image',
        'google_maps',
        'address',
        'address2',
        'facebook',
        'twitter',
        'instagram',
        'tiktok',

    ];

}
