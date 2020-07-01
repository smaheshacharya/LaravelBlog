<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name 
    protected $table = 'posts';
    //primary key 
    public $primary_key = 'id';
    //timestamp
    public $timestamps = true;

    public function user()
    {
    	return $this->belongsTo('App\User');//yasle Post bane table user tablele user table lai belog garxa bhaneko ho 
    }
}
