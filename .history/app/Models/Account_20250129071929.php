<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ticket;
class Account extends Authenticatable
{
    use HasFactory;
    public $fillable =['user_name','email','password'];

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }
}
