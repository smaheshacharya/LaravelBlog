<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
     //table name 
     protected $table = 'products';
     //primary key 
     public $primary_key = 'id';
     //timestamp
     public $timestamps = true;
}
