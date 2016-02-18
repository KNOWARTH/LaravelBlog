<?php

namespace App\Http\Controllers;
use DB;
use Session;
<<<<<<< HEAD
use Validator;
use App\User;
=======
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
use App\Http\Requests;
use Illuminate\Http\Request;
use LaravelCaptcha\Integration\BotDetectCaptcha;
use Illuminate\Pagination\LengthAwarePaginator;
<<<<<<< HEAD

=======
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
<<<<<<< HEAD
     {
        $this->middleware('auth');
     }
=======
    {
        $this->middleware('auth');
    }
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home');
    }

    public function showblog1()
    {
        $result=DB::table('blogpost')->paginate(10);
        return view ('showblog')->with ('data',$result);
    }

    public function showcms()
    {
        $result=DB::table('cms')->paginate(5);
        return view ('showcms')->with ('data',$result);
    }
   
<<<<<<< HEAD
     public function comment($id)
     {
       
       $row = DB::table('blogpost')->where('id',$id)->first();
        return view('comment')->with('row',$row);
=======
     public function comment()
     {
        $id = \Auth::id(); 
        //$id = blogpost::where('id',$id)->first();
        return view('comment')->with ('id',$id);
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
       
     }

      public function showcomment()
<<<<<<< HEAD
      {
        $result=DB::table('comment')->paginate(5);
        return view ('comment')->with ('data',$result);
      }

     public function savecomment(Request $request)
     {
            $blogpost_id1 = $request['blogpost_id'];


        //$post=$request->all();
         $users_id1 = \Auth::id(); 
        

         $arrayName1 = array(

        'users_id' => $users_id1,
        'blogpost_id' => $blogpost_id1,
        'commenter' => $request['commenter'],
        'email' => $request['email'],
        'comment' => $request['comment'],

         );
        
            $i=DB::table('comment')->insert($arrayName1);
=======
    {
        $result=DB::table('comment')->paginate(5);
        return view ('comment')->with ('data',$result);
    }

     public function savecomment(Request $request)
    {
        $post=$request->all();
        unset($post['_token']);
            $i=DB::table('comment')->insert($post);
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('home');
            }
<<<<<<< HEAD
     }

     public function editprofile1()
     {
=======
    }

     public function editprofile1()
    {
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
         $id = \Auth::id(); 
        $i=DB::table('users')->where('id',$id)->first();
        return view ('editprofile')->with('row',$i);
       
<<<<<<< HEAD
     }

     public function updateprofile(Request $request)
     {
       $cid = $request['id'];
      $test = $request['password'];
      //$test1 = md5($test);
       $arrayName = array(

        'name' => $request['name'],
        'email' => $request['email'],
        'password' => bcrypt($request['password']),

         );
    
            $i=DB::table('users')->where('id',$cid)->update($arrayName  );
=======
    }

     public function updateprofile(Request $request)
    {
       $post=$request->all();
        unset($post['_token']);
            $i=DB::table('users')->update($post);
>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('home');
            }
<<<<<<< HEAD
     }
=======
    }


>>>>>>> 82a6770c9db64f9640ecf7320bfdca5a4328adb9

}
