<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       public function mypage() 
       {
           return view("mypage");   
       }

       public function exeCreate(SubmissionRequest $request)
       {
           // 画像を受け取る
           $upload_image = $request->file('image');
           //アップロードされた画像を保存
           $path = $upload_image->store('images', 'public');
           //ブログのデータ受け取る
           $inputs = $request->all();
           
           $inputs['user_id'] = Auth::id();
           // 画像データを格納
           $image_data = array(
               'image' => $upload_image->getClientOriginalName(),
               'image_path' => $path
           );
           // 画像データを$inputsに追加する
           $input_contents = array_merge($inputs, $image_data);
           // データベース接続
           \DB::beginTransaction();
           try {
               //ブログを登録する
               Submission::create($input_contents);
               \DB::commit();
           } catch (\Throwable $e) {
               \DB::rollback();
               abort(500);
           }
   
           return redirect()->route('mypage');
       }
   }

