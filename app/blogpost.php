<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
class blogpost extends Model
{   
    protected $table = 'blogpost';
     protected $fillable = ['users_id', 'title', 'content', 'comment_count', 'published_at',

    ];

     protected function validateData($post){
    	$rules =array('title' => 'required|Min:3|Max:80|unique:blogpost',
                    'content' => 'required|Min:15|Max:500',
                   
                );
        $validator = Validator::make($post,$rules);
        return $validator;
    }


}
