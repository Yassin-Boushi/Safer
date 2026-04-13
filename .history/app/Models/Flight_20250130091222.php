<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Flight extends Model
{
    use HasFactory;
        public $fillable =['name','description','number','date','price','desination'];
   
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

}
