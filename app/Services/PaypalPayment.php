<?php 

namespace App\Services;

class PaypalPayment implements IPayment{

    private $data;

    public function __construct($data = []) {
        $this->data = $data;
    }

    public function pay(){
        // Integracion con PAYPAL
    }
}