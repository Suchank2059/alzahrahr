<?php

namespace Services;

use App\Models\CompanyProfile;
use Ramsey\Uuid\Type\Integer;

class GetCompanyProfile
{
    public function getCompanyLocation(): string
    {
        $location = CompanyProfile::where('email', 'alzahranepal@gmail.com')->get('location');

        return $location;
    }

    public function getCompanyContact(): Integer
    {
        $contact = CompanyProfile::where('email', 'alzahranepal@gmail.com')->get('primary_contact');

        return $contact;
    }
}
