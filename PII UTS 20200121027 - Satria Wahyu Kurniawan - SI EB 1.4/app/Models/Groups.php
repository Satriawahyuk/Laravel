<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $guarded = ['name'];
// merelasikan tabel groups dengan friends
    public function friends()
    {
        return $this->hasMany('App\Models\Friends');
    }// merelasikan tabel groups dengan history_friend 
    public function history_friends()
    {
        return $this->hasMany('App\Models\history_friends');
    }
}
