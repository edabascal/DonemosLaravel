<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
        protected $table= "images";

        protected $fillable= ['name','article_id'];
        // datos que quiero que traiga
}
