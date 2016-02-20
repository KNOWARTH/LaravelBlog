<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
class blogpost extends Model
{   
    protected $table = 'blogpost';
     protected $fillable = ['users_id', 'title', 'content', 'comment_count', 'published_at',

    ];

}
