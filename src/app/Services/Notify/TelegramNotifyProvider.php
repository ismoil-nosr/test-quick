<?php

namespace App\Services\Notify;

use App\Services\Notify\Interfaces\NotifyProviderInterface;

class TelegramNotifyProvider implements NotifyProviderInterface
{
    public function sendOTP(object $user): bool
    {
        // логика отправки OTP кода по Telegram
        // можно скешировать ОТП код + user_id + method 
        // чтобы потом можно было валидировать
        return true;
    }
    
    public function validateOTP(object $user, string $code): bool
    {
        // логика валидации ОТП кода
        // проверяем кеш и если ок то возвращаем true предварительно очистив кеш
        // иначе кидаем Exception
        return true;
    }
}