<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voice;
use Storage;

class VoicesController extends Controller
{
  public function add()
  {
      if (\Auth::check()) { // 認証済みの場合
      
          return view('voices.voice_create');
  }
  }

  public function store(Request $request)
  {
       $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'file' => 'required'
           
        ]);
        
              //s3アップロード開始
      $file = $request->file('file');
      
    
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('/', $file, 'public');
      
        
         $request->user()->voices()->create([
            'title' => $request->title,
            'content' => $request->content,
            'file'=>Storage::disk('s3')->url($path)
        ]);
      

      return redirect('/');
  }
}