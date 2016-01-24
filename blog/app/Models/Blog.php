<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Blog extends Model
{
            protected $fillable = array('name', 'contents', 'updated_at');
             public function comment() {
                 return $this->hasMany(Comment::class);
             }   
}