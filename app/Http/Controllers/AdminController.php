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
        $result=DB::table('blogpost')->paginate(3);
        return view ('Admin')->with ('data',$result);
        //return view('home');
        
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

    public function edit($id)
    {
        $i=DB::table('blogpost')->where('id',$id)->first();
        return view ('Admin/blogedit');
    }

    public function update(Request $request)
    {
        $post=$request->all();
        
            $data = array(
                'title'=> $post['title'],
                'content'=> $post['content']
            );
            $i=DB::table('blogpost')->where('id',$post['id'])->update($data);
            if($i>0)
            {
                Session::flash('message','Record inserted');
                return redirect('Admin');
            }
        
    }

    public function contact()
    {
        return view('auth/contact');
    }

     public function about()
    {
        return view('auth/about');
    }

     public function cms()
    {
        return view('admin/cms');
    }

     public function admincomment()
    {
        $result=DB::table('comment')->paginate(1);
        return view ('admin/admincomment')->with ('data',$result);
        //return view('home');
        
    }


}
