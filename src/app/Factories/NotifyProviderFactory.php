<?php

namespace App\Factories;

use App\Services\Notify\Interfaces\NotifyProviderInterface;
use App\Services\Notify\EmailNotifyProvider;
use App\Services\Notify\SmsNotifyProvider;
use App\Services\Notify\TelegramNotifyProvider;

class NotifyProviderFactory
{
    public static function create(string $method): NotifyProviderInterface
    {
        switch ($method) {
            case 'sms':
                return new SmsNotifyProvider();
            case 'telegram':
                return new TelegramNotifyProvider();
            default:
                return new EmailNotifyProvider();
        }
    }
}