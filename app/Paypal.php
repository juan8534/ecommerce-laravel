<?php

namespace App;
use Alert;


class Paypal
{
      private $_apiContext;
      private $shopping_cart;
      private $_ClientId = 'AU7Ps_3RHBXvyJyAMChPwOfngLrQkvez6m7749PwkcfAGR1zj4siO5gje_rTNcIm-iDFSqcMYInxo6g5';
      private $_ClientSecret = 'EBB9kLpcuBhcfjseOkBUo-P2hf6Zov02N_Zxy1PmJ9bJbhcorNa3IBMsWDCYnG2Pto37RlDRZ_a5bPj-';

      public function __construct($shopping_cart)
      {
          //PaypalPayment es el alias de la clase paypal
          $this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId, $this->_ClientSecret);

          $config = config('paypal_payment');
          $flatConfig = array_dot($config);

          $this->_apiContext->setConfig($flatConfig);

          $this->shopping_cart = $shopping_cart;
      }

      //Funcion para generar el pago
      public function generate()
      {
        $payment = \PaypalPayment::payment()->setIntent('sale')
                    ->setPayer($this->payer())
                    ->setTransactions([$this->transaction()])
                    ->setRedirectUrls($this->redirectURLs());

        try {
          $payment->create($this->_apiContext);
        } catch (\Exception $ex) {
              dd($ex);
              exit(1);
        }

        return $payment;

      }

      public function payer()
      {
          return \PaypalPayment::payer()->setPaymentMethod("paypal");
      }


      public function redirectURLs()
      {
          $baseURL = url('/');
          return \PaypalPayment::redirectURLs()
                                ->setReturnUrl("$baseURL/payments/store")
                                ->setCancelUrl("$baseURL/carrito");
      }


      public function transaction()
      {
          return \PaypalPayment::transaction()
                                ->setAmount($this->amount())
                                ->setItemList($this->items())
                                ->setDescription('Tu compra en servicecode')
                                ->setInvoiceNumber(uniqid());
      }

      // Lista de productos guardados en un array
      public function items()
      {
        $items = [];

        $products = $this->shopping_cart->products()->get();

        foreach ($products as $product) {
          array_push($items, $product->paypalItem());
        }
        return \PaypalPayment::itemList()->setItems($items);
      }


      public function amount()
      {
        return \PaypalPayment::amount()->setCurrency("USD")
                                       ->setTotal($this->shopping_cart->totalUSD());
      }


      public function execute($paymentId, $payerId)
      {
        $payment = \PaypalPayment::getById($paymentId, $this->_apiContext);

        $execution = \PaypalPayment::PaymentExecution()->setPayerId($payerId);

        return $payment->execute($execution, $this->_apiContext); //Este metodo execute() viene del sdk


      }


}
