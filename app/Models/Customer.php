<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, Notifiable;

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

    public function scopeIsActive($query)
    {   
        return $query->where('is_active', 1);
    }
}
