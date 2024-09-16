<?php

namespace App\Services\Payments;

use Illuminate\Support\Facades\Http;

class Thawani
{
    const TEST_BASE_URL = 'https://uatcheckout.thawani.om/api/v1';
    const LIVE_BASE_URL = 'https://checkout.thawani.om/api/v1';



    protected $secret_key;
    protected $publishable_key;
    protected $baseUrl;
    protected $mode;

    public function __construct($secret_key, $publishable_key, $mode = 'test')
    {
        $this->mode = $mode;

        $this->secret_key = $secret_key;

        $this->publishable_key = $publishable_key;

        if ($mode == 'test') {

            $this->baseUrl = self::TEST_BASE_URL;
        } else {

            $this->baseUrl = self::LIVE_BASE_URL;
        }
    }

    public function createCheckoutSession($data)
    {
        $response = Http::baseUrl($this->baseUrl)->withHeaders([
            'thawani-api-key' => $this->secret_key,
            //'content-type' => 'application/json',    asJson method add it Automatically when use asJson
        ])
            ->asJson()
            ->post('checkout/session', $data);
        // https://uatcheckout.thawani.om/api/v1/checkout/session

        $body = $response->json();

        if ($body['success'] == true && $body['code'] == 2004) {

            return $body['data']['session_id'];
        }

        throw new \Exception($body['description'], $body['code']);
    }

    public function getPayUrl($session_id)
    {
        if ($this->mode == 'test') {

            return "https://uatcheckout.thawani.om/pay/{$session_id}?key={$this->publishable_key}";
        }
        return "https://checkout.thawani.om/pay/{$session_id}?key={$this->publishable_key}";
    }

    public function getCheckoutSession($session_id)
    {
        $response = Http::baseUrl($this->baseUrl)
            ->withHeaders([
                'thawani-api-key' => $this->secret_key,
            ])
            ->get('checkout/session/' . $session_id)
            ->json();
        if ($response['success'] == true && $response['code'] == 2000) {

            return $response;
        }
        throw new \Exception($response['description'], $response['code']);
    }
    // https://uatcheckout.thawani.om/api/v1/checkout/session/{session_id}
}
