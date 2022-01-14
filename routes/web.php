<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CreateEventsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpcomingEventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;





//user end
// Route::get('/',[HomeController::class,'index'])->name('/');
// Route::get('/user-login',function(){
//     if(session('slogin') && session('srole')=='user')
//         return redirect('my-account');
//     return view('user-login');
    
// })->name('user-login');
// Route::post('/user-login',[LoginController::class,'userLogin'])->name('user-login');

// //create user
// Route::get('user-create',function(){
//     if(session('slogin') && session('srole')=='user')
//         return redirect('my-account');
//     return view('user-create');
// })->name('user-create');
// Route::post('/user-create',[LoginController::class,'userCreate'])->name('user-create');

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/user-auth',function(){
    if(session('slogin') && session('srole')=='user')
        return redirect('my-account');
    return view('user-auth');
    
})->name('user-auth');
Route::post('/user-login',[LoginController::class,'userLogin'])->name('user-login');
Route::post('/user-create',[LoginController::class,'userCreate'])->name('user-create');
Route::get('about',function(){  
    return view('about');
})->name('about');

Route::post('search',[UpcomingEventsController::class,'search'])->name('search');


Route::get('/upcoming-natok',[UpcomingEventsController::class,'upcomingNatok']);
Route::get('/upcoming-concert',[UpcomingEventsController::class,'upcomingConcert'])->name('upcoming-concert');
Route::get('/upcoming-fashion',[UpcomingEventsController::class,'upcomingFashion'])->name('upcoming-fashion');
Route::get('/upcoming-convo',[UpcomingEventsController::class,'upcomingConvo'])->name('upcoming-convo');
Route::get('event-details/{xcode}',[UpcomingEventsController::class,'eventDetails'])->name('event-details');
Route::group(['middleware'=>['userLogin']],function(){
    Route::get('book-now/{xcode}',[UpcomingEventsController::class,'eventDetails']);
    Route::get('my-account',[CustomerController::class,'myAccount'])->name('my-account');
    Route::get('user-logout',[LoginController::class,'userLogout']);
    Route::get('checkout/{xcode}',[CheckoutController::class,'index'])->name('checkout');
    Route::post('confirm-order',[CheckoutController::class,'confirmOrder'])->name('confirm-order');

    Route::get('message-page',[MessageController::class,'index'])->name('message-page');
    Route::post('save-sms',[MessageController::class,'saveSms'])->name('save-sms');
});


//admin panel
Route::get('admin-login',function(){
    
    return view('admin.login');
})->name('admin-login');
Route::post('login/run',[LoginController::class,'run']);
Route::get('/admin-logout',[LoginController::class,'adminLogout']);

Route::group(['middleware'=>['adminLogin']],function()
{

    Route::get('mainmenu',function(){
        return view('admin.mainmenu');
    });
    //natok
    Route::get('create-natok',function(){
        return view('admin.create-natok-form');
    })->name('create-natok');
    Route::post('create-natok',[CreateEventsController::class,'createNatok'])->name('create-natok');
    Route::get('natok-list',[CreateEventsController::class,'natokList'])->name('natok-list');
    Route::get('natok-edit-form/{xcode}',[CreateEventsController::class,'natokEditForm']);
    Route::post('natok-edit',[CreateEventsController::class,'natokEdit']);

    Route::get('natok-delete/{xcode}',[CreateEventsController::class,'natokDelete']);

    //concert
    Route::get('create-concert',function(){
        return view('admin.concert-form');
    })->name('create-concert');
    Route::post('create-concert',[CreateEventsController::class,'createConcert'])->name('create-concert');
    Route::get('concert-list',[CreateEventsController::class,'concertList'])->name('concert-list');;
    Route::get('concert-edit-form/{xcode}',[CreateEventsController::class,'concertEditForm']);
    Route::post('concert-edit',[CreateEventsController::class,'concertEdit']);
    Route::get('concert-delete/{xcode}',[CreateEventsController::class,'concertDelete']);


    //fashion
    Route::get('create-fashion',function(){
        return view('admin.fashion-form');
    })->name('create-fashion');
    Route::post('create-fashion',[CreateEventsController::class,'createFashion'])->name('create-fashion');
    Route::get('fashion-list',[CreateEventsController::class,'fashionList'])->name('fashion-list');;
    Route::get('fashion-edit-form/{xcode}',[CreateEventsController::class,'fashionEditForm']);
    Route::post('fashion-edit',[CreateEventsController::class,'fashionEdit'])->name('fashion-edit');

    //internation
    Route::get('create-internation',function(){
        return view('admin.internation-form');
    })->name('create-internation');
    Route::post('create-internation',[CreateEventsController::class,'createInternation'])->name('create-internation');
    Route::get('internation-list',[CreateEventsController::class,'internationList'])->name('internation-list');;
    Route::get('internation-edit-form/{xcode}',[CreateEventsController::class,'internationEditForm']);
    Route::post('internation-edit',[CreateEventsController::class,'internationEdit'])->name('internation-edit');
    Route::get('show-order',[OrderController::class,'show'])->name('show-order');

    Route::get('message-list',[MessageController::class,'messageList'])->name('message-list');
    Route::get('view-message/{user_id}',[MessageController::class,'viewMgsAdmin'])->name('view-message');
    Route::post('save-sms-admin',[MessageController::class,'saveSmsAdmin'])->name('save-sms-admin');

});
