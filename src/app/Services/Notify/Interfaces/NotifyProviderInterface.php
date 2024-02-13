<?php

namespace App\Services\Notify\Interfaces;

interface NotifyProviderInterface
{
    public function sendOTP(object $user): bool;
    
    public function validateOTP(object $user, string $code): bool;
}
