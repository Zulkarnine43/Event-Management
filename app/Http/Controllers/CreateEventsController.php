<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class CreateEventsController extends Controller
{

    //internation convo 
    function createInternation(Request $req)
    {

        $x=$this->create($req,'Internationl Convocation');
        return redirect('internation-list')->with('success', 'Event created successfully!');
       
       
        // $validatedData = $req->validate(
        //     [
        //         'xname'=>'required',
        //         'xvenu' => 'required',
        //         'xcast' => 'required',
        //         'xcost' => 'required',
        //         'xseat' => 'required',
        //         'xmobile' => 'required',
        //         'xemail' => 'required',
        //         'img1' => 'required'

        //     ],
        //     [
        //         'xname.required' => 'Natok name is required',
        //         'xvenu.required' => 'Venu name is required',
        //         'xcast.required' => 'Cast  is required',
        //         'xcost.required' => 'Cost is required',
        //         'xseat.required' => 'Seat is required',
        //         'xmobile.required' => 'Mobile is required',
        //         'xemail.required' =>'Email is required',
        //         'img1.required' =>'Image One is required'

        //     ]
        // );
        // $sql = "SELECT coalesce(max(xcode),0) as maxnum FROM events";
        // $maxnum = DB::select($sql);
        // $pdonum = (int)$maxnum[0]->maxnum;
        // $pdonum += 1;
        // $xcode	 = str_pad((string)$pdonum, 6, "0", STR_PAD_LEFT);
     
        // if($req->file('img1'))
        // {
        //     $owner = $req->file('img1');
        //     $owner_resize = Image::make($owner->getRealPath());
        //     $owner_resize->resize(1110, 388);

        //     $path = public_path('images/events/image1/' . $xcode . '.jpg');
        //     $owner_resize->save($path);
        //     $owner_resize->destroy();
        // }
        // if($req->file('img2'))
        // {
        //     $shop = $req->file('img2');
        //     $shop_resize = Image::make($shop->getRealPath());
        //     $shop_resize->resize(1110, 388);
        //     $path = public_path('images/events/image2/' . $xcode . '.jpg');
        //     $shop_resize->save($path);
        //     $shop_resize->destroy();
        // }
        // if($req->file('img3'))
        // {
        //     $drug = $req->file('img3');
        //     $drug_resize = Image::make($drug->getRealPath());
        //     $drug_resize->resize(1110, 388);
        //     $path = public_path('images/events/image3/' . $xcode . '.jpg');
        //     $drug_resize->save($path);
        //     $drug_resize->destroy();
        // }

        // $sql="INSERT INTO `events`( `xdate`,`xtime`, `zemail`, `xcode`, `xname`, `xtype`, `xvenu`, `xcast`, `xcost`, `xseat`, `xmobile`, `xemail`) VALUES ('".$req->input('xdate')."','".$req->input('xtime')."','".session('zemail')."','".$xcode."','".$req->input('xname')."','Internationl Convocation','".$req->input('xvenu')."','".$req->input('xcast')."','".$req->input('xcost')."','".$req->input('xseat')."','".$req->input('xmobile')."','".$req->input('xemail')."')";
        // if(DB::insert($sql))
        //     return redirect('internation-list')->with('success', 'Event created successfully!');
        // return redirect()->back()->withErrors(['Something goes wrong, please try again!']);
    }

    function internationList()
    {
        $sql="select * from events where xflag=1 and xtype='Internationl Convocation' order by xsl desc";
        $data=DB::select($sql);
        return view('admin.internation-list',['data'=>$data]);
    }
    function internationEditForm($xcode)
    {
        $sql = "SELECT * FROM events where xflag=1 and xcode='".$xcode."'";
        
        $data = DB::select($sql);
        return view('admin.internation-edit-form', ['data' => $data[0]]);
    }
    function internationEdit(Request $req)
    {
        $x=$this->edit($req);
        return redirect('internation-list')->with('success', 'International Convo info edited successfully!');

        // $xcode=$req->input('xcode');
        // if($req->file('img1'))
        // {
        //     $owner = $req->file('img1');
        //     $owner_resize = Image::make($owner->getRealPath());
        //     $owner_resize->resize(1110, 388);
        //     $path = public_path('images/events/image1/' . $xcode . '.jpg');
        //     $owner_resize->save($path);
        //     $owner_resize->destroy();
        // }
        // if($req->file('img2'))
        // {
        //     $shop = $req->file('img2');
        //     $shop_resize = Image::make($shop->getRealPath());
        //     $shop_resize->resize(1110, 388);
        //     $path = public_path('images/events/image2/' . $xcode . '.jpg');
        //     $shop_resize->save($path);
        //     $shop_resize->destroy();
        // }
        // if($req->file('img3'))
        // {
        //     $drug = $req->file('img3');
        //     $drug_resize = Image::make($drug->getRealPath());
        //     $drug_resize->resize(1110, 388);
        //     $path = public_path('images/events/image3/' . $xcode . '.jpg');
        //     $drug_resize->save($path);
        //     $drug_resize->destroy();
        // }

        // $sql="UPDATE `events` SET `xdate`='".$req->input('xdate')."',`xtime`='".$req->input('xtime')."',`zemail`='".session('zemail')."',`xname`='".$req->input('xname')."',`xvenu`='".$req->input('xvenu')."',`xcast`='".$req->input('xcast')."',`xcost`='".$req->input('xcost')."',`xseat`='".$req->input('xseat')."',`xmobile`='".$req->input('xmobile')."',`xemail`='".$req->input('xemail')."' WHERE xcode='".$xcode."'";
        // DB::update($sql);
        // return redirect('internation-list')->with('success', 'International Convo info edited successfully!');
    }

    //fashion 
    function createFashion(Request $req)
    {
        $x=$this->create($req,'Fashion');
        return redirect('fashion-list')->with('success', 'Fashion created successfully!');
       
        // $validatedData = $req->validate(
        //     [
        //         'xname'=>'required',
        //         'xvenu' => 'required',
        //         'xcast' => 'required',
        //         'xcost' => 'required',
        //         'xseat' => 'required',
        //         'xmobile' => 'required',
        //         'xemail' => 'required',
        //         'img1' => 'required'

        //     ],
        //     [
        //         'xname.required' => 'Natok name is required',
        //         'xvenu.required' => 'Venu name is required',
        //         'xcast.required' => 'Cast  is required',
        //         'xcost.required' => 'Cost is required',
        //         'xseat.required' => 'Seat is required',
        //         'xmobile.required' => 'Mobile is required',
        //         'xemail.required' =>'Email is required',
        //         'img1.required' =>'Image One is required'

        //     ]
        // );
        // $sql = "SELECT coalesce(max(xcode),0) as maxnum FROM events";
        // $maxnum = DB::select($sql);
        // $pdonum = (int)$maxnum[0]->maxnum;
        // $pdonum += 1;
        // $xcode	 = str_pad((string)$pdonum, 6, "0", STR_PAD_LEFT);
     
        // if($req->file('img1'))
        // {
        //     $owner = $req->file('img1');
        //     $owner_resize = Image::make($owner->getRealPath());
        //     $owner_resize->resize(1110, 388);

        //     $path = public_path('images/events/image1/' . $xcode . '.jpg');
        //     $owner_resize->save($path);
        //     $owner_resize->destroy();
        // }
        // if($req->file('img2'))
        // {
        //     $shop = $req->file('img2');
        //     $shop_resize = Image::make($shop->getRealPath());
        //     $shop_resize->resize(1110, 388);
        //     $path = public_path('images/events/image2/' . $xcode . '.jpg');
        //     $shop_resize->save($path);
        //     $shop_resize->destroy();
        // }
        // if($req->file('img3'))
        // {
        //     $drug = $req->file('img3');
        //     $drug_resize = Image::make($drug->getRealPath());
        //     $drug_resize->resize(1110, 388);
        //     $path = public_path('images/events/image3/' . $xcode . '.jpg');
        //     $drug_resize->save($path);
        //     $drug_resize->destroy();
        // }

        // $sql="INSERT INTO `events`( `xdate`,`xtime`, `zemail`, `xcode`, `xname`, `xtype`, `xvenu`, `xcast`, `xcost`, `xseat`, `xmobile`, `xemail`) VALUES ('".$req->input('xdate')."','".$req->input('xtime')."','".session('zemail')."','".$xcode."','".$req->input('xname')."','Fashion','".$req->input('xvenu')."','".$req->input('xcast')."','".$req->input('xcost')."','".$req->input('xseat')."','".$req->input('xmobile')."','".$req->input('xemail')."')";
        // if(DB::insert($sql))
        //     return redirect('fashion-list')->with('success', 'Fashion created successfully!');
        // return redirect()->back()->withErrors(['Something goes wrong, please try again!']);
    }

    function fashionList()
    {
        $sql="select * from events where xflag=1 and xtype='Fashion' order by xsl desc";
        $data=DB::select($sql);
        return view('admin.fashion-list',['data'=>$data]);
    }
    function fashionEditForm($xcode)
    {
        $sql = "SELECT * FROM events where xflag=1 and xcode='".$xcode."'";
        
        $data = DB::select($sql);
        return view('admin.fashion-edit-form', ['data' => $data[0]]);
    }
    function fashionEdit(Request $req)
    {
        $x=$this->edit($req);
        return redirect('fashion-list')->with('success', 'Fashion info edited successfully!');

        // $xcode=$req->input('xcode');
        // if($req->file('img1'))
        // {
        //     $owner = $req->file('img1');
        //     $owner_resize = Image::make($owner->getRealPath());
        //     $owner_resize->resize(1110, 388);
        //     $path = public_path('images/events/image1/' . $xcode . '.jpg');
        //     $owner_resize->save($path);
        //     $owner_resize->destroy();
        // }
        // if($req->file('img2'))
        // {
        //     $shop = $req->file('img2');
        //     $shop_resize = Image::make($shop->getRealPath());
        //     $shop_resize->resize(1110, 388);
        //     $path = public_path('images/events/image2/' . $xcode . '.jpg');
        //     $shop_resize->save($path);
        //     $shop_resize->destroy();
        // }
        // if($req->file('img3'))
        // {
        //     $drug = $req->file('img3');
        //     $drug_resize = Image::make($drug->getRealPath());
        //     $drug_resize->resize(1110, 388);
        //     $path = public_path('images/events/image3/' . $xcode . '.jpg');
        //     $drug_resize->save($path);
        //     $drug_resize->destroy();
        // }

        // $sql="UPDATE `events` SET `xdate`='".$req->input('xdate')."',`xtime`='".$req->input('xtime')."',`zemail`='".session('zemail')."',`xname`='".$req->input('xname')."',`xvenu`='".$req->input('xvenu')."',`xcast`='".$req->input('xcast')."',`xcost`='".$req->input('xcost')."',`xseat`='".$req->input('xseat')."',`xmobile`='".$req->input('xmobile')."',`xemail`='".$req->input('xemail')."' WHERE xcode='".$xcode."'";
        // DB::update($sql);
        // return redirect('fashion-list')->with('success', 'Fashion info edited successfully!');
    }
    

    //natok 
    function createNatok(Request $req)
    {
       
        $x=$this->create($req,'Natok');
        return redirect('natok-list')->with('success', 'Natok created successfully!');
    }
    function create($req,$type)
    {
        $validatedData = $req->validate(
            [
                'xname'=>'required',
                'xvenu' => 'required',
                'xcast' => 'required',
                'xmrp' => 'required',
                'xcost' => 'required',
                'xseat' => 'required',
                'xmobile' => 'required',
                'xemail' => 'required',
                'xdesc' =>'required',
                'img1' => 'required',
                'img2' => 'required',


            ],
            [
                'xname.required' => 'Natok name is required',
                'xvenu.required' => 'Venu name is required',
                'xcast.required' => 'Cast  is required',
                'xcost.required' => 'Discount price is required',
                'xmrp.required' => 'Price is required',
                'xseat.required' => 'Seat is required',
                'xmobile.required' => 'Mobile is required',
                'xemail.required' =>'Email is required',
                'xdesc.required'    => 'Description is required',
                'img1.required' =>'Image One is required',
                'img2.required' =>'Image Two is required'


            ]
        );
        $sql = "SELECT coalesce(max(xcode),0) as maxnum FROM events";
        $maxnum = DB::select($sql);
        $pdonum = (int)$maxnum[0]->maxnum;
        $pdonum += 1;
        $xcode	 = str_pad((string)$pdonum, 6, "0", STR_PAD_LEFT);
     
        if($req->file('img1'))
        {
            $owner = $req->file('img1');
            $owner_resize = Image::make($owner->getRealPath());
            $owner_resize->resize(1000, 1500);

            $path = public_path('images/events/image1/' . $xcode . '.jpg');
            $owner_resize->save($path);
            $owner_resize->destroy();
        }
        if($req->file('img2'))
        {
            $shop = $req->file('img2');
            $shop_resize = Image::make($shop->getRealPath());
            $shop_resize->resize(1205, 445);
            $path = public_path('images/events/image2/' . $xcode . '.jpg');
            $shop_resize->save($path);
            $shop_resize->destroy();
        }
        if($req->file('img3'))
        {
            $drug = $req->file('img3');
            $drug_resize = Image::make($drug->getRealPath());
            $drug_resize->resize(1110, 388);
            $path = public_path('images/events/image3/' . $xcode . '.jpg');
            $drug_resize->save($path);
            $drug_resize->destroy();
        }

        $sql="INSERT INTO `events`( `xdate`,`xtime`, `zemail`, `xcode`, `xname`, `xtype`, `xvenu`, `xcast`,`xmrp`, `xcost`, `xseat`, `xmobile`, `xemail`,`xfeature`,`xdesc`) VALUES ('".$req->input('xdate')."','".$req->input('xtime')."','".session('zemail')."','".$xcode."','".$req->input('xname')."','".$type."','".$req->input('xvenu')."','".$req->input('xcast')."','".$req->input('xmrp')."','".$req->input('xcost')."','".$req->input('xseat')."','".$req->input('xmobile')."','".$req->input('xemail')."','".$req->input('xfeature')."','".$req->input('xdesc')."')";
        DB::insert($sql);
           
    }

    function natokList()
    {
        $sql="select * from events where xflag=1 and xtype='Natok' order by xsl desc";
        $data=DB::select($sql);
        return view('admin.natok-list',['data'=>$data]);
    }
    function natokEditForm($xcode)
    {
        $sql = "SELECT * FROM events where xflag=1 and xcode='".$xcode."'";
        
        $data = DB::select($sql);
        return view('admin.natok-edit-form', ['data' => $data[0]]);
    }
    function natokEdit(Request $req)
    {
        $x=$this->edit($req);
        return redirect('natok-list')->with('success', 'Natok info edited successfully!');
    }

    function edit($req)
    {
       
        
        $xcode=$req->input('xcode');
        if($req->file('img1'))
        {
            $owner = $req->file('img1');
            $owner_resize = Image::make($owner->getRealPath());
            $owner_resize->resize(1000, 1500);
            $path = public_path('images/events/image1/' . $xcode . '.jpg');
            $owner_resize->save($path);
            $owner_resize->destroy();
        }
        if($req->file('img2'))
        {
            $shop = $req->file('img2');
            $shop_resize = Image::make($shop->getRealPath());
            $shop_resize->resize(1205, 445);
            $path = public_path('images/events/image2/' . $xcode . '.jpg');
            $shop_resize->save($path);
            $shop_resize->destroy();
        }
        if($req->file('img3'))
        {
            $drug = $req->file('img3');
            $drug_resize = Image::make($drug->getRealPath());
            $drug_resize->resize(1110, 388);
            $path = public_path('images/events/image3/' . $xcode . '.jpg');
            $drug_resize->save($path);
            $drug_resize->destroy();
        }

        $sql="UPDATE `events` SET `xdate`='".$req->input('xdate')."',`xtime`='".$req->input('xtime')."',`zemail`='".session('zemail')."',`xname`='".$req->input('xname')."',`xvenu`='".$req->input('xvenu')."',`xcast`='".$req->input('xcast')."',`xmrp`='".$req->input('xmrp')."',`xcost`='".$req->input('xcost')."',`xseat`='".$req->input('xseat')."',`xmobile`='".$req->input('xmobile')."',`xemail`='".$req->input('xemail')."',`xfeature`='".$req->input('xfeature')."',`xdesc`='".$req->input('xdesc')."' WHERE xcode='".$xcode."'";
        DB::update($sql);
        
    }
    function natokDelete($xcode)
    {
        $sql="UPDATE events set xflag=0 where xcode='".$xcode."'";
        if (DB::update($sql)) {
            return redirect('natok-list')->with('success', 'Natok delete successfully!');
        }
        return redirect('natok-list')->with('success', 'Failed to delete!');
    }

    //concert

  
    function createConcert(Request $req)
    {
        $x=$this->create($req,'Concert');
        return redirect('concert-list')->with('success', 'Concert created successfully!');

        // $validatedData = $req->validate(
        //     [
        //         'xname'=>'required',
        //         'xvenu' => 'required',
        //         'xcast' => 'required',
        //         'xcost' => 'required',
        //         'xseat' => 'required',
        //         'xmobile' => 'required',
        //         'xemail' => 'required',
        //         'img1' => 'required'

        //     ],
        //     [
        //         'xname.required' => 'Natok name is required',
        //         'xvenu.required' => 'Venu name is required',
        //         'xcast.required' => 'Cast  is required',
        //         'xcost.required' => 'Cost is required',
        //         'xseat.required' => 'Seat is required',
        //         'xmobile.required' => 'Mobile is required',
        //         'xemail.required' =>'Email is required',
        //         'img1.required' =>'Image One is required'

        //     ]
        // );
        // $sql = "SELECT coalesce(max(xcode),0) as maxnum FROM events";
        // $maxnum = DB::select($sql);
        // $pdonum = (int)$maxnum[0]->maxnum;
        // $pdonum += 1;
        // $xcode	 = str_pad((string)$pdonum, 6, "0", STR_PAD_LEFT);
     
        // if($req->file('img1'))
        // {
        //     $owner = $req->file('img1');
        //     $owner_resize = Image::make($owner->getRealPath());
        //     $owner_resize->resize(1110, 388);
        //     $path = public_path('images/events/image1/' . $xcode . '.jpg');
        //     $owner_resize->save($path);
        //     $owner_resize->destroy();
        // }
        // if($req->file('img2'))
        // {
        //     $shop = $req->file('img2');
        //     $shop_resize = Image::make($shop->getRealPath());
        //     $shop_resize->resize(1110, 388);
        //     $path = public_path('images/events/image2/' . $xcode . '.jpg');
        //     $shop_resize->save($path);
        //     $shop_resize->destroy();
        // }
        // if($req->file('img3'))
        // {
        //     $drug = $req->file('img3');
        //     $drug_resize = Image::make($drug->getRealPath());
        //     $drug_resize->resize(1110, 388);
        //     $path = public_path('images/events/image3/' . $xcode . '.jpg');
        //     $drug_resize->save($path);
        //     $drug_resize->destroy();
        // }

        // $sql="INSERT INTO `events`( `xdate`,`xtime`, `zemail`, `xcode`, `xname`, `xtype`, `xvenu`, `xcast`, `xcost`, `xseat`, `xmobile`, `xemail`) VALUES ('".$req->input('xdate')."','".$req->input('xtime')."','".session('zemail')."','".$xcode."','".$req->input('xname')."','Concert','".$req->input('xvenu')."','".$req->input('xcast')."','".$req->input('xcost')."','".$req->input('xseat')."','".$req->input('xmobile')."','".$req->input('xemail')."')";
        // if(DB::insert($sql))
        //     return redirect('concert-list')->with('success', 'concert created successfully!');
        // return redirect()->back()->withErrors(['Something goes wrong, please try again!']);
    }

    function concertList()
    {
        $sql="select * from events where xflag=1 and xtype='Concert' order by xsl desc";
        $data=DB::select($sql);
        return view('admin.concert-list',['data'=>$data]);
    }
    function concertEditForm($xcode)
    {
        $sql = "SELECT * FROM events where xflag=1 and xcode='".$xcode."'";
        
        $data = DB::select($sql);
        return view('admin.concert-edit-form', ['data' => $data[0]]);
    }
    function concertEdit(Request $req)
    {
        $x=$this->edit($req);
        return redirect('concert-list')->with('success', 'Concert info edited successfully!');
       
        // $xcode=$req->input('xcode');
        // if($req->file('img1'))
        // {
        //     $owner = $req->file('img1');
        //     $owner_resize = Image::make($owner->getRealPath());
        //     $owner_resize->resize(1110, 388);
        //     $path = public_path('images/events/image1/' . $xcode . '.jpg');
        //     $owner_resize->save($path);
        //     $owner_resize->destroy();
        // }
        // if($req->file('img2'))
        // {
        //     $shop = $req->file('img2');
        //     $shop_resize = Image::make($shop->getRealPath());
        //     $shop_resize->resize(1110, 388);
        //     $path = public_path('images/events/image2/' . $xcode . '.jpg');
        //     $shop_resize->save($path);
        //     $shop_resize->destroy();
        // }
        // if($req->file('img3'))
        // {
        //     $drug = $req->file('img3');
        //     $drug_resize = Image::make($drug->getRealPath());
        //     $drug_resize->resize(1110, 388);
        //     $path = public_path('images/events/image3/' . $xcode . '.jpg');
        //     $drug_resize->save($path);
        //     $drug_resize->destroy();
        // }

        // $sql="UPDATE `events` SET `xdate`='".$req->input('xdate')."',`xtime`='".$req->input('xtime')."',`zemail`='".session('zemail')."',`xname`='".$req->input('xname')."',`xvenu`='".$req->input('xvenu')."',`xcast`='".$req->input('xcast')."',`xcost`='".$req->input('xcost')."',`xseat`='".$req->input('xseat')."',`xmobile`='".$req->input('xmobile')."',`xemail`='".$req->input('xemail')."' WHERE xcode='".$xcode."'";
        
      
        // DB::update($sql);
             
        // return redirect('concert-list')->with('success', 'Concert info edited successfully!');
    }
    function concertDelete($xcode)
    {
        $sql="UPDATE events set xflag=0 where xcode='".$xcode."'";
        if (DB::update($sql)) {
            return redirect('concert-list')->with('success', 'Concert delete successfully!');
        }
        return redirect('concert-list')->with('success', 'Failed to delete!');
    }
}
