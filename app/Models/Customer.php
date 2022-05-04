<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'dob',
        'age',
        'is_active',
        'pic'
    ];

    public function orders()
    {
        $this->hasMany(Order::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
