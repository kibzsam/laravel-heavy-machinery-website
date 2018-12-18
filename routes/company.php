<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('company')->user();
    $authuser = Auth::guard('company')->user()->id;
    $cname = Auth::guard('company')->user()->companyname;
    $items=\App\Item::query()->where('company_id','=',$authuser)->get();
    $posts=\App\Post::query()->where('company_id','=',$authuser)->with('item')->get();
    $requests=\App\Requesting::query()->where('companyname','=',$cname)->with('customer')->get();
    $hires=App\Requesting::query()->where('companyname','=',$cname)->where('status','=','Approved')->count();
    $count=$items->count();

    return view('company.home',compact('items','posts','requests','hires','count'));
})->name('home');

