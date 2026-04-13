<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ticket;
use Laravel\Sanctum\HasApiTokens;
class Account extends Authenticatable
{
    use HasFactory,HasApiTokens;
    public $fillable =['user_name','email','password','is_employee'];

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }
}
