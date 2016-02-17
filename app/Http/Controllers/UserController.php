<?php

namespace App\Http\Controllers;
use DB;
use Session;
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
   
     public function comment()
     {
        $id = \Auth::id(); 
        //$id = blogpost::where('id',$id)->first();
        return view('comment')->with ('id',$id);
       
     }

      public function showcomment()
    {
        $result=DB::table('comment')->paginate(5);
        return view ('comment')->with ('data',$result);
    }

     public function savecomment(Request $request)
    {
        $post=$request->all();
        unset($post['_token']);
            $i=DB::table('comment')->insert($post);
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
       $post=$request->all();
        unset($post['_token']);
            $i=DB::table('users')->update($post);
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('home');
            }
    }



}
