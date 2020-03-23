<?php

namespace App;

use Illuminate\Database\Eloquent\table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    protected $table = 'author';

    public static function findById($id)
    {
        $data = Author::all('id','nama','email','telpon')
            ->where('id', $id)
            ->first();
            return $data;
    }
}


