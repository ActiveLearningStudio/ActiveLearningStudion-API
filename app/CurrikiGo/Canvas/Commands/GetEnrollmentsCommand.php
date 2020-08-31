<?php
namespace App\CurrikiGo\Canvas\Commands;
use App\CurrikiGo\Canvas\Contracts\Command;

class GetEnrollmentsCommand implements Command
{
    public $api_url;
    public $access_token;
    public $http_client;

    public function __construct($user) {
        $this->user = $user;
    }

    public function execute()
    {
        $response = null;
        try {
            $response = $this->http_client->request('GET', $this->api_url.'/users/'.$this->user->id.'/enrollments', [
                    'headers' => ['Authorization' => "Bearer {$this->access_token}"]
                ])->getBody()->getContents();
            $response = json_decode($response);
        } catch (Exception $ex) {}
        
        return $response;
    }
}