<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;
    public function user(){
        return $this->belongsTo('App\User','created_by','id');
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
}
