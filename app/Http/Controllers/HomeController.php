<?php

namespace App\Http\Controllers;

use App\Shelf;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

       //ホーム画面表示
       public function home() 
       {
           return view("home");   
       }

       //マイページ画面表示
       public function mypage($id) 
       {
           $shelf = Shelf::find($id);
           return view("mypage");   
       }

       public function exeCreate(Request $request)
       {
           // 画像を受け取る
           $data = $request->all();
           $image = $request->file('image');
           //画像をstorageに保存
           $path = \Storage::put('/public', $image);
           $path = explode('/', $path);
           
           $data['user_id'] = Auth::id();
           $data['image'] = $path[1];
           array_shift($data);
        //    dd($data);
     
           \DB::beginTransaction();
           try {
               Shelf::create($data);
               \DB::commit();
           } catch (\Throwable $e) {
               \DB::rollback();
               abort(500);
           }
   
           return redirect()->route('mypage');
       }
   }

