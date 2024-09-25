<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lawyer extends Authenticatable
{
    use HasFactory , Notifiable;

    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'mobile', 'password', 'license_number', 'documents', 'is_verified',
        'address', 'city', 'state', 'country', 'gender', 'pin_code', 'alternate_mobile', 'profile_image',
        'specialization_id', 'court_type_id',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
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

    protected function casts()
    {
        return[
            'password' => 'hashed',
        ];
    }
}
