<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'id',
        'title',
        'image_name',
        'created_at',
        'updated_at'
    ];
}
