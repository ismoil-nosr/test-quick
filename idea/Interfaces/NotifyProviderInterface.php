<?php

interface NotifyProviderInterface
{
    public function sendOTP(object $user): bool;
    
    public function validateOTP(object $user, string $code): bool;
}
