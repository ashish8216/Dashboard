<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'blog_id', 'name','email','message'];
}