<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;


class contactus extends Model
{


	 protected $collection = 'contactus';

    protected function save_contact($title,$content)
    { 

       $post=$request->all();

       $v=\Validator::make($request-> all(),
       [
             'firstname'=> 'required',
              'lastname'=> 'required',
              'email'=> 'required',
              'comment'=> 'required'



       ]);

         if($v->fails())
        {
                return redirect()->back()->withErrors($v->errors());
        }
        else
        {

    	     $user = new contactus;
 			     $user->firstname = $firstname;
  			   $user->lastname = $lastname;
            $user->email = $email;
             $user->comment = $comment;
  			   $user->save();

          return true;
        }
        
    }
}