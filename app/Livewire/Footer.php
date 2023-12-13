<?php

namespace App\Livewire;

use App\Models\CompanyProfile;
use Livewire\Component;
use GuzzleHttp\Client;

class Footer extends Component
{
    public $latitude;
    public $longitude;
    public $location;
    public $email;
    public $primary_contact;
    public $apiKey = "AIzaSyDmRiLCQl0GTlmLQPoUkdQNX01ydfRfXs0";

    public function mount()
    {
        $companyProfile = CompanyProfile::latest()->first();

        if ($companyProfile) {
            $this->email = $companyProfile->company_email;
            $this->primary_contact = $companyProfile->primary_contact;
            $this->latitude = $companyProfile->latitude;
            $this->longitude = $companyProfile->longitude;
        }

        $this->location = $this->getPlaceName($this->latitude , $this->longitude , $this->apiKey);
    }
    public function render()
    {
        return view('livewire.footer');
    }

    function getPlaceName($latitude, $longitude, $apiKey)
    {
        $client = new Client();

        try {
            $response = $client->get('https://maps.googleapis.com/maps/api/geocode/json', [
                'query' => [
                    'latlng' => "{$latitude},{$longitude}",
                    'key' => $apiKey,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Check if the request was successful and there is a result
            if ($data['status'] === 'OK' && isset($data['results'][0]['formatted_address'])) {
                return $data['results'][0]['formatted_address'];
            }

            // Handle the case when no result is found
            return 'No location to show';
        } catch (\Exception $e) {
            // Handle exceptions, log errors, etc.
            return 'Error fetching location';
        }
    }
}
