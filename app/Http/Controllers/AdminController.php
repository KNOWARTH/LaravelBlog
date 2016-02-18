<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;    

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
<<<<<<< HEAD
    {
        $result=DB::table('blogpost')->paginate(10);
=======
    {        
        $result=DB::table('blogpost')->paginate(2);
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
        return view ('Admin')->with ('data',$result);
        //return view('home');
        
    }

     public function showuser()
    {
        $result=DB::table('users')->where('role','user')->paginate(10);
        return view ('admin/showuser')->with ('data',$result);
        //return view('home');
        
    }

     public function deleteuser($id)
    {
        $i=DB::table('users')->where('id',$id)->delete();
        if($i>0)
        {
        return redirect('Admin');
        }
    }

    public function blogpost()
    {
         $id = \Auth::id(); 
        return view('admin/blogpost')->with ('id',$id);
    }

    
    public function save(Request $request)
    {
        $post=$request->all();
        unset($post['_token']);
            $i=DB::table('blogpost')->insert($post);
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('Admin');
            }
    }

     public function delete($id)
    {
        $i=DB::table('blogpost')->where('id',$id)->delete();
        if($i>0)
        {
        return redirect('Admin');
        }
    }

    public function blogedit($id)
    {
        
        $i=DB::table('blogpost')->where('id',$id)->first();
        
        return view ('admin/blogedit')->with('row',$i);

    }

    public function update(Request $request)
    {
<<<<<<< HEAD
       $cid=$request['id'];
       $post=$request->all();
        unset($post['_token']);
            $i=DB::table('blogpost')->where('id',$cid)->update($post);
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('Admin');
            }
    }

   

     public function cms()
    {
         $id = \Auth::id(); 
         return view('admin/cms')->with ('id',$id); 
    }


    public function savecms(Request $request)
    {
        $post=$request->all();
        unset($post['_token']);
            $i=DB::table('cms')->insert($post);
=======
       $post=$request->all();
        unset($post['_token']);
            $i=DB::table('blogpost')->update($post);
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('Admin');
            }
    }

<<<<<<< HEAD
     public function admincomment()
    {
        $result=DB::table('comment')->paginate(3);
        return view ('admin/admincomment')->with ('data',$result);
        //return view('home');
        
    }

     public function deletecomment($id)
    {
        $i=DB::table('comment')->where('id',$id)->delete();
        if($i>0)
        {
         return redirect('Admin');
        }
    }

    public function editprofile1($id)
    {
        
        $i=DB::table('users')->where('id',$id)->first();
        return view ('editprofile')->with('row',$i);
       
=======
   

     public function cms()
    {
         $id = \Auth::id(); 
         return view('admin/cms')->with ('id',$id); 
    }


    public function savecms(Request $request)
    {
        $post=$request->all();
        unset($post['_token']);
            $i=DB::table('cms')->insert($post);
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('Admin');
            }
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
    }

     public function showcontact()
    {
<<<<<<< HEAD
        $result=DB::table('contactus')->paginate(10);
        return view ('admin/showcontact')->with ('data',$result);
=======
        $result=DB::table('comment')->paginate(3);
        return view ('admin/admincomment')->with ('data',$result);
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
        //return view('home');
        
    }

<<<<<<< HEAD
     public function deletecontact($id)
    {
        $i=DB::table('contactus')->where('id',$id)->delete();
        if($i>0)
        {
         return redirect('Admin');
        }
    }
    public function approv_comment($id)
    {
        $userid = "";
         $get_data = DB::table('comment')->where('id',$id)->get();
         foreach ($get_data as $value) {
             $userid = $value->users_id;
             
         
        }

      
            //print_r($res);
           $res1 = DB::table('users')->join('comment', 'comment.users_id', '=', 'users.id')->where('users.id','=',$userid)->select('users.id','comment.comment')->get(); 
           //print_r($res1);
           

            return view('home')->with ('data',$res1);

         }
           
       
         
        //return view('testtt')->with('data1',$res);

    
=======
     public function deletecomment($id)
    {
        $i=DB::table('comment')->where('id',$id)->delete();
        if($i>0)
        {
        return view('admin/admincomment');
        }
    }

    public function editprofile1($id)
    {
        
        $i=DB::table('users')->where('id',$id)->first();
        return view ('editprofile')->with('row',$i);
       
    }

    

>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9

}
