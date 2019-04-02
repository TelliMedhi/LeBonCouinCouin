<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    protected $fillable =['category','titre','text','prix','image0'];
    
}
