<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];  

    use HasFactory;
   
    public function customer()
    {
        return $this->belongsTo(Client::class);
    }
}
