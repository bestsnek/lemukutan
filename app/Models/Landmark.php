<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;
use App\Models\Data;
use App\Models\LogTourGuide;


class Landmark extends Model
{
    use HasFactory;
    protected $table = 'landmarks_main';
    protected $guarded = ['id',"timestamps"];

    public function content(){
        return $this->hasOne(Content::class);
    }
    public function data(){
        return $this->hasOne(Data::class);
    }
    public function logtourguide(){
        return $this->hasMany(Data::class);
    }

}
