<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventsController extends Controller
{
    
    //for natok pagez
    function upcomingNatok()
    {
        date_default_timezone_set("Asia/Dhaka");
        $sql="Select xseat,zseat,xname,xcode,xcost, xvenu from events where xflag=1 and xdate>='".date('Y-m-d')."' and xtype='Natok' order by xsl desc";

       
        $data=DB::select($sql);
        
        return view('upcoming-events',['data'=>$data,'type'=>'Natok']);

    }

    function eventDetails($xcode)
    {
        
        // return view('event-details',['data'=>$data]);

        date_default_timezone_set("Asia/Dhaka");
        


        $sql="Select * from events where xcode='".$xcode."'";
        $data=DB::select($sql);
        $sql="SELECT count(xsl) as ord,xcode,xname,xcost,(select xmrp from events where events.xcode=orders.xcode) as xmrp FROM `orders` group by xcode order by ord desc limit 3";
        $hot=DB::select($sql);
        $sql="Select xseat,zseat,xname,xcode,xcost,xvenu,xtype,xfeature from events where xflag=1 and xdate>='".date('Y-m-d')."' order by xsl desc";
        $newProduct=DB::select($sql);
        
        return view('event-details',['newProduct'=>$newProduct,'hot'=>$hot,'data'=>$data]);
    }

    function upcomingConcert()
    {
        date_default_timezone_set("Asia/Dhaka");
        $sql="Select xseat,zseat,xname,xcode,xcost, xvenu from events where xflag=1 and xdate>='".date('Y-m-d')."' and xtype='concert'";
        $data=DB::select($sql);
        
        return view('upcoming-events',['data'=>$data,'type'=>'Concert']);
    }

    function upcomingFashion()
    {
        date_default_timezone_set("Asia/Dhaka");
        $sql="Select xseat,zseat,xname,xcode,xcost, xvenu from events where xflag=1 and xdate>='".date('Y-m-d')."' and xtype='Fashion'";
        $data=DB::select($sql);
        
        return view('upcoming-events',['data'=>$data,'type'=>'Fashion']);
    }
    function upcomingConvo()
    {
        date_default_timezone_set("Asia/Dhaka");
        $sql="Select xseat,zseat,xname,xcode,xcost, xvenu from events where xflag=1 and xdate>='".date('Y-m-d')."' and xtype='Internationl Convocation'";
        $data=DB::select($sql);
        
        return view('upcoming-events',['data'=>$data,'type'=>'Internationl Convocation']);
    }

    function search(Request $req)
    {
        $search=$req->input('search');
        date_default_timezone_set("Asia/Dhaka");

        $sql="Select xseat,zseat,xname,xcode,xcost, xvenu,xtype from events where xflag=1 and xdate>='".date('Y-m-d')."' and (xname like '%".$search."%' or xtype like '%".$search."%' or xvenu like '%".$search."%' or xcast like '%".$search."%' or xdesc like '%".$search."%') order by xsl desc";

       
        $data=DB::select($sql);
        

        return view('search',['data'=>$data,'type'=>'Natok']);
    }
}
