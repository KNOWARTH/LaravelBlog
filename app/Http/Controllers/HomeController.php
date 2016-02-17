<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use LaravelCaptcha\Integration\BotDetectCaptcha;
use Illuminate\Pagination\LengthAwarePaginator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result=DB::table('blogpost')->orderBy('created_at','desc')->paginate(5);
         return view ('home')->with ('data',$result);
       
    }

   public function contact()
    {
        return view('auth/contact');
    }

     public function about()
    {
        return view('auth/about');
    }

    public function savecontact(Request $request)
    {
        $post=$request->all();
        unset($post['_token']);
            $i=DB::table('contactus')->insert($post);
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('home');
            }
    }
    


}
