<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'bio',
    ];

    // get user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
