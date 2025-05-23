<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'property_id',
        'start_date',
        'end_date',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function property()
{
    return $this->belongsTo(Property::class);
}

}
