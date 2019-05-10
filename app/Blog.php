<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function blog()
    {
        return ['title'=>'this is blog title','details'=>'This is blog details'];
    }
}
