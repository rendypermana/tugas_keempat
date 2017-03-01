<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id_article',
        'title',
        'content',
        'posted'
    ];

    protected $table = 'articles';

    public $timestamps = false;
    protected $primaryKey = 'id_article';


    public function comment() {
    	return $this->hasMany('App\Comment', 'id_article');
    }

}
