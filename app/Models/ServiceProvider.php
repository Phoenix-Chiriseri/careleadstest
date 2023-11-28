<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ServiceProvider extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->belongsToMany(User::class);
    }
}
