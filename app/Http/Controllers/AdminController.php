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
    {        
        $result=DB::table('blogpost')->paginate(2);
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
       $post=$request->all();
        unset($post['_token']);
            $i=DB::table('blogpost')->update($post);
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
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('Admin');
            }
    }

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
        return view('admin/admincomment');
        }
    }

    public function editprofile1($id)
    {
        
        $i=DB::table('users')->where('id',$id)->first();
        return view ('editprofile')->with('row',$i);
       
    }

    


}
