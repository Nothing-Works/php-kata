<?php

namespace App\OOP\ObjectCompositionAndAbstractions;

 class Subscription
 {
     // Option three Object composition
     private Gateway $gateway;

     public function __construct(Gateway $gateway)
     {
         $this->gateway = $gateway;
     }

     public function create()
     {
     }

     public function cancel()
     {
         // api request
         // find stripe customer
         $customer = $this->gateway->findCustomer();
         // find stripe subscription by customer
         $subscription = $this->gateway->findSubscriptionByCustomer($customer);
         // there are 3 ways to do this.
         // 1. just do it in the class as private or protected.
         // 2. Inheritance.
         // 3. Object Composition.
     }

     public function invoice()
     {
     }

     public function swap()
     {
     }

     // Option one to just inline in the class itself.
     private function findStripCustomer()
     {
     }

     private function findStripSubscriptionByCustomer()
     {
     }
 }

    // Option two is to use Inheritance.
 class BillableSubscription extends Subscription
 {
     protected function findStripCustomer()
     {
     }

     protected function findStripSubscriptionByCustomer()
     {
     }
 }

 interface Gateway
 {
     public function findCustomer();

     public function findSubscriptionByCustomer();
 }

    // Option three is to use object composition.
 class StripeGateway implements Gateway
 {
     public function findCustomer()
     {
     }

     public function findSubscriptionByCustomer()
     {
     }
 }

 class BraintreeGateway implements Gateway
 {
     public function findCustomer()
     {
     }

     public function findSubscriptionByCustomer()
     {
     }
 }

 $subscription = new Subscription(new StripeGateway());
 $subscription = new Subscription(new BraintreeGateway());
