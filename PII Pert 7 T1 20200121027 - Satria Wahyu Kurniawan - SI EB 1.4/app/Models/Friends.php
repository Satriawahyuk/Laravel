<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
    public function member_groups()
{
	return $this->hasMany('App\Models\Member_groups');
}
}
