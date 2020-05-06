<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo('App\User');
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getTeasertextAttribute($date)
    {
        return Str::limit($date, $limit = 30, $end = '...');
    }

    public function getUeberschriftAttribute($date)
    {
        return Str::limit($date, $limit = 15, $end = '...');
    }

    public function getTeaserbildAttribute($date)
    {
        return Str::limit($date, $limit = 15, $end = '...');
    }
}
