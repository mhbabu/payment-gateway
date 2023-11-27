<?php

namespace App\Services;

use App\Models\Setting;
use Yabacon\Paystack as Paystack;

class PaystackService
{
    protected $paystack;

    public function __construct()
    {
        $this->paystack = new Paystack($this->getPaystackSecretKey());
    }

    public function getPaystackSecretKey()
    {
        return Setting::pluck('paystack_secret_key')->first();
    }

    public function initializeTransaction($data)
    {
        $response = $this->paystack->transaction->initialize($data);

        if ($response->status) {
            return $response->data->authorization_url;
        } else {
            throw new \Exception('Failed to initialize transaction.');
        }
    }

    public function verifyTransaction($reference)
    {
        $response = $this->paystack->transaction->verify([
            'reference' => $reference,
        ]);
        return $response->status && $response->data->status === 'success' ?  $response->data : null;
    }
}
