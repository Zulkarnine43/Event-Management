<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    function index()
    {
        // $sql="select * from events where xflag=1 order by xsl desc ";
        // $newProduct=DB::select($sql);
        date_default_timezone_set("Asia/Dhaka");

        $sql="SELECT * FROM `events` where xflag=1 and xdate>='".date('Y-m-d')."'  order by xmrp-xcost desc limit 6";
        $special=DB::select($sql);

        $sql="SELECT count(xsl) as ord,xcode,xname,xcost,(select xmrp from events where events.xcode=orders.xcode) as xmrp FROM `orders` group by xcode order by ord desc limit 3";
        // echo $sql;
        // die;
        $hot=DB::select($sql);


        $sql="Select xseat,zseat,xname,xcode,xcost,xvenu,xtype,xfeature from events where xflag=1 and xdate>='".date('Y-m-d')."' order by xsl desc";
        $newProduct=DB::select($sql);

        

        // echo $newProduct[0]->xtype;
        // die;
        return view('home',['newProduct'=>$newProduct,'hot'=>$hot,'special'=>$special]);
    }

   
}
