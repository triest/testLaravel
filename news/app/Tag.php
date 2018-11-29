<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at'
    ];

    public function news()
    {
        return $this->belongsToMany(News::class);
    }
}
