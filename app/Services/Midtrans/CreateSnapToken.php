<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class CreateSnapToken extends Midtrans{
    protected $order;
    public function __construct($order){
        parent::__construct();
        $this->order = $order;
    }
    public function getSnapToken(){
        $params = array(
            'transaction_details' => array(
                'order_id' => $this->order->id,
                'gross_amount' => $this->order->total_price,
            )
        );
        $snapToken = Snap::getSnapToken($params);
        return $snapToken;
    }
    public function getRedirectURL(){
        $params = array(
            'transaction_details' => array(
                'order_id' => $this->order->id,
                'gross_amount' => $this->order->total_price,
            )
        );
        $url = Snap::createTransaction($params)->redirect_url;
        return $url;
    }
}
