<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['mechanic_id','name','model'];


    public function mechanic(){
        return $this->belongsTo(Mechanic::class);
    }
}
