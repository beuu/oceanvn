<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Lienhe;
use Mail;

class DanhmucController extends Controller
{
    public  function getDanhmuc($slug)
    {
        $cate =  Category::where('slug',$slug)->first();

        $data = Post::where('category_id',$cate->id)->paginate(1);
        return view('danhmuc', compact('data','cate'));
    }
    public  function getBaiViet($danhmuc,$slug)
    {
        $data1 = Post::where('slug',$slug)->first();
        $cate1 =  Category::where('id',$data1->category_id)->first();

        
        return view('page', compact('data1','cate1'));
    }
    public function getLienhe()
    {
        return view('lienhe');
    }
    public function getGioithieu()
    {
        return view('gioithieu');
    }
    public function lienhe(Request $request){
        $data = new Lienhe;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->email =$request->email;
        $data->save();
          Mail::send('mailfb', array('name'=>$request->name,'noidung'=>$request->message,'sdt'=>$request->phone,'email'=>$request->email), function($message){
                $message->from('info@oceandragon.net.vn')->to('tien2vv@gmail.com', 'Visitor')->subject('Visitor Contact!');
            });
        
          $request->session()->flash('success','Thông tin được gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.');
        return redirect()->back();
      }
}
