<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bloodgroup(){
        return $this->belongsTo(Bloodgroup::class);
    }
    public function divition(){
        return $this->belongsTo(Divition::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function station(){
        return $this->belongsTo(Station::class);
    }

    public function femaleNumber(){
        $result = substr($this->phone, 0, 4);
        $result .= "****";
        $result .= substr($this->phone, 7, 4);
        return $result;
    }
}
