<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Type;

class Staff extends Model
{
    use HasFactory;
    protected $table='staff';

    protected $fillable = [
        'rec_id',
        'full_name',
        'sex',
        'email_address',
        'phone_number',
        'position',
        'department',
        'salary',
    ];
    public function products(){
        $this->hasMany(Product::class,'staff_id',id);
    }
}
