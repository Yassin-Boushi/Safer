<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;
class Ticket extends Model
{
    use HasFactory;
    public $fillable = ["account_id",'flight_id','is_buy'];

    public function flight(){
        return $this->belongsTo(Flight::class);
    }
    public function account(){
        return $this->belongsTo(Account::class);
    }
}
