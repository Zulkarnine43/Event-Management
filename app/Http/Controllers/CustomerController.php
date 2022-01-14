<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //

    function myAccount()
    {
        $user_id=session('suser_id');
       
        $sql="SELECT * FROM `orders` where user_id='".$user_id."' and xflag=1 order by xsl desc";
        $all=DB::select($sql);

        date_default_timezone_set("Asia/Dhaka");

        $sql="SELECT orders.xcode,orders.xname,orders.xqty,orders.xcost,events.xdate,events.xtype FROM `orders`,events where orders.xcode=events.xcode and events.xdate>='".date('Y-m-d')."' and orders.user_id='".$user_id."' and orders.xflag=1 order by orders.xsl desc";
        $upcoming=DB::select($sql);
        
        return view('my-account',['all'=>$all,'upcoming'=>$upcoming]);

    }
}
