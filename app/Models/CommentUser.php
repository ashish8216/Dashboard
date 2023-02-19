<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;

class CommentUser extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['comment_id', 'blog_id','message'];
}