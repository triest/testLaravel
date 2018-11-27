<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'id',
        'title',
        'description',
        'image_name',
        'created_at',
        'updated_at'
    ];
}
