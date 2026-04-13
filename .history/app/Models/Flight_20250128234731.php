<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Attributes\Ticket;

class Flight extends Model
{
    use HasFactory;
        public $fillable =['name','description','date','price'];
   
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

}
