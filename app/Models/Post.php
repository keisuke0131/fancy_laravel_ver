<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = array('id');

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
