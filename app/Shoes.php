<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{

    protected $table = 'shoe-info';

    protected $fillable =[
        'title',
        'size',
        'price',
        'img',

    ];
}
