<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainBlock extends Model
{
    //
    protected $table = 'main_block';


    protected $fillable = [
        'id',
        'title',
        'description',
        'position',
        'created_at',
        'updated_at'
    ];
}
