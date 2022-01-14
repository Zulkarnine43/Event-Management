<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    //
    function index()
    {
        $user_id=session('suser_id');
      
        $sql="select * from (
            select * from smsbox where user_id=".$user_id." order by id desc limit 10
        ) tmp order by tmp.id asc";
        $data=DB::select($sql);
      
        return view('message.sms',['data'=>$data]);

    }
    function saveSms(Request $req)
    {
        $text=$req->input('text');
        if(strlen($text)<1)
            return back()->with('warning','Type something first!');

        $user_id=session('suser_id');
        $xname=session('sxname');

        $sql="INSERT INTO `smsbox`(`user_id`,`xname`, `sender`, `sms`) VALUES (".$user_id.",'".$xname."','User','".$text."')";

        DB::insert($sql);
        return redirect('message-page');
    }

    //admin
    function messageList()
    {
       $sql="select *,count(*) as unread from smsbox where zactive=1 and sender='User' group by user_id order by id desc ";
       $newData=DB::select($sql);

       $sql="select *,count(*) as tot from smsbox where sender='User' group by user_id order by id desc ";
       $allData=DB::select($sql);
       return view('admin.message-list',['newData'=>$newData,'allData'=>$allData]);
    }
    function viewMgsAdmin($user_id)
    {
        $sql="UPDATE `smsbox` SET zactive=0 WHERE user_id=".$user_id;
        DB::update($sql);

        $sql="select * from (
            select * from smsbox where user_id=".$user_id." order by id desc limit 10
        ) tmp order by tmp.id asc";
        $data=DB::select($sql);

        // echo "<pre>";
        // print_r($data);
        // die;
        return view('admin.message-view',['data'=>$data]);
    }
    function saveSmsAdmin(Request $req)
    {
        $text=$req->input('text');
        $user_id=$req->input('user_id');

        if(strlen($text)<1)
            return back()->with('warning','Type something first!');

        $xname=session('zuserfullname');

        $sql="INSERT INTO `smsbox`(`user_id`,`xname`, `sender`, `sms`) VALUES (".$user_id.",'".$xname."','Admin','".$text."')";
        
        DB::insert($sql);
        return redirect('view-message/'.$user_id);
    }
}
