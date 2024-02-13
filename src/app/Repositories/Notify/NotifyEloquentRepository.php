<?php 

namespace App\Repositories\Notify;

class NotifyEloquentRepository implements NotifyRepositoryInterface
{
    public function updateSettings(object $user, array $data): bool
    {
        // логика обновления
        return true;
    }
}
