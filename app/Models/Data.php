<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Data extends Model
{
    use HasFactory;
    protected $table = 'landmarks_data';
    protected $guarded = ['id',"timestamps"];

    // public function landmark(){
    //     return $this->hasOne(Landmark::class);
    // }
}
