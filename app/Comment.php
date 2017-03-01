<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id_comment',
        'comment',
        'id_article'
    ];

    protected $table = 'comments';

    public $timestamps = false;
    protected $primaryKey = 'id_comment';

    public function article() {
    	return $this->belongsTo('App\Article', 'id_article');
    }
}
