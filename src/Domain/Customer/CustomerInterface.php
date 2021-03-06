<?php
declare(strict_types=1);

namespace Domain\Customer;

interface CustomerInterface
{
    public function getVatPrice(float $price): float;
}
