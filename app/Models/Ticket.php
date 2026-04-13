<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;
class Ticket extends Model
{
    use HasFactory;
    public $fillable = ["account_id",'name','card_code','flight_id','national_number'];

    public function flight(){
        return $this->belongsTo(Flight::class);
    }
    public function account(){
        return $this->belongsTo(Account::class);
    }
}
