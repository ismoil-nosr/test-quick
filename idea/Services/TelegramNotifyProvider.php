<?php

class TelegramNotifyProvider implements NotifyProviderInterface
{
    public function sendOTP(object $user): bool
    {
        // логика отправки OTP кода по Telegram
        return true;
    }
    
    public function validateOTP(object $user, string $code): bool
    {
        //логика валидации ОТП кода
        return true;
    }
}