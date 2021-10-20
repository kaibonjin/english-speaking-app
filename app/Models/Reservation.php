<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = 'id';

    protected $fillable = [
        'user_id',
        'reservation_date',
        'phone_number',
        'email',
    ];

    public static $rules = array('user_id' => 'required', 'reservation_date' => 'required', 'phone_number' => 'required', 'email' => 'required');
}
