<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','school_id' ];

    public function school(){
        return $this->belongsTo(school::class);  
        
    }

}
