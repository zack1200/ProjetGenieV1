<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Item;

class Taille extends Model
{
    protected $fillable =['nomtaille'];
    protected $table = 'tailles';
    public function itemtaille(){
        return        $this->belongsToMany('App\Models\Item');    
    }
    use HasFactory;
}
