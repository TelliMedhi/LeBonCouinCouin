<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    protected $fillable =['category','titre','text','prix','image0','code_postal','region','user_id','longitude','latitude'];
    
}
