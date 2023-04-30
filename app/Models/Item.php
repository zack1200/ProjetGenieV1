<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Compaign;
use app\Models\Color;
use app\Models\Taille;


class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['nom', 'max_items', 'mookup', 'actif'];
    use HasFactory;
    public function compaigns()
    {
        return $this->belongsToMany('App\Models\Compaign');    
    }
    
    public function color()
    {
        return $this->belongsToMany('App\Models\Color');    
    }
    
    public function taille()
    {
        return $this->belongsToMany('App\Models\Taille', 'item_taille');    
    }
    
    
}
