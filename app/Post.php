<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded =['id'];
    protected $table = 'post';

    public static function getPublishedPost()
    {
        return self::where('is_published', true)->get();
    }
    public function comments()
    {
       
     return $this->hasMany(Comments::class, 'post_id', 'id');
 
   }

}
