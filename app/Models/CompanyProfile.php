<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'company_email', 'primary_contact', 'secondary_contact', 'latitude', 'longitude'
    ];

    public function getLocationAttribute()
    {
        // Compute the value of the 'location' attribute based on other attributes
        return $this->attributes['latitude'] . ', ' . $this->attributes['longitude'];
    }
}
