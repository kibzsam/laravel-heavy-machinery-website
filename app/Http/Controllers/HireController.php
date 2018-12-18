<?php

namespace App\Http\Controllers;
use App\Post;
use App\Requesting;
use Illuminate\Support\Facades\Auth;
use foo\bar;
use Illuminate\Http\Request;

class HireController extends Controller
{
    //
    public function cart(){
        $id=Auth::guard('customer')->user()->id;
        $datas=Requesting::query()->where('customer_id','=',$id)->get();
        $count=$datas->count();
        return view('customer.cart',compact('datas','count'));
    }
    public function cartdelete(Request $request){
        $delete=Requesting::query()->where('id','=',$request->id);
        $delete->delete();

        return back()->with('success','Item removed successfully');
    }
    public function verifyhire (){
        if (Auth::guard('customer')->user()) {
            // Check is user logged in

            return redirect('customer/home');

        } else {
            return back()->with('success','please login or create an account in order to Hire this Machine');
        }

    }
    public function savehire(Request $request){
        $this->validate($request,[
            'itemid'=>'required',
            'companyname'=>'required',
            'description'=>'required',
            'quantity'=>'required|min:0',
            'price'=>'required',
            'title'=>'required',
            'image'=>'required',
            'days'=>'required|min:0'
        ]);
        $requesting=new Requesting();
        $post= $request->id;
        $customerid=Auth::guard('customer')->user()->id;
        $status="pending";
        $requesting->fill([
            'item_id'=>$request->itemid,
            'post_id'=>$post,
            'companyname'=>$request->companyname,
            'quantity'=>$request->quantity,
            'customer_id'=>$customerid,
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$request->image,
            'status'=>$status,
            'days'=>$request->days
        ])->save();
        return redirect('customer/profile')->with('success','You have successfuly hired this Machine Wait for '.$request->companyname.' to approve your Request');
    }
    //customer hiring data

}
