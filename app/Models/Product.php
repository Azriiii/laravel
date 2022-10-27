<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'staff_id',
        'name',
        'detail',
        'image',
        'type',

    ];
    /*public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }*/

}
