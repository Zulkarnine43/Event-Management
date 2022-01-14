<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function run(Request $req)
    {
        $req->validate([
            
            'email' => 'required',
            'password'=> 'required|min:6|max:50'
            
        ]);
        $email=$req->input('email');
        $password=$req->input('password');
        $sql="SELECT * FROM `pausers` where zemail='".$email."' and zpassword='".$password."' and xflag='1'";
        $login=DB::select($sql);
        if(empty($login[0]))
            return redirect()->back();

       
        session()->put('data',$login); //user menus
        
        session()->put('login','True');
        session()->put('role','admin');
        session()->put('user_id',$login[0]->xsl);
        
        session()->put('zemail',$login[0]->zemail);
        session()->put('zrole',$login[0]->zrole);
        session()->put('zuserfullname',$login[0]->zuserfullname);
        session()->put('zusermobile',$login[0]->zusermobile);
        return redirect('show-order');
    } 

    function userCreate(Request $req)
    {
        // print_r($req->input());
        $req->validate([
            'xname' =>'required',
            'xmobile' =>'required',
            'xemail' => 'required',
            'password'=> 'required|min:6|max:50'
            
        ]);
        $sql="INSERT INTO `customers`(`xemail`, `zemail`, `zpass`,  `xname`, `xmobile`, `xadd`) VALUES ('".$req->xemail."','System','".$req->password."','".$req->xname."','".$req->xmobile."','".$req->xadd."')";

        DB::insert($sql);

        $sql="SELECT * FROM `customers` where xemail='".$req->xemail."' and zpass='".$req->password."' and xflag='1' order by xsl desc limit 1";
        $login=DB::select($sql);
        
        if(empty($login[0]))
            return redirect()->back();
    
       
        session()->put('sdata',$login); //user menus
        
        session()->put('slogin','True');
        session()->put('srole','user');
        session()->put('suser_id',$login[0]->xsl);
        
        session()->put('sxemail',$login[0]->xemail);
        session()->put('szrole',$login[0]->zrole);
        session()->put('sxname',$login[0]->xname);
        session()->put('sxmobile',$login[0]->xmobile);
        return redirect('my-account');

       
    }


    function userLogin(Request $req)
    {
        $req->validate([
            
            'xemail' => 'required',
            'password'=> 'required|min:6|max:50'
            
        ]);
        $xemail=$req->input('xemail');
        $password=$req->input('password');
        $sql="SELECT * FROM `customers` where xemail='".$xemail."' and zpass='".$password."' and xflag='1'";
        $login=DB::select($sql);
        
        if(empty($login[0]))
            return redirect()->back()->with('warning','Email or password not match!');
    
       
        session()->put('sdata',$login); //user menus
        
        session()->put('slogin','True');
        session()->put('srole','user');
        session()->put('suser_id',$login[0]->xsl);
        
        session()->put('sxemail',$login[0]->xemail);
        session()->put('szrole',$login[0]->zrole);
        session()->put('sxname',$login[0]->xname);
        session()->put('sxmobile',$login[0]->xmobile);
        return redirect('my-account');
    }

    function adminLogout()
    {
        // session()->flush();
        session()->forget('login');
        return redirect('admin-login');
    }

    function userLogout()
    {
        // session()->flush();
        session()->forget('slogin');

        return redirect('user-auth');
    }
}
