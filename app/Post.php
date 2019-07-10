<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'title', 'body'
    ];

    protected $table = 'posts';

    public $timestamps = true;

    public function user(){

        return $this->belongsTo('App\User');
    }
}
