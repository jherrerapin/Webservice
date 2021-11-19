<?php 

namespace App\Services;

class CreditCardPayment implements IPayment{

    private $data;

    public function __construct($data = []) {
        $this->data = $data;
    }

    public function pay(){
        // Integracion con pasarela de pagos
    }
}