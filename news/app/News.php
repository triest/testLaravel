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

    public function getDescription()
    {
        return $this->description;
    }


    public function getShortDescription()
    {
        if (strlen($this->getDescription()) > 50) {
            return substr($this->getDescription(), 0, 50);
        }
        return $this->getDescription();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
