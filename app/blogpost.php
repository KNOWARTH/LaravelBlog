<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use App\Http\Requests;



class blogpost extends Model
{

  


	 protected $collection = 'blogpost';

    protected function save_data(Request $request,$title,$content)
    { 
        echo "fdsf";
        exit();
       $post=$request->all();

       $v=\Validator::make($request-> all(),
       [
             'title'=> 'required',
              'content'=> 'required'

       ]);

         if($v->fails())
        {
                return redirect()->back()->withErrors($v->errors());
        }
        else
        {

    	     $user = new blogpost;
 			     $user->title = $title;
  			   $user->content = $content;
  			   $user->save();

          return true;
        }
        
    }

    protected function deleteData($id){
      //$user=detail::destroy($id);
      $user = DB::table('blogpost')->where('id',$id)->delete();
      if($user>0){
         Session::flash('message','Record deleted');
      return true;
        }
    }

   
    protected function editData($id)
    {
     $users = DB::collection('blogpost')->where('id',$id)->get();
    
     return $users;
    }
    
    protected function updateData($post)
    {
       $id=$post['id'];
            $data = array(
                'title'=> $post['title'],
                 'content'=> $post['content']
            );
           $user = new blogpost;
           $user->where('_id',$id)->update($data);
           return true;
    }
   
}
