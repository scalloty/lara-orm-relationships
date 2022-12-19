<?php

namespace App\Models\HR;

use App\Models\Park\Parking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    public function parking()
    {
        return $this->hasOne(Parking::class);
    }
}
