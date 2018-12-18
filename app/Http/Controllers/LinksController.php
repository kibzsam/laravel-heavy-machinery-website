<?php

namespace App\Http\Controllers;

use App\Post;
use App\Requesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\DataTables\HireDataTable;
class LinksController extends Controller
{
    //

    public function index(HireDataTable $dataTable){
        return $dataTable->render('HiredMachines');
    }

    public function chart(){
        $cname = Auth::guard('company')->user()->companyname;
        $approved=Requesting::query()->where('companyname','=',$cname)->where('status','=','Approved')->count();
        $pending=Requesting::query()->where('companyname','=',$cname)->where('status','=','pending')->count();

        $chartjs = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Pending', 'Approved'])
            ->datasets([
                [
                    'backgroundColor' => ['#FF6384', '#36A2EB'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                    'data' => [$pending,$approved]
                ]
            ])
            ->options([]);

        return view('chart', compact('chartjs'));
    }
    public function welcome(){
        $posts=Post::all();
        $posts->load('item','company');
        $count=$posts->count();
        return view('welcome',compact('posts','count'));
    }
    public function products(){
        $posts=Post::all();
        $posts->load('item','company');
        $count=$posts->count();

        return view('customer.home',compact('posts','count'));
    }
    public function profile(){
        $id=Auth::guard('customer')->user()->id;
        $datas=Requesting::query()->where('customer_id','=',$id)->get();
        $count=$datas->count();
        return view('customer.dashboard',compact('datas','count'));
    }
    public function search(Request $request){
        $search=$request->search;
        /*$it=Item::query()->where('title','=',$search)->first()->id;
        if($it==null){
            $message="The item searched cannot be found";
        }*/
        //$posts=Post::query()->where('title','like','%'.$it.'%')->get();

        $posts= Post::query()
            ->join('items', 'items.id', '=', 'posts.item_id')
            ->where('title', 'like', '%'.$search.'%')
            ->get();
        $count=$posts->count();
        if(!$posts){
            $message="No Results Found";
        }
        else{
            $message="";
        }

        return view('customer.home',['posts'=>$posts,'count'=>$count])->with('success',$message);
    }
}
