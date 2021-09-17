<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
