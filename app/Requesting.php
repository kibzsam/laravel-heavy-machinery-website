<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requesting extends Model
{
    //
    protected $fillable=['customer_id','quantity','item_id','post_id','companyname','title','description','price','image','status','reason','days'];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
