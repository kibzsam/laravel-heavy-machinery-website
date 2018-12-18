<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Post extends Model
{
    //
    protected $fillable =['item_id','price','description','company_id','statuspost','title'];

    public function company(){
       return $this->belongsTo(Company::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function requests(){
        return $this->hasMany(Requesting::class);
    }
}
