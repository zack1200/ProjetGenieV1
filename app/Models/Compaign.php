<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Item;

class Compaign extends Model
{
    protected $fillable =['nom','description','saga','start_date','end_date','actif'];
    public function items(){
        return        $this->belongsToMany('App\Models\Item');    
    }
    use HasFactory;
}
