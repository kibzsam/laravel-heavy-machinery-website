<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable =['title','model','image','company_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
