<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    protected $table = 'shelf';

    protected $fillable =
    [
        'user_id',
        'main_title',
        'title_1',
        'image',
        'title_2',
        'title_3',
    ];
}
