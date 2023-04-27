<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Item;

class Color extends Model
{
    protected $fillable =['nom','CodeCouleur'];
    public function itemcolor(){
        return        $this->belongsToMany('App\Models\Item');    
    }
    use HasFactory;
}
