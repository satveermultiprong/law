<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lawyer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'mobile', 'password', 'license_number', 'documents', 'is_verified',
        'address', 'city', 'state', 'country', 'gender', 'pin_code', 'alternate_mobile', 'profile_image',
        'specialization_id', 'court_type_id',
    ];
    
    

    // Make sure the password is always hashed
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function courtType()
    {
        return $this->belongsTo(CourtType::class);
    }
}
