<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Content extends Model
{
    use HasFactory;
    protected $table = 'landmarks_content';
    protected $guarded = ['id',"timestamps"];

    // public function landmark(){
    //     return $this->hasOne(Landmark::class);
    // }
    
}
