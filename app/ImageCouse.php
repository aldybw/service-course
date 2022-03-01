<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageCouse extends Model
{
    protected $table = 'image_courses';

    protected $fillable = ['course_id', 'image'];
}
