<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    //
    function index($xcode)
    {
        $sql="select * from events where xcode='".$xcode."'";
        $data=DB::select($sql);
        
        return view('checkout',['data'=>$data]);
        // return view(' checkout-copy',['data'=>$data]);

      
    }

    function confirmOrder(Request $req)
    {
        
        $xqty=$req->input('xqty');
        $xcode=$req->input('xcode');
        $user_id=session('suser_id');

        
        $xname="";
        $xcost="";
        $sql="select * from events where xcode='".$xcode."'";
        $data=DB::select($sql);
        if($data[0])
        {
            $xname=$data[0]->xname;
            $xcost=$data[0]->xcost;
            $xseat=$data[0]->xseat;
            $zseat=$data[0]->zseat;
        }
        $seat=$xseat-($zseat+$xqty);
        if($seat<=0)
            return back()->with('warning','Sorry seat not availabe!');
        $sql="INSERT INTO `orders`( `user_id`, `xcode`, `xname`, `xqty`, `xcost`) VALUES ('".$user_id."','".$xcode."','".$xname."','".$xqty."','".$xcost."')";
        DB::insert($sql);
        // return redirect('my-account');

        $sql="UPDATE `events` SET zseat=zseat+".$xqty." WHERE xcode='".$xcode."'";

        DB::update($sql);

        return redirect('my-account')->withErrors(['Event Booking Successfully!']);

    }
}
