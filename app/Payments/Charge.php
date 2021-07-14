<?php 
namespace App\Payments;

class Charge
{
    private $isCharge = false;
    private $transId;

    public function __construct($transId)
    {
        $this->transId = $transId;
    }
    public function markIsCharged()
    {
        $this->isCharge = true;
    }
    public function getStatus()
    {
        return $this->isCharge;
    }
}