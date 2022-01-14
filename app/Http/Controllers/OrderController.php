<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    function show()
    {
        $sql="select xname,xqty,xcost,(SELECT xtype FROM `events`  
        where events.xcode=orders.xcode) as type,(SELECT xdate FROM `events`  
        where events.xcode=orders.xcode) as date,(SELECT xname FROM `customers` where customers.xsl=user_id ) as customer from orders where xflag=1 order by xsl desc";
        $data=DB::select($sql);

        return view('admin.orders',['data'=>$data]);
        
       
    }

}
