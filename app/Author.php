<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Author extends Model
{
 public  $fillable = [
     'name' , 'bio' , 'created_at' , 'updated_at'
 ] ;
}
