<?php

namespace App;

use Illuminate\Database\Eloquent\table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    protected $table = 'author';
}
