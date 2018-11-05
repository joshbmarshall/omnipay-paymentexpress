<?php

namespace Omnipay\PaymentExpress\Message;

/**
 * PaymentExpress PxPay Purchase Request
 */
class PxPayPurchaseRequest extends PxPayCreateCardRequest
{
    protected $action = 'Purchase';
}
