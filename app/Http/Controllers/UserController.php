<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Validator;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use LaravelCaptcha\Integration\BotDetectCaptcha;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
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
   
     public function comment($id)
     {
       
       $row = DB::table('blogpost')->where('id',$id)->first();
        return view('comment')->with('row',$row);
       
     }

      public function showcomment()
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
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('home');
            }
     }

     public function editprofile1()
     {
         $id = \Auth::id(); 
        $i=DB::table('users')->where('id',$id)->first();
        return view ('editprofile')->with('row',$i);
       
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
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('home');
            }
     }

}
