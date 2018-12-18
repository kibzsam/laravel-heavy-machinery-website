<?php

namespace App\Http\Controllers;

use App\Item;
use App\Post;
use App\Requesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    // Function to save item
public function saveitem(Request $request){
    $data= New Item();
    $this->validate($request,[
        'title'=>'required',
        'model'=>'required',
        'image'=>'required']);
    $companyid=auth('company')->user()->id;
    if($request->hasFile('image'))
    {
        $fileNameExt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
        $fileExt = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
        $image = $request->file('image')->storeAs('',$fileNameToStore);
    }
        $data->fill([
            'title'=>$request->title,
            'model'=>$request->model,
            'image'=>$image,
            'company_id'=>$companyid,
        ])->save();
        $message='Successfully Saved';

    return back()->with('warning',$message);
}

//Function to save post
public function savepost(Request $request){
    $data= New Post();
    $this->validate($request,[
        'item'=>'required',
        'price'=>'required',
        'description'=>'required']);
    $companyid=auth('company')->user()->id;
    $query=Post::query()->where('item_id','=',$request->item)->where('price','=',$request->price)
        ->where('company_id','=',$companyid)->exists();
    if(!$query){
        $status="not-hired";
        $data->fill([
            'item_id'=>$request->item,
            'price'=>$request->price,
            'description'=>$request->description,
            'company_id'=>$companyid,
            'statuspost'=>$status
        ])->save();
        $message='Successfully Posted';

    }
    else{
        $message='There exist a similar post for this company,,,add another post';

    }
    return back()->with('warning',$message);
}

//Edit items function
public function edititem(Request $request)
{

    $this->validate($request, [
        'title' => 'required',
        'model' => 'required',
        'image' => 'required']);
    if ($request->hasFile('image')) {
        $fileNameExt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
        $fileExt = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
        $image = $request->file('image')->storeAs('', $fileNameToStore);
    }
    $data = Item::query()->where('id', '=', $request->id);
    $data->update([
        'title' => $request->title,
        'model' => $request->model,
        'image' => $image,
    ]);
    $message = 'Successfully Edited';

    return back()->with('success', $message);
}
//delete item

//edit post
    public function editpost(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required']);
       /* if ($request->hasFile('image')) {
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
            $image = $request->file('image')->storeAs('', $fileNameToStore);
        }*/
        $data = Post::query()->where('id', '=', $request->id);
        $data->update([
            'item_id' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        $message = 'Successfully Edited';

        return back()->with('success', $message);
    }
public function deleteitem(Request $request){
    $delete=Item::query()->where('id','=',$request->id);
    $delete->delete();

    return back()->with('success','Item deleted successfully');

}
// delete post
    public function deletepost(Request $request){
        $delete=Post::query()->where('id','=',$request->id);
        $delete->delete();
        return back()->with('success','Post deleted successfully');
    }
    //approve customer
    public function approve(Request $request){
       $approve=Requesting::query()->where('id','=',$request->id);
       $approve->update(['status'=>'Approved']);
       $id=Auth::guard('company')->user()->id;
       $post=Post::query()->where('company_id','=',$id)->where('item_id','=',$request->item_id);
       $post->update(['statuspost'=>'hired']);
       return back()->with('success','Successfully Approved');
    }
    public function decline(Request $request){
    $this->validate($request,['reason'=>'required']);
    $reason=$request->reason;
        $decline=Requesting::query()->where('id','=',$request->id);
        $decline->update(['status'=>'Declined',
            'reason'=>$reason]);
        return back()->with('success','Successfully Declined');
    }

}
