<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo('App\User');
    }
}
