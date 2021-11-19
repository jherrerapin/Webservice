<?php 

class PaymentFactory {
    public function initialize($data) {
        switch($data['type']) {
            case 'credit': 
                return new CreditCardPayment($data);
                break;
            case 'paypal': 
                return new PaypalPayment($data);
                break;
            default: 
                throw new Exception('Método de pago no soportado!');
        }
    }
}