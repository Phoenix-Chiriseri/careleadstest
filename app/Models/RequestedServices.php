<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedServices extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'service_provider',
        'services_provided',
        'service_provider_contact',
        'user_contact',
        'service_options',
        'ref_number',
        'city',
        'house_number',
        'description'
    ];

    public function setCategoryAttribute($value)
    {
        $this->attributes['service_options'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['service_options'] = json_decode($value);
    }
}
