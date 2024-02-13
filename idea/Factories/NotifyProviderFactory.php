<?php

class NotifyProviderFactory
{
    public static function create($method): NotifyProviderInterface
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