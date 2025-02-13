<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];  

    use HasFactory;
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

